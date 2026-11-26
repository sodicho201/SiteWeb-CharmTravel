<?php

namespace App\Http\Middleware;

use App\Support\Locales;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Applique la langue de la page (paramètre de route « locale ») et, sur l'accueil français (/),
 * redirige un visiteur vers sa langue à son arrivée sur le site.
 *
 * Pas de redirection :
 *  - pour les robots (Google, WhatsApp, Facebook…) : ils doivent pouvoir indexer chaque version ;
 *  - quand le visiteur vient d'une autre page du site (ex. clic sur « FR » dans le sélecteur).
 */
class SetLocale
{
    private const BOTS = '/bot|crawl|spider|slurp|facebookexternalhit|whatsapp|telegram|preview|lighthouse/i';

    public function handle(Request $request, Closure $next, string $locale = Locales::DEFAULT): Response
    {
        if ($locale === Locales::DEFAULT && ($target = $this->redirectTarget($request)) !== null) {
            $query = $request->getQueryString();

            return redirect()->to(Locales::homeUrl($target).($query ? '?'.$query : ''), 302)
                ->header('Vary', 'Accept-Language, Cookie')
                ->header('Cache-Control', 'no-cache, private');
        }

        app()->setLocale($locale);
        view()->share('homeUrl', Locales::homeUrl($locale));

        $response = $next($request);

        // On mémorise la langue de la dernière page vue (1 an).
        $response->headers->setCookie(cookie(Locales::COOKIE, $locale, 60 * 24 * 365));
        $response->headers->set('Vary', 'Accept-Language, Cookie', false);

        return $response;
    }

    /** Langue vers laquelle rediriger depuis /, ou null pour rester en français. */
    private function redirectTarget(Request $request): ?string
    {
        if (preg_match(self::BOTS, (string) $request->userAgent())) {
            return null;
        }

        $referer = parse_url((string) $request->headers->get('referer'), PHP_URL_HOST);
        if ($referer !== null && $referer === $request->getHost()) {
            return null;
        }

        $saved = $request->cookie(Locales::COOKIE);
        $target = isset(Locales::ALL[$saved]) ? $saved : Locales::fromBrowser($request);

        return ($target === null || $target === Locales::DEFAULT) ? null : $target;
    }
}
