<!-- Footer Section Start -->
<footer class="footer-section fix bg-cover" style="background-image: url('{{ asset('assets/img/footer/footer-bg.webp') }}');">
    <div class="container">
        <div class="footer-widget-wrapper-new">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-8 col-sm-6 wow fadeInUp wow" data-wow-delay=".2s">
                    <div class="single-widget-items text-center">
                        <div class="widget-head">
                            <a href="{{ $homeUrl }}">
                                <img loading="lazy" decoding="async" src="{{ asset('assets/img/logo/logo_principal-1.png') }}" alt="{{ __('Logo Charm Travel - Charm Agence & Business') }}">
                            </a>
                        </div>
                        <div class="footer-content">
                            <h3>{{ __('Abonnez-vous à notre newsletter') }}</h3>
                            <p>{{ __('Recevez nos dernières offres et nouveautés directement dans votre boîte mail.') }}</p>
                            <div class="footer-input">
                                <input type="email" id="email2" placeholder="{{ __('Votre adresse e-mail') }}">
                                <button class="newsletter-btn theme-btn" type="submit">
                                    {{ __('S\'abonner') }} <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                </button>
                            </div>
                           <div class="social-icon d-flex align-items-center justify-content-center">
                            <a href="https://www.facebook.com/CharmTravelsAgence&Business" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/charm_travels_" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.tiktok.com/@charm_travels" target="_blank">
                                <i class="fab fa-tiktok"></i>
                            </a>
                        </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 ps-lg-5 wow fadeInUp wow" data-wow-delay=".4s">
                    <div class="single-widget-items">
                        <div class="widget-head">
                            <h4>{{ __('Liens rapides') }}</h4>
                        </div>
                        <ul class="list-items">
                            <li>
                                <a href="{{ $homeUrl }}">
                                    {{ __('Accueil') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ $homeUrl }}#about">
                                    {{ __('À propos') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ $homeUrl }}#service">
                                    {{ __('Services') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ $homeUrl }}#destination">
                                    {{ __('Destinations') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ $homeUrl }}#testimonial">
                                    {{ __('Témoignages') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 ps-lg-5 wow fadeInUp wow" data-wow-delay=".6s">
                    <div class="single-widget-items">
                        <div class="widget-head">
                            <h4>{{ __('Services') }}</h4>
                        </div>
                        <ul class="list-items">
                            <li>
                                <a href="javascript:void(0)" class="service-btn" data-service="3">
                                    CHARM TRAVELS
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="service-btn" data-service="4">
                                    CHARM CONNECT
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="service-btn" data-service="1">
                                    CHARM INTERVOX
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="service-btn" data-service="2">
                                    BENIN RAIZ
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 ps-xl-5 wow fadeInUp wow" data-wow-delay=".6s">
                    <div class="single-widget-items">
                        <div class="widget-head">
                            <h4>{{ __('Contactez -nous') }}</h4>
                        </div>
                        <div class="contact-info">
                            <div class="contact-items">
                                <div class="icon">
                                    <i class="fa-regular fa-location-dot"></i>
                                </div>
                                <div class="content">
                                    <h6>Fidjrossè, Carrefour Adjaha, Au dessus de la Pharmacie Sainte Victoire (1er étage), Salle 3.</h6>
                                </div>
                            </div>
                            {{-- Horaires : garder identiques à openingHoursSpecification (layouts/app.blade.php) et à la fiche Google Business Profile --}}
                            <div class="contact-items">
                                <div class="icon">
                                    <i class="fa-regular fa-clock"></i>
                                </div>
                                <div class="content">
                                    <h6>{{ __('Lun – Ven : 9h – 18h') }}</h6>
                                    <h6>{{ __('Sam : 9h – 13h') }}</h6>
                                </div>
                            </div>
                            <div class="contact-items">
                                <div class="icon">
                                    <i class="fa-regular fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="mailto:info@charmbusiness.com">info@charmbusiness.com</a>
                                    </h6>
                                    <h6>
                                        <a href="mailto:charmtravelsagence@gmail.com">charmtravelsagence@gmail.com</a>
                                    </h6>
                                </div>
                            </div>
                            <div class="contact-items">
                                <div class="icon">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="https://wa.me/2290169292980" target="_blank">
                                            (+229) 0169 29 29 80
                                        </a>
                                    </h6>
                                    <h6>
                                        <a href="https://wa.me/558796231353" target="_blank">
                                            +55 (87) 9623-1353
                                        </a>
                                    </h6>
                                </div>
                            </div>
                            <div class="contact-items">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="tel:+2290156223130">
                                            (+229) 0156 22 31 30
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-wrapper">
                <p class="wow fadeInUp" data-wow-delay=".3s">
                    {{ __('Copyright ©') }} <span>CHARM AGENCE & BUSINESS,</span> {{ __('Tous droits réservés.') }}
                </p>
                {{-- <ul class="bottom-list wow fadeInUp" data-wow-delay=".5s">
                    <li>Terms of use</li>
                    <li>Privacy Environmental Policy</li>
                </ul> --}}
            </div>
        </div>
    </div>
</footer>
