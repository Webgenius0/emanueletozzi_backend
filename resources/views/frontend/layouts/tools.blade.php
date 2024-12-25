{{-- @extends('frontend.app')

@section('title', 'About Us')

@push('style')
@endpush

@section('content')

    <header>
        <!-- Sidebar starts -->
        <ul class="sidebar" id="sidebar">
            <li><a href="home.html">Home</a></li>
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="tools.html" class="active">Tools</a></li>
            <li><a href="articles.html">Articles</a></li>
        </ul>
        <!-- Sidebar ends -->
        <!-- hero section starts -->
        <div class="hero-section">
            <div class="hero-overlay"></div>
            <!-- Overlay div -->
            <div class="hero-content">
                <h1 class="hero-title">Essential Tools for Business Growth</h1>
                <p class="hero-desc">
                    Download Our Helpful Tools to Optimize Your Business Operations.
                    Access Excel Sheets and Guides to Streamline Your Process.
                </p>
            </div>
        </div>
        <!-- hero section ends -->
    </header>
    <!-- header area ends -->

    <!-- main area starts -->

        <!-- tools section starts -->
        <section class="tools-container">
            <h2 class="section-title custom-container">Tools</h2>
            <div class="title-border"></div>
            <!-- tools 1 -->

            <!-- tools2 -->
            @foreach ($tools as $tool)
                <div class="tools custom-container">
                    <!-- img -->
                    <div class="tool-img">
                        <img src="{{ asset($tool->image_url) }}" alt="" />
                    </div>
                    <!-- content -->
                    <div class="tools-content">
                        <h2>
                            {{ $tool->title}}
                        </h2>
                        <p>
                            {!! $tool->descripton !!}

                        </p>
                        <a class="download-btn" href="#" onclick="openModal()">
                            <span class="btn-content">
                                Download Now
                                <img src="{{asset('frontend/images/icons/downloadicon.svg')}} " alt="Download Icon" />
                            </span>
                        </a>
                    </div>
                </div>
            @endforeach
        </section>

     <!-- modal  -->


@endsection


@push('script')

@endpush --}}
