<x-primary-button x-data=""
    x-on:click.prevent="$dispatch('open-modal', 'update-category')">{{ __('categories.edit_button_update_category') }}</x-primary-button>

<x-modal name="update-category" :show="$errors->categoryUpdate->isNotEmpty()" focusable>
    <form method="post" action="{{ route('category.update', $category->id) }}" class="p-6">
        @csrf
        @method('patch')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('categories.edit_modal_title') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('categories.edit_modal_description') }}
        </p>

        <div class="mt-6">
            <x-input-label for="category" value="{{ __('Kategorija') }}" class="sr-only" />

            <x-text-input id="category" name="category" type="text" class="mt-1 block w-3/4"
                placeholder="{{ $category->title }}" value="{{ $category->title }}" />

            <x-input-error :messages="$errors->categoryUpdate->get('category')" class="mt-2" />
        </div>

        <div class="mt-6 flex justify-start">
            <x-primary-button>
                {{ __('categories.edit_modal_button_update') }}
            </x-primary-button>

            <x-secondary-button x-on:click="$dispatch('close')" class="ms-3">
                {{ __('categories.edit_modal_button_cancel') }}
            </x-secondary-button>
        </div>
    </form>
</x-modal>
