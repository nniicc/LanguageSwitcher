<?php
namespace nniicc\LanguageSwitcher\Facades;

use Illuminate\Support\Facades\Facade;

class LanguageSwitcher extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'LanguageSwitcher';
    }
}
