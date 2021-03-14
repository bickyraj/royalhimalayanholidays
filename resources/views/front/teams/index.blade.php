@extends('layouts.front_inner')
@section('content')
<!-- Hero -->
<section class="hero hero-alt relative">
    <img src="{{ asset('assets/front/img/hero.jpg') }}" alt="">
    <div class="overlay absolute">
        <div class="container ">
            <h1>Our Team</h1>
            <div class="breadcrumb-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb fs-sm wrap">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                    </ol>
                </nav>
            </div>
        </div>
</section>

<section class="py-5">
    <div class="container">
        <ul class="nav nav-pills mb-3 jcc" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="administration-tab" data-bs-toggle="pill" href="#administration" role="tab" aria-controls="administration" aria-selected="true">Administration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="representatives-tab" data-bs-toggle="pill" href="#representatives" role="tab" aria-controls="representatives" aria-selected="false">Representatives</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tour-guides-tab" data-bs-toggle="pill" href="#tour-guides" role="tab" aria-controls="tour-guides" aria-selected="false">Tour Guides</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="administration" role="tabpanel" aria-labelledby="administration-tab">
                <h2 class="bold fs-xl text-primary mb-4">Administration</h2>
                @if($administrations)
                    @foreach($administrations as $item)
                        @include('front.elements.team_card')
                    @endforeach
                @endif
            </div>
            <div class="tab-pane fade" id="representatives" role="tabpanel" aria-labelledby="representatives-tab">
                <h2 class="bold fs-xl text-primary mb-4">Representatives</h2>
                @if($representatives)
                    @foreach($representatives as $item)
                        @include('front.elements.team_card')
                    @endforeach
                @endif
            </div>
            <div class="tab-pane fade" id="tour-guides" role="tabpanel" aria-labelledby="tour-guides-tab">
                <h2 class="bold fs-xl text-primary mb-4">Tour Guides</h2>
                @if($tour_guides)
                    @foreach($tour_guides as $item)
                        @include('front.elements.team_card')
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
