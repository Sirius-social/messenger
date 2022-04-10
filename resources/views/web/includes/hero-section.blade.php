<section class="w-full bg-gradient-to-r from-violet-200 to-indigo-300 py-24">
    <div class="container mx-auto">
        <div class="flex items-center space-x-6">
            <div class="w-1/2 space-y-6">
                <h1 class="text-5xl font-bold text-violet-900">{{ $item->title }}</h1>
                <h2 class="text-lg lg:text-3xl text-gray-800 mb-4 md:text-xl">{{ $item->subtitle }}</h2>
                <p class="text-lg font-semibold text-indigo-800">
                    {!! $item->description !!}
                </p>
            </div>
            <div class="w-1/2">
                <img class="w-full h-auto rounded-xl" src="{{ $item->file_path }}" alt="{{ $item->title }}">
            </div>
        </div>
    </div>
</section>
