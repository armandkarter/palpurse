@extends('base')

@section('title', __('messages.site.title'))

@section('content')
<div class="overflow-hidden">

    <section class="slider-hero">
        <div class="overlay"></div>
        <div class="hero-slider">
            <div class="item">
                <div class="work">
                    <div class="img img2 d-flex align-items-center js-fullheight"
                        style="background-image: url(images/home.jpg);">
                        <div class="container-xl">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-7">
                                    <div class="text text-center mt-lg-5">
                                        <h1 class="mb-4">{{ __('messages.hero.title1') }}</h1>
                                        <p class="mb-4">{{ __('messages.hero.text1') }}
                                        </p>
                                        <p><a href="{{ route('application', ['locale' => app()->getLocale()]) }}" class="btn btn-white p-4 py-3">{{ __('messages.hero.button') }} <svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-arrow-return-right"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5" />
                                                </svg><span class="ion-ios-arrow-round-forward"></span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="work">
                    <div class="img d-flex align-items-center justify-content-center js-fullheight"
                        style="background-image: url(images/bg_2.jpg);">
                        <div class="container-xl">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-7">
                                    <div class="text text-center mt-lg-5">
                                        <h1 class="mb-4">{{ __('messages.hero.title2') }}</h1>
                                        <p class="mb-4">{{ __('messages.hero.text2') }}
                                        </p>
                                        <p><a href="{{ route('application', ['locale' => app()->getLocale()]) }}" class="btn btn-white p-4 py-3">{{ __('messages.hero.button') }} <svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-arrow-return-right"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5" />
                                                </svg><span class="ion-ios-arrow-round-forward"></span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container-xl">
            <div class="row g-lg-5">
                <div class="col-lg-6 order-lg-last heading-section d-flex align-items-center" data-aos="fade-up"
                    data-aos-delay="200" data-aos-duration="1000">
                    <div class="mt-0 my-lg-4 py-5 ">
                        <span class="subheading">{{ __('messages.about.welcome') }}</span>
                        <h2 class="mb-4 ">{{ __('messages.about.title') }}</h2>
                        <p class="">{{ __('messages.about.text1') }}
                        </p>
                        <p>{{ __('messages.about.text2') }}</p>
                        <p class="mt-4"><a href="{{ route('privacy_policy', ['locale' => app()->getLocale()]) }}" class="btn btn-primary py-3 px-4">{{ __('messages.about.button') }}</a></p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch services-wrap">
                            <div class="services border border-info">
                                <div class="icon"><span class="flaticon-accountant"></span></div>
                                <div class="text">
                                    <h2>{{ __('messages.services.leader') }}</h2>
                                    <p class="mb-0">
                                        {{ __('messages.services.leader_text') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch services-wrap">
                            <div class="services active">
                                <div class="icon"><span class="flaticon-research"></span></div>
                                <div class="text">
                                    <h2>{{ __('messages.services.award') }}</h2>
                                    <p class="mb-0">
                                        {{ __('messages.services.award_text') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex  align-items-stretch services-wrap">
                            <div class="services  border border-info">
                                <div class="icon"><span class="flaticon-recession"></span></div>
                                <div class="text">
                                    <h2>{{ __('messages.services.expert') }}</h2>
                                    <p class="mb-0">{{ __('messages.services.expert_text') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch services-wrap">
                            <div class="services border border-info">
                                <div class="icon"><span class="flaticon-money"></span></div>
                                <div class="text">
                                    <h2>{{ __('messages.services.support') }}</h2>
                                    <p class="mb-0">{{ __('messages.services.support_text') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-image img" style="background-image: url(images/home2.jpg);">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading text-white">{{ __('messages.accessibility.subtitle') }}</span>
                    <h2 class="mb-4 text-white">{{ __('messages.accessibility.title') }}</h2>
                    <p class="text-white">
                        {{ __('messages.accessibility.text') }}</p>
                    <p class="mt-4" data-aos="zoom-in" data-aos-duration="2000"><a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="btn btn-primary py-3 px-4">{{ __('messages.accessibility.button') }}</a></p>
                </div>
            </div>
        </div>
    </section>

     {{-- Présentation --}}
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-xl">
            <div class="row g-lg-5">
                <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-right" data-aos-duration="2000">
                    <div class="img w-100" style="background-image: url(images/bg_2.jpg);"></div>
                </div>
                <div class="col-lg-6 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-duration="2000">
                    <div class="mt-0 my-lg-5 py-5">
                        <span class="subheading">{{ __('messages.about_subheading') }}</span>
                        <h2 class="mb-4">{{ __('messages.about_quote') }}</h2>
                        <p>{{ __('messages.about_text1') }}</p>
                        <p>{{ __('messages.about_text2') }}</p>
                        <p class="mt-4">
                            <a href="{{ route('services', ['locale' => app()->getLocale()]) }}" class="btn btn-primary py-3 px-4">
                                {{ __('messages.about_contact_btn') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">{{ __('messages.loans.subtitle') }}</span>
                    <h2 class="mb-4">
                        {{ __('messages.loans.title') }}</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="flow-wrap flow-wrap-right">
                        <div class="icon">
                            <span class="flaticon-accounting"></span>
                        </div>
                        <div class="text">
                            <h2>{{ __('messages.loans.mortgage') }}</h2>
                            <p class="mb-4 text-justify">
                                {{ __('messages.loans.mortgage_text') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="flow-wrap">
                        <div class="icon">
                            <span class="flaticon-financial"></span>
                        </div>
                        <div class="text">
                            <h2>{{ __('messages.loans.business') }}</h2>
                            <p class="mb-4 text-justify">
                                {{ __('messages.loans.business_text') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="flow-wrap">
                        <div class="icon">
                            <span class="flaticon-recession"></span>
                        </div>
                        <div class="text">
                            <h2>{{ __('messages.loans.car') }}</h2>
                            <p class="mb-4 text-justify">
                                {{ __('messages.loans.car_text') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="flow-wrap">
                        <div class="icon">
                            <span class="flaticon-insurance"></span>
                        </div>
                        <div class="text">
                            <h2>{{ __('messages.loans.student') }}</h2>
                            <p class="mb-4 text-justify">
                                {{ __('messages.loans.student_text') }}</p>
                        </div>
                    </div>
                </div>

                <p class="text-center mt-5">
                    <a href="{{ route('application', ['locale' => app()->getLocale()]) }}" class="btn btn-primary p-4 py-3 mr-4 mb-2" data-aos="zoom-in" data-aos-duration="2000">
                        {{ __('messages.loans.apply') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5" />
                        </svg>
                    </a>


                </p>

            </div>
        </div>
    </section>

    <section class="ftco-section-counter img" style="background-image: url(images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 heading-section heading-section-white text-center mb-5" data-aos="fade-up"
                    data-aos-duration="2000">
                    <span class="subheading">{{ __('messages.stats.subtitle') }}</span>
                    <h2 class="mb-0">{{ __('messages.stats.title') }}</h2>
                </div>
            </div>
            <div class="row section-counter">
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <h2 class="number"><span class="countup">10</span></h2>
                        <span class="caption">{{ __('messages.stats.experience') }}</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <h2 class="number"><span class="countup">8500</span></h2>
                        <span class="caption">{{ __('messages.stats.clients') }}</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <h2 class="number"><span class="countup">7200</span></h2>
                        <span class="caption">{{ __('messages.stats.loans') }}</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2 class="number"><span class="countup">70</span></h2>
                        <span class="caption">{{ __('messages.stats.awards') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container-xl">
            <div class="row justify-content-center pb-4">
                <div class="col-lg-7 text-center heading-section" data-aos="fade-down" data-aos-duration="2000">
                    <span class="subheading">{{ __('messages.testimonials.subtitle') }}
                    </span>
                    <h2 class="mb-5">{{ __('messages.testimonials.title') }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="carousel-testimony">
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">{{ __('messages.testimonial1.text') }}</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                        </div>
                                        <div class="ps-3">
                                            <p class="name">{{ __('messages.testimonial1.name') }}</p>
                                            <span class="position">{{ __('messages.testimonial1.position') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">{{ __('messages.testimonial2.text') }}
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                        </div>
                                        <div class="ps-3">
                                            <p class="name">{{ __('messages.testimonial2.name') }}</p>
                                            <span class="position">{{ __('messages.testimonial2.position') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">{{ __('messages.testimonial3.text') }}</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)">
                                        </div>
                                        <div class="ps-3">
                                            <p class="name">{{ __('messages.testimonial3.name') }}</p>
                                            <span class="position">{{ __('messages.testimonial3.position') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">{{ __('messages.testimonial4.text') }}</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_4.jpg)">
                                        </div>
                                        <div class="ps-3">
                                            <p class="name">{{ __('messages.testimonial4.name') }}</p>
                                            <span class="position">{{ __('messages.testimonial4.position') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">{{ __('messages.testimonial5.text') }}</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/staff-1.jpg)">
                                        </div>
                                        <div class="ps-3">
                                            <p class="name">{{ __('messages.testimonial5.name') }}</p>
                                            <span class="position">{{ __('messages.testimonial5.position') }}</span>
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

    <section class="ftco-intro-2 img" style="background-image: url(images/fgv1.jpg);">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-10">
                    <div class="row" data-aos="zoom-out" data-aos-duration="2000">
                        <div class="col-md-8 d-flex align-items-center">
                            <div>
                                <span class="subheading">{{ __('messages.cta.subtitle') }}</span>
                                <h1 class="mb-md-0 mb-4">{{ __('messages.cta.title') }}</h1>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center" data-aos="zoom-in" data-aos-duration="2000">
                            <p class="mb-0"><a href="{{ route('application', ['locale' => app()->getLocale()]) }}" class="btn btn-white py-md-4 py-3 px-md-5 px-4">
                                    {{ __('messages.cta.button') }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light py-5">
        <div class="container">
            <div class="row justify-content-center mb-4" data-aos="zoom-in" data-aos-duration="2000">
                <div class="col-md-8 text-center">
                    <h2 class="mb-3 fw-bold" style="color:#2b2b5e;">{{ __('messages.partners.title') }}</h2>
                    <p>{{ __('messages.partners.text') }}</p>
                </div>
            </div>

            <div class="partner-slider" data-aos="fade-up" data-aos-duration="2000">
                <div class="partner-track">
                    <div class="partner"><img src="images/imag3.png" alt="Partenaire 1"></div>
                    <div class="partner"><img src="images/image.png" alt="Partenaire 2"></div>
                    <div class="partner"><img src="images/b7.png" alt="Partenaire 3"></div>
                    <div class="partner"><img src="images/b8.png" alt="Partenaire 4"></div>
                    <!-- doublons pour boucle continue -->
                    <div class="partner"><img src="images/imag3.png" alt="Partenaire 1"></div>
                    <div class="partner"><img src="images/image.png" alt="Partenaire 2"></div>
                    <div class="partner"><img src="images/b7.png" alt="Partenaire 3"></div>
                    <div class="partner"><img src="images/b8.png" alt="Partenaire 4"></div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .partner-slider {
            overflow: hidden;
            position: relative;
        }

        .partner-track {
            display: flex;
            width: calc(200px * 8);
            animation: scroll 10s linear infinite;
        }

        .partner {
            flex: 0 0 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .partner img {
            width: 140px;
            height: auto;
            opacity: 0.8;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .partner img:hover {
            transform: scale(1.1);
            opacity: 1;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }
    </style>

</div>

@endsection
