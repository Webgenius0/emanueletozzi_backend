<nav class="custom-container">
    <!-- Logo -->
    <div>
        <img src=" {{ asset('frontend/images/logo.png') }} " alt="Logo" />
    </div>

    <!-- Nav Links -->
    <ul class="nav-links">
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
        <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
        <li><a href="{{route('home.tools')}}" class="{{ request()->is('home.tools') ? 'active' : '' }}">Tools</a></li>
        <li><a href="articles.html" class="{{ request()->is('articles.html') ? 'active' : '' }}">Articles</a></li>
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
