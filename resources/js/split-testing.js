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

    console.log(yaParams);
});
