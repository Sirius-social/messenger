<div class='bg-gray-200 -mt-7 pt-12 pb-24 scroll-mt-24' id='how_it_works'>
    <div class='container mx-auto'>
        <x-web.title>
            <x-slot name="title">
                {!! \App\Services\Localization::translate('web.how_it_works') !!}
            </x-slot>
            <x-slot name="subtitle">
                {!! \App\Services\Localization::translate('web.how_it_works.subtitle') !!}
            </x-slot>
        </x-web.title>
        <div class='flex mb-10'>
            <div class='w-4/12'>
                <div class='px-10 py-12 bg-cover' style='background-image: url({{ asset('images/enc-problem-bg.png') }});'>
                    <p class='text-base text-gray-800 flex indent-6 relative'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 absolute top-1 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                        </svg>
                        {!! \App\Services\Localization::translate('web.how_it_works.first_item') !!}
                    </p>
                </div>
                <div class='px-10 py-12 bg-cover' style='background-image: url({{ asset('images/enc-problem-bg.png') }});'>
                    <p class='text-base text-gray-800 flex indent-6 relative'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 absolute top-1 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                        </svg>
                        {!! \App\Services\Localization::translate('web.how_it_works.second_item') !!}
                    </p>
                </div>
                <div class='px-10 py-12 bg-cover' style='background-image: url({{ asset('images/enc-problem-bg.png') }});'>
                    <p class='text-base text-gray-800 flex indent-6 relative'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 absolute top-1 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                        </svg>
                        {!! \App\Services\Localization::translate('web.how_it_works.third_item') !!}
                    </p>
                </div>
            </div>
            <div class='w-8/12'>
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/SLcxd_dEG-c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class='py-4 px-8 relative' style='background-image:url({{ asset('images/enc-problem-bg.png') }});'>
            <div class='absolute inset-0 bg-sky-700 opacity-50'></div>
            <p class='text-xl text-white font-semibold relative text-center uppercase tracking-widest'>{!! \App\Services\Localization::translate('web.how_it_works.footer') !!}</p>
        </div>
    </div>
</div>
