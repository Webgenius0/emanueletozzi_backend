@extends('frontend.app')

@section('title', 'About Us')

@push('style')
@endpush

@section('content')

    <header>
        <!-- Sidebar starts -->
        <ul class="sidebar" id="sidebar">
           @include('frontend.partials.mobile_navbar')
        </ul>


        @php
            $cms = App\Models\CMS::get();

        @endphp
        <div style="background-image: url('{{ asset($cms ? $cms[6]->image_url : '') }}') !important ; " class="hero-section">

            <div class="hero-overlay"></div>

            <div class="hero-content">

                <h1 class="hero-title">
                    {{ $cms ? $cms[6]->title : '' }}
                </h1>

                <p class="hero-desc">
                    {!! $cms ? $cms[6]->description : '' !!}
                </p>

            </div>
        </div>


    </header>



    <!-- main area starts -->

    <!-- who we are section styles -->
    <section class="who-we-are-container">
        <h2 class="section-title">What we do</h2>
        <div class="one-startup-desc">
            <p>
                {{ $cms ? $cms[7]->title : '' }}
            </p>
            <p>
                {!! $cms ? $cms[7]->description : '' !!}
            </p>

        </div>
    </section>

    <!-- commitment section starts -->

    <!-- commitment section starts -->
    <section class="commitment-section-container custom-container">
        <!-- commitment img -->

        @php
            $cms = App\Models\Cms::get();
        @endphp
        <div>
            <img src="{{ asset($cms[8]->image_url) }}" alt="" />
        </div>

        <div class="commitment-content">
            <div>
                <h2>
                    {{ $cms ? $cms[8]->title : '' }}
                </h2>
                <div class="commitment-heading">
                    <img src="{{ asset('frontend/images/icons/tickicon.svg') }}" alt="" />
                    <h4>
                        {{ $cms ? $cms[8]->sub_title : '' }}
                    </h4>
                </div>
                <p>
                    {!! $cms ? $cms[8]->description : '' !!}
                </p>
                <div class="commitment-heading">
                    <img src="{{ asset('frontend/images/icons/tickicon.svg') }}" alt="" />
                    <h4>
                        {{ $cms ? $cms[8]->button_text : '' }}
                    </h4>
                </div>

                <p>
                    {!! $cms ? $cms[8]->sub_description : '' !!}
                </p>
            </div>
        </div>
    </section>



    <!-- Our specialization section -->
    <section class="specialization-container custom-container">
        <!-- content -->
        <div class="commitment-content">
            <div>

                <h2>{{ $cms ? $cms[9]->title : '' }}</h2>

                <p>{!! $cms ? $cms[9]->title_description : '' !!}</p>

                <div class="hr"></div>

                <div class="commitment-heading">
                    <img src="{{ asset('frontend/images/icons/tickicon.svg') }} " alt="" />
                    <h4> {{ $cms ? $cms[9]->sub_title : '' }} </h4>
                </div>

                <p>{!! $cms ? $cms[9]->description : '' !!}</p>

                <div class="commitment-heading">
                    <img src="{{ asset('frontend/images/icons/tickicon.svg') }} " alt="" />
                    <h4>{{ $cms ? $cms[9]->button_text : '' }}</h4>
                </div>

                <p>{!! $cms ? $cms[9]->sub_description : '' !!}</p>

            </div>
        </div>

        <!-- img -->
        <div class="images-container">
            <!-- first img -->
            <div>
                <img src="{{ asset($cms[9]->image_url) }}" alt="" />
            </div>
            <!-- img and a boxed container text -->
            <div class="">
                <img src="{{ asset($cms[9]->second_image_url) }}" alt="" />
                <div class="client-satisfaction-container">
                    <h2>100%</h2>
                    <p>Client Satisfaction</p>
                </div>
            </div>
        </div>
    </section>

    <!-- why choose section -->
    <section class="why-us-container custom-container">
        <!-- img -->
        <div>
            <img src="{{ $cms[4]->image_url }}" alt="" />
        </div>

        <!-- content -->
        <div class="commitment-content">
            <div class="why-us-content">
                <h2>
                    {!! $cms ? $cms[4]->title : '' !!}

                </h2>
                <p>
                    {!! $cms ? $cms[4]->title_description : '' !!}

                </p>
                <div class="hr"></div>
                <div class="commitment-heading">
                    <img src="./assets/images/icons/tickicon.svg" alt="" />

                    <h4>
                        {!! $cms ? $cms[4]->sub_title : '' !!}

                    </h4>
                </div>
                <p>
                    {!! $cms ? $cms[4]->description : '' !!}

                </p>
                <div class="commitment-heading">
                    <img src="./assets/images/icons/tickicon.svg" alt="" />
                    <h4>
                        {!! $cms ? $cms[4]->button_text : '' !!}

                    </h4>
                </div>

                <p>
                    {!! $cms ? $cms[4]->sub_description : '' !!}

                </p>
            </div>
            <a class="view-all-services-btn" href="{{route('services')}}">View all Services</a>
        </div>
    </section>

    <!-- professionals section starts -->
    @include('frontend.layouts.dedicated_professionals')

@endsection


@push('script')
@endpush
