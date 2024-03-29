@extends('layouts.front')
@section('content')
<!-- Slider -->
@include('front.elements.banner')
<!-- Slider -->

<!-- Popular right now -->
<div class="featured py-10 bg-light">
    <div class="container">

        <div class="lg:flex justify-between items-center mb-4">
            <h1 class="text-4xl lg:text-5xl font-display text-primary uppercase">Luxury Packages</h1>
            <a href="https://www.royalhimalayanholidays.com/trips" class="btn btn-accent shadow-md">
                View all
                <svg class="w-4 h-4">
                    <use xlink:href="{{ asset('assets/front/img/sprite.svg#chevronright') }}" />
                </svg>
            </a>
        </div>

        <div class="grid gap-2 md:gap-4">
            @forelse ($block_1_trips as $block_1_tour)
                @include('front.elements.tour-card', ['tour' => $block_1_tour])
            @empty
            @endforelse
        </div>
    </div>
</div> <!-- Popular right now -->

<!-- Regions -->
<div class="destinations py-10">
    <div class="container">
        <div class="lg:flex justify-between items-center mb-4">
            <h1 class="text-4xl lg:text-5xl font-display text-primary uppercase">Regions</h1>
            <a href="https://www.royalhimalayanholidays.com/trips" class="btn btn-accent shadow-md">
                View all
                <svg class="w-4 h-4">
                    <use xlink:href="{{ asset('assets/front/img/sprite.svg#chevronright') }}" />
                </svg>
            </a>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-2">
            @forelse ($regions as $region)
                <div class="destination relative">
                    <a href="{{ route('front.destinations.show', $region->slug) }}">
                        <img src="{{ $region->imageUrl }}" alt="">
                        <div class="absolute text bg-white p-4">
                            <h2 class="font-bold">{{ $region->name }}</h2>
                            <div class="text-gray text-sm">{{ $region->trips->count() }} tours</div>
                        </div>
                    </a>
                </div>
            @empty
            @endforelse
        </div>
    </div>
</div><!-- Destinations -->

<!-- About -->
<div class="about bg-light py-10">
    <div class="container">
        <div class="grid lg:grid-cols-2 gap-10">
            <div>
                <h1 class="mb-4 text-4xl lg:text-5xl text-primary font-display uppercase">Why Choose Royal Himalayan Holidays</h1>
                @forelse ($why_chooses as $item)
                    <div class="flex">
                        <img src="{{ $item->imageUrl }}" alt="">
                        {{-- <svg class="mr-4 w-10 h-10 text-primary flex-shrink-0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor"
                            d="M398.6 449.2a7.5 7.5 0 00-10.6.7l-30.9 35.4c-3.3 3.7-7.8 5.9-12.8 6-5 .2-9.6-1.6-13.2-5.2l-23.8-23.8v-15.7a7.5 7.5 0 10-15 0V504.5a7.5 7.5 0 1015 0v-21l13.2 13.3a33 33 0 0048-1.7l30.8-35.3a7.5 7.5 0 00-.7-10.6zM87.1 439a7.5 7.5 0 00-7.5 7.5v57.9a7.5 7.5 0 1015 0v-58c0-4-3.3-7.4-7.5-7.4zm415.4-320.2l-50.3-40.8a11.4 11.4 0 00-12.2-1.5c-4 2-6.5 5.9-6.5 10.4V305L358 391.2l-24-44.7a78.8 78.8 0 00-56.3-40.3l-41.2-6.7c-6.2-1-10.7-6.3-10.7-12.6V278a93.7 93.7 0 0043.6-78.9V196h3a27.8 27.8 0 0027.4-27.5c0-7.9-3.5-15.2-9.1-20.3a23.8 23.8 0 00-9.7-35.5l-2.4-1v-54A57.6 57.6 0 00221.1 0h-89.5a57.6 57.6 0 00-57.5 57.5v54l-2.4 1a23.8 23.8 0 00-9.7 35.6 27.6 27.6 0 00-9 20.3A27.7 27.7 0 0080.3 196h2.9v3.2a93.1 93.1 0 0043.6 78.9v10.4c0 5.8-4 10.8-9.5 12.1L55 316a67.4 67.4 0 00-51.4 65.5v123.1a7.5 7.5 0 1015 0v-123a52.4 52.4 0 0140-51l48.2-12a81.7 81.7 0 00140.2-2.1l28.1 4.6a63.7 63.7 0 0145.6 32.6l24.2 45.2a14.6 14.6 0 0023.8 2.7l51.4-58.5 32.6 32.6h.1l-41.8 48a7.5 7.5 0 0011.3 9.8l69-78.9a38 38 0 00-42.9-60.4V187l54-44a15.5 15.5 0 000-24.1zm-217.7 49.5c0 6.8-5.7 12.5-12.5 12.5h-2.9V158c2.9.2 5.7 0 8.4-.9 4.2 2.1 7 6.4 7 11.2zM83.3 181h-3c-6.7 0-12.4-5.7-12.4-12.5 0-4.8 2.8-9 7-11.2a24 24 0 008.4 1v22.7zm1.8-38.5a9 9 0 01-11.5-4 8.8 8.8 0 014.2-12.1A242.8 242.8 0 01209 107.6a7.5 7.5 0 002-14.9 257.8 257.8 0 00-122 12.9v-48C89 34 108 15 131.6 15h89.5c23.5 0 42.5 19 42.5 42.5v48c-5.7-2-11.5-3.8-17.4-5.5a7.5 7.5 0 00-4 14.5c11.1 3 22.1 7 32.7 11.8 4.5 2 6.5 7.6 4.2 12a9 9 0 01-11.5 4.1 231.6 231.6 0 00-182.5 0zm13.2 56.7v-45.9c50-20 106.1-20 156.2 0v46c0 20.8-8.2 40.4-23 55.2a78.2 78.2 0 01-133.3-55.2zm78 143a66.7 66.7 0 01-54-27.4 28 28 0 0019.6-29 92.6 92.6 0 0069 0c-.8 12.9 8 24.6 20.2 27.9a66.4 66.4 0 01-54.7 28.5zm300.8-30.6c10 8 11.5 23.5 3 33.2l-17.3 19.7-32.7-32.8 15.3-17.3a23 23 0 0131.7-2.8zm16-180l-44.6 36.1V94.3l44.5 36.2c.3.2.3.8 0 1zm-275.4 62c4 0 7.5-3.4 7.5-7.5v-16.6a7.5 7.5 0 10-15 0V186c0 4.1 3.3 7.5 7.5 7.5zM135 161.9a7.5 7.5 0 00-7.5 7.5V186a7.5 7.5 0 1015 0v-16.6c0-4.1-3.4-7.5-7.5-7.5zm64.3 68.9c-2-3.7-6.5-5-10.1-3a27 27 0 01-25.9 0 7.5 7.5 0 10-7.2 13.1 42 42 0 0040.3 0c3.6-2 5-6.5 3-10.1z" />
                        </svg> --}}
                        <div>
                            <h2 class="font-bold">{{ $item->title }}</h2>
                            <p></p>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
            <div class="home-video-wrapper">
                <iframe class="home-video" src="https://www.youtube.com/embed/dFLxa0VwY-E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>
    </div>
