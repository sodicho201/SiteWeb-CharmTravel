@extends('front.layouts.app')

@section('title', __("Charm Travel Cotonou : billets d'avion, colis, tourisme au Bénin"))
@section('meta_description', __("Agence de voyage à Cotonou (Fidjrossè) : réservation de billets d'avion, envoi de colis à l'international, circuits touristiques au Bénin et interprétariat. Contact WhatsApp."))

@section('css')
{{-- Image du 1er slide : chargée en priorité (affichage le plus important pour la vitesse perçue) --}}
<link rel="preload" as="image" href="{{ asset('assets/img/hero/03.webp') }}" fetchpriority="high">
<style>
    /* Titres des slides 2 et 3 : h2 pour le SEO (un seul h1), même rendu visuel que le h1 */
    .hero-3 .hero-content .hero-title {
        color: var(--white);
        margin-bottom: 20px;
        font-size: 74px;
        font-weight: 800;
        line-height: 114%;
    }
    @media (max-width: 1399px) { .hero-3 .hero-content .hero-title { font-size: 53px; } }
    @media (max-width: 1199px) { .hero-3 .hero-content .hero-title { font-size: 42px; } }
    @media (max-width: 991px)  { .hero-3 .hero-content .hero-title { font-size: 50px; } }
    @media (max-width: 767px)  { .hero-3 .hero-content .hero-title { font-size: 45px; } }
    @media (max-width: 575px)  { .hero-3 .hero-content .hero-title { font-size: 40px; } }

    /* h1 du 1er slide : petit texte + slogan + mention, regroupés dans un seul h1 */
    .hero-3 .hero-content .hero-h1 .sub-title {
        font-weight: 400;
        line-height: 1.5;
    }
    .hero-3 .hero-content .hero-h1 .hero-tagline {
        font-size: 0.6em;
        font-weight: 700;
        line-height: 1.2;
        margin-top: 8px;
    }

    .news-card-items {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        cursor: pointer;
    }

    .news-image {
        position: relative;
    }

    .news-image img {
        width: 100%;
        height: auto;
        transition: transform 0.5s ease;
    }

    .news-card-items:hover .news-image img {
        transform: scale(1.1); /* Zoom au survol */
    }

    /* Overlay sombre */
    .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0); /* transparent par défaut */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-end;
        padding-bottom: 10px;
        gap: 10px;
        transition: background 0.3s ease;
    }

    .news-card-items:hover .overlay {
        background: rgba(0, 0, 0, 0.3); /* foncé au survol */
    }

    .service-name {
        color: #fff;
        font-weight: bold;
        font-size: 24px;
        font-family: 'Manrop', sans-serif;
        text-align: center;
        text-shadow: 0 0 5px rgba(0,0,0,0.7);
        z-index: 10;
    }

    .theme-btn {
        z-index: 10;
    }
</style>
@endsection

@section('content')
<!-- Hero section start -->
@php
    $whatsapp = '558796231353';
    $msgTour = urlencode(__('Bonjour, je souhaite réserver un tour pour découvrir le Bénin avec BENIN RAIZ'));
@endphp
<section class="hero-section hero-3">
    <div class="swiper hero-slider-3">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-image bg-cover" style="background-image: url('{{ asset('assets/img/hero/03.webp') }}')"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero-content">
                                {{-- h1 lu par Google : « Agence de voyage à Cotonou — Voyagez, expédiez en toute confiance, du Bénin au monde entier » --}}
                                <h1 class="hero-h1">
                                    <span class="sub-title d-block" data-animation="fadeInUp" data-delay="1.2s">{{ __('Agence de voyage à Cotonou') }}</span>
                                    <span class="d-block" data-animation="fadeInUp" data-delay="1.4s">{{ __('Voyagez, expédiez') }} <br>{{ __('en toute confiance') }}</span>
                                    <span class="hero-tagline d-block" data-animation="fadeInUp" data-delay="1.5s">{{ __('du Bénin au monde entier') }}</span>
                                </h1>
                                <p data-animation="fadeInUp" data-delay="1.6s">
                                    {{ __('Billets d’avion, tourisme, envoi de colis et interprétariat.') }}
                                </p>
                                <div class="about-button" data-animation="fadeInUp" data-delay="1.8s">
                                    <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode(__('Bonjour, je souhaite acheter un billet')) }}" class="theme-btn" target="_blank">{{ __('Réserver un vol') }}<i
                                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                    <a href="https://charmconnect.charmbusiness.com" class="theme-btn style-2" target="_blank"> {{ __('Envoyer un colis') }}<i
                                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-image bg-cover" style="background-image: url('{{ asset('assets/img/hero/04.webp') }}')"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero-content">
                                <div class="sub-title" data-animation="fadeInUp" data-delay="1.2s">
                                    {{ __('Expédition internationale') }}
                                </div>
                                <h2 class="hero-title" data-animation="fadeInUp" data-delay="1.4s">
                                   {{ __('Le monde') }} <br>{{ __('à votre portée') }}
                                </h2>
                                <p data-animation="fadeInUp" data-delay="1.6s">
                                    {{ __('Envoi rapide et sécurisé à l’international.') }}
                                </p>
                                <div class="about-button" data-animation="fadeInUp" data-delay="1.8s">
                                    <a href="https://charmconnect.charmbusiness.com" class="theme-btn" target="_blank">{{ __('Envoyer un colis') }}<i
                                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                    <a href="https://charmconnect.charmbusiness.com/status/commande" class="theme-btn style-2" target="_blank">{{ __('Suivre un envoi') }}<i
                                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-image bg-cover" style="background-image: url('{{ asset('assets/img/hero/03.webp') }}')"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero-content">
                                <div class="sub-title" data-animation="fadeInUp" data-delay="1.2s">
                                    {{ __('Assistance linguistique') }}
                                </div>
                                <h2 class="hero-title" data-animation="fadeInUp" data-delay="1.4s">
                                     {{ __('Communiquez') }} <br>{{ __('sans barrières') }}
                                </h2>
                                <p data-animation="fadeInUp" data-delay="1.6s">
                                    {{ __('Services d’interprétariat professionnel.') }}
                                </p>
                                <div class="about-button" data-animation="fadeInUp" data-delay="1.8s">
                                    <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode(__('Bonjour, je souhaite demander un interprète')) }}" class="theme-btn" target="_blank">{{ __('Demander un interprète') }}<i
                                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                    <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode(__('Bonjour, je souhaiterais avoir plus d’informations sur vos services')) }}"
                                        class="theme-btn style-2"
                                        target="_blank">
                                            {{ __('Nous contacter') }} <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-dot">
            <div class="dot2"></div>
        </div>
    </div>
</section>

<!-- Feature Section Start -->
<section class="feature-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".2s">
                <div class="feature-card-items">
                    <div class="icon">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/icon/01.svg') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            {{ __('Offres spéciales') }}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".4s">
                <div class="feature-card-items">
                    <div class="icon bg-color">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/icon/02.svg') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            {{ __('Guides expérimentés') }}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".6s">
                <div class="feature-card-items">
                    <div class="icon">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/icon/03.svg') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            {{ __('Support 24/7') }}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".8s">
                <div class="feature-card-items">
                    <div class="icon">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/icon/04.svg') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            {{ __('Envoi & logistique') }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Destination-category Section Start -->
