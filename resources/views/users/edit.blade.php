<x-app-layout>
    @if (Auth::user()->admin)
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('users.edit_title_header_user') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <section>
                            <header>
                                <h2 class="text-lg font-medium text-gray-900">
                                    {{ $user->name }}
                                </h2>

                                <p class="mt-1 text-sm text-gray-600">
                                    {{ __('users.edit_description_user') . $user->name }}
                                </p>
                            </header>
                            <form method="post" action="{{ route('user.update', $user->id) }}"
                                enctype="multipart/form-data" class="mt-6 space-y-6">
                                @csrf
                                @method('patch')

                                <div>
                                    <x-input-label for="name" :value="__('users.edit_label_name')" />
                                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                        :value="old('name', $user->name)" required autofocus autocomplete="name" />
                                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                </div>

                                <div>
                                    <x-input-label for="image" :value="__('users.edit_label_image')" />
                                    <div class="flex items-center">
                                        @if ($user->image)
                                            <img src="{{ asset('images/' . $user->image) }}" alt="{{ $user->name }}"
                                                class="rounded-full object-cover h-16 w-16 mx-auto mb-2 preview-image">
                                        @else
                                            <img src="{{ asset('images/profile_image_placeholder.jpg') }}"
                                                alt="{{ $user->name }}"
                                                class="rounded-full object-cover h-16 w-16 mx-auto mb-2 preview-image">
                                        @endif
                                        <input type="file" id="image" name="image"
                                            class="image-input ms-6 form-control @error('image') @enderror">
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <x-input-label for="email" :value="__('users.edit_label_email')" />
                                    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                                        :value="old('email', $user->email)" required autocomplete="email" />
                                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                </div>

                                <div class="flex items-center gap-4">
                                    <x-primary-button>{{ __('users.edit_button_update') }}</x-primary-button>

                                    @if (session('status') === 'profile-updated')
                                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                            class="text-sm text-gray-600">{{ __('users.edit_status_updated') }}</p>
                                    @endif
                                </div>

                            </form>

                        </section>
                    </div>
                </div>
            </div>
        </div>

        @if (!$user->admin)
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            <section class="space-y-6">
                                <header>
                                    <h2 class="text-lg font-medium text-gray-900">
                                        {{ __('users.edit_delete_title') }}
                                    </h2>

                                    <p class="mt-1 text-sm text-gray-600">
                                        {{ __('users.edit_delete_description') }}
                                    </p>
                                </header>

                                <x-danger-button x-data=""
                                    x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('users.edit_delete_button_delete') }}
                                </x-danger-button>

                                <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                    <form method="post" action="{{ route('user.destroy', $user->id) }}"
                                        class="p-6">
                                        @csrf
                                        @method('delete')

                                        <h2 class="text-lg font-medium text-gray-900">
                                            {{ __('users.edit_delete_modal_title', ['name' => $user->name]) }}
                                        </h2>

                                        <p class="mt-1 text-sm text-gray-600">
                                            {{ __('users.edit_delete_modal_description') }}
                                        </p>

                                        <div class="mt-6 flex justify-start">
                                            <x-danger-button>
                                                {{ __('users.edit_delete_modal_button_delete') }}
                                            </x-danger-button>

                                            <x-secondary-button x-on:click="$dispatch('close')" class="ms-3">
                                                {{ __('users.edit_delete_modal_button_cancel') }}
                                            </x-secondary-button>
                                        </div>
                                    </form>
                                </x-modal>

                            </section>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <section class="space-y-6">
                            <header>
                                <h2 class="text-lg font-medium text-gray-900">
                                    {{ __('users.edit_admin_title') }}
                                </h2>

                                <p class="mt-1 text-sm text-gray-600">
                                    {{ __($user->admin ? __('users.edit_admin_description_remove') : __('users.edit_admin_description_assign')) }}
                                </p>
                            </header>

                            <x-secondary-button x-data=""
                                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-admin')">{{ $user->admin ? __('users.edit_admin_button_remove') : __('users.edit_admin_button_assign') }}
                            </x-secondary-button>

                            <x-modal name="confirm-user-admin" :show="$errors->userAdmin->isNotEmpty()" focusable>
                                <form method="post" action="{{ route('user.admin', $user->id) }}" class="p-6">
                                    @csrf
                                    @method('patch')

                                    <h2 class="text-lg font-medium text-gray-900">
                                        {{ $user->admin
                                            ? __('users.edit_admin_modal_title_remove', ['name' => $user->name])
                                            : __('users.edit_admin_modal_title_assign', ['name' => $user->name]) }}
                                    </h2>

                                    <p class="mt-1 text-sm text-gray-600">
                                        {{ $user->admin
                                            ? __('users.edit_admin_modal_description_remove')
                                            : __('users.edit_admin_modal_description_assign') }}
                                    </p>

                                    <div class="mt-6 flex justify-start">
                                        <x-primary-button>
                                            {{ __('users.edit_admin_modal_button_confirm') }}
                                        </x-primary-button>

                                        <x-secondary-button x-on:click="$dispatch('close')" class="ms-3">
                                            {{ __('users.edit_admin_modal_button_cancel') }}
                                        </x-secondary-button>
                                    </div>
                                </form>
                            </x-modal>

                        </section>
                    </div>
                </div>
            </div>
        </div>

    @endif
</x-app-layout>
