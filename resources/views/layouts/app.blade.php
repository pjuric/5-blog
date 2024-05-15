<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '5blog') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/css/topbar.css', 'resources/css/sb-admin-2.css', 'resources/js/app.js'])

    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 flex flex-col">
        <div class="flex flex-grow">
            @include('layouts.sidebar')
            <div class="flex-1">
                @include('layouts.topbar')
                <main class="p-4">
                    @if (isset($header))
                        <header class="bg-white shadow">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endif
                    <main>
                        @if (Session::has('error'))
                            <div class="alert alert-danger mt-4" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        @if (Session::has('success'))
                            <div class="alert alert-success mt-4" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        {{ $slot }}
                    </main>
                </main>
            </div>
        </div>


    </div>
</body>

</html>
