@props(['disabled' => false, 'label'])

<div>
    <label class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'p-4 focus:ring-blue-500 focus:border-blue-500 block w-full pr-10 placeholder:text-gray-300 sm:text-sm border-gray-300 rounded-md peer']) !!}>
        @isset($icon)
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-gray-300 peer-focus:text-blue-500">
                {{ $icon }}
            </div>
        @endisset
    </div>
    @error($attributes['name'])
        <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>
    @enderror
</div>
