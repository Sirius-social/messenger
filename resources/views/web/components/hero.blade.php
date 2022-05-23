<div class='bg-gray-200 z-20 bg-contain bg-no-repeat bg-right pb-24'
     id='hero'
     style="background-image: url({{ asset('images/header-bg.png') }});">
    <div class='container mx-auto flex pt-40 items-center'>
        <div class='w-1/2'>
            <div
                class='text-gray-800 text-xl font-bold tracking-[.45em] uppercase mb-12'>{!! \App\Services\Localization::translate('web.hero.lead') !!}</div>
            <h1 class='text-blue-900 text-8xl font-bold max-w-md mb-12'>Sirius Messenger</h1>
            <p class='text-black text-lg max-w-lg mb-12'>{!! \App\Services\Localization::translate('web.hero.subtitle') !!}</p>
            <div class='flex space-x-7'>
                <a href='#'>
                    <img class='w-64 h-auto' src='{{ asset('images/google-play.png') }}'
                         alt='Download from google play'>
                </a>
                <a href='#'>
                    <img class='w-64 h-auto' src='{{ asset('images/app-store.png') }}'
                         alt='Download from app store'>
                </a>
            </div>
        </div>
        <div class='w-1/2 flex items-center justify-center'>
            <img class='w-80 h-auto' src='{{ asset('images/header-behind-phone.png') }}' alt='App image'>
            <img class='mt-20 -ml-40 w-80 h-auto' src='{{ asset('images/header-front-phone.png') }}'
                 alt='App image'>
        </div>
    </div>
</div>