<section class="destination-category-section section-padding pt-0">
    <div class="plane-shape float-bob-y">
        <img loading="lazy" decoding="async" src="{{ asset('assets/img/destination/shape.png') }}" alt="" style="width: 100%">
    </div>
    {{-- <div class="container">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp">Wonderful Place For You</span>
            <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                Browse By Destination Category
            </h2>
        </div>
    </div> --}}
    {{-- <div class="container-fluid">

        <div class="swiper category-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="destination-category-item">
                        <div class="category-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/destination/category1.jpg') }}" alt="img">
                            <div class="category-content">
                                <h5>
                                    <a href="destination-details.html">Adventure</a>
                                </h5>
                                <p>6 Tour</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-category-item">
                        <div class="category-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/destination/category2.jpg') }}" alt="img">
                            <div class="category-content">
                                <h5>
                                    <a href="destination-details.html">Adventure</a>
                                </h5>
                                <p>6 Tour</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-category-item">
                        <div class="category-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/destination/category3.jpg') }}" alt="img">
                            <div class="category-content">
                                <h5>
                                    <a href="destination-details.html">Adventure</a>
                                </h5>
                                <p>6 Tour</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-category-item">
                        <div class="category-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/destination/category4.jpg') }}" alt="img">
                            <div class="category-content">
                                <h5>
                                    <a href="destination-details.html">Adventure</a>
                                </h5>
                                <p>6 Tour</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-category-item">
                        <div class="category-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/destination/category5.jpg') }}" alt="img">
                            <div class="category-content">
                                <h5>
                                    <a href="destination-details.html">Adventure</a>
                                </h5>
                                <p>6 Tour</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-dot4 mt-5">
            <div class="dot"></div>
        </div>
    </div> --}}
</section>

