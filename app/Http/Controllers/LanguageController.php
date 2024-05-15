<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LanguageController extends Controller
{
    /**
     * Switch language/locale.
     *
     * @param string $locale
     *
     * @return RedirectResponse
     */
    public function localeSwitch(string $locale)
    {
        app()->setLocale($locale);
        session()->put('locale', $locale);

        return redirect()->back();
    }
}
