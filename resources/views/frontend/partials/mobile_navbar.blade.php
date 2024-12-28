<li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
<li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
<li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
<li><a href="{{route('home.tools')}}" class="{{ request()->routeIs('home.tools') ? 'active' : '' }}">Tools</a></li>
<li><a href="{{route('home.articles')}}" class="{{ request()->routeIs('home.articles') ? 'active' : '' }}">Articles</a></li>
