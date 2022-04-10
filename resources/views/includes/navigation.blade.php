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

<a href="{{ route('pages.index') }}"
   class="{{ Route::currentRouteName() == 'pages.index' ? 'bg-gray-200 text-gray-900' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50' }} group flex items-center px-2 py-2 text-sm font-medium rounded-md"
   aria-current="page">
    <!-- Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500" -->
    <svg xmlns="http://www.w3.org/2000/svg" class="{{ Route::currentRouteName() == 'pages.index' ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500'}} mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
    </svg>
    {{ __('Pages') }}
</a>

<a href="{{ route('sections.index') }}"
   class="{{ Route::currentRouteName() == 'sections.index' ? 'bg-gray-200 text-gray-900' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50' }} group flex items-center px-2 py-2 text-sm font-medium rounded-md"
   aria-current="page">
    <!-- Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500" -->
    <svg xmlns="http://www.w3.org/2000/svg" class="{{ Route::currentRouteName() == 'sections.index' ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500'}} mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
    </svg>
    {{ __('Sections') }}
</a>
