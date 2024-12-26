@extends('frontend.app')

@section('title', 'Professional-details')

@push('style')
@endpush

@section('content')

    <!-- header area starts -->
    <header>
        <!-- Sidebar starts -->
        <ul class="sidebar" id="sidebar">
            <li><a href="home.html" class="active">Home</a></li>
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="tools.html">Tools</a></li>
            <li><a href="articles.html">Articles</a></li>
        </ul>
        <!-- Sidebar ends -->

        <!-- hero section starts -->
        <div class="article-detail-header-container">
            <div class="article-detail-header">
                <div class="header-heading">
                    <!-- Breadcrumbs -->
                    <div class="breadcumb">
                        <p class="article">Articles</p>
                        <img src="{{asset('frontend/images/icons/breadcumb.svg')}}" alt="Breadcrumb Icon" />
                        <p class="details">Details</p>
                    </div>
                    <!-- Article title -->
                    <h2>Article Title Heading Will Go Here</h2>
                </div>
                <div class="article-meta-section">
                    <!-- Article author and information -->


                    @php
                        $admin = App\Models\User::first();
                    @endphp

                    <div class="article-meta">
                        <img src="{{ $admin->avatar ? asset($admin->avatar) : asset('frontend/images/author4.svg') }}"
                            alt="Author Image" class="author-img" />
                        <div class="author-info">
                            <p class="author-name " style="color: white">{{ $admin->name }} </p>
                            <p class="article-details">
                                {{ $blog->created_at->diffForHumans() }}
                            </p>
                        </div>
                    </div>

                    <!-- Social sharing icons -->


                </div>
            </div>
        </div>
        <!-- header img which some parts of it will be top of header -->
        <div class="article-detail-header-img custom-container">
            <img src="{{asset($blog->detail_image_url)}}" alt="" />
        </div>
        <!-- hero section ends -->
    </header>
    <!-- header area ends -->

    <!-- main area starts -->
    <main>
        <!--  -->
        <section class="details-container custom-container">
            <h2 class="section-title text-start">Introduction</h2>
            <p class="description">
                {!! $blog ? $blog->description : '' !!}
            </p>
            <div class="details-img">
                <img c src="{{asset($blog->image_url)}}" alt="" />
            </div>
            <p class="description">
                {!! $blog ? $blog->additional_description : '' !!}
            </p>
            <div>
                <div class="details-meta">
                    {{-- <div class="icons-tags-container">
                        <div>
                            <!-- Share Text -->
                            <div class="share-text">
                                <p>Share this post</p>
                            </div>
                            <!-- Social sharing icons -->
                            <div class="social-sharings">
                                <a href="#"><img src="./assets/images/icons/bluefb-icon.svg" alt="Facebook" /></a>
                                <a href="#"><img src="./assets/images/icons/bluex-icon.svg" alt="Twitter" /></a>
                                <a href="#"><img src="./assets/images/icons/blye-yt-icon.svg" alt="YouTube" /></a>
                                <a href="#"><img src="./assets/images/icons/blye-yt-icon.svg" alt="LinkedIn" /></a>
                            </div>
                        </div>
                        <!-- Tags -->
                        <div class="tags">
                            <p>Tag one</p>
                            <p>Tag two</p>
                            <p>Tag three</p>
                            <p>Tag four</p>
                        </div>
                    </div> --}}

                    <div>
                        <hr class="footer-hr" />
                    </div>

                    <!-- Author information -->
                    <div class="article-meta">
                        <img src="{{ $admin->avatar ? asset($admin->avatar) : asset('frontend/images/author4.svg') }}"
                            alt="Author Image" class="author-img" />
                        <div class="author-info">
                            <p class="author-name " >{{ $admin->name }} </p>
                            <p class="article-details">
                                {{ $blog->created_at->diffForHumans() }}
                            </p>
                        </div>
                    </div>
                </div>



        </section>
    </main>

@endsection


@push('script')
@endpush
