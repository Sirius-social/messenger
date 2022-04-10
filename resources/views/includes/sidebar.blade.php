<!-- Static sidebar for desktop -->
<div class="hidden lg:flex lg:flex-shrink-0">
    <div class="flex flex-col w-64 border-r border-gray-200 pt-5 pb-4 bg-gray-100">
        <div class="flex items-center flex-shrink-0 px-6">
            <h1 class="text-gray-800 text-lg font-medium">
                <a href="{{ route('dashboard') }}" class="flex items-center">
                    <x-application-logo class="w-10 h-10 mr-3" />
                    {{ config('app.name', 'Laravel') }}
                </a>
            </h1>
        </div>
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="h-0 flex-1 flex flex-col overflow-y-auto">
            <!-- User account dropdown -->
            <div x-data="{user_dropdown: false}" class="px-3 mt-6 relative inline-block text-left">
                <div>
                    <button @click="user_dropdown = (user_dropdown) ? false : true"
                            type="button"
                            class="group w-full bg-gray-100 rounded-md px-3.5 py-2 text-sm text-left font-medium text-gray-700 hover:bg-gray-200 focus:outline-none"
                            id="options-menu-button" aria-expanded="false" aria-haspopup="true">
                      <span class="flex w-full justify-between items-center">
                        <span class="flex min-w-0 items-center justify-between space-x-3">
                          <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                               src="{{ auth()->user()->avatar }}"
                               alt="">
                          <span class="flex-1 flex flex-col min-w-0">
                            <span class="text-gray-900 text-sm font-medium truncate">{{ auth()->user()->name }}</span>
                          </span>
                        </span>
                          <!-- Heroicon name: solid/selector -->
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                          <path fill-rule="evenodd"
                                d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                clip-rule="evenodd"/>
                        </svg>
                      </span>
                    </button>
                </div>

                <!--
                  Dropdown menu, show/hide based on menu state.
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                <div
                    x-show="user_dropdown"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="z-10 mx-3 origin-top absolute right-0 left-0 mt-1 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="options-menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <a href="{{ route('settings') }}"
                           @if(Route::currentRouteName() == 'settings') class="bg-gray-100 text-gray-900 block px-4 py-2 text-sm"
                           @else class="text-gray-700 block px-4 py-2 text-sm" @endif role="menuitem"
                           tabindex="-1"
                           id="options-menu-item-1">
                            {{ __('Profile') }}
                        </a>
                    </div>
                    <div class="py-1" role="none">

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                        this.closest('form').submit();"
                               class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                               id="options-menu-item-5">
                                {{ __('Logout') }}
                            </a>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <nav class="px-3 mt-6">
                <div class="space-y-1">
                    @include('includes.navigation')
                </div>
            </nav>
        </div>
    </div>
</div>
