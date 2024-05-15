<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('profile.delete_title_delete') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('profile.delete_description_notice') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('profile.delete_button_delete') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('profile.delete_modal_title') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('profile.delete_modal_description') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('profile.delete_modal_label_password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('profile.delete_modal_placeholder_password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-start">
                <x-danger-button class="ms-3">
                    {{ __('profile.delete_modal_button_delete') }}
                </x-danger-button>

                <x-secondary-button x-on:click="$dispatch('close')" class="ms-3">
                    {{ __('profile.delete_modal_button_cancel') }}
                </x-secondary-button>
            </div>
        </form>
    </x-modal>
</section>
