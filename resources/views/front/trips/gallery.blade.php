@extends('layouts.front_inner')
@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
@endpush
@section('content')
<!-- Hero -->
<section class="hero hero-alt relative">
    <img src="{{ asset('assets/front/img/hero.jpg') }}" alt="">
    <div class="overlay absolute">
        <div class="container ">
            <h1 class="font-display upper">{{ $trip->name }} Album</h1>
            <div class="breadcrumb-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb fs-sm wrap">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('front.trips.all-gallery') }}">Gallery</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Album</li>
                    </ol>
                </nav>
            </div>
        </div>
</section>

<section class="py-10">
    <div class="container">
        <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-10">
            <div class="lg:col-span-2 xl:col-span-3">
                <div class="gallery grid grid-cols-2 md:grid-cols-3 gap-4">
                    @forelse($trip->trip_galleries as $gallery)
                        <a data-fancybox="gallery" href="{{ $gallery->imageUrl }}" class="item" data-caption="{{ $gallery->name }}">
                            <div class="relative">
                                <img class="block" src="{{ $gallery->mediumImageUrl }}" alt="">
                                <div class="overlay absolute flex justify-center items-center w-full h-full">
                                </div>
                                <svg class="absolute w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                            </div>
                        </a>
                    @empty
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                      <p>No gallery to show.</p>
                    </div>
                    @endforelse
                </div>
            </div>
            <aside>
                @include('front.elements.enquiry')
            </aside>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
@endpush
