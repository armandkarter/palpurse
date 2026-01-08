@extends('base')

@section('title', __('messages.application.title'))

@section('content')
    <div class="overflow-hidden">

        <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/fgv.jpg') }}'); min-height: 400px;">
            <div class="overlay"></div>
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-md-9 text-center" data-aos="fade-right" data-aos-duration="2000">
                        <h2 class="text-white">{{ __('messages.application.hero_title') }}</h2>
                        <p class="text-white">{{ __('messages.application.hero_text') }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-4 bg-light">
            <div class="container">
                <div class="row">
                    <!-- Avantages -->
                    <div class="col-md-6" data-aos="fade-right" data-aos-duration="2000">
                        <div class="p-4 bg-white rounded shadow-sm h-100">
                            <h3 class="text-primary mb-3">
                                <i class="fas fa-star mr-2"></i>{{ __('messages.application.advantages_title') }}
                            </h3>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>{{ __('messages.application.advantage_flexibility') }}</li>
                                <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>{{ __('messages.application.advantage_transparency') }}</li>
                                <li><i class="fas fa-check text-success mr-2"></i>{{ __('messages.application.advantage_simplicity') }}</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Caractéristiques -->
                    <div class="col-md-6 mt-md-0" data-aos="fade-left" data-aos-duration="2000">
                        <div class="p-4 bg-white rounded shadow-sm h-100">
                            <h3 class="text-primary mb-3">
                                <i class="fas fa-cogs mr-2"></i>{{ __('messages.application.features_title') }}
                            </h3>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-info mr-2"></i>{{ __('messages.application.feature_duration') }}</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-info mr-2"></i>{{ __('messages.application.feature_interest') }}</li>
                                <li><i class="fas fa-check-circle text-info mr-2"></i>{{ __('messages.application.feature_no_fees') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="background-image: url('{{ asset('images/gallery-4.jpg') }}'); min-height: 400px;">
            <div id="formulaire" class="loan-section m-auto">
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

                <form method="POST"
                      action="{{ route('loan.request', ['locale' => app()->getLocale()]) }}"
                      class="loan-form py-3"
                      data-aos="zoom-in"
                      data-aos-duration="2000">
                    @csrf
                    <h5 class="mb-3 text-center text-primary fw-bold">{{ __('messages.application.form_title') }}</h5>

                    <p class="text-muted mt-4 text-justify" style="font-size: 15px;" data-aos="fade-up" data-aos-duration="2000">
                        {{ __('messages.application.legal_notice') }}
                    </p>

                    <div class="form-group">
                        <label for="name">{{ __('messages.application.form_name') }}</label>
                        <input class="border border-primary" type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="address">{{ __('messages.application.form_address') }}</label>
                        <input class="border border-primary" type="text" id="address" name="address" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">{{ __('messages.application.form_phone') }}</label>
                        <input class="border border-primary" type="tel" id="phone" name="phone" required>
                    </div>

                    <div class="form-group">
                        <label for="email">{{ __('messages.application.form_email') }}</label>
                        <input class="border border-primary" type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="type">{{ __('messages.application.form_loan_type') }}</label>
                        <select class="border border-primary" id="type" name="type" required>
                            <option value="">{{ __('messages.application.form_loan_type') }}</option>
                            <option value="Prêt immobilier">{{ __('messages.services.loan_mortgage') }}</option>
                            <option value="Prêt professionnel">{{ __('messages.services.loan_business') }}</option>
                            <option value="Prêt automobile">{{ __('messages.services.loan_car') }}</option>
                            <option value="Prêt étudiant">{{ __('messages.services.loan_student') }}</option>
                            <option value="Prêt personnel">{{ __('messages.services.loan_personal') }}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="amount">{{ __('messages.application.form_amount') }}</label>
                        <input class="border border-primary" type="number" id="amount" name="amount" required>
                    </div>

                    <div class="form-group">
                        <label for="duration">{{ __('messages.application.form_duration') }}</label>
                        <input class="border border-primary" type="number" id="duration" name="duration" required>
                    </div>

                    <button type="submit" class="submit-btn btn btn-primary" data-aos="zoom-in" data-aos-duration="2000">
                        {{ __('messages.application.form_submit') }}
                    </button>
                </form>
            </div>
        </section>

        <style>
            .loan-section {
                width: 99%;
                padding: 20px;
            }

            .loan-form {
                width: 100%;
                background: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .form-group {
                width: 100%;
                margin-bottom: 15px;
            }

            label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
                color: #333;
            }

            input,
            select {
                width: 100%;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 4px;
                font-size: 16px;
            }

            .submit-btn {
                width: 100%;
                padding: 12px;
                color: white;
                border: none;
                border-radius: 4px;
                font-size: 16px;
                cursor: pointer;
                margin-top: 10px;
            }

            .submit-btn:hover {
                background: #34495e;
            }
        </style>
    </div>
@endsection
