<x-web-layout>
    <div class='bg-gray-200 z-20 bg-contain bg-no-repeat bg-right pb-24'
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
    <x-divider />
    <div class='mt-12 flex flex-col items-center pt-12 pb-24 -mt-7'>
        <div class='container mx-auto'>
            <div class='flex flex-col items-center mb-14'>
                <h2 class='text-center text-5xl font-bold text-blue-900 mb-11'>{!! \App\Services\Localization::translate('web.enc_problem') !!}</h2>
                <p class='text-lg tracking-widest text-center text-blue-600 font-semibold uppercase max-w-3xl'>
                    {!! \App\Services\Localization::translate('web.enc_problem.subtitle') !!}
                </p>
            </div>
            <div class='w-full rounded-4xl flex items-center mb-24' style="background-image: url('{{ asset('images/enc-problem-bg.png') }}');">
                <div class='flex justify-center w-2/5 -mt-12'>
                    <img class='max-w-md' src='{{ asset('images/enc-problem-phone.png') }}' alt='App image'>
                </div>
                <div class='w-3/5 pr-20 pl-7'>
                    <h2 class='text-4xl font-bold text-slate-700 mb-6'>{!! \App\Services\Localization::translate('web.divert_attention.title') !!}</h2>
                    <p class='text-base text-gray-800 tracking-wide'>{!! \App\Services\Localization::translate('web.divert_attention.subtitle') !!}</p>
                    <div class='flex justify-end mt-12'>
                        <button class='px-14 py-5 border border-blue-800 rounded-2xl text-blue-800'>{!! \App\Services\Localization::translate('web.divert_attention.button') !!}</button>
                    </div>
                </div>
            </div>
            <p class='px-7 text-base text-gray-800'>{!! \App\Services\Localization::translate('web.enc_problem.description') !!}</p>
        </div>
    </div>
    <x-divider />
    <div class='bg-gray-200 -mt-7 pt-12 pb-24'>
        <div class='container mx-auto'>
            <div class='flex flex-col items-center mb-14'>
                <h2 class='text-center text-5xl font-bold text-blue-900 mb-11'>{!! \App\Services\Localization::translate('web.how_it_works') !!}</h2>
                <p class='text-lg tracking-widest text-center text-blue-600 font-semibold uppercase max-w-3xl'>
                    {!! \App\Services\Localization::translate('web.how_it_works.subtitle') !!}
                </p>
            </div>
        </div>
    </div>
</x-web-layout>
