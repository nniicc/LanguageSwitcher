<?php

namespace ied3vil\LanguageSwitcher;

use ied3vil\LanguageSwitcher\Facades\LanguageSwitcher as Switcher;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class LanguageSwitcherController extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Set the language and redirect
     * @param $language
     * @return mixed
     */
    public function setLanguage($language)
    {
        if (Switcher::getRedirect() == 'route') {
            return redirect(Switcher::getBackRoute($language))->withCookie(Switcher::setLanguage($language));
        }
        return back()->withCookie(Switcher::setLanguage($language));
    }
}
