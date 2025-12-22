<!-- Preloader Start -->
<div id="preloader" class="preloader">
    <div class="animation-preloader">
        <div class="spinner">
        </div>
        <div class="txt-loading">
            <span data-text-preloader="C" class="letters-loading">
                C
            </span>
            <span data-text-preloader="H" class="letters-loading">
                H
            </span>
            <span data-text-preloader="A" class="letters-loading">
                A
            </span>
            <span data-text-preloader="R" class="letters-loading">
                R
            </span>
            <span data-text-preloader="M" class="letters-loading">
                M
            </span>
            <span data-text-preloader="M" class="letters-loading">
                M
            </span>
            <span data-text-preloader=" " class="letters-loading">
                &nbsp;
            </span>
            <span data-text-preloader="A" class="letters-loading">
                A
            </span>
            <span data-text-preloader="G" class="letters-loading">
                G
            </span>
            <span data-text-preloader="E" class="letters-loading">
                E
            </span>
            <span data-text-preloader="N" class="letters-loading">
                N
            </span>
            <span data-text-preloader="C" class="letters-loading">
                C
            </span>
            <span data-text-preloader="E" class="letters-loading">
                E
            </span>
            <span data-text-preloader=" " class="letters-loading">
                &nbsp;
            </span>
            <span data-text-preloader="&" class="letters-loading">
                &
            </span>
            <span data-text-preloader=" " class="letters-loading">
                &nbsp;
            </span>
            <span data-text-preloader="B" class="letters-loading">
                B
            </span>
            <span data-text-preloader="U" class="letters-loading">
                U
            </span>
            <span data-text-preloader="S" class="letters-loading">
                S
            </span>
            <span data-text-preloader="I" class="letters-loading">
                I
            </span>
            <span data-text-preloader="N" class="letters-loading">
                N
            </span>
            <span data-text-preloader="E" class="letters-loading">
                E
            </span>
            <span data-text-preloader="S" class="letters-loading">
                S
            </span>
            <span data-text-preloader="S" class="letters-loading">
                S
            </span>

        </div>
        <p class="text-center">Loading</p>
    </div>
    <div class="loader">
        <div class="row">
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
        </div>
    </div>
</div>

<!-- Back To Top Start -->
<button id="back-top" class="back-to-top">
    <i class="fa-regular fa-arrow-up"></i>
</button>

<!--<< Mouse Cursor Start >>-->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>

<!-- Offcanvas Area Start -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/img/logo/logo_principal-1.png') }}" alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <p class="text d-none d-xl-block">
                    Nous concevons des expériences de voyage inoubliables en alliant confort, découverte et aventure.
                    Grâce à des destinations soigneusement sélectionnées et des services personnalisés, nous transformons chaque voyage en un souvenir unique.
                </p>
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">
                    <h4>Contactez -nous</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Carrefour Adjaha, Cotonou</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:info@charmbusiness.com"><span
                                    class="mailto:info@example.com">info@charmbusiness.com</span></a>
                            </div>
                        </li>
                        {{-- <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                            </div>
                        </li> --}}
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text d-flex flex-column">
                                <a href="https://wa.me/5587996351488" target="_blank">+55 879 963 514 88</a>
                                <a href="https://wa.me/2290169292980" target="_blank">+229 01 692 929 80</a>
                            </div>
                        </li>
                    </ul>
                    <div class="header-button mt-4">
                        <a href="{{ route('home') }}" class="theme-btn"> Nous contacter <i
                                class="fa-sharp fa-regular fa-arrow-right"></i></a>
                    </div>
                    <div class="social-icon d-flex align-items-center">
                        <a href="https://www.facebook.com/CharmTravelsAgence&Business" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        {{-- <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a> --}}
                        <a href="https://www.instagram.com/charm_travels_" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

<!-- Header Section Start -->
<header id="header-sticky" class="header-1 header-3">
    <div class="container-fluid">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="logo">
                    <a href="{{ route('home') }}" class="header-logo">
                        <img src="{{ asset('assets/img/logo/logo_principal-1.png') }}" alt="logo-img">
                    </a>
                    <a href="{{ route('home') }}" class="header-logo-2">
                        <img src="{{ asset('assets/img/logo/logo_principal-1.png') }}" alt="logo-img">
                    </a>
                </div>
                <div class="mean__menu-wrapper">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li class="active menu-thumb">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="active d-xl-none">
                                    <a href="{{ route('home') }}">Accueil</a>
                                </li>
                                <li>
                                    <a href="#about">A propos</a>
                                </li>
                                <li>
                                    <a href="#service">Services</a>
                                </li>
                                <li>
                                    <a href="#destination">Destination</a>
                                </li>
                                <li>
                                    <a href="#testimonial">Témoignages</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center">
                    <a href="{{ route('home') }}" class="theme-btn"> Nous contacter <i
                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                    <div class="header__hamburger d-xl-none my-auto">
                        <div class="sidebar__toggle">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Search Area Start -->
<div class="search-wrap">
    <div class="search-inner">
        <i class="fas fa-times search-close" id="search-close"></i>
        <div class="search-cell">
            <form method="get">
                <div class="search-field-holder">
                    <input type="search" class="main-search-input" placeholder="Search...">
                </div>
            </form>
        </div>
    </div>
</div>
