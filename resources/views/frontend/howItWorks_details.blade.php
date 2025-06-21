@extends('frontend.layouts.master')

@section('title', $howItWork->name)
@section('meta_description', '')
@section('meta_keywords', '')

<!-- Page Title -->
@section('page_title')
    @include('frontend.layouts.partials.page_title', [
        'title' => 'How It Works',
        'description' =>
            'Discover the range of solutions we offer to help your business grow, streamline operations, and reach new heights.',
        'breadcrumbs' => [
            ['name' => 'Home', 'url' => route('frontend.home')],
            ['name' => 'How It Works'],
            ['name' => $howItWork->name],
        ],
    ])
@endsection
<!-- End Page Title -->

@section('css')
@endsection

@section('content')
    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="services-list">
                        @if (isset($allHowItWorks) && count($allHowItWorks) > 0)
                            @foreach ($allHowItWorks as $serv)
                                <a href="{{ route('frontend.howItWorks', $serv->slug) }}"
                                    class="{{ $serv->id == $howItWork->id ? 'active' : '' }}">{{ $serv->name }}</a>
                            @endforeach
                        @endif
                    </div>

                    <h4>{{ $howItWork->meta_title }}</h4>
                    <p>{{ $howItWork->meta_description }}</p>
                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    {!! \App\Helpers\Helper::optimizeImage('{{ $howItWork->main_image }}', '{{ $howItWork->name }}', 'img-fluid services-img') !!}
                    {{-- <img src="{{ asset($howItWork->main_image) }}" alt="{{ $howItWork->name }}"
                        class="img-fluid services-img"> --}}
                    {!! $howItWork->details !!}
                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->

    @include('frontend.sections.quote')
@endsection

@section('script')
    {!! NoCaptcha::renderJs() !!}
@endsection
