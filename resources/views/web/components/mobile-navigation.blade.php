<div class="fixed z-50 inset-0 hidden" id="mobile-menu" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-black/20 backdrop-blur-sm" id="mobile-menu-overlay"
         aria-hidden="true"></div>
    <div
        class="fixed top-4 right-4 w-full max-w-xs bg-white rounded-lg shadow-lg p-6 text-base font-semibold text-slate-900 mobile-nav-button">
        <button type="button"
                class="absolute top-5 right-5 w-8 h-8 flex items-center justify-center text-slate-500 hover:text-slate-600"
                tabindex="0"><span class="sr-only">Close navigation</span>
            <svg viewBox="0 0 10 10" class="w-2.5 h-2.5 overflow-visible" aria-hidden="true">
                <path d="M0 0L10 10M10 0L0 10" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round"></path>
            </svg>
        </button>
        <ul class="space-y-6">
            <x-web.navigation />
        </ul>
        <div class="mt-6 pt-6 border-t border-slate-200">
            <div class="flex items-center justify-between">
                <label for="theme"
                       class="text-slate-700 font-normal">
                    {{ \App\Services\Localization::translate('web.Switch language') }}
                </label>
                <div class='flex'>
                    <a href="{{ route('web.change.locale', ['locale' => 'ru']) }}"
                       class="text-sm tracking-wide px-3 py-1 {{ \App\Services\Localization::get() === 'ru' ? 'bg-blue-600 border-blue-600 text-white rounded-xl' : 'border-y border-l border-gray-300 rounded-l-xl -mr-2' }}">
                        Rus
                    </a>
                    <a href='{{ route('web.change.locale', ['locale' => 'en']) }}'
                       class="text-sm tracking-wide px-3 py-1 {{ \App\Services\Localization::get() === 'en' ? 'bg-blue-600 border-blue-600 text-white rounded-xl' : 'border-y border-r border-gray-300 rounded-r-xl -ml-2' }}">
                        Eng
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
