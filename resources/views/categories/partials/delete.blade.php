<x-danger-button x-data=""
    x-on:click.prevent="$dispatch('open-modal', 'delete-category')">{{ __('categories.delete_button_delete_category') }}</x-danger-button>

<x-modal name="delete-category" :show="$errors->categoryDelete->isNotEmpty()" focusable>
    <form method="post" action="{{ route('category.destroy', $category->id) }}" class="p-6">
        @csrf
        @method('delete')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('categories.delete_modal_title') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('categories.delete_modal_description') }}
        </p>

        <div class="mt-6 flex justify-start">
            <x-danger-button>
                {{ __('categories.delete_modal_button_delete') }}
            </x-danger-button>

            <x-secondary-button x-on:click="$dispatch('close')" class="ms-3">
                {{ __('categories.delete_modal_button_cancel') }}
            </x-secondary-button>
        </div>
    </form>
</x-modal>
