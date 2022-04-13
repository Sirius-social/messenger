<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles
        <!-- Scripts -->
    </head>
    <body x-data="{sidebarOpen: false, user_dropdown: false}" class="font-sans antialiased h-screen flex overflow-hidden bg-white">
        @include('includes.mobile-navigation')
        @include('includes.sidebar')
        <!-- Main column -->
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            @include('includes.mobile-header')

            <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none">
                @yield('content')
            </main>
        </div>
        <script src="/js/app.js" defer></script>
        @livewireScripts
    </body>
</html>