<!-- About Section Start -->
<section class="about-section section-padding fix" id="about">
    <div class="container">
        <div class="about-wrapper-2">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="about-image">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/instagram/insta19.webp') }}" alt="{{ __('Voyageuse dans un marché d\'artisanat au Bénin') }}" class="wow img-custom-anim-left">
                        <div class="shape-image float-bob-y">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/about/04.webp') }}" alt="{{ __('Voyageur admirant la vue sur une ville') }}">
                        </div>

                        <div class="about-image-2">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/instagram/insta17.webp') }}" alt="{{ __('Voyageur en circuit touristique au Bénin') }}" class="wow img-custom-anim-top"
                                data-wow-duration="1.5s" data-wow-delay="0.3s">
                            <div class="plane-shape">
                                <img loading="lazy" decoding="async" src="{{ asset('assets/img/about/plane-shape2.png') }}" alt="">
                            </div>
                            {{-- <div class="circle-image">
                                <img loading="lazy" decoding="async" src="{{ asset('assets/img/about/circle.png') }}" alt="">
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="sub-title wow fadeInUp">
                                {{ __('À propos de notre agence') }}
                            </span>
                            <h2 class="wow fadeInUp wow" data-wow-delay=".3s">
                                {{ __('Votre partenaire de confiance') }} <br>
                                {{ __('pour voyager et connecter le monde') }}
                            </h2>
                        </div>
                        <p class="wow fadeInUp wow" data-wow-delay=".5s">
                            {{ __('Nous accompagnons particuliers et entreprises dans leurs déplacements, leurs expéditions internationales et leurs projets touristiques. Grâce à notre expertise et à un réseau de partenaires fiables, nous vous garantissons des services rapides, sécurisés et adaptés à vos besoins.') }}
                        </p>
                        <div class="about-items wow fadeInUp wow" data-wow-delay=".3s">
                            <div class="about-icon-items">
                                <div class="icon">
                                    <img loading="lazy" decoding="async" src="{{ asset('assets/img/about/cheak.png') }}" alt="">
                                </div>
                                <div class="content">
                                    <h5>
                                          {{ __('Réservation Vols /') }}<br> {{ __('Tourisme') }}
                                    </h5>
                                </div>
                            </div>
                            <div class="text">
                                <p>
                                    {{ __('Vols et séjours organisés en toute simplicité.') }}
                                </p>
                            </div>
                        </div>
                        <div class="about-items wow fadeInUp wow" data-wow-delay=".5s">
                            <div class="about-icon-items">
                                <div class="icon">
                                    <img loading="lazy" decoding="async" src="{{ asset('assets/img/about/cheak.png') }}" alt="">
                                </div>
                                <div class="content">
                                    <h5>
                                        {{ __('Expédition Colis /') }}<br>{{ __('Interprétariat') }}
                                    </h5>
                                </div>
                            </div>
                            <div class="text">
                                <p>
                                    {{ __('Expédition internationale et services d\'interprétariat.') }}
                                </p>
                            </div>
                        </div>
                        {{-- <a href="about.html" class="theme-btn wow fadeInUp wow" data-wow-delay=".7s">Discover More<i
                                class="fa-sharp fa-regular fa-arrow-right"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Section Start -->
<section class="news-section section-padding fix" id="service">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp">
                {{ __('Découvrez nos services') }}
            </span>
            <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                {{ __('Voyages, expéditions et interprétariat sur mesure') }}
            </h2>
        </div>

        <!-- Cartes des services -->
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                <div class="news-card-items">
                    <div class="news-image" style="height: 260px">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/services/logo_charmConnect.jpeg') }}" alt="{{ __('Charm Connect - envoi de colis à l\'international') }}">
                        <div class="overlay">
                            {{-- <div class="service-name">Charm Travels</div> --}}
                            <a href="javascript:void(0)" class="theme-btn service-btn" data-service="4">{{ __('Voir plus') }} <i
                                class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="news-card-items">
                    <div class="news-image" style="height: 260px">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/services/logo_vente_billet.jpeg') }}" alt="{{ __('Charm Travels - vente de billets d\'avion') }}">
                        <div class="overlay">
                            {{-- <div class="service-name">Charm Travels</div> --}}
                            <a href="javascript:void(0)" class="theme-btn service-btn" data-service="3">{{ __('Voir plus') }} <i
                                class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="news-card-items">
                    <div class="news-image" style="height: 260px">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/services/logo_service_interpretation.jpeg') }}" alt="{{ __('Charm InterVox - services d\'interprétariat') }}">
                        <div class="overlay">
                            {{-- <div class="service-name">Charm InterVox</div> --}}
                            <a href="javascript:void(0)" class="theme-btn service-btn" data-service="1">{{ __('Voir plus') }} <i
                                class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="news-card-items">
                    <div class="news-image" style="height: 260px">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/services/logo_tourisme_benin.webp') }}" alt="{{ __('Bénin RAIZ - circuits touristiques au Bénin') }}">
                        <div class="overlay">
                            {{-- <div class="service-name">Bénin RAIZ</div> --}}
                            <a href="javascript:void(0)" class="theme-btn service-btn" data-service="2">{{ __('Voir plus') }} <i
                                class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Détails des services (cachés par défaut) -->
        <div class="service-details mt-5">
            <div class="service-detail wow img-custom-anim-left-2" id="detail-1" style="display:none;">
                <div class="travel-feature-section section-padding fix"
                    style="background-image: url('{{ asset('assets/img/travel-bg.webp') }}') border-radius: 10px;">
                    <div class="shape-1 float-bob-y">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/plane-shape1.png') }}" alt="">
                    </div>
                    <div class="shape-2 float-bob-x">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/plane-shape2.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="feature-wrapper">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="feature-content">
                                        <div class="section-title">
                                            {{-- <span class="sub-title wow fadeInUp">
                                                Are you ready to travel?
                                            </span> --}}
                                            <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                                                Charm InterVox
                                            </h2>
                                        </div>
                                        <p class="wow fadeInUp wow" data-wow-delay=".3s">
                                            {{ __('Charm InterVox est un service d’interprétariat professionnel mettant à disposition des interprètes qualifiés dans plusieurs langues, dont l’anglais, le portugais et d’autres langues internationales. Nous facilitons la communication lors de rencontres, événements, formations et échanges professionnels.') }}
                                        </p>

                                        <p class="wow fadeInUp wow pt-5 pb-5" data-wow-delay=".3s">
                                            {{ __('En complément, Charm InterVox propose des cours de langues et des programmes de formation adaptés aux particuliers comme aux entreprises. Notre objectif est de renforcer les compétences linguistiques et de favoriser une communication efficace dans un contexte multiculturel.') }}
                                        </p>
                                        
                                        <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode(__('Bonjour, je souhaite demander un interprète')) }}"
                                            class="theme-btn wow fadeInUp mb-3"
                                            data-wow-delay=".9s"
                                            target="_blank">
                                                {{ __('Demandez un interprète') }} <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </a>

                                        <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode(__('Bonjour, je souhaite travailler avec votre agence en tant qu’interprète. Je voudrais connaître les conditions et la procédure de collaboration.')) }}"
                                            class="theme-btn wow fadeInUp mb-3"
                                            data-wow-delay=".9s"
                                            target="_blank">
                                                {{ __('Travaillez avec nous') }} <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </a>


                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp wow" data-wow-delay=".3s">
                                    <div class="feature-image wow img-custom-anim-left" style="width: 100%; height: 100%;">
                                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/services/logo_service_interpretation.jpeg') }}" alt="{{ __('Charm InterVox - services d\'interprétariat') }}" style="border-radius: 10px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-detail wow img-custom-anim-left-2" id="detail-2" style="display:none;">
                <div class="travel-feature-section section-padding fix"
                    style="background-image: url('{{ asset('assets/img/travel-bg.webp') }}') border-radius: 10px;">
                    <div class="shape-1 float-bob-y">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/plane-shape1.png') }}" alt="">
                    </div>
                    <div class="shape-2 float-bob-x">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/plane-shape2.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="feature-wrapper">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="feature-content">
                                        <div class="section-title">
                                            {{-- <span class="sub-title wow fadeInUp">
                                                Are you ready to travel?
                                            </span> --}}
                                            <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                                                Bénin RAIZ
                                            </h2>
                                        </div>
                                       <p class="wow fadeInUp wow" data-wow-delay=".3s">
                                            {{ __('Bénin Raiz est un service touristique dédié à la découverte authentique du Bénin, de son histoire et de son patrimoine culturel. Nous proposons des circuits pensés pour valoriser les traditions, les sites historiques et les richesses naturelles du pays.') }}
                                        </p>

                                        <p class="wow fadeInUp wow pt-5 pb-5" data-wow-delay=".3s">
                                            {{ __('À travers des expériences immersives, Bénin Raiz vous invite à explorer le Bénin autrement, en allant à la rencontre de ses peuples, de ses récits et de ses lieux emblématiques. Un voyage enrichissant au cœur de l’identité béninoise.') }}
                                        </p>

                                        <a href="https://wa.me/{{ $whatsapp }}?text={{ $msgTour }}"
                                            class="theme-btn wow fadeInUp mb-3"
                                            data-wow-delay=".9s"
                                            target="_blank">
                                                {{ __('Réservez un tour') }} <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </a>

                                        {{-- <a href="https://wa.me/{{ $whatsappNumber }}?text={{ $msgTour }}"
                                            class="theme-btn wow fadeInUp mb-3"
                                            data-wow-delay=".9s"
                                            target="_blank">
                                                Réservez un Tour <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </a> --}}

                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp wow" data-wow-delay=".3s">
                                    <div class="feature-image wow img-custom-anim-left" style="width: 100%; height: 100%;">
                                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/services/logo_tourisme_benin.webp') }}" alt="{{ __('Bénin RAIZ - circuits touristiques au Bénin') }}" style="border-radius: 10px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-detail wow img-custom-anim-left-2" id="detail-3" style="display:none;">
                <div class="travel-feature-section section-padding fix"
                    style="background-image: url('{{ asset('assets/img/travel-bg.webp') }}') border-radius: 10px;">
                    <div class="shape-1 float-bob-y">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/plane-shape1.png') }}" alt="">
                    </div>
                    <div class="shape-2 float-bob-x">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/plane-shape2.png') }}" alt="">
                    </div>
                  
                    <div class="container">
                        <div class="feature-wrapper">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="feature-content">
                                        <div class="section-title">
                                            {{-- <span class="sub-title wow fadeInUp">
                                                Are you ready to travel?
                                            </span> --}}
                                            <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                                                Charm Travels
                                            </h2>
                                        </div>
                                        <p class="wow fadeInUp wow" data-wow-delay=".3s">
                                            {{ __('Charm Travels vous accompagne dans l’achat de billets d’avion et l’organisation de vos déplacements, qu’ils soient nationaux ou internationaux. Nous vous proposons des solutions simples et accessibles pour voyager en toute sérénité, que ce soit pour le tourisme, les affaires ou les déplacements personnels.') }}
                                        </p>

                                        <p class="wow fadeInUp wow pt-5 pb-5" data-wow-delay=".3s">
                                            {{ __('En complément, nous mettons à votre disposition une sélection d’accessoires de voyage et de services touristiques pour améliorer votre confort avant, pendant et après votre voyage. Avec Charm Travels, chaque trajet devient une expérience bien préparée et sans stress.') }}
                                        </p>
                                       
                                        <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode(__('Bonjour, je souhaite acheter un billet')) }}"
                                            class="theme-btn wow fadeInUp mb-3"
                                            data-wow-delay=".9s"
                                            target="_blank">
                                                {{ __('Acheter un billet') }} <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </a>

                                        <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode(__('Bonjour, je souhaite avoir des informations sur le service tourisme')) }}"
                                            class="theme-btn wow fadeInUp mb-3"
                                            data-wow-delay=".9s"
                                            target="_blank">
                                                {{ __('Tourisme') }} <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </a>

                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp wow" data-wow-delay=".3s">
                                    <div class="feature-image wow img-custom-anim-left" style="width: 100%; height: 100%;">
                                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/services/logo_vente_billet.jpeg') }}" alt="{{ __('Charm Travels - vente de billets d\'avion') }}" style="border-radius: 10px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-detail wow img-custom-anim-left-2" id="detail-4" style="display:none;">
                <div class="travel-feature-section section-padding fix"
                    style="background-image: url('{{ asset('assets/img/travel-bg.webp') }}') border-radius: 10px;">
                    <div class="shape-1 float-bob-y">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/plane-shape1.png') }}" alt="">
                    </div>
                    <div class="shape-2 float-bob-x">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/plane-shape2.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="feature-wrapper">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="feature-content">
                                        <div class="section-title">
                                            {{-- <span class="sub-title wow fadeInUp">
                                                Are you ready to travel?
                                            </span> --}}
                                            <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                                                Charm Connect
                                            </h2>
                                        </div>
                                       <p class="wow fadeInUp wow" data-wow-delay=".3s">
                                            {{ __('Charm Connect est un service d’envoi de colis fiable et sécurisé, reliant plusieurs pays africains et des destinations internationales. Nous assurons l’expédition de vos colis vers le Brésil, le Gabon, la France et bien d’autres pays, avec des solutions adaptées à vos besoins personnels ou professionnels.') }}
                                        </p>

                                        <p class="wow fadeInUp wow pt-5 pb-5" data-wow-delay=".3s">
                                            {{ __('Grâce à notre système de suivi à chaque étape, vous restez informé de l’acheminement de votre colis depuis le départ jusqu’à la livraison finale. Charm Connect vous garantit transparence, rapidité et tranquillité d’esprit pour tous vos envois intercontinentaux.') }}
                                        </p>


                                        <a href="https://charmconnect.charmbusiness.com" target="_blank" class="theme-btn wow fadeInUp wow mb-3" data-wow-delay=".9s">
                                            {{ __('Envoyer un colis') }}<i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </a>
                                        <a href="https://charmconnect.charmbusiness.com/vendre-kilos" target="_blank" class="theme-btn wow fadeInUp wow mb-3" data-wow-delay=".9s">
                                            {{ __('Vendre mes kilos') }}<i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp wow" data-wow-delay=".3s">
                                    <div class="feature-image wow img-custom-anim-left" style="width: 100%; height: 100%;">
                                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/services/logo_charmConnect.jpeg') }}" alt="{{ __('Charm Connect - envoi de colis à l\'international') }}" style="border-radius: 10px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cta Section Start -->
