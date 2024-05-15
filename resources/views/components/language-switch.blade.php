<x-dropdown align="left" width="48">
    <x-slot name="trigger">
        <button
            class="inline-flex items-center px-3 py-2 border-transparent text-sm leading-4 font-medium text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
            <div class="ms-1">
                <img src="{{ asset('images/flags/' . config('languages')[app()->getLocale()]['image']) }}"
                    class="size-6 object-cover rounded-sm mx-2"
                    alt="{{ config('languages')[app()->getLocale()]['name'] }}" />
            </div>
        </button>
    </x-slot>

    <x-slot name="content">
    @foreach (config('languages') as $language)
            @if ($language['code'] !== app()->getLocale())
                <x-dropdown-link :href="route('locale', $language['code'])" class="flex items-center">
                    <img src="{{ asset('images/flags/' . $language['image']) }}"
                        class="size-6 object-cover rounded-sm mx-2" alt="{{ $language['name'] }}" />
                    <div>
                        {{ __('layouts.topbar_language_name_' . $language['name']) }}
                    </div>
                </x-dropdown-link>
            @endif
        @endforeach

    </x-slot>
</x-dropdown>
