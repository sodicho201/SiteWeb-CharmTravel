<?php

namespace App\Support;

use Illuminate\Http\Request;

/**
 * Langues du site : le français est à la racine (/), l'anglais sur /en, le portugais (Brésil) sur /pt.
 * Les traductions sont dans lang/en.json et lang/pt.json (clé = texte français).
 */
class Locales
{
    /** code => [préfixe d'URL, nom de route, hreflang, og:locale, attribut lang HTML, libellé] */
    public const ALL = [
        'fr' => ['prefix' => '',   'route' => 'home',    'hreflang' => 'fr', 'og' => 'fr_FR', 'html' => 'fr',    'label' => 'FR'],
        'en' => ['prefix' => 'en', 'route' => 'home.en', 'hreflang' => 'en', 'og' => 'en_US', 'html' => 'en',    'label' => 'EN'],
        'pt' => ['prefix' => 'pt', 'route' => 'home.pt', 'hreflang' => 'pt', 'og' => 'pt_BR', 'html' => 'pt-BR', 'label' => 'PT'],
    ];

    public const DEFAULT = 'fr';

    /** Langue de repli quand celle du navigateur n'est pas proposée. */
    public const FALLBACK = 'en';

    public const COOKIE = 'lang';

    public static function current(): string
    {
        $locale = app()->getLocale();

        return isset(self::ALL[$locale]) ? $locale : self::DEFAULT;
    }

    public static function info(?string $locale = null): array
    {
        return self::ALL[$locale ?? self::current()];
    }

    /** URL de l'accueil dans une langue donnée (langue courante par défaut). */
    public static function homeUrl(?string $locale = null): string
    {
        return route(self::info($locale)['route']);
    }

    /**
     * Langue préférée d'après l'en-tête Accept-Language du navigateur :
     * la première langue de la liste qui est proposée par le site, sinon l'anglais.
     * Renvoie null si le navigateur n'envoie aucune langue (robots).
     */
    public static function fromBrowser(Request $request): ?string
    {
        if (! $request->headers->has('Accept-Language')) {
            return null;
        }

        foreach ($request->getLanguages() as $language) {
            $primary = strtolower(substr($language, 0, 2));
            if (isset(self::ALL[$primary])) {
                return $primary;
            }
        }

        return self::FALLBACK;
    }
}
