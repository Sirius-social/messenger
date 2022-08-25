<div class='flex flex-col items-center mb-14'>
    <h2 class='text-center xl:text-5xl lg:text-3xl text-2xl font-bold text-blue-900 xl:mb-11 mb-6'>
        {{ $title }}
    </h2>
    @isset($subtitle)
        <p class='xl:text-lg text-sm lg:tracking-widest tracking-normal text-center text-blue-600 font-semibold uppercase max-w-3xl'>
            {{ $subtitle }}
        </p>
    @endisset
</div>
