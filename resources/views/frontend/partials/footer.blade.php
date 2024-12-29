<footer class="footer">
    <div class="custom-container footer-container">
        <div class="footer-column">
            <img class="logo" src="{{ asset('frontend/images/icons/footer-logo.svg') }} " alt="" />

            <p class="footer-desc">
                Our team do comprises professional with experience. That's why
                businesses use Dail The fastest way.
            </p>
            <div class="social-icons">
                <a href="#"><img src="{{ asset('frontend/images/icons/fb.svg') }} " alt="Facebook" /></a>
                <a href="#"><img src="{{ asset('frontend/images/icons/email.svg') }} " alt="Facebook" /></a>
            </div>
        </div>
        <div class="footer-column">
            <h3>Company</h3>
            <ul>
                <li><a href="#">Who we are</a></li>
                <li><a href="#">Prices</a></li>
                <li><a href="{{ route('home.article_lists') }}">Latest Blog</a></li>
                <li><a href="{{ route('conatct-us') }}">Contact</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('home.tools') }}">Tools</a></li>
                <li><a href="{{ route('home.articles') }}">Articles</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Contacts</h3>
            <ul>
                <li>Studio E. Tozzi</li>
                <li>Via Marcantonio Colonna n. 11</li>
                <li>20149 Milan</li>
                <li>Studio E. Tozzi</li>

                <li class="link"><a href="#">info@etozzi.com</a></li>
                <li class="link">
                    <a href="https://etozzi.com/" target="_blank"> www.etozzi.com </a>
                </li>

                <li>P.IVA IT10964090962</li>
                <li class="link"><a href="https://etozzi.com/privacy/" target="_blank" >Privacy policy</a></li>
                <li>Condizioni generali d'uso</li>
            </ul>
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
