<div>
    <div class="flex flex-col mb-8">
        <x-label for="name" :value="$title"/>
        <div class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md bg-center bg-cover relative" @if($fileUrl) style="background-image: url({{ $fileUrl }})" @endif>
            <div class="space-y-1 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                @if(!$disabled)
                    <div class="flex text-sm text-gray-600">
                        <label for="uploaded_photo"
                               class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <span>Загрузите файл</span>
                            <input id="uploaded_photo" wire:model="cover" name="{{ $name }}"type="file" class="sr-only">
                        </label>
                    </div>
                    <p class="text-xs text-gray-500">
                        PNG, JPG, GIF до 10 МБ
                    </p>
                @endif
            </div>
            @if ($fileUrl && !$disabled)
                <button type="button" wire:click="deleteCover('cover')" class="p-2 rounded bg-white text-gray-800 absolute top-4 right-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                </button>
            @endif
        </div>
        @error('cover')
        <span class="text-red-700 text-sm leading-5">{{ $message }}</span>
        @enderror
    </div>
</div>
