<button {{ $attributes->merge(['type' => 'submit', 'class' => 'border border-blue-800 rounded-2xl text-blue-800']) }}>
    {{ $slot }}
</button>
