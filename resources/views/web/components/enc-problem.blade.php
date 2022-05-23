<div class='mt-12 flex flex-col items-center pt-12 pb-24 -mt-7 scroll-mt-44' id='enc_problem'>
    <div class='container mx-auto'>
        <x-web.title>
            <x-slot name="title">
                {!! \App\Services\Localization::translate('web.enc_problem') !!}
            </x-slot>
            <x-slot name="subtitle">
                {!! \App\Services\Localization::translate('web.enc_problem.subtitle') !!}
            </x-slot>
        </x-web.title>
        <div class='w-full rounded-4xl flex items-center mb-24' style="background-image: url('{{ asset('images/enc-problem-bg.png') }}');">
            <div class='flex justify-center w-2/5 -mt-12'>
                <img class='max-w-md' src='{{ asset('images/enc-problem-phone.png') }}' alt='App image'>
            </div>
            <div class='w-3/5 pr-20 pl-7'>
                <h2 class='text-4xl font-bold text-slate-700 mb-6'>{!! \App\Services\Localization::translate('web.divert_attention.title') !!}</h2>
                <p class='text-base text-gray-800 tracking-wide'>{!! \App\Services\Localization::translate('web.divert_attention.subtitle') !!}</p>
                <div class='flex justify-end mt-12'>
                    <x-web.button class="px-14 py-5">
                        {!! \App\Services\Localization::translate('web.divert_attention.button') !!}
                    </x-web.button>
                </div>
            </div>
        </div>
        <p class='px-7 text-base text-gray-800'>{!! \App\Services\Localization::translate('web.enc_problem.description') !!}</p>
    </div>
</div>
