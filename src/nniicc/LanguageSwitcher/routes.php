<?php
Route::group(['middleware' => ['web']], function () {
    Route::get(LanguageSwitcher::getSwitchPath() . '/{language}', '\\nniicc\\LanguageSwitcher\\LanguageSwitcherController@setLanguage');
});
