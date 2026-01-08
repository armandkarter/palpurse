@extends('base')

@section('title', 'fgvservizio-' . __('messages.contact_title'))

@section('content')

<div class="overflow-hidden">

    {{-- ✅ Section de bannière --}}
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/service-15.jpg') }}'); min-height: 400px;">
        <div class="overlay"></div>
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-9 text-center" data-aos="fade-up" data-aos-duration="3000">
                    <h2 class="text-white">{{ __('messages.contact_title') }}</h2>
                    <p class="text-white">{{ __('messages.contact_intro') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ✅ Section de contact --}}
    <section class="ftco-section bg-light">
        <div class="container-xl">
            <div class="row no-gutters justify-content-center">
                <div class="col-lg-10">
                    <div class="wrapper">
                        <div class="row g-0">
                            <div class="col-lg-12 ">
                                <div class="contact-wrap w-100 p-md-5 p-4" data-aos="zoom-in" data-aos-duration="2000">

                                    <h3 class="text-primary">{{ __('messages.contact_questions') }}</h3>
                                    <p class="mb-4">{{ __('messages.contact_description') }}</p>

                                    {{-- ✅ Coordonnées --}}
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p>
                                                        <span>{{ __('messages.address_label') }}:</span>
                                                        {{ __('messages.address_value') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p>
                                                        <span>{{ __('messages.email_label') }}:</span>
                                                        <a href="mailto:{{ __('messages.email_value') }}">{{ __('messages.email_value') }}</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p>
                                                        <span>{{ __('messages.phone_label') }}:</span>
                                                        <a href="https://wa.me/31637514146">{{ __('messages.phone_value') }}</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- ✅ Messages de succès ou d’erreur --}}
                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif

                                    @if (session('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ session('error') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif

                                    {{-- ✅ Formulaire de contact --}}
                                    <form id="contactForm" action="{{ route('send_email', app()->getLocale()) }}" method="POST" class="contactForm">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control border border-primary"
                                                        name="name" id="name" placeholder="{{ __('messages.form_name') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <input type="email" class="form-control border border-primary"
                                                        name="email" id="email" placeholder="{{ __('messages.form_email') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control border border-primary"
                                                        name="subject" id="subject" placeholder="{{ __('messages.form_subject') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control border border-primary"
                                                        name="phone" id="phone" placeholder="{{ __('messages.form_phone') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control border border-primary" id="message" cols="30" rows="7"
                                                        placeholder="{{ __('messages.form_message') }}" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="{{ __('messages.form_submit') }}" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div> {{-- contact-wrap --}}
                            </div>
                        </div>
                    </div> {{-- wrapper --}}
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
