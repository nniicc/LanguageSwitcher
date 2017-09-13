<?php

namespace nniicc\LanguageSwitcher\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use nniicc\LanguageSwitcher\LanguageSwitcher;

class LanguageSwitcherProvider extends ServiceProvider
{
    public function register()
    {
        //register facade to be used
        AliasLoader::getInstance()->alias('LanguageSwitcher', \nniicc\LanguageSwitcher\Facades\LanguageSwitcher::class);
        App::bind('LanguageSwitcher', function () {
            return new LanguageSwitcher();
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/languageswitcher.php' => config_path('languageswitcher.php'),
        ]);
        //include routes for switching the language
        if (!App::routesAreCached()) {
            require __DIR__ . '/../routes.php';
        }
    }
}
