<li class='hover:border-blue-600 border-b-2 border-transparent pb-1 {{ Route::currentRouteName() === 'web.home' ? 'font-bold border-blue-600' : '' }}'>
    <a href='{{ route('web.home',  ['locale' => App::getLocale()]) }}' class='text-slate-900 text-base tracking-wide'>
        {{ \App\Services\Localization::translate('web.home') }}
    </a>
</li>
<li class='hover:border-blue-600 border-b-2 border-transparent pb-1'>
    <a href='#' class='text-slate-900 text-base tracking-wide'>
        {!! \App\Services\Localization::translate('web.enc_problem') !!}
    </a>
</li>
<li class='hover:border-blue-600 border-b-2 border-transparent pb-1'>
    <a href='#' class='text-slate-900 text-base tracking-wide'>
        {{ \App\Services\Localization::translate('web.how_it_works') }}
    </a>
</li>
<li class='hover:border-blue-600 border-b-2 border-transparent pb-1'>
    <a href='#' class='text-slate-900 text-base tracking-wide'>
        {{ \App\Services\Localization::translate('web.contact') }}
    </a>
</li>
<li class='flex'>
    <a href="{{ route('web.change.locale', ['locale' => 'ru']) }}"
       class="text-sm tracking-wide px-3 py-1 {{ \App\Services\Localization::get() === 'ru' ? 'bg-blue-600 border-blue-600 text-white rounded-xl' : 'border-y border-l border-gray-300 rounded-l-xl -mr-2' }}">
        Rus
    </a>
    <a href='{{ route('web.change.locale', ['locale' => 'en']) }}'
       class="text-sm tracking-wide px-3 py-1 {{ \App\Services\Localization::get() === 'en' ? 'bg-blue-600 border-blue-600 text-white rounded-xl' : 'border-y border-r border-gray-300 rounded-r-xl -ml-2' }}">
        Eng
    </a>
</li>
