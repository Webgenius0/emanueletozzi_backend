@extends('frontend.app')

@section('title', 'Preceptor Guru')

@push('style')
@endpush

@section('content')


    <!-- Header Area Starts -->
    <header>
        <!-- Sidebar starts -->
        <ul class="sidebar" id="sidebar">
            <li><a href="{{ route('home') }}" class="active">Home</a></li>
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="tools.html">Tools</a></li>
            <li><a href="articles.html">Articles</a></li>
        </ul>
        <!-- Sidebar ends -->

        <!-- Hero Section Starts -->
        <div class="hero">
            <div class="custom-container hero-container">
                <!-- Hero Content -->

                @php
                    $cms = App\Models\Cms::get();
                    // dd($cms);
                @endphp


                <div class="hero-home-heading">
                    <h2>
                        {{ $cms ? $cms[0]->title : '' }}
                    </h2>
                    <p>
                        {!! $cms ? $cms[0]->description : '' !!}
                    </p>
                    <div class="hero-btn">
                        <a class="primary-btn" href="#">
                            <span class="primary-btn-content">
                                Get in touch
                                <img src="  {{ asset('frontend/images/icons/arrow-icon.svg') }} " alt="arrow Icon" />
                            </span>
                        </a>
                        <a class="secondary-btn" href="services.html">Our Service</a>
                    </div>
                </div>
                <!-- Hero Image -->
                <div class="hero-home-img">
                    <img src=" {{ $cms ? asset($cms[0]->image_url) : '' }} " alt="Hero" />
                </div>
            </div>
        </div>
    </header>

    <!-- professionals section starts -->
    <section class="professionals-container custom-container">
        <div class="professionals-heading">
            <h2 class="section-title">
                Dedicated Professionals With Consulting Experties
            </h2>
        </div>

        <div class="professionals-profile">
            <!-- Professional 1 Card -->

            @if (count($experties) > 0)

                @foreach ($experties as $expert)
                    <a href="{{ route('home.professional_details', $expert->id) }}" class="professional-card">
                        <div class="professional-img">
                            <img src=" {{ $expert ? asset($expert->image_url) : '' }} " alt="Hero" />

                        </div>
                        <div class="professional-info">
                            <h3 class="professional-name">
                                {{ $expert ? $expert->name : '' }}
                            </h3>
                            <p class="professional-title">
                                {{ $expert ? $expert->designation : '' }}
                            </p>
                        </div>
                    </a>
                @endforeach
            @else
                <p>No data found</p>

            @endif




        </div>

        <div class="view-btn-container">
            <a class="view-btn" href="{{ route('home.professional') }}">
                <span class="primary-btn-content">
                    View all member
                    <img src="{{ asset('frontend/images/icons/arrow-icon.svg') }} " alt="arrow Icon" />
                </span>
            </a>
        </div>
    </section>

    <!-- professional section ends -->

    <!-- testimonial section starts -->
    <section class="testimonial-container">
        <div class="custom-container">
            <div class="testimonial-heading">
                <h2 class="section-title">What Our Clients Say About Us</h2>
                <p>
                    Hear from our clients who've experienced One Startup.IT's
                    transformative impact, and see how our expertise helped them
                    achieve their business goals.
                </p>
            </div>

            @php
                $client_reviews = App\Models\ClientReview::limit(1)->get();
                // dd($client_reviews);
            @endphp


            <div class="testimonial">
                <!-- testimonial img -->

                <!-- testimonial content -->
                @foreach ($client_reviews as $review)
                    <div class="testimonial-img">
                        <img src="{{ $review->image_url }}" alt="Client Image" />
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">
                            {!! $review ? $review->description : '' !!}
                        </p>
                        <h3 class="customer-name mt-2">
                            {{ $review ? $review->title : '' }}
                        </h3>
                        <p class="customer-position">
                            {{ $review ? $review->sub_title : '' }}
                        </p>
                        <!-- arrow icons -->
                        <div class="testimonial-arrows">
                            <img src="./assets/images/icons/left-arrow.svg" alt="Left Arrow" />
                            <img src="./assets/images/icons/right-arrow.svg" alt="Right Arrow" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- contact us section starts -->
    <section class="contact-us-container custom-container">
        <div>
            <h2 class="contact-title">Contact us</h2>
        </div>

        {{-- success message show --}}
        @if (session('success'))
            <div class="alert alert-success text-success" style="color: green">
                {{ session('success') }}
            </div>
        @endif




        <div class="contact-us">
            <!-- Contact Form -->
            <div class="contact-form">
                <form action="{{ route('contact.send') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your name" required />
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" required />
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" name="number" id="phone" placeholder="Enter your phone number" />
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="4" placeholder="Your message" required></textarea>
                    </div>
                    <button class="contact-btn" type="submit">Send</button>
                </form>
            </div>
            <!-- Contact Image -->
            <div class="contact-image">
                <img src="{{ asset('frontend/images/contact-img.svg') }} " alt="Contact Us" />
            </div>
        </div>
    </section>



@endsection


@push('script')
    <script src="{{ asset('backend/vendor/sweetalert/sweetalert2@11.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@endpush
