<?php

namespace App\Http\Controllers\Web;

use App;
use App\Http\Controllers\Controller;
use App\Services\Localization;
use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        return redirect()->route('web.home', [
            'locale' => Localization::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param string $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(string $locale)
    {
        $old_lang = $locale === 'en' ? 'ru' : 'en';
        Localization::set($locale);
        $url = url()->previous();
        $url = str_replace('/' . $old_lang, '/' . $locale, $url);

        return redirect()->to($url);
    }
}
