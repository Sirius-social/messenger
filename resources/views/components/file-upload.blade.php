<div {{ $attributes->merge(['class' => 'flex-grow lg:flex-grow-0 lg:flex-shrink-0']) }}>
    <div class="mt-1 lg:hidden">
        <div class="flex items-center">
            <div class="flex-shrink-0 inline-block rounded-full overflow-hidden h-12 w-12" aria-hidden="true">
                @isset($avatar)
                    <img class="rounded-full h-full w-full" src="{{ $avatar }}" alt="">
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                    </svg>
                @endisset
            </div>
            <div class="ml-5 rounded-md shadow-sm">
                <div class="group relative border border-gray-300 rounded-md py-2 px-3 flex items-center justify-center hover:bg-gray-50 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-light-blue-500">
                    <label for="uploaded_photo" class="relative text-sm leading-4 font-medium text-gray-700 pointer-events-none">
                        <span>{{ __('Select A New Photo') }}</span>
                    </label>
                    <input id="uploaded_photo" name="uploaded_photo" type="file" class="absolute w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md">
                </div>
            </div>
        </div>
    </div>

    <div class="hidden relative rounded-full overflow-hidden lg:block">
        @isset($avatar)
            <img class="relative rounded-full w-40 h-40" src="{{ $avatar }}" alt="">
        @else
            <svg xmlns="http://www.w3.org/2000/svg" class="relative rounded-full w-40 h-40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
            </svg>
        @endisset
        <label for="uploaded_photo" class="absolute inset-0 w-full h-full bg-black bg-opacity-75 flex items-center justify-center text-sm font-medium text-white opacity-0 hover:opacity-100 focus-within:opacity-100">
            <span>{{ __('Select A New Photo') }}</span>
            <input type="file" id="uploaded_photo" name="uploaded_photo" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md">
        </label>
    </div>
</div>
