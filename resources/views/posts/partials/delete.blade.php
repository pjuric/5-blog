<x-danger-button x-data=""
    x-on:click.prevent="$dispatch('open-modal', 'confirm-post-deletion')">{{ __('posts.delete_button_delete_post') }}</x-danger-button>

<x-modal name="confirm-post-deletion" :show="$errors->postDeletion->isNotEmpty()" focusable>
    <form method="post" action="{{ route('post.destroy', $post->id) }}" class="p-6">
        @csrf
        @method('delete')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('posts.delete_modal_title_delete') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('posts.delete_modal_description_confirm') }}
        </p>

        <div class="mt-6 flex justify-start">
            <x-danger-button>
                {{ __('posts.delete_modal_button_delete') }}
            </x-danger-button>

            <x-secondary-button x-on:click="$dispatch('close')" class="ms-3">
                {{ __('posts.delete_modal_button_cancel') }}
            </x-secondary-button>
        </div>
    </form>
</x-modal>
