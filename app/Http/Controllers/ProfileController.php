<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Helpers\ImageHelpers;

class ProfileController extends Controller
{
    public $helpers;

    public function __construct(ImageHelpers $helpers)
    {
        $this->helpers = $helpers;
    }

    /**
     * Display user's profile form.
     *
     * @param Request $request
     *
     * @return View
     */
    public function edit(Request $request): View
    {
        $imageExists = false;

        if (file_exists(public_path() . '/images/' . $request->user()->image)) {
            $imageExists = true;
        }

        return view('profile.edit', [
            'user'        => $request->user(),
            'imageExists' => $imageExists
        ]);
    }

    /**
     * Update user's profile informations.
     *
     * @param ProfileUpdateRequest $request
     *
     * @return RedirectResponse
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->validate([
            'name'  => ['required', 'string', 'max:255', 'regex:/^[\p{L}\s]+$/u'],
            'image' => ['mimes:jpg,gif,png'],
            'email' => ['required', 'email', 'string', 'lowercase'],
        ], [
            'name.required'  => __('profile.validation_name_required'),
            'name.max'       => __('profile.validation_name_max'),
            'name.regex'     => __('profile.validation_name_regex'),
            'image.mimes'    => __('profile.validation_image_mimes'),
            'email.required' => __('profile.validation_email_required'),
            'email.email'    => __('profile.validation_email_email'),
        ]);

        $user         = $request->user();
        $oldImagePath = null;

        $user->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $user->email_verified_at = null;
        }

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

        $user->save();

        if (
            $oldImagePath &&
            $oldImagePath !== public_path('images/profile_image_placeholder.jpg') &&
            $oldImagePath !== public_path('images/') &&
            file_exists($oldImagePath)
        ) {
            unlink($oldImagePath);
        }

        return Redirect::route('profile.edit')->with('success', __('profile.update_successfull'));
    }

    /**
     * Delete user's account.
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user      = $request->user();
        $userImage = $user->image;

        // Delete user's image from local storage
        if ($userImage && $userImage !== 'profile_image_placeholder.jpg') {
            $imagePath = public_path('images/' . $userImage);

            if (file_exists(public_path('images/' . $userImage))) {
                unlink($imagePath);
            }
        }

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
