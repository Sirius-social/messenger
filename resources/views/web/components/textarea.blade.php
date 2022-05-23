@props(['disabled' => false, 'label'])

<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">{{ $label }}</label>
    <textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'p-4 focus:ring-blue-500 focus:border-blue-500 block w-full pr-10 placeholder:text-gray-300 sm:text-sm border-gray-300 rounded-md']) !!}>{!! $slot !!}</textarea>
</div>
