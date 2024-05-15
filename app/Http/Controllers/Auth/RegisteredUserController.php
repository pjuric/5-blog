<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Helpers\ImageHelpers;

class RegisteredUserController extends Controller
{
    public $helpers;

    public function __construct(ImageHelpers $helpers)
    {
        $this->helpers = $helpers;
    }

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storee(Request $request): RedirectResponse
    {
        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name'     => ['required', 'string', 'max:255', 'regex:/^[\p{L}\s]+$/u'],
            'image'    => ['mimes:jpg,gif,png'],
            'email'    => ['required', 'email', 'string', 'lowercase'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $image = 'profile_image_placeholder.jpg';

        if ($request->hasFile('image')) {
            $fileName  = time() . '.' . $request->image->getClientOriginalExtension();
            $imagePath = public_path('images/' . $fileName);

            if (extension_loaded('gd')) {
                $this->helpers->resizeImage($request->image, $imagePath, 300, 300);
            }

            $image = $fileName;
        }

        $user = User::create([
            'name'     => $request->name,
            'image'    => $image,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);


        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
