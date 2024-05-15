<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight uppercase">
            {{ __('users.posts_title_header_posts', ['name' => $user->name]) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (Auth::user()->id == $user->id)
                        <a href="{{ route('post.create') }}"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            {{ __('users.posts_button_create') }}
                        </a>
                    @endif
                    @if ($posts->count() > 0)
                        <div class="mt-6">
                            @foreach ($posts as $post)
                                <div class="mb-6 border-b border-t border-gray-200 flex flex-col">
                                    <a href="{{ route('post.view', $post->id) }}"
                                        class="text-2xl font-bold text-gray-800 hover:text-blue-500 mt-6">
                                        {{ $post->title }}
                                    </a>
                                    <i
                                        class="text-xs">{{ $post->updated_at ? $post->updated_at->format('d.m.Y H:i') : $post->created_at->format('d.m.Y H:i') }}</i>
                                    <p class="mt-2 text-sm text-gray-600">
                                        @if ($post->category)
                                            <span
                                                class="text-blue-500 font-semibold">#{{ $post->category->title }}</span>
                                        @endif
                                    </p>
                                    <div class="text-sm text-gray-600 mb-4">
                                        {{ Str::limit(strip_tags($post->description), 250) }}...
                                        <a href="{{ route('post.view', $post->id) }}"
                                            class="text-blue-500 hover:text-blue-700">
                                            {{ __('users.posts_link_read_more') }}
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{ $posts->links() }}
                    @else
                        <div class="text-gray-600 mt-5">
                            {{ Auth::user()->id == $user->id ? __('users.posts_message_no_posts_self') : __('users.posts_message_no_posts') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
