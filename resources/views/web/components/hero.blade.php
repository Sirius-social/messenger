<div class='bg-gray-200 z-20 sm:bg-[url({{ asset('images/header-bg.png') }})] sm:bg-contain bg-none sm:bg-no-repeat bg-right pb-24 sm:px-4 px-6'
     id='hero'>
    <div class='container mx-auto flex lg:flex-row flex-col pt-40 items-center'>
        <div class='lg:w-1/2 w-full flex flex-col'>
            <div
                class='text-gray-800 xl:text-xl text-sm font-bold tracking-widest uppercase xl:mb-12 lg:mb-6 mb-3'>{!! \App\Services\Localization::translate('web.hero.lead') !!}</div>
            <h1 class='text-blue-900 xl:text-8xl text-6xl font-bold lg:max-w-md xl:mb-12 lg:mb-6 mb-3'>Sirius Messenger</h1>
            <p class='text-black xl:text-lg text-sm max-w-lg xl:mb-12 mb-6'>{!! \App\Services\Localization::translate('web.hero.subtitle') !!}</p>
            <div class='flex xl:space-x-7 lg:space-x-5 space-x-3'>
                <a href='#'>
                    <img class='xl:w-64 w-48 h-auto' src='{{ asset('images/google-play.png') }}'
                         alt='Download from google play'>
                </a>
                <a href='#'>
                    <img class='xl:w-64 w-48 h-auto' src='{{ asset('images/app-store.png') }}'
                         alt='Download from app store'>
                </a>
            </div>
        </div>
        <div class='w-1/2 hidden lg:flex items-center justify-center'>
            <img class='xl:w-80 lg:w-60 h-auto' src='{{ asset('images/header-behind-phone.png') }}' alt='App image'>
            <img class='mt-20 -ml-40 xl:w-80 lg:w-60 h-auto' src='{{ asset('images/header-front-phone.png') }}'
                 alt='App image'>
        </div>
    </div>
</div>
