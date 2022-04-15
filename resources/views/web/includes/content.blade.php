<section class="container mx-auto py-8 sm:py-24 text-center xl:px-0 px-4">
    <h3 class="text-base font-medium uppercase text-green-700 tracking-widest leading-9">{{ $item->lead }}</h3>
    <h2 class="text-2xl lg:text-4xl font-bold lg:pb-6 pb-4 md:text-2xl">{{ $item->title }}</h2>
    <p class="lg:text-lg xl:px-40 md:text-base text-base">
        {!! $item->description !!}
    </p>
    <div class="sm:mt-14 mt-8 rounded-xl overflow-hidden">
        <iframe src="https://www.youtube.com/embed/{{ $item->youtube_link }}"
                title="YouTube video player" frameborder="0"
                class="w-full aspect-video"
                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
</section>
