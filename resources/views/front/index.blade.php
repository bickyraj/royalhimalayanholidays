@extends('layouts.front')
@section('content')
<!-- Hero -->
<div class="hero">
    <!-- Slider -->
    @include('front.elements.banner')
    <!-- Slider -->

    <!-- Search Widget -->
    @include('front.elements.search_widget')
    <!-- Search Widget -->

</div><!-- Hero -->

{{-- Tour Activities --}}
<div class="activities section">
    <div class="container">
        <h1>Tour Activities</h1>

        <div class="grid">
            @forelse ($activities as $activity)
                @include('front.elements.activity-card', ['activity' => $activity])
            @empty

            @endforelse
        </div>
    </div>
</div>

{{-- About Section --}}
<div class="about section bg-light">
    <div class="container">
        <div class="grid">
            <div class="about__text">
                <?= Setting::get('homePage')['welcome']['content'] ?? '' ?>
                <div>
                    <a href="{{ route('front.teams.index') }}" class="theme">
                        Our Team
                        <svg>
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#arrownarrowright" />
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="{{ route('front.trips.all-gallery') }}" class="theme">
                        Gallery
                        <svg>
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#arrownarrowright" />
                        </svg>
                    </a>
                </div>
                <img src="{{ asset('assets/front/img/about.jpg') }}" alt="Syowanbhunath Stupa, Kathmandu" class="about__imgsm">
            </div>
            <div class="about__imagewrapper">
                <img src="{{ asset('assets/front/img/about2.jpg') }}" alt="" class="about__img">
            </div>
        </div>
    </div>
</div><!-- About -->

<!-- Destinations -->
<div class="destinations section">
    <div class="container">
        <div class="grid">
            <div>
                <h1>Where do you want to go?</h1>
                <div class="destination__controls">
                    <button class="dest-prev">
                        <svg>
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#arrownarrowleft" />
                        </svg>
                    </button>
                    <button class="dest-next">
                        <svg>
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#arrownarrowright" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="destination__wrapper">
                <div class="destination__slider">
                    @forelse ($destinations as $destination)
                        <div class="destination">
                            <a href="{{ route('front.destinations.show', $destination->slug) }}">
                                <img src="{{ $destination->imageUrl }}" alt="">
                                <div class="overlay">
                                    <h2>{{ $destination->name }}</h2>
                                    <div>{{ $destination->trips->count() }} tours</div>
                                </div>
                            </a>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div><!-- Destinations -->

<!-- Featured -->
<div class="featured section bg-light">
    <div class="container">
        <h1>Popular Right Now</h1>
        <div class="grid gap-2 xl:gap-3">
            @forelse ($block_1_trips as $block_1_tour)
                @include('front.elements.tour-card', ['tour' => $block_1_tour])
            @empty
            @endforelse
        </div>
    </div>
</div> <!-- Featured -->

<!-- Reviews -->
<div class="reviews section">
    <div class="container">
        <h1>Reviews from our customers</h1>
        <div class="grid">
            @forelse ($reviews as $review)
                <div class="review">
                    <div class="review__content">
                        <h2>{{ $review->title }}</h2>
                        <p>{{ $review->review }}</p>
                    </div>
                    <div class="review__person">
                        <div class="image">
                            <img src="{{ $review->thumbImageUrl }}" alt="">
                        </div>
                        <div>
                            <div class="name">{{ $review->review_name }}</div>
                            <div class="from">{{ $review->review_country }}</div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        <a href="reviews.php" class="theme">Read reviews
            <svg>
                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#arrownarrowright" /></svg>
        </a>
    </div>
</div><!-- Reviews -->

<!-- Videos & TA -->
<div class="vta section bg-light">
    <div class="container">
        <div class="video">
            <div class="video-wrapper mb-5">
                <iframe src="{{ Setting::get('homePage')['video']['link'] ?? '' }}" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
        <div class="tripadvisor">
            <img src="https://www.tripadvisor.com/TripAdvisorInsights/wp-content/uploads/2018/01/widget_long_form_copy.jpg%22" alt="Tripadvisor">
            <!-- <div id="TA_selfserveprop827" class="TA_selfserveprop">
                <ul id="4KT9a3oFnlGT" class="TA_links rF98AxM5Q">
                    <li id="4OLTP8Z" class="106qXXM9"><a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g293890-d17581480-Reviews-Hiker_Himalaya_Treks_Expedition_Pvt_Ltd-Kathmandu_Kathmandu_Valley_Bagmati_Zone_.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-11900-2.svg" alt="TripAdvisor" /></a></li>
                </ul>
            </div>
            <script async src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=827&amp;locationId=17581480&amp;lang=en_US&amp;rating=true&amp;nreviews=4&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=true&amp;border=true&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script> -->
        </div>
    </div>