<section class="cta-section section-padding pt-0 pb-0">
    <div class="mobile-shape">
        <img loading="lazy" decoding="async" src="{{ asset('assets/img/mobile.png') }}" alt="">
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".3s">
                <div class="cta-items">
                    <div class="cta-text">
                        <h2>{{ __('Expédition rapide') }}</h2>
                        <p>
                           {{ __('Envoyez vos colis à l’international') }} <br>
                            {{ __('en toute sécurité et rapidement.') }}
                        </p>
                    </div>
                    <a href="https://charmconnect.charmbusiness.com" class="theme-btn" target="_blank">{{ __('Envoyer un colis') }} <i
                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                    <div class="cta-image">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/bag-shape.webp') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".5s">
                <div class="cta-items style-2">
                    <div class="cta-text">
                        <h2>{{ __('Offre spéciale') }}</h2>
                        <p>
                           {{ __('Profitez de prix exceptionnels sur') }} <br>
                            {{ __('vos billets d’avion dès maintenant.') }}
                        </p>
                    </div>
                    <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode(__('Bonjour, je souhaite acheter un billet')) }}" class="theme-btn" target="_blank">{{ __('Réserver un vol') }} <i
                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                    <div class="cta-image">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/plane-shape.webp') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular-destination Section Start -->
<section class="popular-destination-section section-padding" id="destination">
    <div class="car-shape float-bob-x">
        <img loading="lazy" decoding="async" src="{{ asset('assets/img/destination/car.png') }}" alt="">
    </div>
    <div class="container">
        <div class="section-title-area justify-content-between">
            <div class="section-title">
                <span class="sub-title wow fadeInUp">
                    {{ __('Destinations incontournables') }}
                </span>
                <h2 class="wow fadeInUp wow" data-wow-delay=".3s">
                    {{ __('Nos destinations populaires') }}
                </h2>
            </div>
            {{-- <a href="{{ $homeUrl }}" class="theme-btn wow fadeInUp wow" data-wow-delay=".5s">Voir Plus<i
                    class="fa-sharp fa-regular fa-arrow-right"></i></a> --}}
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".2s">
                <div class="destination-card-items">
                    <div class="destination-image">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/destination/01.webp') }}" alt="{{ __('Circuit Bénin Tour') }}">
                        <div class="heart-icon">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                    <div class="destination-content">
                        <ul class="meta">
                            <li>
                                <i class="fa-thin fa-location-dot"></i>
                                {{ __('Bénin') }}
                            </li>
                            <li class="rating">
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>4.7</p>
                            </li>
                        </ul>
                        <h5>
                            <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode(__('Bonjour, je souhaite réserver le circuit Bénin Tour')) }}" target="_blank" rel="noopener">
                                {{ __('Bénin Tour') }}
                            </a>
                        </h5>
                        <ul class="info">
                            <li>
                                <i class="fa-regular fa-clock"></i>
                                {{ __('10 Jours') }}
                            </li>
                            <li>
                                <i class="fa-thin fa-users"></i>
                                50+
                            </li>
                        </ul>
                        <div class="price">
                            <h6>{{ __('Sur devis') }}</h6>
                            <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode(__('Bonjour, je souhaite réserver le circuit Bénin Tour')) }}" target="_blank" rel="noopener" class="theme-btn style-2">{{ __('Réserver maintenant') }}<i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".4s">
                <div class="destination-card-items">
                    <div class="destination-image">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/destination/02.webp') }}" alt="{{ __('Circuit Caraïbes Tour') }}">
                        <div class="heart-icon">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                    <div class="destination-content">
                        <ul class="meta">
                            <li>
                                <i class="fa-thin fa-location-dot"></i>
                                {{ __('Caraïbes') }}
                            </li>
                            <li class="rating">
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>4.7</p>
                            </li>
                        </ul>
                        <h5>
                            <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode(__('Bonjour, je souhaite réserver le circuit Caraïbes Tour')) }}" target="_blank" rel="noopener">
                                {{ __('Caraïbes Tour') }}
                            </a>
                        </h5>
                        <ul class="info">
                            <li>
                                <i class="fa-regular fa-clock"></i>
                                {{ __('10 Jours') }}
                            </li>
                            <li>
                                <i class="fa-thin fa-users"></i>
                                50+
                            </li>
                        </ul>
                        <div class="price">
                            <h6>{{ __('Sur devis') }}</h6>
                            <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode(__('Bonjour, je souhaite réserver le circuit Caraïbes Tour')) }}" target="_blank" rel="noopener" class="theme-btn style-2">{{ __('Réserver maintenant') }}<i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".6s">
                <div class="destination-card-items">
                    <div class="destination-image">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/destination/03.webp') }}" alt="{{ __('Circuit Brésil Tour') }}">
                        <div class="heart-icon">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                    <div class="destination-content">
                        <ul class="meta">
                            <li>
                                <i class="fa-thin fa-location-dot"></i>
                                {{ __('Brésil') }}
                            </li>
                            <li class="rating">
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>4.7</p>
                            </li>
                        </ul>
                        <h5>
                            <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode(__('Bonjour, je souhaite réserver le circuit Brésil Tour')) }}" target="_blank" rel="noopener">
                                {{ __('Brésil Tour') }}
                            </a>
                        </h5>
                        <ul class="info">
                            <li>
                                <i class="fa-regular fa-clock"></i>
                                {{ __('10 Jours') }}
                            </li>
                            <li>
                                <i class="fa-thin fa-users"></i>
                                50+
                            </li>
                        </ul>
                        <div class="price">
                            <h6>{{ __('Sur devis') }}</h6>
                            <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode(__('Bonjour, je souhaite réserver le circuit Brésil Tour')) }}" target="_blank" rel="noopener" class="theme-btn style-2">{{ __('Réserver maintenant') }}<i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".8s">
                <div class="destination-card-items">
                    <div class="destination-image">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/destination/04.webp') }}" alt="{{ __('Circuit Vodoun Days au Bénin') }}">
                        <div class="heart-icon">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                    <div class="destination-content">
                        <ul class="meta">
                            <li>
                                <i class="fa-thin fa-location-dot"></i>
                                {{ __('Bénin') }}
                            </li>
                            <li class="rating">
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>4.7</p>
                            </li>
                        </ul>
                        <h5>
                            <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode(__('Bonjour, je souhaite réserver le circuit Vodoun Days')) }}" target="_blank" rel="noopener">
                                Vodoun Days
                            </a>
                        </h5>
                        <ul class="info">
                            <li>
                                <i class="fa-regular fa-clock"></i>
                                {{ __('5 Jours') }}
                            </li>
                            <li>
                                <i class="fa-thin fa-users"></i>
                                50+
                            </li>
                        </ul>
                        <div class="price">
                            <h6>{{ __('Sur devis') }}</h6>
                            <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode(__('Bonjour, je souhaite réserver le circuit Vodoun Days')) }}" target="_blank" rel="noopener" class="theme-btn style-2">{{ __('Réserver maintenant') }}<i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Deals-offer Section Start -->
