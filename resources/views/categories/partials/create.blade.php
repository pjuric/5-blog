<x-primary-button x-data=""
    x-on:click.prevent="$dispatch('open-modal', 'create-category')">{{ __('categories.create_button_new_category') }}</x-primary-button>

<x-modal name="create-category" :show="$errors->categoryCreation->isNotEmpty()" focusable>
    <form method="post" action="{{ route('category.store') }}" class="p-6">
        @csrf
        @method('post')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('categories.create_modal_title') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('categories.create_modal_description') }}
        </p>

        <div class="mt-6">
            <x-input-label for="category" value="{{ __('categories.create_modal_label_category') }}" />

            <x-text-input
                id="category"
                name="category"
                type="text"
                class="mt-1 block w-3/4"
                placeholder="{{ __('categories.create_modal_placeholder_category') }}"
            />

            <x-input-error :messages="$errors->categoryCreation->get('category')" class="mt-2" />
        </div>

        <div class="mt-6 flex justify-start">
            <x-primary-button>
                {{ __('categories.create_modal_button_create') }}
            </x-primary-button>

            <x-secondary-button x-on:click="$dispatch('close')" class="ms-3">
                {{ __('categories.create_modal_button_cancel') }}
            </x-secondary-button>
        </div>
    </form>
</x-modal>
