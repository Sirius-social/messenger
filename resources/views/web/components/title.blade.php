<div class='flex flex-col items-center mb-14'>
    <h2 class='text-center text-5xl font-bold text-blue-900 mb-11'>
        {{ $title }}
    </h2>
    @isset($subtitle)
        <p class='text-lg tracking-widest text-center text-blue-600 font-semibold uppercase max-w-3xl'>
            {{ $subtitle }}
        </p>
    @endisset
</div>
