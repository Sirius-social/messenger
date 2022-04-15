<header class="py-4 absolute w-full">
    <div class="container mx-auto">
        <div class="flex justify-between items-center px-4 xl:px-0">
            <div>
                <a href="/" class="flex items-center font-bold sm:text-3xl text-xl">
                    <img class="w-16 h-16 mr-2" src="{{ asset('images/logo/1@3x.png') }}" alt="Networks Synergy">
                    Sirius Messenger
                </a>
            </div>
            <nav>
                <button type="button"
                        class="sm:hidden text-slate-500 w-8 h-8 flex items-center justify-center hover:text-slate-600">
                    <span class="sr-only">Navigation</span>
                    <svg width="24" height="24" fill="none" aria-hidden="true">
                        <path
                            d="M12 6v.01M12 12v.01M12 18v.01M12 7a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm0 6a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm0 6a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </button>
                <ul class="hidden sm:flex">
                    <li class="py-1.5 px-3">
                        <a href="{{ route('web.features') }}" class="font-semibold text-gray-800 transition-all duration-100 hover:text-green-500 {{ Route::currentRouteName() == 'web.features' ? 'text-green-500' : '' }}">
                            Features
                        </a>
                    </li>
                    <li class="py-1.5 px-3">
                        <a href="{{ route('web.downloads') }}" class="font-semibold text-gray-800 transition-all duration-100 hover:text-green-500">
                            Download
                        </a>
                    </li>
                    <li class="py-1.5 px-3">
                        <a href="#" class="font-semibold text-gray-800 transition-all duration-100 hover:text-green-500">
                            Security
                        </a>
                    </li>
                    <li class="py-1.5 px-3">
                        <a href="#" class="font-semibold text-gray-800 transition-all duration-100 hover:text-green-500">
                            Help center
                        </a>
                    </li>
                </ul>
                <div id="mobile-menu-overlay" class="hidden fixed inset-0 bg-black/20 backdrop-blur-sm"></div>
                <!-- Mobile menu, show/hide based on menu state. -->
                <div
                    class="hidden fixed top-4 right-4 w-full max-w-xs bg-white rounded-lg shadow-lg p-6 text-base font-semibold text-slate-900"
                    id="mobile-menu">
                    <button type="button"
                            class="absolute top-5 right-5 w-8 h-8 flex items-center justify-center text-slate-500 hover:text-slate-600 mobile-nav-button"
                            aria-controls="mobile-menu" aria-expanded="true">
                        <span class="sr-only">Close main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                    <div class="space-y-6">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{ route('web.features') }}" class="block hover:text-green-500 {{ Route::currentRouteName() == 'web.features' ? 'text-green-500' : '' }}" aria-current="page">Features</a>

                        <a href="{{ route('web.downloads') }}" class="block hover:text-green-500">Download</a>

                        <a href="#" class="block hover:text-green-500">Security</a>

                        <a href="#" class="block hover:text-green-500">Help center</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
