<?php
$mapImageUrl = $trip->mapImageUrl;
  if (session()->has('success_message')) {
    $session_success_message = session('success_message');
    session()->forget('success_message');
  }

  if (session()->has('error_message')) {
    $session_error_message = session('error_message');
    session()->forget('error_message');
  }
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<style type="text/css">
  .modal {
    z-index: 99999 !important;
  }
  .map-image-modal {
    cursor: zoom-in;
    object-fit: cover;
    /*width: 200px;*/
  }

  .trip-faq-description ul li {
      list-style-type: inherit !important;
  }

  .modal-body {
      /* 100% = dialog height, 120px = header + footer */
      /*height: 70vh;*/
      /*overflow-y: scroll;*/
  }
</style>
@extends('layouts.front_inner')
@section('meta_og_title'){!! $trip->trip_seo->meta_title??'' !!}@stop
@section('meta_description'){!! $trip->trip_seo->meta_description??'' !!}@stop
@section('meta_keywords'){!! $trip->trip_seo->meta_keywords??'' !!}@stop
@section('meta_og_url'){!! $trip->trip_seo->canonical_url??'' !!}@stop
@section('meta_og_description'){!! $trip->trip_seo->meta_description??'' !!}@stop
@section('meta_og_image'){!! $trip->trip_seo->ogImageUrl??'' !!}@stop
@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tiny-slider@2.9.3/dist/tiny-slider.css">

<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
<style>
    .embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
</style>
@endpush
@section ('content')


