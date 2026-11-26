<?php

use App\Http\Middleware\SetLocale;
use App\Support\Locales;
use Illuminate\Support\Facades\Route;

// Accueil dans chaque langue : / (français), /en (anglais), /pt (portugais).
// Sur /, SetLocale redirige un nouveau visiteur vers sa langue (voir app/Http/Middleware/SetLocale.php).
foreach (Locales::ALL as $locale => $info) {
    Route::get('/'.$info['prefix'], fn () => view('front.pages.onePage_first'))
        ->middleware(SetLocale::class.':'.$locale)
        ->name($info['route']);
}

// SEO : les URLs absolues sont générées à partir de APP_URL (à renseigner en production).
Route::get('/sitemap.xml', function () {
    $lastmod = date('Y-m-d', max(
        filemtime(resource_path('views/front/pages/onePage_first.blade.php')),
        ...array_map('filemtime', glob(lang_path('*.json')) ?: [__FILE__]),
    ));

    $alternates = '';
    foreach (Locales::ALL as $locale => $info) {
        $alternates .= '    <xhtml:link rel="alternate" hreflang="'.$info['hreflang'].'" href="'.e(Locales::homeUrl($locale)).'"/>'."\n";
    }
    $alternates .= '    <xhtml:link rel="alternate" hreflang="x-default" href="'.e(Locales::homeUrl(Locales::DEFAULT)).'"/>'."\n";

    $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n"
        .'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">'."\n";
    foreach (Locales::ALL as $locale => $info) {
        $xml .= "  <url>\n"
            .'    <loc>'.e(Locales::homeUrl($locale))."</loc>\n"
            .$alternates
            .'    <lastmod>'.$lastmod."</lastmod>\n"
            .'    <priority>'.($locale === Locales::DEFAULT ? '1.0' : '0.9')."</priority>\n"
            ."  </url>\n";
    }
    $xml .= '</urlset>'."\n";

    return response($xml, 200, ['Content-Type' => 'application/xml; charset=UTF-8']);
})->name('sitemap');

Route::get('/robots.txt', function () {
    $txt = "User-agent: *\nAllow: /\n\nSitemap: ".route('sitemap')."\n";

    return response($txt, 200, ['Content-Type' => 'text/plain; charset=UTF-8']);
})->name('robots');
