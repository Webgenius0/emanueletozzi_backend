@extends('frontend.app')

@section('title', 'Professional-details')

@push('style')
@endpush

@section('content')

    <header>
        <!-- Sidebar starts -->
        <ul class="sidebar" id="sidebar">
            @include('frontend.partials.mobile_navbar')

        </ul>
        <!-- Sidebar ends -->
        <!-- hero section starts -->
        <div class="hero-section">
            <div class="hero-overlay"></div>
            <!-- Overlay div -->
            <div class="hero-content">
                <h1 class="hero-title">
                    Acquista ora
                </h1>
                {{-- <p class="hero-desc">
                    Welcome to ONE-STARTUP.IT! We are your trusted partners in the world
                    of business consulting, offering expert advice and tailored
                    solutions to optimize your company's potential.
                </p> --}}
            </div>
        </div>
        <!-- hero section ends -->
    </header>
    <!-- header area ends -->

    <!-- main area starts -->

    <!-- 3 pricing cards -->
    <section class="three-pricing-card-container">
        <h2 class="section-title">Prenota Ora</h2>
        <p style="text-align: center">Fissa un appuntamento in agenda e acquista il servizio </p>
        <div class="three-pricing-cards">
            <!-- Second Card -->
            <div class="pricing-card">
                <h2 class="pricing-card-title">Orientations</h2>
                <div class="pricing-card-lists">
                    <img src="{{ asset('frontend/images/icons/bgtickicon.svg') }}" alt="tick icon" />
                    <p>Ideal if you need support on how to proceed</p>
                </div>
                <div class="pricing-card-lists">
                    <img src="{{ asset('frontend/images/icons/bgtickicon.svg') }}" alt="tick icon" />
                    <p>Personalized quotes for your needs</p>
                </div>
                <p class="pricing-card-desc">
                    We will collect the information to provide you with a personalized
                    quote.
                </p>
                <div class="pricing-card-duration">
                    <img src="{{ asset('frontend/images/icons/clockicon.svg') }} " alt="clock icon" />
                    <p>Duration: 15 min</p>
                </div>
                <div class="pricing-card-duration">
                    <img src="{{ asset('frontend/images/icons/clockicon.svg') }} " alt="clock icon" />
                    <p>Duration: 30 min</p>
                </div>
                <h2 class="price-title">$00</h2>
                <div class="pricing-card-buttons-container">
                    <a class="pricing-card-button" href="https://calendly.com/etozzi/appuntamento?month=2024-12"
                        target="_blank">Book a videocall</a>
                </div>
                <p class="pricing-support-desc">
                    If you need support on which package to purchase or if you need a
                    more details and specific quote for your situation, this is the
                    right solution for you.
                </p>
            </div>
            <!-- Second Card -->
            <div class="pricing-card">
                <h2 class="pricing-card-title">Business Plan</h2>
                <div class="pricing-card-lists">
                    <img src="{{ asset('frontend/images/icons/bgtickicon.svg') }}" alt="tick icon" />
                    <p>Ideal if you need support on how to proceed</p>
                </div>
                <div class="pricing-card-lists">
                    <img src="{{ asset('frontend/images/icons/bgtickicon.svg') }}" alt="tick icon" />
                    <p>Personalized quotes for your needs</p>
                </div>
                <p class="pricing-card-desc">
                    We will collect the information to provide you with a personalized
                    quote.
                </p>
                <div class="pricing-card-duration">
                    <img src="{{ asset('frontend/images/icons/clockicon.svg') }} " alt="clock icon" />
                    <p>Duration: 15 min</p>
                </div>
                <div class="pricing-card-duration">
                    <img src="{{ asset('frontend/images/icons/clockicon.svg') }} " alt="clock icon" />
                    <p>Duration: 30 min</p>
                </div>
                <h2 class="price-title">$89(Per S)</h2>
                <div class="pricing-card-buttons-container">
                    <a class="pricing-card-button" href="https://calendly.com/etozzi/appuntamento?month=2024-12"
                        target="_blank">Acquista Starter (S) € 89</a>
                    <a class="pricing-card-button" href="https://calendly.com/etozzi/appuntamento?month=2024-12"
                        target="_blank">Acquista Advanced (2S) € 142 Risparmi il 20%!</a>
                    <a class="pricing-card-button" href="https://calendly.com/etozzi/appuntamento?month=2024-12"
                        target="_blank">Acquista Superior (3S) € 187 Risparmi il 30%!</a>
                </div>
            </div>
            <!-- Second Card -->
            <div class="pricing-card">
                <h2 class="pricing-card-title">Consulenza</h2>
                <div class="pricing-card-lists">
                    <img src="{{ asset('frontend/images/icons/bgtickicon.svg') }}" alt="tick icon" />
                    <p>Ideal if you need support on how to proceed</p>
                </div>
                <div class="pricing-card-lists">
                    <img src="{{ asset('frontend/images/icons/bgtickicon.svg') }}" alt="tick icon" />
                    <p>Personalized quotes for your needs</p>
                </div>
                <p class="pricing-card-desc">
                    We will collect the information to provide you with a personalized
                    quote.
                </p>
                <div class="pricing-card-duration">
                    <img src="{{ asset('frontend/images/icons/clockicon.svg') }} " alt="clock icon" />
                    <p>Duration: 15 min</p>
                </div>
                <div class="pricing-card-duration">
                    <img src="{{ asset('frontend/images/icons/clockicon.svg') }} " alt="clock icon" />
                    <p>Duration: 30 min</p>
                </div>
                <h2 class="price-title">$89(Per S)</h2>
                <div class="pricing-card-buttons-container">
                    <a class="pricing-card-button" href="https://calendly.com/etozzi/appuntamento?month=2024-12"
                        target="_blank">Acquista Starter (S) € 89</a>
                    <a class="pricing-card-button" href="https://calendly.com/etozzi/appuntamento?month=2024-12"
                        target="_blank">Acquista Advanced (2S) € 142 Risparmi il 20%!</a>
                    <a class="pricing-card-button" href="https://calendly.com/etozzi/appuntamento?month=2024-12"
                        target="_blank">Acquista Superior (3S) € 187 Risparmi il 30%!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services cards container -->
    <section class="services-cards-container">
        <div class="services-heading">
            <h2 class="section-title">Ask for a quote</h2>
            <p class="section-desc">
                We provide a complete range of services to start-up in business, legal and tax matters. To obtain more
                information about our services, please visit the 'what we do' page. Please book an appointment to explain
                your needs and obtain a quotation
            </p>
        </div>
        <!-- cards -->
        <div class="services-cards custom-container">
            <div class="service-card">
                <div class="services-icon">
                    <img src="{{ asset('frontend/images/icons/services-icon.svg') }} " alt="" />
                </div>
                <h3 class="service-card-title">Business</h3>
                <p class="service-card-desc">
                    Back up all your critical documents with up to 50GB of secure
                    cloud storage. Store large files with ease, up to 5GB per file,
                    ensuring that both small and large documents are covered.
                </p>
            </div>
            <div class="service-card">
                <div class="services-icon">
                    <img src="{{ asset('frontend/images/icons/services-icon.svg') }} " alt="" />
                </div>
                <h3 class="service-card-title">Tax</h3>
                <p class="service-card-desc">
                    Back up all your critical documents with up to 50GB of secure
                    cloud storage. Store large files with ease, up to 5GB per file,
                    ensuring that both small and large documents are covered.
                </p>
            </div>
            <div class="service-card">
                <div class="services-icon">
                    <img src="{{ asset('frontend/images/icons/services-icon.svg') }} " alt="" />
                </div>
                <h3 class="service-card-title">Legal</h3>
                <p class="service-card-desc">
                    Back up all your critical documents with up to 50GB of secure
                    cloud storage. Store large files with ease, up to 5GB per file,
                    ensuring that both small and large documents are covered.
                </p>
            </div>


        </div>
    </section>


@endsection


@push('script')
@endpush
