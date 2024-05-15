<x-guest-layout>
    @if (Route::has('login'))
        @auth
            <x-primary-button class="w-full justify-center" onclick="redirectToRoute('{{ route('dashboard') }}')">
                {{ __('layouts.welcome_link_index') }}
            </x-primary-button>
        @else
            <x-primary-button class="w-full justify-center" onclick="redirectToRoute('{{ route('login') }}')">
                {{ __('layouts.welcome_button_login') }}
            </x-primary-button>

            @if (Route::has('register'))
                <x-secondary-button class="w-full justify-center" onclick="redirectToRoute('{{ route('register') }}')">
                    {{ __('layouts.welcome_button_register') }}
                </x-secondary-button>
            @endif
        @endauth
    @endif
    <script>
        function redirectToRoute(route) {
            window.location.href = route;
        }
    </script>
</x-guest-layout>
