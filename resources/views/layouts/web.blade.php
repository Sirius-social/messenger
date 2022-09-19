<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="yandex-verification" content="dd424fad718a1de8" />

    <title>Sirius Messenger</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">


    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery.cookie-1.4.1.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @flasher_render

    <!-- Yandex.Metrika counter -->
    <noscript><div><img src="https://mc.yandex.ru/watch/90270514" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body class="font-sans antialiased bg-white text-base">
    <x-web.header />
    <main>
        {{ $slot }}
    </main>
    <x-web.footer />
</body>
</html>
