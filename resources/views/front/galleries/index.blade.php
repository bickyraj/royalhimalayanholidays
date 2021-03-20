@extends('layouts.front_inner')
@section('content')
<!-- Hero -->
<section class="hero hero-alt relative">
    <img src="{{ asset('assets/front/img/hero.jpg') }}" alt="">
    <div class="overlay absolute">
        <div class="container ">
            <h1 class="font-display upper">Gallery</h1>
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

<section class="py-10">
    <div class="container">
        <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-10">
            <div class="lg:col-span-2 xl:col-span-3">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <?php foreach ($trips as $trip) : ?>
                    <a href="{{ $trip->galleryLink }}">
                        <div class="relative mb-2">
                            <img class="block" src="{{ $trip->mediumImageUrl }}" alt="">
                            <div class="flex absolute" style="left:0.5rem;bottom:-0.5rem;right:0.5rem">
                                <div class="bg-primary shadow-md px-2 py-1 font-display text-lg text-white uppercase">
                                    {{ $trip->name }}
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <aside>
                @include('front.elements.enquiry')
            </aside>
        </div>
    </div>
</section>
@endsection
