<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('posts.view_title_header_posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (Auth::check() && (Auth::user()->admin || $post->user_id === Auth::id()))
                        <a href="{{ route('post.edit', $post->id) }}"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            {{ __('posts.view_button_update_post') }}
                        </a>

                        @include('posts.partials.delete')
                    @endif

                    <h1 class="text-2xl font-bold text-gray-800 mt-6">{{ $post->title }}</h1>

                    <div class="flex flex-row justify-between items-center border-b border-gray-200">
                        <div class="flex flex-col items-start justify-center mb-2">
                            <i
                                class="text-xs">{{ $post->updated_at ? $post->updated_at->format('d.m.Y H:i') : $post->created_at->format('d.m.Y H:i') }}</i>

                            @if ($post->category)
                                <a href="{{ route('category.view', $post->category->id) }}"
                                    class="mt-2 text-sm text-blue-500 font-semibold">#{{ $post->category->title }}</a>
                            @endif
                        </div>
                        <div class="flex flex-row items-center">
                            @if ($post->user->image)
                                <img src="{{ asset('images/' . $post->user->image) }}"
                                    class="rounded-full object-cover h-10 w-10 preview-image mr-2">
                            @else
                                <img src="{{ asset('images/profile_image_placeholder.jpg') }}"
                                    class="rounded-full object-cover h-10 w-10 preview-image mr-2">
                            @endif

                            <a href="{{ route('user.posts', $post->user->id) }}"
                                class="m-0 ms-4">{{ $post->user->name }}</a>
                        </div>
                    </div>

                    <div class="mt-6" x-data="{ content: '{{ $post->description }}' }" x-init="content = content.replace(/<br>/g, '\n')">
                        <div x-html="content"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
