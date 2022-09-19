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

(function (m, e, t, r, i, k, a) {
    m[i] =
        m[i] ||
        function () {
            (m[i].a = m[i].a || []).push(arguments);
        };
    var z = null;
    m[i].l = 1 * new Date();
    for (var j = 0; j < document.scripts.length; j++) {
        if (document.scripts[j].src === r) {
            return;
        }
    }
    (k = e.createElement(t)),
        (a = e.getElementsByTagName(t)[0]),
        (k.async = 1),
        (k.src = r),
        a.parentNode.insertBefore(k, a);
})(window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js', 'ym');

ym(90270514, 'init', {
    clickmap: true,
    trackLinks: true,
    accurateTrackBounce: true,
    webvisor: true,
    params: yaParams,
});
