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
    <script type="text/javascript">
        var yaParams = {};

        jQuery(document).ready(function ($) {
            yaParams.ab = 'flex-row';
            var pagename = window.location.pathname;
            pagename = pagename.replace('///g', '');

            if (typeof $.cookie('variant_' + pagename) == 'undefined') {
                $.cookie('variant_' + pagename, Math.random() > 0.5, {
                    expires: 365,
                    path: '/',
                });
            }

            if ($.cookie('variant_' + pagename) === 'true') {
                yaParams.ab = 'flex-row-reverse';

                $('.header').removeClass('bg-white').addClass('bg-red-700');
            } else {
                $('.header').removeClass('bg-red-700').addClass('bg-white');
            }
        });

        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(90516163, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            params:yaParams
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/90516163" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- Yandex.Metrika counter -->
</head>
<body class="font-sans antialiased bg-white text-base">
    <x-web.header />
    <main>
        {{ $slot }}
    </main>
    <x-web.footer />
</body>
</html>
