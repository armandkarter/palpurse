@extends('base')

@section('title', '' . __('messages.services_title'))

@section('content')
<div class="overflow-hidden">

    {{-- Hero --}}
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('images/service-3.jpg') }}'); min-height: 400px;">
        <div class="overlay"></div>
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-9 text-center" data-aos="zoom-in" data-aos-duration="2000">
                    <h2 class="text-white">{{ __('messages.services_hero_title') }}</h2>
                    <p class="text-white">{{ __('messages.services_hero_text') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">{{ __('messages.services_subheading') }}</span>
                    <h2 class="mb-4">{{ __('messages.services_title2') }}</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                @foreach (__('messages.loans') as $loan)
                <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="flow-wrap {{ $loan['extra_class'] ?? '' }}">
                        <div class="icon">
                            <span class="{{ $loan['icon'] }}"></span>
                        </div>
                        <div class="text">
                            <h2>{{ $loan['title'] }}</h2>
                            <p class="mb-4 text-justify">{{ $loan['description'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row justify-content-center align-items-center mt-4">
                <div class="col-md-6 col-lg-4 text-center d-flex align-items-stretch " data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <a href="{{ route('application', ['locale' => app()->getLocale()]) }}" class="btn btn-primary py-3 px-4 mt-3 mt-md-0">
                        {{ __('messages.services_apply_btn') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Call to Action --}}
    <section class="ftco-intro-2 img" style="background-image: url('{{asset('images/project-7.jpg') }}');">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-10">
                    <div class="row" data-aos="fade-up" data-aos-duration="2000">
                        <div class="col-md-8 d-flex align-items-center">
                            <div>
                                <span class="subheading">{{ __('messages.services_cta_subheading') }}</span>
                                <h1 class="mb-md-0 mb-4">{{ __('messages.services_cta_title') }}</h1>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center" data-aos="zoom-in" data-aos-duration="2000">
                            {{-- Correction ici --}}
                            <p class="mb-0">
                                <a href="{{ route('privacy_policy', ['locale' => app()->getLocale()]) }}" class="btn btn-white py-md-4 py-3 px-md-5 px-4">
                                    {{ __('messages.services_cta_btn') }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Marquee --}}
    <section class="ftco-section bg-primary py-3 mt-3 mb-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="marquee text-white font-weight-bold text-center">
                        <div class="marquee-content d-inline-block">
                            {{ __('messages.services_marquee') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .marquee {
            overflow: hidden;
            white-space: nowrap;
        }
        .marquee-content {
            display: inline-block;
            padding-left: 100%;
            animation: marquee 20s linear infinite;
        }
        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-100%); }
        }
    </style>

</div>
@endsection
