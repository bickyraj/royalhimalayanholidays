@extends('layouts.front_inner')
@section('content')
<!-- Hero -->
<section class="hero hero-alt relative">
    <img src="{{ asset('assets/front/img/hero.jpg') }}" alt="">
    <div class="overlay absolute">
        <div class="container ">
            <h1>Gallery</h1>
            <div class="breadcrumb-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb fs-sm wrap">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="grid lg:grid-cols-3 gap-2 xl:gap-3">
            <?php foreach ($trips as $trip) : ?>
                <div class="album relative">
                    <a href="{{ $trip->galleryLink }}" class="block">
                        <img src="{{ $trip->mediumImageUrl }}" alt="">
                        <div class="overlay absolute">
                            <h2 class="fs-lg"><span>{{ $trip->name }}</span></h2>
                            <a href="{{ $trip->galleryLink }}" class="stretched-link"></a>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
</section>
@endsection
