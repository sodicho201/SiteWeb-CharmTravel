<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // En production, toutes les URL générées (canonical, hreflang, sitemap, og:url, JSON-LD)
        // utilisent APP_URL, même si la page est appelée via www. ou http:// : une seule version pour Google.
        if ($this->app->isProduction() && ($root = config('app.url'))) {
            URL::forceRootUrl($root);
            if (str_starts_with($root, 'https://')) {
                URL::forceScheme('https');
            }
        }
    }
}