</div><!-- About -->

<div class="activities py-10">
    <div class="container">
        <div class="lg:flex justify-between items-center mb-4">
            <h1 class="text-4xl lg:text-5xl font-display text-primary uppercase">Nepal</h1>
            <a href="https://www.royalhimalayanholidays.com/trips" class="btn btn-accent shadow-md">
                View all
                <svg class="w-4 h-4">
                    <use xlink:href="{{ asset('assets/front/img/sprite.svg#chevronright') }}" />
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-3">
            @forelse ($activities as $activity)
                @include('front.elements.activity-card', ['activity' => $activity])
            @empty
            @endforelse
        </div>

    </div>
</div>



<!-- Reviews -->
<div class="reviews py-10">
    <div class="container">

        <div class="lg:flex justify-between items-center mb-4">
            <h1 class="text-4xl lg:text-5xl font-display text-primary uppercase">Reviews from our
                customers</h1>
            <a href="https://www.royalhimalayanholidays.com/reviews" class="btn btn-accent shadow-md">
                View all
                <svg class="w-4 h-4">
                    <use xlink:href="{{ asset('assets/front/img/sprite.svg#chevronright') }}" />
                </svg>
            </a>
        </div>

        <div class="grid lg:grid-cols-2 gap-2 lg:gap-3">
            @forelse ($reviews as $review)
                <div class="review p-4">
                    <div class="review__content">
                        <h2 class="mb-2 font-display text-2xl text-primary">{{ $review->title }}</h2>
                        {{ $review->review }}
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
            @empty
            @endforelse
        </div>
    </div>
</div><!-- Reviews -->

<!-- Trip of the month -->
<div class="py-10 bg-primary text-white">
    <div class="container">
        <div class="lg:flex justify-between items-center mb-4">
            <h1 class="text-4xl lg:text-5xl font-display uppercase">Best Available treks
            </h1>

            <div class="trips-month-slider-controls">
                <button>
                    <svg class="w-6 h-6 text-accent">
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg#arrownarrowleft') }}" />
                    </svg>
                </button>
                <button>
                    <svg class="w-6 h-6 text-accent">
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg#arrownarrowright') }}" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="trips-month-slider">
            @forelse ($block_3_trips as $block3tour)
                @include('front.elements.tour_card_slider', ['tour' => $block3tour])
            @empty
            @endforelse
        </div>
    </div>
</div>

<!-- Videos & TA -->
<div class="vta bg-light">
    <div class="container">
        <div class="video">
            <div class="video-wrapper mb-5">
                {{-- <iframe src="https://www.youtube.com/embed/AdXz3RG4EYY?modestbranding=1" frameborder="0" allowfullscreen=""></iframe> --}}
            </div>
        </div>
    </div>
</div>

<!-- Blog -->
<div class="blog py-10">
    <div class="container">
        <h1 class="mb-4 text-4xl lg:text-5xl text-primary font-display uppercase">Blog
                </h1>
        <div class="grid md:grid-cols-3 gap-2 lg:gap-3">
            @forelse ($blogs as $blog)
                @include('front.elements.blog_card', $blog)
            @empty
            @endforelse
        </div>
        <a href="{{ ('/blogs') }}" class="theme">Go to blog
            <svg>
                <use xlink:href="{{ asset('assets/front/img/sprite.svg#arrownarrowright') }}" />
            </svg>
        </a>
    </div>
</div><!-- Blog -->

<!-- Search Widget -->
@include('front.elements.search_widget')
<!-- Search Widget -->
@endsection
