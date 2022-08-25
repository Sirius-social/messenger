@if($attributes->has('href'))
    <a {{ $attributes->merge(['class' => 'border border-blue-800 rounded-2xl text-blue-800']) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['type' => 'submit', 'class' => 'border border-blue-800 rounded-2xl text-blue-800']) }}>
        {{ $slot }}
    </button>
@endif