<!-- Hero -->
<section class="hero relative">
    <div class="hero-slider">
        @if(iterator_count($trip->trip_galleries))
        @foreach($trip->trip_galleries as $gallery)
            <img src="{{ $gallery->imageUrl }}" class="block" alt="">
        @endforeach
        @endif
    </div>

    <div class="overlay absolute w-full">
        <div class="container flex justify-between items-end flex-wrap">
            <div>
                <div class="hero-slider-controls none md:block">
                    <div class="flex">
                        <button>
                            <svg class="w-6 h-6">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#arrownarrowleft" />
                            </svg>
                        </button>
                        <button>
                            <svg class="w-6 h-6">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#arrownarrowright" />
                            </svg>
                        </button>
                    </div>
                </div>

                <h1 class="mb-2 font-display text-white text-4xl lg:text-4xl lg:text-5xl uppercase">
                    <span>{{ $trip->name }}</span>
                </h1>

                <div class="breadcrumb-wrapper none md:block">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            {{-- <li class="breadcrumb-item"><a href="{{ route('tours.index') }}">Nepal</a></li> --}}
                            {{-- <li class="breadcrumb-item"><a href="{{ route('tours.index') }}">Trekkings</a></li> --}}
                            <li class="breadcrumb-item active" aria-current="page">{{ $trip->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>

         
        </div>
    </div>

</section>

<section class="bg-gray">
    <!-- Sticky Nav -->
    <div id="tourDetailsBarIO"></div>
    <div class="tdb bg-primary text-white sticky-top" style="top:6rem;z-index:1">
        <div class="container flex justify-center items-center">
            <nav class="tour-details-tabs flex justify-center items-center" id="secondnav">
                <ul class="nav flex flex-wrap py-1">
                    <li class="mr-2">
                         <a href="#itinerary" class="flex items-center p-2 hover:bg-white hover:text-primary">
                            <svg class="w-6 h-6 md:mr-2">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#clock" />
                            </svg>
                            <span class="none md:block">Itinerary</span></a>
                        
                    </li>
                    @if (!$trip->trip_itineraries->isEmpty())
                    <li class="mr-2">
                        <a href="#overview-text" class="flex items-center p-2 hover:bg-white hover:text-primary">
                            <svg class="w-6 h-6 md:mr-2">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#viewgrid" />
                            </svg>
                            <span class="none md:block">Overview</span>
                        </a>
                    </li>
                    @endif
                    @if ($trip->trip_include_exclude)
                    <li class="mr-2">
                        <a href="#inclusions" class="flex items-center p-2 hover:bg-white hover:text-primary">
                            <svg class="w-6 h-6 md:mr-2">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#archive" />
                            </svg>
                            <span class="none md:block">Inclusions</span>
                        </a>
                    </li>
                    @endif
                    @if (!$trip->trip_departures->isEmpty())
                    <li class="mr-2">
                        <a href="#date-price" class="flex items-center p-2 hover:bg-white hover:text-primary">
                            <svg class="w-6 h-6 md:mr-2">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#calendar" />
                            </svg>
                            <span class="none md:block">Date & Price</span></a>
                    </li>
                    @endif
                    <li class="mr-2">
                        <a href="#reviews" class="flex items-center p-2 hover:bg-white hover:text-primary">
                            <svg class="w-6 h-6 md:mr-2">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#chat" />
                            </svg>
                            <span class="none md:block">Review</span></a>
                    </li>
                    @if (!$trip->trip_faqs->isEmpty())
                    <li class="mr-2">
                        <a href="#faqs" class="flex items-center p-2 hover:bg-white hover:text-primary">
                            <svg class="w-6 h-6 md:mr-2">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#questionmarkcircle" />
                            </svg>
                            <span class="none md:block">FAQs</span></a>
                    </li>
                    @endif
                    <li class="mr-2">
                         <a href="{{ route('front.trips.booking', $trip->slug) }}" class="flex items-center p-2 hover:bg-white hover:text-primary">
                            <svg class="w-6 h-6 md:mr-2">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#clock" />
                            </svg>
                            <span class="none md:block">Book Now</span></a>
                        
                    </li>
                </ul>
            </nav>
        </div>
    </div><!-- Sticky Nav -->

    <div class="container mt-2 pb-20">

        <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-2 lg:gap-10">

            <div class="tour-details lg:col-span-2 xl:col-span-3 relative">

                <div class="lg:none">
                    @include('front.elements.price_card')
                </div>

                <div id="overview" class="tds pt-10 bg-white px-4 lg:px-10 pb-4 mb-4">
                    <div>

                        <div class="mb-6 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="flex aic">
                                <div class="mr-4">
                                    <svg class="w-10 h-10 text-primary">
                                        <use xlink:href="{{asset('assets/front/img/sprite.svg')}}#calendarduration" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm font-bold text-gray">
                                        Duration
                                    </div>
                                    <div>
                                        {{ $trip->duration }} days
                                    </div>
                                </div>
                            </div>

                            <div class="flex aic">
                                <div class="mr-4">
                                    <svg class="w-10 h-10 text-primary">
                                        <use xlink:href="{{asset('assets/front/img/sprite.svg')}}#maxelevation" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm font-bold text-gray">
                                        Max. Elevation
                                    </div>
                                    <div>
                                        {{ $trip->max_altitude }}m
                                    </div>
                                </div>
                            </div>

                            <div class="flex aic">
                                <div class="mr-4">
                                    <svg class="w-10 h-10 text-primary">
                                        <use xlink:href="{{asset('assets/front/img/sprite.svg')}}#groupsize" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm font-bold text-gray">
                                        Group size
                                    </div>
                                    <div>
                                        {{ $trip->group_size }}
                                    </div>
                                </div>
                            </div>

                            <div class="flex aic">
                                <div class="mr-4">
                                    <svg class="w-10 h-10 text-primary">
                                        <use xlink:href="{{asset('assets/front/img/sprite.svg')}}#level" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm font-bold text-gray">
                                        Level
                                    </div>
                                    <div>
                                        {{ $trip->difficulty_grade_value }}
                                    </div>
                                </div>
                            </div>

                      

                            <div class="flex aic">
                                <div class="mr-4">
                                    <svg class="w-10 h-10 text-primary">
                                        <use xlink:href="{{asset('assets/front/img/sprite.svg')}}#accomodation" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm font-bold text-gray">
                                        Accomodation
                                    </div>
                                    <div>
                                        {{ $trip->trip_info->accomodation??'' }}
                                    </div>
                                </div>
                            </div>

                            <div class="flex aic">
                                <div class="mr-4">
                                    <svg class="w-10 h-10 text-primary">
                                        <use xlink:href="{{asset('assets/front/img/sprite.svg')}}#meals" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm font-bold text-gray">
                                        Meals
                                    </div>
                                    <div>
                                        {{ $trip->trip_info->meals??'' }}
                                    </div>
                                </div>
                            </div>



                            <div class="flex aic lg:col-span-2">
                                <div class="mr-4">
                                    <svg class="w-10 h-10 text-primary">
                                        <use xlink:href="{{asset('assets/front/img/sprite.svg')}}#triproute" />
                                    </svg>
                                </div>

                                <div>
                                    <div class="text-sm font-bold text-gray">
                                        Trip Route
                                    </div>
                                    <div>
                                        {{ $trip->trip_info->trip_route??'' }}
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="px-3">

                            <h3 class="mb-2 font-display text-2xl text-primary">Highlights</h3>
                            <ul class="highlights mb-4">
                                {!! ($trip->trip_info)?$trip->trip_info->highlights:'' !!}
                            </ul>

                        

                            
                        </div>
                    </div>


                </div>

              

                <div id="itinerary" class="tds pt-10 bg-white px-4 lg:px-10 pb-4 mb-4" x-data="{
                    day1Open:true,
                    @foreach ($trip->trip_itineraries as $i => $itinerary)
                        day{{ $i + 1 }}Open:false,
                    @endforeach
                    }">
                        <div class="flex justify-between items-end flex-wrap mb-4">
                            <h2 class="text-4xl lg:text-5xl font-display text-primary uppercase">Trip Itinerary</h2>
                            <div>
                                <button class="mb-2 btn btn-sm btn-primary expand-all" @click="
                                @foreach ($trip->trip_itineraries as $i => $itinerary)
                                    day{{ $i + 1 }}Open =
                                @endforeach
                                 true">Expand All</button>
                                <button class="mb-2 btn btn-sm btn-primary collapse-all" @click="
                                @foreach ($trip->trip_itineraries as $i => $itinerary)
                                    day{{ $i + 1 }}Open =
                                @endforeach
                                false">Collapse All</button>
                            </div>
                        </div>
                        <div class="itinerary mb-4">
                            @foreach($trip->trip_itineraries as $i => $itinerary)
                                <div class="mb-2 border-light">
                                    <button class="flex items-center w-full p-2 text-primary text-left" :aria-expanded="day{{ $i + 1 }}Open" aria-controls="day{{ $i+1 }}" @click="day{{ $i+1 }}Open=!day{{ $i+1 }}Open">
                                        <div class="flex items-center mr-4">
                                            <div class="mr-2 text-sm">Day</div>
                                            <div class="font-display text-primary text-2xl">
                                                {{ $itinerary->day }}
                                            </div>
                                        </div>
                                        <div class="flex justify-between flex-grow-1">
                                            <h3 class="font-display text-xl">{{ $itinerary->name }}</h3>
                                            <svg class="w-6 h-6 flex-shrink-0" x-show="!day{{ $i + 1 }}Open">
                                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#plus" />
                                            </svg>
                                            <svg class="w-6 h-6 flex-shrink-0" x-show="day{{ $i + 1 }}Open">
                                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#minus" />
                                            </svg>
                                        </div>
                                    </button>
                                    <div id="day{{ $i+1 }}" class="border-top-light p-4" x-cloak x-show.transition="day{{ $i+1 }}Open">
                                        <div class="grid xl:grid-cols-3 gap-4">
                                            <!--<img src="{{ asset('assets/front/img/hero.jpg') }}" alt="">-->
                                            <div class="xl:col-span-3">
                                                {!! $itinerary->description !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="lg:flex justify-between items-center bg-light p-4">
                            <div>
                                Not satisfied with this itinerary? <b class="text-primary">Make your own</b>.
                            </div>
                            <a href="{{ route('front.trips.customize', $trip->slug) }}" class="btn btn-sm btn-primary">Customize</a>
                        </div>
                </div>
                
                <div id="overview" class="tds bg-white px-4 lg:px-10 pb-4 mb-4">
                    <div>

                        <div class="mb-6 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                           



                        </div>

                        <div class="px-3">


                            <div id="overview-text" class="lim" style="text-align: justify;">
                                {!! $trip->trip_info->overview??'' !!}
                            </div>
                            {{-- <p class="text-center">
                                <button id="toggle-overview" class="btn btn-gray" data-bs-toggle="collapse" data-bs-target="#overview-text">Show
                                    More</button>
                            </p> --}}
{{--
                            <div class="bg-light mb-3 p-4">
                                <h3 class="mb-2 font-display text-xl text-primary"> Important Note</h3>
                                <p class="mb-0 text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem sequi vero quasi, error impedit ratione maxime eaque perspiciatis reprehenderit tempore delectus quibusdam ipsam, ipsa pariatur dolore ea veniam temporibus illo eum deleniti quas, a vitae. Dolorum explicabo, ex ullam obcaecati blanditiis tenetur dicta similique. Voluptatum qui molestias consequuntur minus praesentium!
                                </p>
                            </div>--}}
                        </div>
                    </div>


                </div>
{{--
               <div class='mb-4 embed-container'><iframe src='https://www.youtube.com/embed//dFLxa0VwY-E' frameborder='0' allowfullscreen></iframe></div> --}}
                @if ($trip->trip_include_exclude)
                <div id="inclusions" class="tds pt-10 bg-white px-4 lg:px-10 pb-4 mb-4">
                    <div class="bg-white p-3">
                        <div class="grid lg:grid-cols-2 gap-1">
                            @if($trip->trip_include_exclude)
                            <div>
                                <h2 class="text-3xl lg:text-4xl font-display text-primary uppercase">Includes</h2>
                                <ul class="includes">
                                  <?= $trip->trip_include_exclude->include; ?>
                                </ul>
                            </div>
                             <?php /* ?>
                            <div>
                                <h2 class="text-3xl lg:text-4xl font-display text-primary uppercase">Doesn't Include</h2>
                                <ul class="excludes">
                                    <?= $trip->trip_include_exclude->exclude; ?>
                                </ul>
                            </div> 
                             <?php */ ?>
                            @endif

                        </div>
                       <?php /* ?>
                        <div class="complimentary p-2">
                            <h2 class="text-3xl lg:text-4xl font-display text-primary uppercase">Complimentary</h2>
                            <ul>
                              <?= $trip->trip_include_exclude->complimentary ??''; ?>
                            </ul>
                        </div>  <?php */ ?>
                    </div>
                </div>
                @endif

                {{-- <div id="date-price" class="tds pt-10 bg-white px-4 lg:px-10 pb-4 mb-4">
                    <div class="bg-white p-3">
                        <div class="lg:flex justify-between items-center mb-4">
                            <h2 class="text-4xl lg:text-5xl font-display text-primary uppercase">Upcoming Departures
                            </h2>

                            <form action="">
                                <div class="form-group">
                                    <select name="" id="" class="bg-light">
                                        <option selected disabled>Choose Month & Year</option>
                                        <option value="">Jan 2021</option>
                                        <option value="">Feb 2021</option>
                                        <option value="">Mar 2021</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-1">
                            @for ($i=0; $i<8; $i++)
                            <div class="border-light p-2">
                                <div class="text-sm">
                                    <div class="flex aic mb-2">
                                        <svg class="w-4 h-4 mr-1 text-primary">
                                            <use xlink:href="{{ asset('assets/front/img/sprite.svg')}}#calendar" />
                                        </svg>
                                        <div>
                                            <span class="font-display text-xl text-primary">28 Dec 2019</span><br> to 15 Jan 2020
                                        </div>
                                    </div>
                                    <div class="flex aic mb-2">
                                        <svg class="w-4 h-4 mr-1 text-primary">
                                            <use xlink:href="{{ asset('assets/front/img/sprite.svg')}}#tag" />
                                        </svg>
                                        <div>
                                            <small class="text-gray"><s>USD 22,000</s></small><br>
                                            <span class="text-green">USD <b>20,000</b></span>
                                        </div>
                                    </div>
                                    <div class="flex mb-4">
                                        <svg class="w-4 h-4 mr-1 text-primary">
                                            <use xlink:href="{{ asset('assets/front/img/sprite.svg')}}#users" />
                                        </svg>
                                        4 seats left
                                    </div>
                                </div>
                                <div><a href="{{ route('tours.book', ['slug' => $trip->slug])}}" class="btn btn-sm btn-accent">Book now</a>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div> --}}

                <div id="reviews" class="tds pt-10 bg-white px-4 lg:px-10 pb-4 mb-4">
                    <div class="lg:flex justify-between items-center mb-4">
                        <h2 class="text-4xl lg:text-5xl font-display text-primary uppercase">Reviews
                        </h2>

                       <div>
                           <a href="write-review.php" class="btn btn-primary btn-sm mr-1" data-toggle="modal" data-target="#review-modal">
                                Write a review</a>
                       </div>
                    </div>
                    <div class="grid lg:grid-cols-2 gap-2 lg:gap-3">
                        @if(iterator_count($trip->trip_reviews))
                            @foreach($trip->trip_reviews()->where('status', 1)->get() as $review)
                            <div class="review p-4">
                                <div class="review__content">
                                    <h2 class="mb-2 font-display text-2xl text-primary">{{ $review->title }}</h2>
                                    <p>
                                        {{ $review->review }}
                                    </p>
                                </div>
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img src="{{ $review->thumbImageUrl }}" alt="">
                                    </div>
                                    <div>
                                        <div class="font-bold">{{ $review->review_name }}</div>
                                        <div class="text-sm text-gray">{{ $review->review_country }}</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>

                    <a href="reviews.php" class="theme">See more reviews
                        <svg>
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#arrownarrowright" />
                        </svg>
                    </a>
                </div>

                

                <div id="faqs" class="tds pt-10 bg-white px-4 lg:px-10 pb-4 mb-4">
                    <h2 class="mb-4 text-4xl lg:text-5xl font-display text-primary uppercase">Frequently Asked Questions</h2>

                    @if(!$trip->trip_faqs->isEmpty())
                        <div class="mb-4" x-data="{active: 'none'}">
                            @foreach($trip->trip_faqs as $i => $faq)
                                <div class="mb-1 border-light">
                                    <button class="flex justify-between items-center w-full p-2 text-left" @click="active = (active === {{ $i }} ? 'none' : {{ $i }})">
                                        <h3 class="font-display text-xl text-primary">{{ $faq->title }}</h3>

                                        <svg class="w-6 h-6 flex-shrink-0 text-primary" x-show="active!=={{ $i }}">
                                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#plus" />
                                        </svg>
                                        <svg class="w-6 h-6 flex-shrink-0 text-primary" x-show="active==={{ $i }}">
                                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#minus" />
                                        </svg>
                                    </button>
                                    <div class="p-4" x-cloak x-show.transition="active==={{ $i }}">
                                        <p class="mb-0">
                                            {!! $faq->description !!}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a href="#" class="mb-2 theme">Read more FAQs
                            <svg>
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#arrownarrowright" />
                            </svg>
                        </a>
                    @endif
                </div>

                <div class="flex justify-between flex-wrap mb-4">
                    <div class="flex mb-2">
                        <a href="{{ route('front.trips.booking', $trip->slug) }}" class="btn btn-accent mr-2">Book Now</a>
                        <a href="{{ route('front.trips.customize', $trip->slug) }}" class="btn btn-primary">
                            <svg class="w-6 h-6 mr-2">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#adjustments" />
                            </svg>
                            Customize
                        </a>
                    </div>
                    <div class="flex">
                        <a href="{{ route('front.trips.print', ['slug' => $trip->slug]) }}" class="flex items-center mr-2 p-1 text-accent" title="Print tour details">
                            <svg class="w-6 h-6 flex-shrink-0 mr-2">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#printer" />
                            </svg>
                            <span class="font-display uppercase">Print Tour Details</span>
                        </a>
                        <a href="{{ $trip->pdfLink }}" class="flex items-center p-1 text-accent" title="">
                            <svg class="w-6 h-6 flex-shrink-0 mr-2">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#download" />
                            </svg>
                            <span class="font-display uppercase">Download Tour Brochure</span>
                        </a>
                    </div>
                </div>

                <div>
                    <h2 class="mb-2 lg:text-xl font-display text-primary uppercase">Share this tour</h2>
                    <a href="#" class="text-primary hover:text-accent mr-2">
                        <svg class="w-6 h-6">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#facebook" />
                        </svg>
                    </a>
                    <a href="#" class="text-primary hover:text-accent mr-2">
                        <svg class="w-6 h-6">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#twitter" />
                        </svg>
                    </a>
                    <a href="#" class="text-primary hover:text-accent">
                        <svg class="w-6 h-6">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#instagram" />
                        </svg>
                    </a>
                </div>


            </div>

            <aside class="pt-10">

                @include('front.elements.price_card')

                {{-- <div class=" mb-3 text bg-primary text-white p-2">
                    <h4 class="mb-1 font-display upper">
                        You can customize this trip
                    </h4>
                    <ul class="mb-2 fs-sm">
                        <li><svg class="w-6 h-6 text-light">
                                <use xlink:href="img/sprite.svg#questionmarkcircle" />
                            </svg>
                            Have a big group?</li>
                        <li><svg class="w-6 h-6 text-light">
                                <use xlink:href="img/sprite.svg#questionmarkcircle" />
                            </svg>
                            Budget problem?</li>
                        <li><svg class="w-6 h-6 text-light">
                                <use xlink:href="img/sprite.svg#questionmarkcircle" />
                            </svg>
                            Date & Itinerary problem?</li>
                        <li><svg class="w-6 h-6 text-light">
                                <use xlink:href="img/sprite.svg#questionmarkcircle" />
                            </svg>
                            Wanna add / remove services?</li>
                    </ul>
                    <div class="fs-xs mb-2">
                        All right, we'll help you personalize your trips
                    </div>
                    <a href="customize-form.php" class="btn btn-sm btn-theme" title="Customize this tour">
                        Customize
                        <svg class="w-6 h-6">
                            <use xlink:href="img/sprite.svg#adjustments" />
                        </svg>
                    </a>
                </div> --}}

                <a href="{{ route('front.trips.agency', $trip->slug) }}" class="mb-8 btn btn-accent w-full">Ask for agency price</a>

                @include('front.elements.enquiry')
                
                @if($trip->map_file_name)
                <div class="mb-8">
                    <div class="card-header">
                        <h2 class="mb-2">Map & Route</h2>
                    </div>
                    <div class="card-body p-0">
                        <a data-fancybox data-caption="Route Map" href="{{ $trip->mapImageUrl }}">
                            <img class="img-fluid" src="{{ $trip->mapImageUrl }}" alt="">
                        </a>
                    </div>
                </div>
                 @endif 
                {{--
                <div class="mb-8">
                    <div class="card-header">
                        <h2 class="mb-2 font-display text-2xl text-primary uppercase">Route Map</h2>
                    </div>
                    <div class="card-body p-0">
                        <a data-fancybox data-caption="Annapurna Base Camp Trek Map" href="{{ asset('assets/front/img/annapurnaregion-01.jpg') }}">
                            <img class="img-fluid" src="{{ asset('assets/front/img/annapurnaregion-01.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                --}}

                <div class="experts-card bg-primary px-2 py-10 text-white">
                    <div class="grid grid-cols-3">
                        <div class="col-span-2">
                            <p class="mb-0">Still confused?</p>
                            <h3 class="mb-2">Talk to our experts</h3>
                        </div>
                        <div>
                            <svg class="w-20 h-20">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#customersupport" />
                            </svg>
                        </div>
                    </div>
                    <div class="experts-phone flex mb-1">
                        <a href="tel:+977 01 4416 177" class="flex aic">
                            <svg class="w-6 h-6 mr-1">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#phone" />
                            </svg>
                            {{ Setting::get('mobile1') }}
                        </a>
                    </div>
                    <div class="experts-phone flex mb-1">
                        <a href="tel:+977 9851 039 480" class="flex aic">
                            <svg class="w-6 h-6 mr-1">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#devicemobile" />
                            </svg>
                            {{ Setting::get('mobile2') }}
                        </a>
                    </div>
                    <div class="experts-phone flex mb-3" style="font-size: 14px;">
                        <a href="mailto:{{ Setting::get('email') }}" class="flex aic">
                            <svg class="w-6 h-6 mr-1">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#mail" />
                            </svg>
                            {{ Setting::get('email') }}
                        </a>
                    </div>
                </div>
                <div class="mb-8 p-2 bg-light">
                    <a href="{{ Setting::get('facebook') }}" class="text-primary hover:text-accent mr-1">
                        <svg class="w-6 h-6">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#facebookmessenger" />
                        </svg>
                    </a>
                    <a href="{{ Setting::get('viber') }}" class="text-primary hover:text-accent mr-1">
                        <svg class="w-6 h-6">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#viber" />
                        </svg>
                    </a>
                    <a href="{{ Setting::get('whatsapp') }}" class="text-primary hover:text-accent mr-1">
                        <svg class="w-6 h-6">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#whatsapp" />
                        </svg>
                    </a>
                    <a href="{{ Setting::get('skype') }}" class="text-primary hover:text-accent mr-1">
                        <svg class="w-6 h-6">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#skype" />
                        </svg>
                    </a>
                    <a href="{{ Setting::get('weixin') }}" class="text-primary hover:text-accent mr-1">
                        <svg class="w-6 h-6">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#weixin" />
                        </svg>
                    </a>
                </div>

                @if ($essential_trip_informations)
                <div class="mb-8 bg-white p-2 lg:p-4">
                    <h2 class="mb-2 font-display text-2xl text-primary uppercase">Essential Trip Info</h2>
                    <ul class="text-sm px-2" >
                        @foreach ($essential_trip_informations as $trip_info)
                        <li class="mb-1">
                            <a href="{!! ($trip_info->link)?$trip_info->link:'javascript:;' !!}" target="_blank">
                                <svg class="w-4 h-4 mr-1 text-gray">
                                    <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#arrownarrowright" />
                                </svg>
                                {{ $trip_info->name }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif


                <div class="mb-8">

                    <h2 class="mb-2 font-display text-2xl text-primary uppercase">Additional Tours</h2>
                    @if(iterator_count($trip->addon_trips))
                        @foreach ($trip->addon_trips as $addon_trip)
                            @include('front.elements.addon_trip', ['trip' => $addon_trip])
                        @endforeach
                    @endif
                </div>

                <div class="mb-8">
                    <img src="{{ asset('assets/front/img/tripadvisor.png') }}" alt="">
                </div>

                <div class="sticky-top sticky-price none lg:block" style="top: 5rem;">
                    @include('front.elements.price_card')
                </div>
            </aside>
        </div>
    </div>
{{--
    <!-- Similar -->
    @if (!$trip->similar_trips->isEmpty())
    <div class="bg-light py-20 ">
        <div class="container">
            <h2 class="text-4xl lg:text-5xl font-display text-primary uppercase">Similar Tours</h2>
            <div class="grid gap-10">
                @forelse ($trip->similar_trips as $s_trip)
                    @include('front.elements.tour-card', ['tour' => $s_trip, 'main_style' => 'height: 350px;'])
                @empty
                @endforelse
            </div>
        </div>
    </div> <!-- Similar -->
    @endif

<!-- Trip of the month -->
<div class="py-10 bg-primary text-white">
    <div class="container">

        <div class="lg:flex justify-between items-center mb-4">
            <h1 class="text-4xl lg:text-5xl font-display uppercase">Trips of the month
            </h1>

            <div class="trips-month-slider-controls">
                <button>
                    <svg class="w-6 h-6 text-accent">
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#arrownarrowleft" />
                    </svg>
                </button>
                <button>
                    <svg class="w-6 h-6 text-accent">
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#arrownarrowright" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="trips-month-slider">
            @foreach ($block_2_trips as $b2_trip)
                @include('front.elements.tour_card_slider', ['tour' => $b2_trip])
            @endforeach
        </div>
    </section>
</div>


<a href="#" class="btn btn-accent lg:none w-full fixed" style="bottom:0;border-radius:0">Book Now</a>
--}}
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tiny-slider@2.9.3/dist/tiny-slider.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/wheelzoom@4.0.1/wheelzoom.min.js"></script>
<script>
    // jQuery.noConflict(true);
</script>
<script>
    wheelzoom(document.querySelector('.wheelzoom'))
</script>
<script>
window.onload = function() {

  var session_success_message = '{{ $session_success_message ?? '' }}';
  var session_error_message = '{{ $session_error_message ?? '' }}';
  if (session_success_message) {
    toastr.success(session_success_message);
  }

  if (session_error_message) {
    toastr.danger(session_error_message);
  }

  //Display user image upon select
  const showImage = (src, target) => {
    var fr = new FileReader();
    // when image is loaded, set the src of the image where you want to display it
    fr.onload = function(e) {
      target.src = this.result;
    };
    src.addEventListener("change", function() {
      // fill fr with image data
      fr.readAsDataURL(src.files[0]);
    });
  }
  const src = document.getElementById("photo-input");
  const target = document.getElementById("write-review-photo");
}
</script>
<script type="text/javascript">
$(function() {
    function expandAll() {
        // alert('h');
    }
    $('#map-modal').on('show.bs.modal', function (e) {
      setTimeout(function() {
        let img = '<img class="img-fluid map-image-modal" src="{{ $mapImageUrl }}" alt="">';
        $("#map-modal").find(".modal-body").html(img);
        wheelzoom($('.map-image-modal'));
      }, 500);
    });

    const heroSlider = tns({
        container: '.hero-slider',
        nav: false,
        controlsContainer: '.hero-slider-controls > div',
        autoplay: true,
        autoplayButtonOutput: false
    })

    const monthSlider = tns({
        container: '.trips-month-slider',
        nav: false,
        controlsContainer: '.trips-month-slider-controls',
        autoplay: true,
        autoplayButtonOutput: false
    })

    window.addEventListener('DOMContentLoaded', () => {

        const headerScrollObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    header.classList.add('none')
                    header.classList.remove('flex')
                } else {
                    header.classList.remove('none')
                    header.classList.add('flex')
                }
            })
        })
        headerScrollObserver.observe(document.querySelector('#tourDetailsBarIO'))

        const tdb = document.querySelector('.tdb')
        const sections = document.querySelectorAll('.tds')
        const sectionScrollObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                const link = tdb.querySelector(`[href="#${entry.target.id}"]`)
                if (entry.isIntersecting) {
                    console.log(observer.rootMargin);
                    link.classList.add('bg-accent')
                } else {
                    link.classList.remove('bg-accent')
                }
            })
        }, {
            rootMargin: "-19% 0px -80% 0px"
        })
        sections.forEach(section => {
            sectionScrollObserver.observe(section)
        })

    })
});
</script>
<script>
    $(function() {
        var enquiry_validator = $("#enquiry-form").validate({
            ignore: "",
            rules: {
                'name': 'required',
                'email': 'required',
                'country': 'required',
                'phone': 'required',
                'message': 'required',
            },
            submitHandler: function(form, event) {
                event.preventDefault();
                $(form).find('#redirect-url').val('{!! route("front.trips.show", $trip->slug) !!}');
                if (grecaptcha.getResponse(0)) {
                    var btn = $(form).find('button[type=submit]').attr('disabled', true).html('Sending...');
                    setTimeout(() => {
                        form.submit();
                    }, 500);
                }else{
                    grecaptcha.reset(enquiry_captcha);
                    grecaptcha.execute(enquiry_captcha);
                }
            },
        });
    });
    function onSubmitReview(token) {
        $("#review-form").submit();
        return true;
    }

    function onSubmitEnquiry(token) {
        $("#enquiry-form").submit();
        return true;
    }

    let enquiry_captcha;
    let review_captcha;
    var CaptchaCallback = function() {
        enquiry_captcha = grecaptcha.render('inquiry-g-recaptcha', {'sitekey' : '{!! config("constants.recaptcha.sitekey") !!}'});
        // review_captcha = grecaptcha.render('review-g-recaptcha', {'sitekey' : '{!! config("constants.recaptcha.sitekey") !!}'});
    };
</script>
@endpush


