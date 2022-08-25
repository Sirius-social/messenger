<div class='bg-gray-200 -mt-7 pt-12 pb-24 scroll-mt-24' id='how_it_works'>
    <div class='container mx-auto px-8'>
        <x-web.title>
            <x-slot name="title">
                {!! \App\Services\Localization::translate('web.how_it_works') !!}
            </x-slot>
            <x-slot name="subtitle">
                {!! \App\Services\Localization::translate('web.how_it_works.subtitle') !!}
            </x-slot>
        </x-web.title>
        <div class='flex mb-10'>
            <div class='w-4/12 sm:block hidden'>
                <div class='lg:px-10 lg:py-12 px-5 py-6 bg-cover' style='background-image: url({{ asset('images/enc-problem-bg.png') }});'>
                    <p class='xl:text-base text-sm text-gray-800 flex indent-6 relative'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 absolute top-1 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                        </svg>
                        {!! \App\Services\Localization::translate('web.how_it_works.first_item') !!}
                    </p>
                </div>
                <div class='lg:px-10 lg:py-12 px-5 py-6 bg-cover' style='background-image: url({{ asset('images/enc-problem-bg.png') }});'>
                    <p class='xl:text-base text-sm text-gray-800 flex indent-6 relative'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 absolute top-1 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                        </svg>
                        {!! \App\Services\Localization::translate('web.how_it_works.second_item') !!}
                    </p>
                </div>
                <div class='lg:px-10 lg:py-12 px-5 py-6 bg-cover' style='background-image: url({{ asset('images/enc-problem-bg.png') }});'>
                    <p class='xl:text-base text-sm text-gray-800 flex indent-6 relative'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 absolute top-1 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                        </svg>
                        {!! \App\Services\Localization::translate('web.how_it_works.third_item') !!}
                    </p>
                </div>
            </div>
            <div class='sm:w-8/12 w-full sm:h-auto h-64'>
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/SLcxd_dEG-c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class='lg:py-4 lg:px-8 py-2 px-4 relative' style='background-image:url({{ asset('images/enc-problem-bg.png') }});'>
            <div class='absolute inset-0 bg-sky-700 opacity-50'></div>
            <p class='xl:text-xl lg:text-md text-sm text-white font-semibold relative text-center uppercase tracking-widest'>{!! \App\Services\Localization::translate('web.how_it_works.footer') !!}</p>
        </div>
    </div>
</div>
