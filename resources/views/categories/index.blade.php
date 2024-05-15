<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('categories.index_title_categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (Auth::check() && Auth::user()->admin)
                        @include('categories.partials.create')
                    @endif

                    <div class="mt-6 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                        @forelse($categories as $category)
                            <a href="{{ route('category.view', $category->id) }}"
                                class="px-4 py-2 flex justify-center items-center text-white hover:no-underline border border-blue-600 rounded-lg shadow-sm bg-blue-500 hover:bg-blue-600">
                                {{ $category->title }}
                            </a>
                        @empty
                            <p class="text-gray-600 text-sm">{{__('categories.index_message_no_categories')}}</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