<section class="deals-offer-section section-padding fix bg-cover"
    style="background-image: url('{{ asset('assets/img/offer/bg.webp') }}');">
    <div class="deals-offer-wrapper">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="price-items">
                    {{-- <div class="price-image wow fadeInUp wow" data-wow-delay=".2s">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/offer/price.png') }}" alt="">
                    </div> --}}
                    {{-- <div class="coming-soon-timer">
                        <div class="timer-content wow fadeInUp" data-wow-delay=".2s">
                            <h2 id="day">00</h2>
                            <p>Days</p>
                        </div>
                        <div class="timer-content wow fadeInUp" data-wow-delay=".4s">
                            <h2 id="hour">00</h2>
                            <p>Hours</p>
                        </div>
                        <div class="timer-content wow fadeInUp" data-wow-delay=".6s">
                            <h2 id="min">00</h2>
                            <p>Minutes</p>
                        </div>
                        <div class="timer-content wow fadeInUp" data-wow-delay=".8s">
                            <h2 id="sec">00</h2>
                            <p>Secound</p>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-8">
                <div class="section-title-area">
                    <div class="section-title">
                        <span class="sub-title text-white wow fadeInUp">
                            {{ __('Offres & Promotions') }}
                        </span>
                        <h2 class="text-white wow fadeInUp wow" data-wow-delay=".3s">
                            {{ __('Offres de dernière minute pour vos voyages et envois') }}
                        </h2>
                    </div>
                    <div class="array-button justify-content-center wow fadeInUp wow" data-wow-delay=".5s">
                        <button class="array-prev"><i class="fa-sharp fa-regular fa-arrow-left"></i></button>
                        <button class="array-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="offer-slide-items">
                    <div class="swiper offer-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="offer-items">
                                    <div class="offer-image">
                                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/offer/offre1.webp') }}" alt="{{ __('Offre vol aller simple Rio de Janeiro - Cotonou avec Air France à 442 060 FCFA') }}">

                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="offer-items">
                                    <div class="offer-image">
                                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/offer/offre2.webp') }}" alt="{{ __('Offre vol aller simple Fortaleza - Cotonou avec Air France à 414 770 FCFA') }}">

                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="offer-items">
                                    <div class="offer-image">
                                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/offer/offre1.webp') }}" alt="{{ __('Offre vol aller simple Rio de Janeiro - Cotonou avec Air France à 442 060 FCFA') }}">

                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="offer-items">
                                    <div class="offer-image">
                                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/offer/offre2.webp') }}" alt="{{ __('Offre vol aller simple Fortaleza - Cotonou avec Air France à 414 770 FCFA') }}">

                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="offer-items">
                                    <div class="offer-image">
                                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/offer/offre1.webp') }}" alt="{{ __('Offre vol aller simple Rio de Janeiro - Cotonou avec Air France à 442 060 FCFA') }}">

                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="offer-items">
                                    <div class="offer-image">
                                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/offer/offre2.webp') }}" alt="{{ __('Offre vol aller simple Fortaleza - Cotonou avec Air France à 414 770 FCFA') }}">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section Start -->
<section class="testimonial-section section-padding fix bg-cover" id="testimonial">
    <div class="bag-shape float-bob-x">
        <img loading="lazy" decoding="async" src="{{ asset('assets/img/testimonial/bag-shape.webp') }}" alt="">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp">
                {{ __('Avis clients') }}
            </span>
            <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                {{ __('Témoignages de nos clients satisfaits') }}
            </h2>
        </div>
        <div class="testimonial-wrapper">
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                               
                            </div>
                            <p>
                               {{ __('Service très rapide et fiable. J’ai été informé dès l’arrivée de mon colis et j’ai pu le récupérer sans difficulté. Très satisfait du professionnalisme de l’équipe.') }}
                            </p>
                            <div class="client-info-items">
                                <div class="client-info">
                                    <div class="client-image">
                                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/testimonial/ano.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Denys L. </h4>
                                        <p>{{ __('Brésil - São Paulo') }}</p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg') }}" width="45" height="45"
                                        viewBox="0 0 45 45" fill="none">
                                        <path
                                            d="M21.5998 15.1662C21.4359 21.2706 20.2326 27.1028 17.1618 32.4687C15.0391 36.1766 11.8636 38.7708 8.31789 40.9881C8.09312 41.1284 7.80413 41.3886 7.55907 41.1588C7.2836 40.9002 7.52189 40.5673 7.66216 40.3087C8.9449 37.9646 10.3121 35.6645 11.4292 33.2309C12.6528 30.564 13.6212 27.811 14.2567 24.9396C14.4257 24.1774 14.255 24.0929 13.535 24.2484C7.64188 25.526 2.16112 21.8976 1.00852 15.9858C-0.0849304 10.38 3.84608 4.78603 9.51275 3.88694C15.9196 2.86954 21.5491 7.65063 21.5998 14.1522C21.6015 14.4902 21.5998 14.8282 21.5998 15.1662Z"
                                            fill="#FFA31A" />
                                        <path
                                            d="M44.25 15.2202C44.0793 21.5916 42.7949 27.6571 39.3912 33.1581C37.3175 36.5077 34.3228 38.8501 31.0746 40.9288C30.816 41.0945 30.4729 41.4375 30.1856 41.1198C29.9253 40.8325 30.2346 40.4877 30.3884 40.1987C31.6559 37.8462 33.0401 35.5562 34.1403 33.1142C35.3351 30.4642 36.2917 27.7382 36.9153 24.8939C37.0775 24.1536 36.8967 24.0827 36.2224 24.2415C30.2836 25.6358 24.4277 21.6338 23.5556 15.4348C22.7985 10.0537 26.7751 4.68115 32.1359 3.89022C38.7118 2.92353 44.2162 7.65053 44.25 14.2923C44.25 14.6016 44.25 14.9109 44.25 15.2202Z"
                                            fill="#FFA31A" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items style-2">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <p>
                               {{ __('Agence sérieuse avec une excellente communication. Les informations concernant le lieu et les heures de retrait étaient claires et respectées. Je recommande vivement.') }} 
                            </p>
                            <div class="client-info-items">
                                <div class="client-info">
                                    <div class="client-image">
                                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/testimonial/ano.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Carlos M.</h4>
                                        <p>{{ __('Brésil') }}</p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg') }}" width="45" height="45"
                                        viewBox="0 0 45 45" fill="none">
                                        <path
                                            d="M21.5998 15.1662C21.4359 21.2706 20.2326 27.1028 17.1618 32.4687C15.0391 36.1766 11.8636 38.7708 8.31789 40.9881C8.09312 41.1284 7.80413 41.3886 7.55907 41.1588C7.2836 40.9002 7.52189 40.5673 7.66216 40.3087C8.9449 37.9646 10.3121 35.6645 11.4292 33.2309C12.6528 30.564 13.6212 27.811 14.2567 24.9396C14.4257 24.1774 14.255 24.0929 13.535 24.2484C7.64188 25.526 2.16112 21.8976 1.00852 15.9858C-0.0849304 10.38 3.84608 4.78603 9.51275 3.88694C15.9196 2.86954 21.5491 7.65063 21.5998 14.1522C21.6015 14.4902 21.5998 14.8282 21.5998 15.1662Z"
                                            fill="#1CA8CB" />
                                        <path
                                            d="M44.25 15.2202C44.0793 21.5916 42.7949 27.6571 39.3912 33.1581C37.3175 36.5077 34.3228 38.8501 31.0746 40.9288C30.816 41.0945 30.4729 41.4375 30.1856 41.1198C29.9253 40.8325 30.2346 40.4877 30.3884 40.1987C31.6559 37.8462 33.0401 35.5562 34.1403 33.1142C35.3351 30.4642 36.2917 27.7382 36.9153 24.8939C37.0775 24.1536 36.8967 24.0827 36.2224 24.2415C30.2836 25.6358 24.4277 21.6338 23.5556 15.4348C22.7985 10.0537 26.7751 4.68115 32.1359 3.89022C38.7118 2.92353 44.2162 7.65053 44.25 14.2923C44.25 14.6016 44.25 14.9109 44.25 15.2202Z"
                                            fill="#1CA8CB" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <p>
                                {{ __('Colis bien reçu et dans les délais annoncés. Le service est efficace, organisé et rassurant. Très bonne expérience.') }} 
                            </p>
                            <div class="client-info-items">
                                <div class="client-info">
                                    <div class="client-image">
                                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/testimonial/ano.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Junior A.</h4>
                                        <p>{{ __('Bénin - Cotonou') }}</p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg') }}" width="45" height="45"
                                        viewBox="0 0 45 45" fill="none">
                                        <path
                                            d="M21.5998 15.1662C21.4359 21.2706 20.2326 27.1028 17.1618 32.4687C15.0391 36.1766 11.8636 38.7708 8.31789 40.9881C8.09312 41.1284 7.80413 41.3886 7.55907 41.1588C7.2836 40.9002 7.52189 40.5673 7.66216 40.3087C8.9449 37.9646 10.3121 35.6645 11.4292 33.2309C12.6528 30.564 13.6212 27.811 14.2567 24.9396C14.4257 24.1774 14.255 24.0929 13.535 24.2484C7.64188 25.526 2.16112 21.8976 1.00852 15.9858C-0.0849304 10.38 3.84608 4.78603 9.51275 3.88694C15.9196 2.86954 21.5491 7.65063 21.5998 14.1522C21.6015 14.4902 21.5998 14.8282 21.5998 15.1662Z"
                                            fill="#FFA31A" />
                                        <path
                                            d="M44.25 15.2202C44.0793 21.5916 42.7949 27.6571 39.3912 33.1581C37.3175 36.5077 34.3228 38.8501 31.0746 40.9288C30.816 41.0945 30.4729 41.4375 30.1856 41.1198C29.9253 40.8325 30.2346 40.4877 30.3884 40.1987C31.6559 37.8462 33.0401 35.5562 34.1403 33.1142C35.3351 30.4642 36.2917 27.7382 36.9153 24.8939C37.0775 24.1536 36.8967 24.0827 36.2224 24.2415C30.2836 25.6358 24.4277 21.6338 23.5556 15.4348C22.7985 10.0537 26.7751 4.68115 32.1359 3.89022C38.7118 2.92353 44.2162 7.65053 44.25 14.2923C44.25 14.6016 44.25 14.9109 44.25 15.2202Z"
                                            fill="#FFA31A" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                               
                            </div>
                            <p>
                                {{ __('Très satisfait du service. L’équipe est disponible et le suivi est sérieux du début à la fin. Une agence digne de confiance.') }}
                            </p>
                            <div class="client-info-items">
                                <div class="client-info">
                                    <div class="client-image">
                                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/testimonial/ano.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Patrick S.</h4>
                                        <p>{{ __('Bénin') }}</p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg') }}" width="45" height="45"
                                        viewBox="0 0 45 45" fill="none">
                                        <path
                                            d="M21.5998 15.1662C21.4359 21.2706 20.2326 27.1028 17.1618 32.4687C15.0391 36.1766 11.8636 38.7708 8.31789 40.9881C8.09312 41.1284 7.80413 41.3886 7.55907 41.1588C7.2836 40.9002 7.52189 40.5673 7.66216 40.3087C8.9449 37.9646 10.3121 35.6645 11.4292 33.2309C12.6528 30.564 13.6212 27.811 14.2567 24.9396C14.4257 24.1774 14.255 24.0929 13.535 24.2484C7.64188 25.526 2.16112 21.8976 1.00852 15.9858C-0.0849304 10.38 3.84608 4.78603 9.51275 3.88694C15.9196 2.86954 21.5491 7.65063 21.5998 14.1522C21.6015 14.4902 21.5998 14.8282 21.5998 15.1662Z"
                                            fill="#FFA31A" />
                                        <path
                                            d="M44.25 15.2202C44.0793 21.5916 42.7949 27.6571 39.3912 33.1581C37.3175 36.5077 34.3228 38.8501 31.0746 40.9288C30.816 41.0945 30.4729 41.4375 30.1856 41.1198C29.9253 40.8325 30.2346 40.4877 30.3884 40.1987C31.6559 37.8462 33.0401 35.5562 34.1403 33.1142C35.3351 30.4642 36.2917 27.7382 36.9153 24.8939C37.0775 24.1536 36.8967 24.0827 36.2224 24.2415C30.2836 25.6358 24.4277 21.6338 23.5556 15.4348C22.7985 10.0537 26.7751 4.68115 32.1359 3.89022C38.7118 2.92353 44.2162 7.65053 44.25 14.2923C44.25 14.6016 44.25 14.9109 44.25 15.2202Z"
                                            fill="#FFA31A" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <p>
                                {{ __('Mon colis est arrivé rapidement et sans aucun problème. J’ai apprécié la communication et le respect des délais. Je recommande fortement.') }}
                            </p>
                            <div class="client-info-items">
                                <div class="client-info">
                                    <div class="client-image">
                                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/testimonial/ano.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Ibrahim K.</h4>
                                        <p>{{ __('Brésil') }}</p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg') }}" width="45" height="45"
                                        viewBox="0 0 45 45" fill="none">
                                        <path
                                            d="M21.5998 15.1662C21.4359 21.2706 20.2326 27.1028 17.1618 32.4687C15.0391 36.1766 11.8636 38.7708 8.31789 40.9881C8.09312 41.1284 7.80413 41.3886 7.55907 41.1588C7.2836 40.9002 7.52189 40.5673 7.66216 40.3087C8.9449 37.9646 10.3121 35.6645 11.4292 33.2309C12.6528 30.564 13.6212 27.811 14.2567 24.9396C14.4257 24.1774 14.255 24.0929 13.535 24.2484C7.64188 25.526 2.16112 21.8976 1.00852 15.9858C-0.0849304 10.38 3.84608 4.78603 9.51275 3.88694C15.9196 2.86954 21.5491 7.65063 21.5998 14.1522C21.6015 14.4902 21.5998 14.8282 21.5998 15.1662Z"
                                            fill="#FFA31A" />
                                        <path
                                            d="M44.25 15.2202C44.0793 21.5916 42.7949 27.6571 39.3912 33.1581C37.3175 36.5077 34.3228 38.8501 31.0746 40.9288C30.816 41.0945 30.4729 41.4375 30.1856 41.1198C29.9253 40.8325 30.2346 40.4877 30.3884 40.1987C31.6559 37.8462 33.0401 35.5562 34.1403 33.1142C35.3351 30.4642 36.2917 27.7382 36.9153 24.8939C37.0775 24.1536 36.8967 24.0827 36.2224 24.2415C30.2836 25.6358 24.4277 21.6338 23.5556 15.4348C22.7985 10.0537 26.7751 4.68115 32.1359 3.89022C38.7118 2.92353 44.2162 7.65053 44.25 14.2923C44.25 14.6016 44.25 14.9109 44.25 15.2202Z"
                                            fill="#FFA31A" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                               
                            </div>
                            <p>
                                {{ __('Service professionnel et rapide. Les informations étaient précises et le retrait s’est fait sans difficulté. Très satisfait.') }}
                            </p>
                            <div class="client-info-items">
                                <div class="client-info">
                                    <div class="client-image">
                                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/testimonial/ano.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Marc D.</h4>
                                        <p>{{ __('Bénin') }}</p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg') }}" width="45" height="45"
                                        viewBox="0 0 45 45" fill="none">
                                        <path
                                            d="M21.5998 15.1662C21.4359 21.2706 20.2326 27.1028 17.1618 32.4687C15.0391 36.1766 11.8636 38.7708 8.31789 40.9881C8.09312 41.1284 7.80413 41.3886 7.55907 41.1588C7.2836 40.9002 7.52189 40.5673 7.66216 40.3087C8.9449 37.9646 10.3121 35.6645 11.4292 33.2309C12.6528 30.564 13.6212 27.811 14.2567 24.9396C14.4257 24.1774 14.255 24.0929 13.535 24.2484C7.64188 25.526 2.16112 21.8976 1.00852 15.9858C-0.0849304 10.38 3.84608 4.78603 9.51275 3.88694C15.9196 2.86954 21.5491 7.65063 21.5998 14.1522C21.6015 14.4902 21.5998 14.8282 21.5998 15.1662Z"
                                            fill="#FFA31A" />
                                        <path
                                            d="M44.25 15.2202C44.0793 21.5916 42.7949 27.6571 39.3912 33.1581C37.3175 36.5077 34.3228 38.8501 31.0746 40.9288C30.816 41.0945 30.4729 41.4375 30.1856 41.1198C29.9253 40.8325 30.2346 40.4877 30.3884 40.1987C31.6559 37.8462 33.0401 35.5562 34.1403 33.1142C35.3351 30.4642 36.2917 27.7382 36.9153 24.8939C37.0775 24.1536 36.8967 24.0827 36.2224 24.2415C30.2836 25.6358 24.4277 21.6338 23.5556 15.4348C22.7985 10.0537 26.7751 4.68115 32.1359 3.89022C38.7118 2.92353 44.2162 7.65053 44.25 14.2923C44.25 14.6016 44.25 14.9109 44.25 15.2202Z"
                                            fill="#FFA31A" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="array-button">
                    <button class="array-prevs">{{ __('Précédent') }}</button>
                    <button class="array-nexts">{{ __('Suivant') }}</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Choose-us-section Start -->
<section class="choose-us-section section-padding bg-cover fix"
    style="background-image: url('{{ asset('assets/img/choose-us-bg-2.webp') }}')">
    <div class="container">
        <div class="choose-us-wrapper">
            <div class="row g-4 align-items-center">
                <div class="col-xl-7 col-lg-6">
                    <div class="choose-us-content">
                        <div class="section-title">
                            <span class="sub-title wow fadeInUp">
                                {{ __('Pourquoi nous choisir ?') }}
                            </span>
                            <h2 class="wow fadeInUp wow" data-wow-delay=".3s">
                                {{ __('Obtenez la meilleure expérience de voyage') }}
                            </h2>
                        </div>
                        <p class="wow fadeInUp wow" data-wow-delay=".3s">
                            {{ __('Nous offrons des services de voyage, d’expédition et d’interprétariat fiables, rapides et personnalisés, pour que chaque expérience soit réussie.') }}
                        </p>
                        <div class="choose-us-area">
                            <div class="line-shape">
                                <img loading="lazy" decoding="async" src="{{ asset('assets/img/line-shape2.png') }}" alt="">
                            </div>
                            <div class="choose-us-items wow fadeInUp wow" data-wow-delay=".3s">
                                <h3 class="number">
                                    01
                                </h3>
                                <div class="content">
                                    <h4>
                                        {{ __('Réservation de vols') }}
                                    </h4>
                                    <p>
                                        {{ __('Achetez vos billets d’avion rapidement et en toute sécurité.') }}
                                    </p>
                                </div>
                            </div>
                            <div class="choose-us-items wow fadeInUp wow" data-wow-delay=".5s">
                                <h3 class="number">
                                    02
                                </h3>
                                <div class="content">
                                    <h4>
                                        {{ __('Services d’interprétariat') }}
                                    </h4>
                                    <p>
                                        {{ __('Facilitez vos échanges internationaux avec nos experts linguistiques.') }}
                                    </p>
                                </div>
                            </div>
                            <div class="choose-us-items wow fadeInUp wow" data-wow-delay=".7s">
                                <h3 class="number">
                                    03
                                </h3>
                                <div class="content">
                                    <h4>
                                        {{ __('Expédition de colis') }}
                                    </h4>
                                    <p>
                                       {{ __('Envoyez vos colis à l’international rapidement et en toute sécurité.') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 wow fadeInUp wow" data-wow-delay=".3s">
                    <div class="choose-us-thumb">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/img/choose-us-bg.webp') }}" alt="{{ __('Voyager avec Charm Travel') }}" class="wow img-custom-anim-left">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- watch-video-section Start -->
<section class="watch-video-section section-padding fix">
    <div class="bg-shape">
        <img loading="lazy" decoding="async" src="{{ asset('assets/img/map-bg.webp') }}" alt="">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp">
                {{ __('Découvrez-nous') }}
            </span>
            <h2 class="wow fadeInUp wow" data-wow-delay=".3s">
                 {{ __('Des expériences') }} <br>{{ __('inoubliables') }}
            </h2>
        </div>
        <div class="video-wrapper">
           <div class="watch-button">
                <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode(__('Bonjour, je souhaite vous contacter pour avoir plus d’informations sur vos services')) }}"
                class="theme-btn wow fadeInUp wow"
                data-wow-delay=".5s"
                target="_blank">
                    {{ __('Contactez-nous') }} <i class="fa-sharp fa-regular fa-arrow-right"></i>
                </a>

                <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode(__('Bonjour, je souhaite réserver un service dès maintenant. Merci de me préciser les prochaines étapes.')) }}"
                class="theme-btn style-2 wow fadeInUp wow"
                data-wow-delay=".7s"
                target="_blank">
                    {{ __('Réserver maintenant') }} <i class="fa-sharp fa-regular fa-arrow-right"></i>
                </a>
            </div>

            {{-- <div class="video-image bg-cover" style="background-image: url('{{ asset('assets/img/video-bg.webp') }}');">
                <a href="https://drive.google.com/file/d/15W5oh8l1xFgTJgkgb4HY-mCwPL1_-u6J/view?usp=sharing" class="video-btn video-popup">
                    <i class="fa-duotone fa-play"></i>
                </a>
            </div> --}}
            <div class="video-image bg-cover" style="background-image: url('{{ asset('assets/img/video-bg.webp') }}');">
                <a href="https://drive.google.com/file/d/15W5oh8l1xFgTJgkgb4HY-mCwPL1_-u6J/view"
                class="video-btn"
                target="_blank">
                    <i class="fa-duotone fa-play"></i>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Instagram Banner Section Start -->
