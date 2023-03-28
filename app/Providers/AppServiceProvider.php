<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton('locale-for-client', function(){
            $seg = request()->segment(1);
            if(in_array($seg, config('app.locales'), true))
            {
                // if the current url already contains a locale return it
                return $seg;
            }
            if(!empty(request()->cookie('locale')))
            {
                // if the user's 'locale' cookie is set we want to use it
                $locale = request()->cookie('locale');
            }else{
                // most browsers now will send the user's preferred language with the request
                // so we just read it
                $locale = request()->server('HTTP_ACCEPT_LANGUAGE');
                $locale = substr($locale, 0, 2);
            }
            if(in_array($locale, config('app.locales'), true))
            {
                return $locale;
            }
            // if the cookie or the browser's locale is invalid or unknown we fallback
            return config('app.fallback_locale');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
