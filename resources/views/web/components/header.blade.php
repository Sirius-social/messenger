<div class='relative'>
    <header class="bg-white py-6 shadow-xl fixed inset-x-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('web.home', ['locale' => App::getLocale()]) }}">
                <img class='w-48 h-12' src='{{ asset('images/logo.svg') }}' alt='Sirius messenger'>
            </a>
            <ul class='flex space-x-12'>
                <x-web.navigation />
            </ul>
        </div>
    </header>
</div>
