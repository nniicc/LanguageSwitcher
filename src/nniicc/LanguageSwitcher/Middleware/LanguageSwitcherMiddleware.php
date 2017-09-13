<?php

namespace nniicc\LanguageSwitcher\Middleware;

use Closure;
use nniicc\LanguageSwitcher\Facades\LanguageSwitcher;

class LanguageSwitcherMiddleware
{
    public function handle($request, Closure $next)
    {
        //Register language
        LanguageSwitcher::registerLanguage();
        return $next($request);
    }
}
