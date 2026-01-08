@extends('base')

@section('title', 'FGVSERVIZIO - ' . __('messages.privacy_title'))

@section('content')
<div class="overflow-hidden">

    {{--Section principale --}}
    <section class="ftco-section bg-light" id="confidentialite">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 text-center heading-section" data-aos="fade-up" data-aos-duration="2000">
                    <span class="subheading">{{ __('messages.privacy_subheading') }}</span>
                    <h2 class="mb-4">{{ __('messages.privacy_header') }}</h2>
                    <p class="text-muted">
                        {!! __('messages.privacy_intro') !!}
                    </p>
                </div>
            </div>

            <div class="row justify-content-center" data-aos="zoom-in"  data-aos-duration="2000">
                <div class="col-md-10">
                    <div class="bg-white p-4 rounded shadow-sm">

                        <h4>1. {{ __('messages.privacy_section1_title') }}</h4>
                        <p>{{ __('messages.privacy_section1_text') }}</p>

                        <h4>2. {{ __('messages.privacy_section2_title') }}</h4>
                        <p>{{ __('messages.privacy_section2_intro') }}</p>
                        <ul>
                            <li>{{ __('messages.privacy_section2_item1') }}</li>
                            <li>{{ __('messages.privacy_section2_item2') }}</li>
                            <li>{{ __('messages.privacy_section2_item3') }}</li>
                        </ul>

                        <h4>3. {{ __('messages.privacy_section3_title') }}</h4>
                        <p>{!! __('messages.privacy_section3_text') !!}</p>

                        <h4>4. {{ __('messages.privacy_section4_title') }}</h4>
                        <p>{{ __('messages.privacy_section4_text') }}</p>

                        <h4>5. {{ __('messages.privacy_section5_title') }}</h4>
                        <p>{{ __('messages.privacy_section5_text') }}</p>

                        <h4>6. {{ __('messages.privacy_section6_title') }}</h4>
                        <p>{!! __('messages.privacy_section6_text') !!}</p>
                        <p>{{ __('messages.privacy_section6_contact_intro') }}</p>
                        <ul class="list-unstyled">
                            <li><strong>FGVSERVIZIO</strong></li>
                            <li><i class="fas fa-map-marker-alt text-primary"></i> Via A. di Tocqueville 13, 20154 Milano, Italia</li>
                            <li><i class="fas fa-phone-alt text-primary"></i> +31 637 514 146</li>
                            <li><i class="fas fa-envelope text-primary"></i> admin@fgvservizio.com</li>
                        </ul>

                        <h4>7. {{ __('messages.privacy_section7_title') }}</h4>
                        <p>{{ __('messages.privacy_section7_text') }}</p>

                        <h4>8. {{ __('messages.privacy_section8_title') }}</h4>
                        <p>{!! __('messages.privacy_section8_text') !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
