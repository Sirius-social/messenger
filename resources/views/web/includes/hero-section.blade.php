<section class="flex-none min-w-full items-center px-4 sm:py-24 py-8 xl:flex xl:px-0 {{ $item->bg_class ?: 'bg-gray-100' }}">
    <div class="container mx-auto">
        <div class="flex items-center space-x-6">
            <div class="w-1/2 space-y-6">
                <h1 class="text-5xl font-bold">{{ $item->title }}</h1>
                <h2 class="text-lg lg:text-3xl mb-4 md:text-xl">{{ $item->subtitle }}</h2>
                <p class="text-lg font-semibold">
                    {!! $item->description !!}
                </p>
            </div>
            <div class="w-1/2">
                <img class="w-full h-auto rounded-xl" src="{{ $item->file_path }}" alt="{{ $item->title }}">
            </div>
        </div>
    </div>
</section>
