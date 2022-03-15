<!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:text-gray-900 hover:bg-gray-50" -->
<a href="{{ route('dashboard') }}"
   class="{{ Route::currentRouteName() == 'dashboard' ? 'bg-gray-200 text-gray-900' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50' }} group flex items-center px-2 py-2 text-sm font-medium rounded-md">
    <svg class="{{ Route::currentRouteName() == 'dashboard' ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500'}} mr-3 h-6 w-6"
         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
    </svg>
    {{ __('Dashboard') }}
</a>

{{--<a href="{{ route('links.index') }}"--}}
{{--   class="{{ Route::currentRouteName() == 'links.index' ? 'bg-gray-200 text-gray-900' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50' }} group flex items-center px-2 py-2 text-sm font-medium rounded-md"--}}
{{--   aria-current="page">--}}
{{--    <!-- Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500" -->--}}
{{--    <svg class="{{ Route::currentRouteName() == 'links.index' ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500'}} mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"--}}
{{--         viewBox="0 0 24 24" stroke="currentColor">--}}
{{--        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--              d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>--}}
{{--    </svg>--}}
{{--    {{ __('Links') }}--}}
{{--</a>--}}