<div class="instagram-banner fix section-padding bg-cover"
    style="background-image: url('{{ asset('assets/img/instagram/bg.webp') }}');">
    <div class="instagram-wrapper">
        <h2 class="text-center wow fadeInUp" data-wow-delay=".3s">{{ __('Suivez-nous sur Instagram') }}</h2>
        <div class="swiper instagram-banner-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/instagram/insta1.webp') }}" alt="{{ __('Statue dans une forêt sacrée au Bénin') }}">
                            <a href="https://www.instagram.com/charm_travels_" target="_blank" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/instagram/insta2.webp') }}" alt="{{ __('Voyageuse devant une fresque murale au Bénin') }}">
                            <a href="https://www.instagram.com/charm_travels_" target="_blank" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/instagram/insta3.webp') }}" alt="{{ __('Entrée de la forêt sacrée de Kpassè à Ouidah, Bénin') }}">
                            <a href="https://www.instagram.com/charm_travels_" target="_blank" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/instagram/insta4.webp') }}" alt="{{ __('Voyageuse devant la fresque Hwendo Man Bou au Bénin') }}">
                            <a href="https://www.instagram.com/charm_travels_" target="_blank" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/instagram/insta5.webp') }}" alt="{{ __('Groupe de voyageurs en visite dans un village au Bénin') }}">
                            <a href="https://www.instagram.com/charm_travels_" target="_blank" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/instagram/insta6.webp') }}" alt="{{ __('Voyageuse avec un python au temple des pythons de Ouidah') }}">
                            <a href="https://www.instagram.com/charm_travels_" target="_blank" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/instagram/insta7.jpeg') }}" alt="{{ __('Groupe de touristes avec leur guide à Ouidah, Bénin') }}">
                            <a href="https://www.instagram.com/charm_travels_" target="_blank" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/instagram/insta8.jpeg') }}" alt="{{ __('Visite guidée sur la Route des Esclaves à Ouidah') }}">
                            <a href="https://www.instagram.com/charm_travels_" target="_blank" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/instagram/insta9.jpeg') }}" alt="{{ __('Voyageurs sur la plage de Ouidah, Bénin') }}">
                            <a href="https://www.instagram.com/charm_travels_" target="_blank" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/instagram/insta10.webp') }}" alt="{{ __('Voyageuse avec un python à Ouidah, Bénin') }}">
                            <a href="https://www.instagram.com/charm_travels_" target="_blank" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/instagram/insta11.jpeg') }}" alt="{{ __('Groupe de voyageurs Charm Travel au Bénin') }}">
                            <a href="https://www.instagram.com/charm_travels_" target="_blank" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/instagram/insta12.jpeg') }}" alt="{{ __('Guide et touristes en visite à Ouidah, Bénin') }}">
                            <a href="https://www.instagram.com/charm_travels_" target="_blank" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/instagram/insta13.webp') }}" alt="{{ __('Groupe de voyageurs devant la Porte du Non-Retour à Ouidah') }}">
                            <a href="https://www.instagram.com/charm_travels_" target="_blank" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/instagram/insta14.webp') }}" alt="{{ __('Voyageurs devant la Porte du Non-Retour à Ouidah, Bénin') }}">
                            <a href="https://www.instagram.com/charm_travels_" target="_blank" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
              
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/instagram/insta18.webp') }}" alt="{{ __('Voyageuse sur la Route des Esclaves à Ouidah') }}">
                            <a href="https://www.instagram.com/charm_travels_" target="_blank" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
               
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/instagram/insta20.webp') }}" alt="{{ __('Statue dans la forêt sacrée de Kpassè à Ouidah') }}">
                            <a href="https://www.instagram.com/charm_travels_" target="_blank" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/instagram/insta21.jpg') }}" alt="{{ __('Bureau de l\'agence Charm Travel à Cotonou') }}">
                            <a href="https://www.instagram.com/charm_travels_" target="_blank" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/img/instagram/insta22.webp') }}" alt="{{ __('Conseiller de l\'agence Charm Travel à son bureau de Cotonou') }}">
                            <a href="https://www.instagram.com/charm_travels_" target="_blank" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('.service-btn').on('click', function() {
            var serviceId = $(this).data('service');

            // cacher tous les détails
            $('.service-detail').slideUp(0); // instant pour cacher

            // afficher le détail correspondant
            var $detail = $('#detail-' + serviceId);
            $detail.slideDown(0, function() {
                // une fois l'animation terminée, faire défiler jusqu'au détail
                $('html, body').animate({
                    scrollTop: $detail.offset().top - 100
                }, 100);
            });
        });
    });
</script>
@endsection
