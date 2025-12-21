@extends('front.layouts.app')

@section('title', 'Accueil - CharmTravel')

@section('css')
<style>
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
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0); /* transparent par défaut */
        display: flex;
        align-items: center;
        justify-content: center;
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
</style>
@endsection

@section('content')
<!-- Hero section start -->
<section class="hero-section hero-3">
    <div class="swiper hero-slider-3">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-image bg-cover" style="background-image: url('{{ asset('assets/img/hero/03.png') }}')"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero-content">
                                <div class="sub-title" data-animation="fadeInUp" data-delay="1.2s">
                                    Services internationaux
                                </div>
                                <h1 data-animation="fadeInUp" data-delay="1.4s">
                                     Voyagez, expédiez <br>en toute confiance
                                </h1>
                                <p data-animation="fadeInUp" data-delay="1.6s">
                                    Billets d’avion, tourisme, envoi de colis et interprétariat.
                                </p>
                                <div class="about-button" data-animation="fadeInUp" data-delay="1.8s">
                                    <a href="tour-details.html" class="theme-btn">Réserver un vol<i
                                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                    <a href="tour-details.html" class="theme-btn style-2"> Envoyer un colis<i
                                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-image bg-cover" style="background-image: url('{{ asset('assets/img/hero/04.png') }}')"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero-content">
                                <div class="sub-title" data-animation="fadeInUp" data-delay="1.2s">
                                    Expédition internationale
                                </div>
                                <h1 data-animation="fadeInUp" data-delay="1.4s">
                                   Le monde <br>à votre portée
                                </h1>
                                <p data-animation="fadeInUp" data-delay="1.6s">
                                    Envoi rapide et sécurisé à l’international.
                                </p>
                                <div class="about-button" data-animation="fadeInUp" data-delay="1.8s">
                                    <a href="tour-details.html" class="theme-btn">Envoyer un colis<i
                                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                    <a href="tour-details.html" class="theme-btn style-2">Suivre un envoi<i
                                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-image bg-cover" style="background-image: url('{{ asset('assets/img/hero/03.png') }}')"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero-content">
                                <div class="sub-title" data-animation="fadeInUp" data-delay="1.2s">
                                    Assistance linguistique
                                </div>
                                <h1 data-animation="fadeInUp" data-delay="1.4s">
                                     Communiquez <br>sans barrières
                                </h1>
                                <p data-animation="fadeInUp" data-delay="1.6s">
                                    Services d’interprétariat professionnel.
                                </p>
                                <div class="about-button" data-animation="fadeInUp" data-delay="1.8s">
                                    <a href="tour-details.html" class="theme-btn">Demander un interprète<i
                                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                    <a href="tour-details.html" class="theme-btn style-2">Nous contacter<i
                                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
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
                        <img src="{{ asset('assets/img/icon/01.svg') }}" alt="img">
                    </div>
                    <div class="content">
                        <h3>
                            Offres spéciales
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".4s">
                <div class="feature-card-items">
                    <div class="icon bg-color">
                        <img src="{{ asset('assets/img/icon/02.svg') }}" alt="img">
                    </div>
                    <div class="content">
                        <h3>
                            Guides expérimentés
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".6s">
                <div class="feature-card-items">
                    <div class="icon">
                        <img src="{{ asset('assets/img/icon/03.svg') }}" alt="img">
                    </div>
                    <div class="content">
                        <h3>
                            Support 24/7
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".8s">
                <div class="feature-card-items">
                    <div class="icon">
                        <img src="{{ asset('assets/img/icon/04.svg') }}" alt="img">
                    </div>
                    <div class="content">
                        <h3>
                            Envoi & logistique
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Destination-category Section Start -->
<section class="destination-category-section section-padding pt-0" id="destination">
    <div class="plane-shape float-bob-y">
        <img src="{{ asset('assets/img/destination/shape.png') }}" alt="img" style="width: 100%">
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
                            <img src="{{ asset('assets/img/destination/category1.jpg') }}" alt="img">
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
                            <img src="{{ asset('assets/img/destination/category2.jpg') }}" alt="img">
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
                            <img src="{{ asset('assets/img/destination/category3.jpg') }}" alt="img">
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
                            <img src="{{ asset('assets/img/destination/category4.jpg') }}" alt="img">
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
                            <img src="{{ asset('assets/img/destination/category5.jpg') }}" alt="img">
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
                        <img src="{{ asset('assets/img/about/03.jpg') }}" alt="img" class="wow img-custom-anim-left">
                        <div class="shape-image float-bob-y">
                            <img src="{{ asset('assets/img/about/04.png') }}" alt="img">
                        </div>
                       
                        <div class="about-image-2">
                            <img src="{{ asset('assets/img/about/05.jpg') }}" alt="img" class="wow img-custom-anim-top"
                                data-wow-duration="1.5s" data-wow-delay="0.3s">
                            <div class="plane-shape">
                                <img src="{{ asset('assets/img/about/plane-shape2.png') }}" alt="img">
                            </div>
                            {{-- <div class="circle-image">
                                <img src="{{ asset('assets/img/about/circle.png') }}" alt="img">
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="sub-title wow fadeInUp">
                                À propos de notre agence
                            </span>
                            <h2 class="wow fadeInUp wow" data-wow-delay=".3s">
                                Votre partenaire de confiance <br>
                                pour voyager et connecter le monde
                            </h2>
                        </div>
                        <p class="wow fadeInUp wow" data-wow-delay=".5s">
                            Nous accompagnons particuliers et entreprises dans leurs déplacements, 
                            leurs expéditions internationales et leurs projets touristiques. 
                            Grâce à notre expertise et à un réseau de partenaires fiables, 
                            nous vous garantissons des services rapides, sécurisés et adaptés à vos besoins.
                        </p>
                        <div class="about-items wow fadeInUp wow" data-wow-delay=".3s">
                            <div class="about-icon-items">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/about/cheak.png') }}" alt="img">
                                </div>
                                <div class="content">
                                    <h5>
                                          Réservation Vols /<br> Tourisme
                                    </h5>
                                </div>
                            </div>
                            <div class="text">
                                <p>
                                    Vols et séjours organisés en toute simplicité.
                                </p>
                            </div>
                        </div>
                        <div class="about-items wow fadeInUp wow" data-wow-delay=".5s">
                            <div class="about-icon-items">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/about/cheak.png') }}" alt="img">
                                </div>
                                <div class="content">
                                    <h5>
                                        Expédition Colis /<br>Interprétariat
                                    </h5>
                                </div>
                            </div>
                            <div class="text">
                                <p>
                                    Expédition internationale et services d'interprétariat.
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
                Découvrez nos services
            </span>
            <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                Voyages, expéditions et interprétariat sur mesure
            </h2>
        </div>

        <!-- Cartes des services -->
        <div class="row">
            <a class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp service-card" data-wow-delay=".3s" data-service="1">
                <div class="news-card-items">
                    <div class="news-image">
                        <img src="{{ asset('assets/img/news/01.jpg') }}" alt="Service 1">
                        <div class="overlay">
                            <div class="service-name">Adventure Tours</div>
                        </div>
                    </div>
                </div>
            </a>

            <a class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp service-card" data-wow-delay=".5s" data-service="2">
                <div class="news-card-items">
                    <div class="news-image">
                        <img src="{{ asset('assets/img/news/02.jpg') }}" alt="Service 2">
                        <div class="overlay">
                            <div class="service-name">Luxury Cruises</div>
                        </div>
                    </div>
                </div>
            </a>

            <a class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp service-card" data-wow-delay=".7s" data-service="3">
                <div class="news-card-items">
                    <div class="news-image">
                        <img src="{{ asset('assets/img/news/02.jpg') }}" alt="Service 3">
                        <div class="overlay">
                            <div class="service-name">Luxury Cruises</div>
                        </div>
                    </div>
                </div>
            </a>

            <a class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp service-card" data-wow-delay=".3s" data-service="4">
                <div class="news-card-items">
                    <div class="news-image">
                        <img src="{{ asset('assets/img/news/01.jpg') }}" alt="Service 4">
                        <div class="overlay">
                            <div class="service-name">Adventure Tours</div>
                        </div>
                    </div>
                </div>
            </a>

            <a class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp service-card" data-wow-delay=".5s" data-service="5">
                <div class="news-card-items">
                    <div class="news-image">
                        <img src="{{ asset('assets/img/news/02.jpg') }}" alt="Service 5">
                        <div class="overlay">
                            <div class="service-name">Luxury Cruises</div>
                        </div>
                    </div>
                </div>
            </a>

            <a class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp service-card" data-wow-delay=".7s" data-service="6">
                <div class="news-card-items">
                    <div class="news-image">
                        <img src="{{ asset('assets/img/news/02.jpg') }}" alt="Service 6">
                        <div class="overlay">
                            <div class="service-name">Luxury Cruises</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Détails des services (cachés par défaut) -->
        <div class="service-details mt-5">
            <div class="service-detail wow img-custom-anim-left-2" id="detail-1" style="display:none;">
                <div class="travel-feature-section section-padding fix"
                    style="background-image: url('{{ asset('assets/img/travel-bg.jpg') }}') border-radius: 10px;">
                    <div class="shape-1 float-bob-y">
                        <img src="{{ asset('assets/img/plane-shape1.png') }}" alt="img">
                    </div>
                    <div class="shape-2 float-bob-x">
                        <img src="{{ asset('assets/img/plane-shape2.png') }}" alt="img">
                    </div>
                    <div class="container">
                        <div class="feature-wrapper">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="feature-content">
                                        <div class="section-title">
                                            <span class="sub-title wow fadeInUp">
                                                Are you ready to travel?
                                            </span>
                                            <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                                                World Leading Online Tour Booking Platform
                                            </h2>
                                        </div>
                                        <p class="wow fadeInUp wow" data-wow-delay=".3s">
                                            Discover unique adventure packages and personalized travel experiences tailored to your preferences.
                                        </p>
                                        <div class="feature-area">
                                            <div class="line-shape">
                                                <img src="{{ asset('assets/img/line-shape.png') }}" alt="img">
                                            </div>
                                            <div class="feature-items wow fadeInUp wow" data-wow-delay=".5s">
                                                <div class="feature-icon-item">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/img/icon/08.svg') }}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <h5>
                                                            Most Adventure <br>
                                                            Tour Ever
                                                        </h5>
                                                    </div>
                                                </div>
                                                <ul class="circle-icon">
                                                    <li>
                                                        <i class="fa-solid fa-badge-check"></i>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            Unique adventure tours available.
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="feature-items wow fadeInUp wow" data-wow-delay=".7s">
                                                <div class="feature-icon-item">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/img/icon/09.svg') }}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <h5>
                                                            Real Tour Starts <br>
                                                            from Here
                                                        </h5>
                                                    </div>
                                                </div>
                                                <ul class="circle-icon">
                                                    <li>
                                                        <i class="fa-solid fa-badge-check"></i>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            Personalized experiences for every traveler.
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="contact.html" class="theme-btn wow fadeInUp wow" data-wow-delay=".9s">
                                            Contact US<i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp wow" data-wow-delay=".3s">
                                    <div class="feature-image wow img-custom-anim-left">
                                        <img src="{{ asset('assets/img/man-image.png') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-detail wow img-custom-anim-left-2" id="detail-2" style="display:none;">
                <div class="travel-feature-section section-padding fix"
                    style="background-image: url('{{ asset('assets/img/travel-bg.jpg') }}') border-radius: 10px;">
                    <div class="shape-1 float-bob-y">
                        <img src="{{ asset('assets/img/plane-shape1.png') }}" alt="img">
                    </div>
                    <div class="shape-2 float-bob-x">
                        <img src="{{ asset('assets/img/plane-shape2.png') }}" alt="img">
                    </div>
                    <div class="container">
                        <div class="feature-wrapper">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="feature-content">
                                        <div class="section-title">
                                            <span class="sub-title wow fadeInUp">
                                                Are you ready to travel?
                                            </span>
                                            <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                                                World Leading Online Tour Booking Platform
                                            </h2>
                                        </div>
                                        <p class="wow fadeInUp wow" data-wow-delay=".3s">
                                            Discover unique adventure packages and personalized travel experiences tailored to your preferences.
                                        </p>
                                        <div class="feature-area">
                                            <div class="line-shape">
                                                <img src="{{ asset('assets/img/line-shape.png') }}" alt="img">
                                            </div>
                                            <div class="feature-items wow fadeInUp wow" data-wow-delay=".5s">
                                                <div class="feature-icon-item">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/img/icon/08.svg') }}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <h5>
                                                            Most Adventure <br>
                                                            Tour Ever
                                                        </h5>
                                                    </div>
                                                </div>
                                                <ul class="circle-icon">
                                                    <li>
                                                        <i class="fa-solid fa-badge-check"></i>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            Unique adventure tours available.
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="feature-items wow fadeInUp wow" data-wow-delay=".7s">
                                                <div class="feature-icon-item">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/img/icon/09.svg') }}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <h5>
                                                            Real Tour Starts <br>
                                                            from Here
                                                        </h5>
                                                    </div>
                                                </div>
                                                <ul class="circle-icon">
                                                    <li>
                                                        <i class="fa-solid fa-badge-check"></i>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            Personalized experiences for every traveler.
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="contact.html" class="theme-btn wow fadeInUp wow" data-wow-delay=".9s">
                                            Contact US<i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp wow" data-wow-delay=".3s">
                                    <div class="feature-image wow img-custom-anim-left">
                                        <img src="{{ asset('assets/img/man-image.png') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-detail wow img-custom-anim-left-2" id="detail-3" style="display:none;">
                <div class="travel-feature-section section-padding fix"
                    style="background-image: url('{{ asset('assets/img/travel-bg.jpg') }}') border-radius: 10px;">
                    <div class="shape-1 float-bob-y">
                        <img src="{{ asset('assets/img/plane-shape1.png') }}" alt="img">
                    </div>
                    <div class="shape-2 float-bob-x">
                        <img src="{{ asset('assets/img/plane-shape2.png') }}" alt="img">
                    </div>
                    <div class="container">
                        <div class="feature-wrapper">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="feature-content">
                                        <div class="section-title">
                                            <span class="sub-title wow fadeInUp">
                                                Are you ready to travel?
                                            </span>
                                            <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                                                World Leading Online Tour Booking Platform
                                            </h2>
                                        </div>
                                        <p class="wow fadeInUp wow" data-wow-delay=".3s">
                                            Discover unique adventure packages and personalized travel experiences tailored to your preferences.
                                        </p>
                                        <div class="feature-area">
                                            <div class="line-shape">
                                                <img src="{{ asset('assets/img/line-shape.png') }}" alt="img">
                                            </div>
                                            <div class="feature-items wow fadeInUp wow" data-wow-delay=".5s">
                                                <div class="feature-icon-item">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/img/icon/08.svg') }}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <h5>
                                                            Most Adventure <br>
                                                            Tour Ever
                                                        </h5>
                                                    </div>
                                                </div>
                                                <ul class="circle-icon">
                                                    <li>
                                                        <i class="fa-solid fa-badge-check"></i>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            Unique adventure tours available.
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="feature-items wow fadeInUp wow" data-wow-delay=".7s">
                                                <div class="feature-icon-item">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/img/icon/09.svg') }}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <h5>
                                                            Real Tour Starts <br>
                                                            from Here
                                                        </h5>
                                                    </div>
                                                </div>
                                                <ul class="circle-icon">
                                                    <li>
                                                        <i class="fa-solid fa-badge-check"></i>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            Personalized experiences for every traveler.
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="contact.html" class="theme-btn wow fadeInUp wow" data-wow-delay=".9s">
                                            Contact US<i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp wow" data-wow-delay=".3s">
                                    <div class="feature-image wow img-custom-anim-left">
                                        <img src="{{ asset('assets/img/man-image.png') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-detail wow img-custom-anim-left-2" id="detail-4" style="display:none;">
                <div class="travel-feature-section section-padding fix"
                    style="background-image: url('{{ asset('assets/img/travel-bg.jpg') }}') border-radius: 10px;">
                    <div class="shape-1 float-bob-y">
                        <img src="{{ asset('assets/img/plane-shape1.png') }}" alt="img">
                    </div>
                    <div class="shape-2 float-bob-x">
                        <img src="{{ asset('assets/img/plane-shape2.png') }}" alt="img">
                    </div>
                    <div class="container">
                        <div class="feature-wrapper">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="feature-content">
                                        <div class="section-title">
                                            <span class="sub-title wow fadeInUp">
                                                Are you ready to travel?
                                            </span>
                                            <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                                                World Leading Online Tour Booking Platform
                                            </h2>
                                        </div>
                                        <p class="wow fadeInUp wow" data-wow-delay=".3s">
                                            Discover unique adventure packages and personalized travel experiences tailored to your preferences.
                                        </p>
                                        <div class="feature-area">
                                            <div class="line-shape">
                                                <img src="{{ asset('assets/img/line-shape.png') }}" alt="img">
                                            </div>
                                            <div class="feature-items wow fadeInUp wow" data-wow-delay=".5s">
                                                <div class="feature-icon-item">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/img/icon/08.svg') }}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <h5>
                                                            Most Adventure <br>
                                                            Tour Ever
                                                        </h5>
                                                    </div>
                                                </div>
                                                <ul class="circle-icon">
                                                    <li>
                                                        <i class="fa-solid fa-badge-check"></i>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            Unique adventure tours available.
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="feature-items wow fadeInUp wow" data-wow-delay=".7s">
                                                <div class="feature-icon-item">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/img/icon/09.svg') }}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <h5>
                                                            Real Tour Starts <br>
                                                            from Here
                                                        </h5>
                                                    </div>
                                                </div>
                                                <ul class="circle-icon">
                                                    <li>
                                                        <i class="fa-solid fa-badge-check"></i>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            Personalized experiences for every traveler.
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="contact.html" class="theme-btn wow fadeInUp wow" data-wow-delay=".9s">
                                            Contact US<i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp wow" data-wow-delay=".3s">
                                    <div class="feature-image wow img-custom-anim-left">
                                        <img src="{{ asset('assets/img/man-image.png') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-detail wow img-custom-anim-left-2" id="detail-5" style="display:none;">
                <div class="travel-feature-section section-padding fix"
                    style="background-image: url('{{ asset('assets/img/travel-bg.jpg') }}') border-radius: 10px;">
                    <div class="shape-1 float-bob-y">
                        <img src="{{ asset('assets/img/plane-shape1.png') }}" alt="img">
                    </div>
                    <div class="shape-2 float-bob-x">
                        <img src="{{ asset('assets/img/plane-shape2.png') }}" alt="img">
                    </div>
                    <div class="container">
                        <div class="feature-wrapper">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="feature-content">
                                        <div class="section-title">
                                            <span class="sub-title wow fadeInUp">
                                                Are you ready to travel?
                                            </span>
                                            <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                                                World Leading Online Tour Booking Platform
                                            </h2>
                                        </div>
                                        <p class="wow fadeInUp wow" data-wow-delay=".3s">
                                            Discover unique adventure packages and personalized travel experiences tailored to your preferences.
                                        </p>
                                        <div class="feature-area">
                                            <div class="line-shape">
                                                <img src="{{ asset('assets/img/line-shape.png') }}" alt="img">
                                            </div>
                                            <div class="feature-items wow fadeInUp wow" data-wow-delay=".5s">
                                                <div class="feature-icon-item">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/img/icon/08.svg') }}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <h5>
                                                            Most Adventure <br>
                                                            Tour Ever
                                                        </h5>
                                                    </div>
                                                </div>
                                                <ul class="circle-icon">
                                                    <li>
                                                        <i class="fa-solid fa-badge-check"></i>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            Unique adventure tours available.
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="feature-items wow fadeInUp wow" data-wow-delay=".7s">
                                                <div class="feature-icon-item">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/img/icon/09.svg') }}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <h5>
                                                            Real Tour Starts <br>
                                                            from Here
                                                        </h5>
                                                    </div>
                                                </div>
                                                <ul class="circle-icon">
                                                    <li>
                                                        <i class="fa-solid fa-badge-check"></i>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            Personalized experiences for every traveler.
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="contact.html" class="theme-btn wow fadeInUp wow" data-wow-delay=".9s">
                                            Contact US<i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp wow" data-wow-delay=".3s">
                                    <div class="feature-image wow img-custom-anim-left">
                                        <img src="{{ asset('assets/img/man-image.png') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-detail wow img-custom-anim-left-2" id="detail-6" style="display:none;">
                <div class="travel-feature-section section-padding fix"
                    style="background-image: url('{{ asset('assets/img/travel-bg.jpg') }}') border-radius: 10px;">
                    <div class="shape-1 float-bob-y">
                        <img src="{{ asset('assets/img/plane-shape1.png') }}" alt="img">
                    </div>
                    <div class="shape-2 float-bob-x">
                        <img src="{{ asset('assets/img/plane-shape2.png') }}" alt="img">
                    </div>
                    <div class="container">
                        <div class="feature-wrapper">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="feature-content">
                                        <div class="section-title">
                                            <span class="sub-title wow fadeInUp">
                                                Are you ready to travel?
                                            </span>
                                            <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                                                World Leading Online Tour Booking Platform
                                            </h2>
                                        </div>
                                        <p class="wow fadeInUp wow" data-wow-delay=".3s">
                                            Discover unique adventure packages and personalized travel experiences tailored to your preferences.
                                        </p>
                                        <div class="feature-area">
                                            <div class="line-shape">
                                                <img src="{{ asset('assets/img/line-shape.png') }}" alt="img">
                                            </div>
                                            <div class="feature-items wow fadeInUp wow" data-wow-delay=".5s">
                                                <div class="feature-icon-item">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/img/icon/08.svg') }}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <h5>
                                                            Most Adventure <br>
                                                            Tour Ever
                                                        </h5>
                                                    </div>
                                                </div>
                                                <ul class="circle-icon">
                                                    <li>
                                                        <i class="fa-solid fa-badge-check"></i>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            Unique adventure tours available.
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="feature-items wow fadeInUp wow" data-wow-delay=".7s">
                                                <div class="feature-icon-item">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/img/icon/09.svg') }}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <h5>
                                                            Real Tour Starts <br>
                                                            from Here
                                                        </h5>
                                                    </div>
                                                </div>
                                                <ul class="circle-icon">
                                                    <li>
                                                        <i class="fa-solid fa-badge-check"></i>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            Personalized experiences for every traveler.
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="contact.html" class="theme-btn wow fadeInUp wow" data-wow-delay=".9s">
                                            Contact US<i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp wow" data-wow-delay=".3s">
                                    <div class="feature-image wow img-custom-anim-left">
                                        <img src="{{ asset('assets/img/man-image.png') }}" alt="img">
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
<section class="cta-section section-padding pt-0">
    <div class="mobile-shape">
        <img src="{{ asset('assets/img/mobile.png') }}" alt="img">
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".3s">
                <div class="cta-items">
                    <div class="cta-text">
                        <h2>Expédition rapide</h2>
                        <p>
                           Envoyez vos colis à l’international <br>
                            en toute sécurité et rapidement.
                        </p>
                    </div>
                    <a href="tour-details.html" class="theme-btn">Envoyer un colis <i
                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                    <div class="cta-image">
                        <img src="{{ asset('assets/img/bag-shape.png') }}" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".5s">
                <div class="cta-items style-2">
                    <div class="cta-text">
                        <h2>Offre spéciale</h2>
                        <p>
                           Profitez de prix exceptionnels sur <br>
                            vos billets d’avion dès maintenant.
                        </p>
                    </div>
                    <a href="tour-details.html" class="theme-btn">Réserver un vol <i
                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                    <div class="cta-image">
                        <img src="{{ asset('assets/img/plane-shape.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular-destination Section Start -->
<section class="popular-destination-section section-padding pt-0" id="destination">
    <div class="car-shape float-bob-x">
        <img src="{{ asset('assets/img/destination/car.png') }}" alt="img">
    </div>
    <div class="container">
        <div class="section-title-area justify-content-between">
            <div class="section-title">
                <span class="sub-title wow fadeInUp">
                    Destinations incontournables
                </span>
                <h2 class="wow fadeInUp wow" data-wow-delay=".3s">
                    Nos destinations populaires
                </h2>
            </div>
            {{-- <a href="tour-details.html" class="theme-btn wow fadeInUp wow" data-wow-delay=".5s">Voir Plus<i
                    class="fa-sharp fa-regular fa-arrow-right"></i></a> --}}
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".2s">
                <div class="destination-card-items">
                    <div class="destination-image">
                        <img src="{{ asset('assets/img/destination/01.jpg') }}" alt="img">
                        <div class="heart-icon">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                    <div class="destination-content">
                        <ul class="meta">
                            <li>
                                <i class="fa-thin fa-location-dot"></i>
                                Bénin
                            </li>
                            <li class="rating">
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>4.7</p>
                            </li>
                        </ul>
                        <h5>
                            <a href="tour-details.html">
                                Bénin Tour
                            </a>
                        </h5>
                        <ul class="info">
                            <li>
                                <i class="fa-regular fa-clock"></i>
                                10 Jours
                            </li>
                            <li>
                                <i class="fa-thin fa-users"></i>
                                50+
                            </li>
                        </ul>
                        <div class="price">
                            <h6>$59.00<span>/Par jour</span></h6>
                            <a href="tour-details.html" class="theme-btn style-2">Réserver maintenant<i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".4s">
                <div class="destination-card-items">
                    <div class="destination-image">
                        <img src="{{ asset('assets/img/destination/02.jpg') }}" alt="img">
                        <div class="heart-icon">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                    <div class="destination-content">
                        <ul class="meta">
                            <li>
                                <i class="fa-thin fa-location-dot"></i>
                                Caraïbes
                            </li>
                            <li class="rating">
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>4.7</p>
                            </li>
                        </ul>
                        <h5>
                            <a href="tour-details.html">
                                Craïbes Tour
                            </a>
                        </h5>
                        <ul class="info">
                            <li>
                                <i class="fa-regular fa-clock"></i>
                                10 Jours
                            </li>
                            <li>
                                <i class="fa-thin fa-users"></i>
                                50+
                            </li>
                        </ul>
                        <div class="price">
                            <h6>$59.00<span>/Par jour</span></h6>
                            <a href="tour-details.html" class="theme-btn style-2">Réserver maintenant<i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".6s">
                <div class="destination-card-items">
                    <div class="destination-image">
                        <img src="{{ asset('assets/img/destination/03.jpg') }}" alt="img">
                        <div class="heart-icon">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                    <div class="destination-content">
                        <ul class="meta">
                            <li>
                                <i class="fa-thin fa-location-dot"></i>
                                Brésil
                            </li>
                            <li class="rating">
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>4.7</p>
                            </li>
                        </ul>
                        <h5>
                            <a href="tour-details.html">
                                Brésil Tour
                            </a>
                        </h5>
                        <ul class="info">
                            <li>
                                <i class="fa-regular fa-clock"></i>
                                10 Jours
                            </li>
                            <li>
                                <i class="fa-thin fa-users"></i>
                                50+
                            </li>
                        </ul>
                        <div class="price">
                            <h6>$59.00<span>/Par jour</span></h6>
                            <a href="tour-details.html" class="theme-btn style-2">Réserver maintenant<i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".8s">
                <div class="destination-card-items">
                    <div class="destination-image">
                        <img src="{{ asset('assets/img/destination/04.jpg') }}" alt="img">
                        <div class="heart-icon">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                    <div class="destination-content">
                        <ul class="meta">
                            <li>
                                <i class="fa-thin fa-location-dot"></i>
                                Bénin
                            </li>
                            <li class="rating">
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>4.7</p>
                            </li>
                        </ul>
                        <h5>
                            <a href="tour-details.html">
                                Vodoun Days
                            </a>
                        </h5>
                        <ul class="info">
                            <li>
                                <i class="fa-regular fa-clock"></i>
                                5 Jours
                            </li>
                            <li>
                                <i class="fa-thin fa-users"></i>
                                50+
                            </li>
                        </ul>
                        <div class="price">
                            <h6>$59.00<span>/Par jour</span></h6>
                            <a href="tour-details.html" class="theme-btn style-2">Réserver maintenant<i
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
    style="background-image: url('{{ asset('assets/img/offer/bg.jpg') }}');">
    <div class="deals-offer-wrapper">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="price-items">
                    {{-- <div class="price-image wow fadeInUp wow" data-wow-delay=".2s">
                        <img src="{{ asset('assets/img/offer/price.png') }}" alt="img">
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
                            Offres & Promotions
                        </span>
                        <h2 class="text-white wow fadeInUp wow" data-wow-delay=".3s">
                            Offres de dernière minute pour vos voyages et envois
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
                                        <img src="{{ asset('assets/img/offer/offre1.jpg') }}" alt="img">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="offer-items">
                                    <div class="offer-image">
                                        <img src="{{ asset('assets/img/offer/offre2.jpg') }}" alt="img">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="offer-items">
                                    <div class="offer-image">
                                        <img src="{{ asset('assets/img/offer/offre1.jpg') }}" alt="img">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="offer-items">
                                    <div class="offer-image">
                                        <img src="{{ asset('assets/img/offer/offre2.jpg') }}" alt="img">
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="offer-items">
                                    <div class="offer-image">
                                        <img src="{{ asset('assets/img/offer/offre1.jpg') }}" alt="img">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="offer-items">
                                    <div class="offer-image">
                                        <img src="{{ asset('assets/img/offer/offre2.jpg') }}" alt="img">
                                        
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
        <img src="{{ asset('assets/img/testimonial/bag-shape.png') }}" alt="img">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp">
                Testimonial
            </span>
            <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                Témoignages de nos clients satisfaits
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
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <p>
                                Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique
                                nisl at pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet
                                accumsan.
                            </p>
                            <div class="client-info-items">
                                <div class="client-info">
                                    <div class="client-image">
                                        <img src="{{ asset('assets/img/testimonial/client-1.png') }}" alt="img">
                                    </div>
                                    <div class="text">
                                        <h4>Kristin Watson</h4>
                                        <p>Web Designer</p>
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
                                Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique
                                nisl at pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet
                                accumsan.
                            </p>
                            <div class="client-info-items">
                                <div class="client-info">
                                    <div class="client-image">
                                        <img src="{{ asset('assets/img/testimonial/client-2.png') }}" alt="img">
                                    </div>
                                    <div class="text">
                                        <h4>Wade Warren</h4>
                                        <p>President of Sales</p>
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
                                Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique
                                nisl at pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet
                                accumsan.
                            </p>
                            <div class="client-info-items">
                                <div class="client-info">
                                    <div class="client-image">
                                        <img src="{{ asset('assets/img/testimonial/client-3.png') }}" alt="img">
                                    </div>
                                    <div class="text">
                                        <h4>Brooklyn Simmons</h4>
                                        <p>President of Sales</p>
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
                    <button class="array-prevs">Précédent</button>
                    <button class="array-nexts">Suivant</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Choose-us-section Start -->
<section class="choose-us-section section-padding bg-cover fix"
    style="background-image: url('{{ asset('assets/img/choose-us-bg-2.jpg') }}')">
    <div class="container">
        <div class="choose-us-wrapper">
            <div class="row g-4 align-items-center">
                <div class="col-xl-7 col-lg-6">
                    <div class="choose-us-content">
                        <div class="section-title">
                            <span class="sub-title wow fadeInUp">
                                Pourquoi nous choisir ?
                            </span>
                            <h2 class="wow fadeInUp wow" data-wow-delay=".3s">
                                Obtenez la meilleure expérience de voyage
                            </h2>
                        </div>
                        <p class="wow fadeInUp wow" data-wow-delay=".3s">
                            Nous offrons des services de voyage, d’expédition et d’interprétariat fiables, rapides et personnalisés, pour que chaque expérience soit réussie.
                        </p>
                        <div class="choose-us-area">
                            <div class="line-shape">
                                <img src="{{ asset('assets/img/line-shape2.png') }}" alt="img">
                            </div>
                            <div class="choose-us-items wow fadeInUp wow" data-wow-delay=".3s">
                                <h3 class="number">
                                    01
                                </h3>
                                <div class="content">
                                    <h4>
                                        Réservation de vols
                                    </h4>
                                    <p>
                                        Achetez vos billets d’avion rapidement et en toute sécurité.
                                    </p>
                                </div>
                            </div>
                            <div class="choose-us-items wow fadeInUp wow" data-wow-delay=".5s">
                                <h3 class="number">
                                    02
                                </h3>
                                <div class="content">
                                    <h4>
                                        Services d’interprétariat
                                    </h4>
                                    <p>
                                        Facilitez vos échanges internationaux avec nos experts linguistiques.
                                    </p>
                                </div>
                            </div>
                            <div class="choose-us-items wow fadeInUp wow" data-wow-delay=".7s">
                                <h3 class="number">
                                    03
                                </h3>
                                <div class="content">
                                    <h4>
                                        Expédition de colis
                                    </h4>
                                    <p>
                                       Envoyez vos colis à l’international rapidement et en toute sécurité.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 wow fadeInUp wow" data-wow-delay=".3s">
                    <div class="choose-us-thumb">
                        <img src="{{ asset('assets/img/choose-us-bg.png') }}" alt="img" class="wow img-custom-anim-left">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- watch-video-section Start -->
<section class="watch-video-section section-padding fix">
    <div class="bg-shape">
        <img src="{{ asset('assets/img/map-bg.png') }}" alt="img">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp">
                Découvrez-nous
            </span>
            <h2 class="wow fadeInUp wow" data-wow-delay=".3s">
                 Des expériences <br>inoubliables
            </h2>
        </div>
        <div class="video-wrapper">
            <div class="watch-button">
                <a href="contact.html" class="theme-btn wow fadeInUp wow" data-wow-delay=".5s">Contactez-nous<i
                        class="fa-sharp fa-regular fa-arrow-right"></i></a>
                <a href="tour-details.html" class="theme-btn style-2 wow fadeInUp wow" data-wow-delay=".7s">Réserver maintenant
                    <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
            </div>
            <div class="video-image bg-cover" style="background-image: url('{{ asset('assets/img/video-bg.jpg') }}');">
                <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn video-popup">
                    <i class="fa-duotone fa-play"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Instagram Banner Section Start -->
<div class="instagram-banner fix section-padding bg-cover"
    style="background-image: url('{{ asset('assets/img/instagram/bg.jpg') }}');">
    <div class="instagram-wrapper">
        <h2 class="text-center wow fadeInUp" data-wow-delay=".3s">Follow Instagram</h2>
        <div class="swiper instagram-banner-slider">
            <div class="swiper-wrapper">
    
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img src="{{ asset('assets/img/instagram/insta2.jpg') }}" alt="insta-img">
                            <a href="index.html" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img src="{{ asset('assets/img/instagram/insta1.jpg') }}" alt="insta-img">
                            <a href="index.html" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img src="{{ asset('assets/img/instagram/insta2.jpg') }}" alt="insta-img">
                            <a href="index.html" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img src="{{ asset('assets/img/instagram/insta1.jpg') }}" alt="insta-img">
                            <a href="index.html" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img src="{{ asset('assets/img/instagram/insta2.jpg') }}" alt="insta-img">
                            <a href="index.html" class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-banner-items">
                        <div class="banner-image">
                            <img src="{{ asset('assets/img/instagram/insta1.jpg') }}" alt="insta-img">
                            <a href="index.html" class="icon">
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
        $('.service-card').on('click', function() {
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