</div>

<!-- Trip of the month -->
<div class="section bg-primary text-white">
    <div class="container">
        <div class="lg:flex jcsb aife">
            <h1 class="text-white mr-2">Trips of the month</h1>
            <div class="tripsSlider__controls">
                <button>
                    <svg class="icon-md text-accent">
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg#arrownarrowleft') }}" />
                    </svg>
                </button>
                <button>
                    <svg class="icon-md text-accent">
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg#arrownarrowright') }}" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="relative">
            <div class="trips__slider">
                @forelse ($block_2_trips as $block2tour)
                    @include('front.elements.tour_card_slider', $block2tour)
                @empty
                @endforelse
            </div>
        </div>
    </div>
</div>

<!-- Departure Dates -->
<div class="departure-dates section">
    <div class="container">
        <div class="flex wrap jcsb aic">
            <h1 class="fs-xl mr-2">Upcoming Departures</h1>
            <div class="mb-2">
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
        </div>
        <div class="bg-white">
            <!-- <h2>Date & Price</h2> -->
            <!-- <h3>Upcoming Departure Dates</h3> -->
            <div class="table-wrapper-scroll">
                <table class="table mb-2">
                    <thead>
                        <th class="upper text-left">Tour</th>
                        <th class="upper text-left">Date</th>
                        <th class="upper text-left">Price</th>
                        <th class="upper text-left">Seats Left</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @forelse ($departures as $departure)
                            <tr>
                                <td>
                                    <a href="{{ route('front.trips.show', $departure->trip->slug) }}">
                                        <?= $departure->trip->name; ?>
                                    </a>
                                </td>
                                <td>
                                    <div class="flex aic">
                                        <svg class="icon mr-1 text-primary">
                                            <use xlink:href="{{ asset('assets/front/img/sprite.svg#calendar') }}" />
                                        </svg>
                                        {{ formatDate($departure->from_date) }} — {{ formatDate($departure->to_date) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="flex aic">
                                        <svg class="icon mr-1 text-primary">
                                            <use xlink:href="{{ asset('assets/front/img/sprite.svg#tag') }}" />
                                        </svg>
                                        <div>
                                            <small class="text-gray"><s>USD {{ number_format($departure->trip->cost) }}</s></small><br>
                                            <span class="text-green">USD <b>{{ number_format($departure->price) }}</b></span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex aic">
                                        <svg class="icon mr-1 text-primary">
                                            <use xlink:href="{{ asset('assets/front/img/sprite.svg#users') }}" />
                                        </svg>
                                        {{ $departure->seats }}
                                    </div>
                                </td>
                                <td><a href="{{ route('front.trips.departure-booking', ['slug' => $departure->trip->slug, 'id' => $departure->id]) }}" class="btn btn-sm btn-theme">Book now</a></td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
                <!-- <p class="text-center"><button id="more-dates" class="btn btn-sm btn-gray">See more dates</button></p> -->
            </div>
        </div>
    </div>
</div><!-- Departure Dates -->

<!-- Blog -->
<div class="blog section">
    <div class="container">
        <!-- <h1>Reviews from our customers</h1> -->
        <div class="grid">
            @forelse ($blogs as $blog)
                <a href="blog-article.php">
                    <div class="article">
                        <div class="image">
                            <img src="{{ $blog->imageUrl }}" alt="">
                        </div>
                        <div class="content">
                            <h2>{{ $blog->name }}</h2>
                            <p class="fs-sm">{{ truncate(strip_tags($blog->description)) }}</p>
                        </div>
                    </div>
                </a>
            @empty
            @endforelse
        </div>
        <a href="{{ route('front.blogs.index') }}" class="theme">Go to blog
            <svg>
                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#arrownarrowright" /></svg>
        </a>
    </div>
</div><!-- Blog -->
@endsection

@push('scripts')
<script>
    $(function() {
        $("#banner-slider>.slide").each(function(i, v) {
            let img = new Image();
            let image_src = $(v).find('img').data('img');
            img.onload = function() {
                $(v).find('img').attr('src', image_src);
            }
            img.src = image_src;
            if (img.complete) img.onload();
        });
    });
</script>
@endpush
