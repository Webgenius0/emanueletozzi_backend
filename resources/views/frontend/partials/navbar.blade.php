<nav class="custom-container">
    <!-- Logo -->
    <div>
        <img src=" {{ asset('frontend/images/logo.png') }} " alt="Logo" />
    </div>

    <!-- Nav Links -->
    <ul class="nav-links">
        <li><a href="{{route('home')}}" class="active">Home</a></li>
        <li><a href="about-us.html">About Us</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="tools.html">Tools</a></li>
        <li><a href="articles.html">Articles</a></li>
    </ul>

    <!-- Buttons -->
    <div class="nav-buttons">
        <a class="phone-btn" href="#">
            <img class="phone-icon" src="{{asset('frontend/images/icons/phone-icon.svg')}} " alt="Phone Icon" />
        </a>
        <a class="primary-btn" href="#">Contact Us</a>
    </div>

    <!-- Right: Hamburger Menu (This will change to X when sidebar is open) -->
    <div class="menu-button" onclick="toggleSidebar()">
        <a href="#" id="hamburger-icon">
            <svg xmlns="http://www.w3.org/2000/svg" height="28" viewBox="0 96 960 960" width="28">
                <path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z" />
            </svg>
        </a>
        <a href="#" id="close-icon" style="display: none;">
            <svg xmlns="http://www.w3.org/2000/svg" height="28" viewBox="0 96 960 960" width="28">
                <path
                    d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z" />
            </svg>
        </a>
    </div>
</nav>
<!-- Navbar ends -->

<!-- Header Area Starts -->
<header>
    <!-- Sidebar starts -->
    <ul class="sidebar" id="sidebar">
        <li><a href="{{route('home')}}" class="active">Home</a></li>
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
                    {{ $cms ?  $cms[0]->title : ''}}
                </h2>
                <p>

                    {!! $cms ?  $cms[0]->description : '' !!}
                </p>
                <div class="hero-btn">
                    <a class="primary-btn" href="#">
                        <span class="primary-btn-content">
                            Get in touch
                            <img src="  {{asset('frontend/images/icons/arrow-icon.svg')}} " alt="arrow Icon" />
                        </span>
                    </a>
                    <a class="secondary-btn" href="services.html">Our Service</a>
                </div>
            </div>
            <!-- Hero Image -->
            <div class="hero-home-img">
                <img src=" {{ $cms ? asset( $cms[0]->image_url ) : ''  }} " alt="Hero" />
            </div>
        </div>
    </div>
</header>
