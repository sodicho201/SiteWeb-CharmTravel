<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.pages.onePage_first');
    // return view('front.pages.onePage_second');
})->name('home');

// SEO : les URLs absolues sont générées à partir de APP_URL (à renseigner en production).
Route::get('/sitemap.xml', function () {
    $urls = [
        ['loc' => route('home'), 'lastmod' => date('Y-m-d', filemtime(resource_path('views/front/pages/onePage_first.blade.php'))), 'priority' => '1.0'],
    ];

    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n"
        . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    foreach ($urls as $u) {
        $xml .= "  <url>\n"
            . '    <loc>' . e($u['loc']) . "</loc>\n"
            . '    <lastmod>' . $u['lastmod'] . "</lastmod>\n"
            . '    <priority>' . $u['priority'] . "</priority>\n"
            . "  </url>\n";
    }
    $xml .= '</urlset>' . "\n";

    return response($xml, 200, ['Content-Type' => 'application/xml; charset=UTF-8']);
})->name('sitemap');

Route::get('/robots.txt', function () {
    $txt = "User-agent: *\nAllow: /\n\nSitemap: " . route('sitemap') . "\n";

    return response($txt, 200, ['Content-Type' => 'text/plain; charset=UTF-8']);
})->name('robots');
