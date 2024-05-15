<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('profile.update_profile_information_title_header') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('profile.update_profile_information_description_header') }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('profile.update_profile_information_label_name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)"
                required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="image" :value="__('profile.update_profile_information_label_image')" />
            <div class="flex items-center">
                @if ($user->image && $imageExists)
                    <img src="{{ asset('images/' . $user->image) }}" alt="{{ $user->name }}"
                        class="rounded-full object-cover h-16 w-16 mx-auto mb-2 preview-image">
                @else
                    <img src="{{ asset('images/profile_image_placeholder.jpg') }}"
                        alt="{{ $user->name }}"
                        class="rounded-full object-cover h-16 w-16 mx-auto mb-2 preview-image">
                @endif
                <input type="file" id="image" name="image"
                    class="image-input ms-6 form-control @error('image') {{__('profile.update_profile_information_error_image')}} @enderror">
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div>
            <x-input-label for="email" :value="__('profile.update_profile_information_label_email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"
                required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('profile.update_profile_information_message_confirm') }}

                        <button form="send-verification"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('profile.update_profile_information_confirm_link') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('profile.update_profile_information_confirm_status') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('profile.update_profile_information_button_update') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('profile.update_status_message_updated') }}</p>
            @endif
        </div>
    </form>
</section>
