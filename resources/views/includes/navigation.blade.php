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

<a href="{{ route('dashboard.feedback.list') }}"
   class="{{ Route::currentRouteName() == 'dashboard.feedback.list' ? 'bg-gray-200 text-gray-900' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50' }} group flex items-center px-2 py-2 text-sm font-medium rounded-md">
    <svg xmlns="http://www.w3.org/2000/svg" class="{{ Route::currentRouteName() == 'dashboard.feedback.list' ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500'}} mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 3l-6 6m0 0V4m0 5h5M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
    </svg>
    {{ __('Feedbacks') }}
</a>
