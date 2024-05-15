<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight uppercase">
            {{ $category->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (Auth::check() && Auth::user()->admin)
                        @include('categories.partials.edit')

                        @if (count($category->posts) < 1)
                            @include('categories.partials.delete')
                        @endif
                    @endif

                    @if ($posts->count() > 0)
                        <div class="mt-6">
                            @foreach ($posts as $post)
                                <div class="mb-6 border-b border-t border-gray-200 flex flex-col">
                                    <a href="{{ route('post.view', $post->id) }}"
                                        class="text-2xl font-bold text-gray-800 hover:text-blue-500 mt-6">
                                        {{ $post->title }}
                                    </a>
                                    <i class="text-xs">{{ $post->updated_at ? $post->updated_at->format('d.m.Y H:i') : $post->created_at->format('d.m.Y H:i') }}</i>
                                    <p class="mt-2 text-sm text-gray-600">
                                        @if ($post->category)
                                            <span
                                                class="text-blue-500 font-semibold">#{{ $post->category->title }}</span>
                                        @endif
                                    </p>
                                    <div class="text-sm text-gray-600 mb-4">
                                        {{ Str::limit(strip_tags($post->description), 250) }}...
                                        <a href="{{ route('post.view', $post->id) }}" class="text-blue-500 hover:text-blue-700">
                                            {{ __('categories.view_link_read_more') }}
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{ $posts->links() }}
                    @else
                        <div class="text-gray-600 mt-5">
                            {{ __('categories.view_message_no_posts') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
