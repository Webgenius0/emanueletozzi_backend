<footer class="footer">
    <div class="custom-container footer-container">
        <div class="footer-column">
            <img class="logo" src="./assets/images/icons/footer-logo.svg" alt="" />
            <p class="footer-desc">
                Our team do comprises professional with experience. That's why
                businesses use Dail The fastest way.
            </p>
        </div>
        <div class="footer-column">
            <h3>Company</h3>
            <ul>
                <li><a href="#">Who we are</a></li>
                <li><a href="#">Prices</a></li>
                <li><a href="{{route('home.article_lists')}}">Latest Blog</a></li>
                <li><a href="{{route('conatct-us')}}">Contact</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li><a href="{{route('services')}}">Services</a></li>
                <li><a href="{{route('home.tools')}}">Tools</a></li>
                <li><a href="{{route('home.articles')}}">Articles</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Newsletter</h3>
            <ul>
                <li><a href="#">Our team do comprises professional</a></li>
                <li class="email">
                    <img src="{{ asset('frontend/images/icons/email.svg') }} " alt="" />
                    <p>hello@example.com</p>
                </li>
            </ul>

            {{-- <div class="social-icons">
                <a href="#"><img src="./assets/images/icons/fb.svg" alt="Facebook" /></a>
                <a href="#"><img src="./assets/images/icons/x.svg" alt="Twitter" /></a>
                <a href="#"><img src="./assets/images/icons/linkedin.svg" alt="Instagram" /></a>
                <a href="#"><img src="./assets/images/icons/youtube.svg" alt="LinkedIn" /></a>
            </div> --}}
        </div>
    </div>
    <!-- copyright -->
    <div class="copyright-container">
        <div>
            <hr class="footer-hr" />
        </div>
        <div class="custom-container copyright-text">
            <p>Copyright © 2024 One-Startup-IT</p>
        </div>
    </div>
</footer>
