<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('posts.edit_title_header_update') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ $post->title }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('posts.edit_description_post') }}
                            </p>
                        </header>

                        <form method="post" action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data"
                            class="mt-6 space-y-6">
                            @csrf
                            @method('patch') <div>
                                <x-input-label for="title" :value="__('posts.edit_label_title')" />
                                <x-text-input id="title" name="title" type="text" class="mt-1 block sm:w-96"
                                    value="{{ old('title', $post->title) }}" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('title')" />
                            </div>

                            <div>
                                <x-input-label for="description" :value="__('posts.edit_label_description')" />
                                <x-text-input id="description" name="description" type="text" size="lg"
                                    class="hidden" value="{{ old('description', $post->description) }}" />
                                <div id="editor">{!! $post->description !!}</div> <x-input-error class="mt-2"
                                    :messages="$errors->get('description')" />
                            </div>

                            <div class="sm:w-96">
                                <x-input-label for="category" :value="__('posts.edit_label_category')" />
                                <select id="category" name="category"
                                    class="mt-1 block sm:w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm p-2.5">
                                    <option value="">{{ __('posts.edit_label_category') }}</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            @if ($post->category_id == $category->id) selected @endif>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('posts.edit_button_update_post') }}</x-primary-button>
                                <a href="{{ route('post.view', $post->id) }}"
                                    class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                                    {{ __('posts.edit_button_cancel') }}
                                </a>
                            </div>
                        </form>

                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
