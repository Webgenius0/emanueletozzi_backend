@extends('frontend.app')

@section('title', 'Preceptor Guru')

@push('style')
@endpush

@section('content')

    <!-- professionals section starts -->
    <section class="professionals-container custom-container">
        <div class="professionals-heading">
            <h2 class="section-title">
                Dedicated Professionals With Consulting Experties
            </h2>
        </div>

        <div class="professionals-profile">
            <!-- Professional 1 Card -->
            <a href="professional-details.html" class="professional-card">
                <div class="professional-img">
                    <img src=" {{asset('frontend/images/pro1.svg')}}" alt="Professional 1" />
                </div>
                <div class="professional-info">
                    <h3 class="professional-name">John Doe</h3>
                    <p class="professional-title">Software Engineer</p>
                </div>
            </a>

            <!-- Professional 2 Card -->
            <a href="professional-details.html" class="professional-card">
                <div class="professional-img">
                    <img src="{{asset('frontend/images/pro2.svg')}}" alt="Professional 2" />
                </div>
                <div class="professional-info">
                    <h3 class="professional-name">Jane Smith</h3>
                    <p class="professional-title">UX Designer</p>
                </div>
            </a>

            <!-- Professional 3 Card -->
            <a href="professional-details.html" class="professional-card">
                <div class="professional-img">
                    <img src="{{asset('frontend/images/pro3.svg')}}" alt="Professional 3" />
                </div>
                <div class="professional-info">
                    <h3 class="professional-name">Alex Johnson</h3>
                    <p class="professional-title">Project Manager</p>
                </div>
            </a>

            <!-- Professional 4 Card -->
            <a href="professional-details.html" class="professional-card">
                <div class="professional-img">
                    <img src="{{asset('frontend/images/pro4.svg')}}" alt="Professional 4" />
                </div>
                <div class="professional-info">
                    <h3 class="professional-name">Emily Davis</h3>
                    <p class="professional-title">Data Scientist</p>
                </div>
            </a>
        </div>

        <div class="view-btn-container">
            <a class="view-btn" href="professionals.html">
                <span class="primary-btn-content">
                    View all member
                    <img src="{{asset('frontend/images/icons/arrow-icon.svg')}} " alt="arrow Icon" />
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
            <div class="testimonial">
                <!-- testimonial img -->
                <div class="testimonial-img">
                    <img src="./assets/images/client-img.svg" alt="Client Image" />
                </div>
                <!-- testimonial content -->
                <div class="testimonial-content">
                    <p class="testimonial-text">
                        One Startup.IT team surpassed our expectations with their
                        flawless cloud migration. Their proactive approach and
                        meticulous attention to detail minimized operational
                        disruptions. We're extremely satisfied with the outstanding
                        results.
                    </p>
                    <h3 class="customer-name">Alzari Zocef</h3>
                    <p class="customer-position">IT Director, Softvance</p>
                    <!-- arrow icons -->
                    <div class="testimonial-arrows">
                        <img src="./assets/images/icons/left-arrow.svg" alt="Left Arrow" />
                        <img src="./assets/images/icons/right-arrow.svg" alt="Right Arrow" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact us section starts -->
    <section class="contact-us-container custom-container">
        <div>
            <h2 class="contact-title">Contact us</h2>
        </div>
        <div class="contact-us">
            <!-- Contact Form -->
            <div class="contact-form">
                <form action="#" method="post">
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
                        <input type="tel" name="phone" id="phone" placeholder="Enter your phone number" />
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
                <img src="./assets/images/contact-img.svg" alt="Contact Us" />
            </div>
        </div>
    </section>



@endsection


@push('script')
@endpush
