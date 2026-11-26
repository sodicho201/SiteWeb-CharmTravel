<!DOCTYPE html>
@php
    use App\Support\Locales;
    $lang = Locales::info();
@endphp
<html lang="{{ $lang['html'] }}">
<head>
    @php
        // @section('x', '...') échappe déjà sa valeur : on la décode pour éviter un double échappement.
        $seoTitle = html_entity_decode(trim($__env->yieldContent('title', __('Charm Travel - Agence de voyage à Cotonou, Bénin'))), ENT_QUOTES, 'UTF-8');
        $seoDescription = html_entity_decode(trim($__env->yieldContent('meta_description', __("Charm Travel, agence de voyage à Cotonou (Bénin) : billets d'avion, envoi de colis à l'international, circuits touristiques au Bénin et services d'interprétariat."))), ENT_QUOTES, 'UTF-8');
        $seoUrl = url()->current();
        $seoImage = asset('assets/img/og-image.jpg');
    @endphp
    <meta charset="UTF-8">
    <meta name="author" content="CHARM AGENCE & BUSINESS">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $seoTitle }}</title>
    <meta name="description" content="{{ $seoDescription }}">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ $seoUrl }}">

    <!-- Versions linguistiques (hreflang). x-default = / qui oriente le visiteur vers sa langue. -->
    @foreach (Locales::ALL as $code => $info)
    <link rel="alternate" hreflang="{{ $info['hreflang'] }}" href="{{ Locales::homeUrl($code) }}">
    @endforeach
    <link rel="alternate" hreflang="x-default" href="{{ Locales::homeUrl(Locales::DEFAULT) }}">

    <!-- Open Graph (Facebook, WhatsApp, LinkedIn) -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="{{ $lang['og'] }}">
    @foreach (Locales::ALL as $code => $info)
        @if ($code !== Locales::current())
    <meta property="og:locale:alternate" content="{{ $info['og'] }}">
        @endif
    @endforeach
    <meta property="og:site_name" content="Charm Travel">
    <meta property="og:title" content="{{ $seoTitle }}">
    <meta property="og:description" content="{{ $seoDescription }}">
    <meta property="og:url" content="{{ $seoUrl }}">
    <meta property="og:image" content="{{ $seoImage }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="{{ __("Voyageurs à bord d'un avion - Charm Travel") }}">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seoTitle }}">
    <meta name="twitter:description" content="{{ $seoDescription }}">
    <meta name="twitter:image" content="{{ $seoImage }}">

    <!-- Données structurées (Schema.org) -->
    @php
        $seoSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'TravelAgency',
            'name' => 'CHARM AGENCE & BUSINESS',
            'alternateName' => 'Charm Travel',
            'description' => $seoDescription,
            'url' => url('/'),
            'logo' => asset('assets/img/logo/logo_principal.jpeg'),
            'image' => $seoImage,
            'telephone' => '+229 01 56 22 31 30',
            'email' => 'info@charmbusiness.com',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Fidjrossè, Carrefour Adjaha, au-dessus de la Pharmacie Sainte Victoire (1er étage), Salle 3',
                'addressLocality' => 'Cotonou',
                'addressRegion' => 'Littoral',
                'addressCountry' => 'BJ',
            ],
            'areaServed' => ['Bénin', 'International'],
            'openingHoursSpecification' => [
                [
                    '@type' => 'OpeningHoursSpecification',
                    'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                    'opens' => '09:00',
                    'closes' => '18:00',
                ],
                [
                    '@type' => 'OpeningHoursSpecification',
                    'dayOfWeek' => 'Saturday',
                    'opens' => '09:00',
                    'closes' => '13:00',
                ],
            ],
            'contactPoint' => [
                [
                    '@type' => 'ContactPoint',
                    'telephone' => '+229 01 69 29 29 80',
                    'contactType' => 'customer service',
                    'availableLanguage' => ['French'],
                ],
                [
                    '@type' => 'ContactPoint',
                    'telephone' => '+55 87 9623-1353',
                    'contactType' => 'customer service',
                    'areaServed' => 'BR',
                ],
            ],
            'sameAs' => [
                'https://www.facebook.com/CharmTravelsAgence&Business',
                'https://www.instagram.com/charm_travels_',
                'https://www.tiktok.com/@charm_travels',
            ],
            'makesOffer' => array_map(fn ($s) => ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => __($s)]], [
                "Billets d'avion",
                'Envoi de colis à l\'international',
                'Circuits touristiques au Bénin',
                'Interprétariat',
            ]),
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($seoSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) !!}</script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.svg') }}">

    <!-- Polices du thème (Manrope, Kalam) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kalam:wght@400&family=Manrope:wght@300..800&display=swap">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/datepickerboot.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <style>
        /* Sélecteur de langue (en-tête) */
        .lang-switcher { display: flex; gap: 2px; margin-right: 16px; padding: 4px; border-radius: 30px; background: rgba(255, 255, 255, 0.25); }
        .lang-switcher a { padding: 7px 11px; border-radius: 20px; font-size: 14px; font-weight: 700; line-height: 1; color: var(--white); transition: background .3s, color .3s; }
        .lang-switcher a:hover { color: var(--theme); }
        .lang-switcher a.active, .lang-switcher a.active:hover { background: var(--theme); color: var(--white); }
        .sticky .lang-switcher { background: rgba(0, 0, 0, 0.06); }
        .sticky .lang-switcher a:not(.active) { color: var(--header); }
        @media (max-width: 575px) {
            .lang-switcher { margin-right: 10px; }
            .lang-switcher a { padding: 6px 8px; font-size: 13px; }
        }
    </style>

    @yield('css')
</head>
<body>
    <!-- Header one page - first -->
    {{-- @include('front.layouts.partials.header_onepage_first') --}}
    <!-- Header one page - second -->
    @include('front.layouts.partials.header_onepage_second')

    <main>
        @yield('content')
    </main>

    @include('front.layouts.partials.footer')

    <!-- JS -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @yield('js')
</body>
</html>
