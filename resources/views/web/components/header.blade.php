<div class='relative'>
    <header class="bg-white py-6 shadow-xl fixed inset-x-0 z-50 xl:px-0 px-8">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('web.home', ['locale' => App::getLocale()]) }}">
                <img class='w-48 h-12' src='{{ asset('images/logo.svg') }}' alt='Sirius messenger'>
            </a>
            <ul class='hidden lg:flex items-center ml-auto lg:space-x-8 xl:space-x-12 text-slate-900 text-base tracking-wide '>
                <x-web.navigation />
            </ul>
            <div class="-my-1 ml-2 -mr-1 lg:hidden">
                <button type="button"
                        class="text-slate-500 flex items-center justify-center hover:text-slate-600 dark:text-slate-400 dark:hover:text-slate-300 mobile-nav-button">
                    <span class="sr-only">Navigation</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                    </svg>
                </button>
            </div>
        </div>
    </header>
</div>
