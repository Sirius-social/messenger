<div class='xl:mt-12 flex flex-col items-center pt-12 pb-24 -mt-7 scroll-mt-44' id='enc_problem'>
    <div class='container mx-auto xl:px-0 px-8'>
        <x-web.title>
            <x-slot name="title">
                {!! \App\Services\Localization::translate('web.enc_problem') !!}
            </x-slot>
            <x-slot name="subtitle">
                {!! \App\Services\Localization::translate('web.enc_problem.subtitle') !!}
            </x-slot>
        </x-web.title>
        <div class='w-full rounded-4xl flex items-center xl:mb-24 mb-12' style="background-image: url('{{ asset('images/enc-problem-bg.png') }}');">
            <div class='sm:flex justify-center w-2/5 -mt-12 hidden'>
                <img class='xl:max-w-lg lg:max-w-sm' src='{{ asset('images/enc-problem-phone.png') }}' alt='App image'>
            </div>
            <div class='sm:w-3/5 lg:pr-20 lg:pl-7 md:pr-8 px-8 py-8 lg:py-0 w-full'>
                <h2 class='xl:text-4xl lg:text-2xl md:text-lg font-bold text-slate-700 xl:mb-6 mb-3'>{!! \App\Services\Localization::translate('web.divert_attention.title') !!}</h2>
                <p class='xl:text-base text-sm text-gray-800 tracking-wide'>{!! \App\Services\Localization::translate('web.divert_attention.subtitle') !!}</p>
                <div class='flex sm:justify-end xl:mt-12 lg:mt-6 mt-3'>
                    <x-web.button class="px-7 py-3 lg:px-14 lg:py-5">
                        {!! \App\Services\Localization::translate('web.divert_attention.button') !!}
                    </x-web.button>
                </div>
            </div>
        </div>
        <p class='px-7 xl:text-base text-sm sm:text-left text-center text-gray-800'>{!! \App\Services\Localization::translate('web.enc_problem.description') !!}</p>
    </div>
</div>
