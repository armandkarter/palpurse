<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta description pour le SEO -->
    <meta name="description" content="{{ __('messages.meta.title') }}">

    <meta property="og:title" content="{{ __('messages.meta.title') }}" />
    <meta property="og:description" content="{{ __('messages.meta.description') }}" />
    <meta property="og:image" content="{{ asset('images/bg_2.jpg') }}" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="{{ app()->getLocale() }}" />


    <!-- Favicons & Fonts -->
    <link rel="icon" href="{{ asset('images/fgvservizio1.png') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Bootstrap & Icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <style>
    body {
        margin: 0;
        padding: 0;
    }

    .navbar {
        top: 0;
        margin-top: 0;
        padding-top: 0;
        z-index: 1030;
    }


</style>

    @include('components.hreflang')
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg ftco-navbar-light fixed-top">
        <div class="container-xl">
            <a class="navbar-brand ml-2" href="{{ route('home', ['locale' => app()->getLocale()]) }}"
                data-aos="fade-right" data-aos-duration="2000">
                {{-- FGVSER<small>VIZIO</small> --}}
                <img style="width: auto; height:100px; " src="{{ asset('images/fgvservizio1.png') }}"
                    alt="FGVSERVIZIO">
            </a>

            <button data-aos="zoom-in" data-aos-duration="2000" class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                style="margin-right:15px; font-size:28px;">
                <span class="fa fa-bars"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is(app()->getLocale()) ? 'active' : '' }}"
                            href="{{ route('home', ['locale' => app()->getLocale()]) }}">
                            {{ __('messages.nav.home') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is(app()->getLocale() . '/services') ? 'active' : '' }}"
                            href="{{ route('services', ['locale' => app()->getLocale()]) }}">
                            {{ __('messages.nav.services') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is(app()->getLocale() . '/application') ? 'active' : '' }}"
                            href="{{ route('application', ['locale' => app()->getLocale()]) }}">
                            {{ __('messages.nav.application') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is(app()->getLocale() . '/contact') ? 'active' : '' }}"
                            href="{{ route('contact', ['locale' => app()->getLocale()]) }}">
                            {{ __('messages.nav.contact') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="ftco-footer img" style="background-image: url({{ asset('images/footer.jpg') }});">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="row mb-5 justify-content-between">
                <!-- Col 1 -->
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget" data-aos="zoom-in" data-aos-duration="2000">
                        <h2 class="ftco-heading-2 logo d-flex">
                            <a class="navbar-brand" href="{{ route('home', ['locale' => app()->getLocale()]) }}">
                                <img src="{{ asset('images/fgvservizio1.png') }}" alt="FGVSERVIZIO">
                            </a>
                        </h2>
                        <p>{{ __('messages.footer.description') }}</p>
                    </div>
                </div>

                <!-- Col 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="ftco-footer-widget mb-4" data-aos="fade-up" data-aos-duration="2000">
                        <h2 class="ftco-heading-2">{{ __('messages.footer.services') }}</h2>
                        <div class="d-md-flex">
                            <ul class="list-unstyled w-100">
                                <li><a href="{{ route('services', ['locale' => app()->getLocale()]) }}">
                                        <span
                                            class="ion ion-ios-arrow-round-forward me-2"></span>{{ __('messages.footer.service_mortgage') }}
                                    </a></li>
                                <li><a href="{{ route('services', ['locale' => app()->getLocale()]) }}">
                                        <span
                                            class="ion ion-ios-arrow-round-forward me-2"></span>{{ __('messages.footer.service_business') }}
                                    </a></li>
                                <li><a href="{{ route('services', ['locale' => app()->getLocale()]) }}">
                                        <span
                                            class="ion ion-ios-arrow-round-forward me-2"></span>{{ __('messages.footer.service_car') }}
                                    </a></li>
                                <li><a href="{{ route('services', ['locale' => app()->getLocale()]) }}">
                                        <span
                                            class="ion ion-ios-arrow-round-forward me-2"></span>{{ __('messages.footer.service_personal') }}
                                    </a></li>
                                <li><a href="{{ route('services', ['locale' => app()->getLocale()]) }}">
                                        <span
                                            class="ion ion-ios-arrow-round-forward me-2"></span>{{ __('messages.footer.service_student') }}
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Col 3 -->
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4" data-aos="zoom-in" data-aos-duration="2000">
                        <h2 class="ftco-heading-2">{{ __('messages.footer.useful_links') }}</h2>

                        <div class="block-21 mb-3 d-flex">
                            <div class="text">
                                <h3 class="heading"><a
                                        href="{{ route('services', ['locale' => app()->getLocale()]) }}">{{ __('messages.footer.our_services') }}</a>
                                </h3>
                            </div>
                        </div>
                        <div class="block-21 mb-3 d-flex">
                            <div class="text">
                                <h3 class="heading"><a
                                        href="{{ route('application', ['locale' => app()->getLocale()]) }}">{{ __('messages.footer.request_loan') }}</a>
                                </h3>
                            </div>
                        </div>
                        <div class="block-21 d-flex">
                            <div class="text">
                                <h3 class="heading"><a
                                        href="{{ route('privacy_policy', ['locale' => app()->getLocale()]) }}">{{ __('messages.footer.privacy_policy') }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Col 4 -->
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4" data-aos="fade-down" data-aos-duration="2000">
                        <h2 class="ftco-heading-2">{{ __('messages.footer.addresses') }}</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map-marker-alt"></span><span
                                        class="text">{{ __('messages.header.address') }}</span></li>
                                <li><a href="https://wa.me/443330570194"><span
                                            class="icon fa fa-phone"></span>+443330570194</a></li>
                                <li>
                                    <a href="mailto:{{ __('messages.email.admin') }}"><span
                                            class="icon fa fa-envelope"></span>{{ __('messages.email.admin') }}</a><br>
                                    <a href="mailto:{{ __('messages.email.info') }}"><span
                                            class="icon fa fa-envelope"></span>{{ __('messages.email.info') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid px-0 py-3 bg-darken">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="mb-0" style="font-size: 14px;">
                            {{ __('messages.footer.copyright') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Boutons flottants -->
    <a href="mailto:{{ __('messages.email.admin') }}" target="_blank" class="mail-float">
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Mail_%28iOS%29.svg" alt="Mail" />
    </a>

    <a href="https://wa.me/443330570194" target="_blank" class="whatsapp-float">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
    </a>

    <style>
        .mail-float,
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            text-align: center;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.2s;
        }

        .mail-float:hover,
        .whatsapp-float:hover {
            transform: scale(1.1);
        }

        .mail-float {
            bottom: 110px;
            left: 8px;
            background-color: #0072c6;
        }

        .whatsapp-float {
            bottom: 20px;
            left: 8px;
            background-color: #25d366;
        }

        .mail-float img,
        .whatsapp-float img {
            width: 35px;
            height: 35px;
        }
    </style>

    <!-- Scripts -->
     
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17662364992">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-17662364992');
</script>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/glightbox.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/datepicker.min.js') }}"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>
