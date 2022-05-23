<li>
    <a href='#hero' class='text-slate-900 text-base tracking-wide hover:border-blue-600 border-b-2 border-transparent pb-1 font-bold border-blue-600'>
        {{ \App\Services\Localization::translate('web.home') }}
    </a>
</li>
<li>
    <a href='#enc_problem' class='text-slate-900 text-base tracking-wide hover:border-blue-600 border-b-2 border-transparent pb-1'>
        {!! \App\Services\Localization::translate('web.enc_problem') !!}
    </a>
</li>
<li>
    <a href='#how_it_works' class='text-slate-900 text-base tracking-wide hover:border-blue-600 border-b-2 border-transparent pb-1'>
        {{ \App\Services\Localization::translate('web.how_it_works') }}
    </a>
</li>
<li>
    <a href='#contact' class='text-slate-900 text-base tracking-wide hover:border-blue-600 border-b-2 border-transparent pb-1'>
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
