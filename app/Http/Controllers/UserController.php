<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use App\Helpers\ImageHelpers;
use Illuminate\View\View;

class UserController extends Controller
{
    public $helpers;

    public function __construct(ImageHelpers $helpers)
    {
        $this->helpers = $helpers;
    }

    /**
     * Show all users.
     *
     * @return View
     */
    public function index(): View
    {
        $users = User::where('id', '!=', Auth::id())->get();

        return view('users.index', compact('users'));
    }

    /**
     * Show edit user screen.
     *
     * @param User $user
     *
     * @return View
     */
    public function edit(User $user): View
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update user.
     *
     * @param Request $request
     * @param User    $user
     *
     * @return RedirectResponse
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        $request->validate([
            'name'  => ['required', 'string', 'max:255', 'regex:/^[\p{L}\s]+$/u'],
            'image' => ['mimes:jpg,gif,png'],
            'email' => ['required', 'email', 'string', 'lowercase'],
        ], [
            'name.required'  => __('users.validation_name_required'),
            'name.max'       => __('users.validation_name_max'),
            'name.regex'     => __('users.validation_name_regex'),
            'image.mimes'    => __('users.validation_image_mimes'),
            'email.required' => __('users.validation_email_required'),
            'email.email'    => __('users.validation_email_email'),
        ]);

        $oldImagePath = null;

        if ($request->hasFile('image')) {
            $fileName  = time() . '.' . $request->image->getClientOriginalExtension();
            $imagePath = public_path('images/' . $fileName);

            if (extension_loaded('gd')) {
                $this->helpers->resizeImage($request->image, $imagePath, 300, 300);
            }

            $user->image  = $fileName;
            $oldImagePath = public_path('images/' . $user->getOriginal('image'));
        } else if (empty($user->image)) {
            $user->image = 'profile_image_placeholder.jpg';
        }

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        if (
            $oldImagePath &&
            $oldImagePath !== public_path('images/profile_image_placeholder.jpg') &&
            $oldImagePath !== public_path('images/') &&
            file_exists($oldImagePath)
        ) {
            unlink($oldImagePath);
        }

        return Redirect::route('user.edit', $user->id)->with('success', __('users.update_successfull'));
    }

    /**
     * Delete user.
     *
     * @param User $user
     *
     * @return RedirectResponse
     */
    public function destroy(User $user): RedirectResponse
    {
        $userImage = $user->image;

        if ($userImage && $userImage !== 'profile_image_placeholder.jpg') {
            $imagePath = public_path('images/' . $userImage);

            if (file_exists(public_path('images/' . $userImage))) {
                unlink($imagePath);
            }
        }

        $user->delete();

        return Redirect::route('user.index')->with('success', __('users.delete_successfull', ['name' => $user->name]));
    }

    /**
     * Update admin rights for user.
     *
     * @param User $user
     *
     * @return RedirectResponse
     */
    public function admin(User $user): RedirectResponse
    {
        $flashMessage = '';

        if (!$user->admin) {
            $user->admin  = true;
            $flashMessage = __('users.admin_assigned', ['name' => $user->name]);
        } else {
            $user->admin  = false;
            $flashMessage = __('users.admin_removed', ['name' => $user->name]);
        }

        $user->save();

        return Redirect::route('user.edit', $user->id)->with('success', $flashMessage);
    }

    /**
     * Show user posts.
     *
     * @param User $user
     *
     * @return View
     */
    public function posts(User $user): View
    {
        $user  = $user->load('posts');
        $posts = $user->posts()->orderBy('updated_at', 'desc')->paginate(10);

        return view('users.posts', compact('user', 'posts'));
    }
}
