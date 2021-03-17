@extends ('layouts.app')

@section ('title', 'Annapurna Base Camp Tour')

@push ('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tiny-slider@2.9.3/dist/tiny-slider.css">
    <style>
        .embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
    </style>
@endpush

@section ('content')


    <!-- Hero -->
    <section class="hero relative">
        <div class="hero-slider">
            <img src="{{ asset('img/'.$tour->image) }}" class="block" alt="">
            <img src="{{ asset('img/'.$tour->image) }}" class="block" alt="">
            <img src="{{ asset('img/'.$tour->image) }}" class="block" alt="">
        </div>

        <div class="overlay absolute w-full">
            <div class="container flex justify-between items-end flex-wrap">
                <div>
                    <div class="hero-slider-controls none md:block">
                        <div class="flex">
                            <button>
                                <svg class="w-6 h-6">
                                    <use xlink:href="{{ asset('img/sprite.svg') }}#arrownarrowleft" />
                                </svg>
                            </button>
                            <button>
                                <svg class="w-6 h-6">
                                    <use xlink:href="{{ asset('img/sprite.svg') }}#arrownarrowright" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <h1 class="mb-2 font-display text-white text-4xl lg:text-4xl lg:text-5xl uppercase">
                        <span>{{ $tour->name }}</span>
                    </h1>

                    <div class="breadcrumb-wrapper none md:block">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb fs-sm wrap">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('tours.index') }}">Nepal</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('tours.index') }}">Trekkings</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Everest Three Passes Trek</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="ratings-wrapper none lg:block">
                    <div class="ratings d-flex align-items-center bg-primary text-white px-6 py-4 text-secondary">
                        <div>
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-4 h-4 text-accent">
                                    <use xlink:href="{{ asset('img/sprite.svg') }}#star" />
                                </svg>
                            @endfor
                        </div>
                        <div class="text-xs">from 25 reviews</div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="bg-gray">
        <!-- Sticky Nav -->
        <div id="tourDetailsBarIO"></div>
        <div class="tdb bg-primary text-white sticky-top" style="z-index:99">
            <div class="container flex justify-center items-center">
                <nav class="tour-details-tabs flex justify-center items-center" id="secondnav">
                    <ul class="nav flex flex-wrap py-1">
                        <li class="mr-2">
                            <a href="#overview" class="flex items-center p-2 hover:bg-white hover:text-primary">
                                <svg class="w-6 h-6 md:mr-2">
                                    <use xlink:href="{{ asset('img/sprite.svg') }}#viewgrid" />
                                </svg>
                                <span class="none md:block">Overview</span>
                            </a>
                        </li>
                        <li class="mr-2">
                            <a href="#itinerary" class="flex items-center p-2 hover:bg-white hover:text-primary">
                                <svg class="w-6 h-6 md:mr-2">
                                    <use xlink:href="{{ asset('img/sprite.svg') }}#clock" />
                                </svg>
                                <span class="none md:block">Itinerary</span></a>
                        </li>
                        <li class="mr-2">
                            <a href="#inclusions" class="flex items-center p-2 hover:bg-white hover:text-primary">
                                <svg class="w-6 h-6 md:mr-2">
                                    <use xlink:href="{{ asset('img/sprite.svg') }}#archive" />
                                </svg>
                                <span class="none md:block">Inclusions</span>
                            </a>
                        </li>
                        <li class="mr-2">
                            <a href="#date-price" class="flex items-center p-2 hover:bg-white hover:text-primary">
                                <svg class="w-6 h-6 md:mr-2">
                                    <use xlink:href="{{ asset('img/sprite.svg') }}#calendar" />
                                </svg>
                                <span class="none md:block">Date & Price</span></a>
                        </li>
                        <li class="mr-2">
                            <a href="#reviews" class="flex items-center p-2 hover:bg-white hover:text-primary">
                                <svg class="w-6 h-6 md:mr-2">
                                    <use xlink:href="{{ asset('img/sprite.svg') }}#chat" />
                                </svg>
                                <span class="none md:block">Review</span></a>
                        </li>
                        <li class="mr-2">
                            <a href="#faqs" class="flex items-center p-2 hover:bg-white hover:text-primary">
                                <svg class="w-6 h-6 md:mr-2">
                                    <use xlink:href="{{ asset('img/sprite.svg') }}#questionmarkcircle" />
                                </svg>
                                <span class="none md:block">FAQs</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!-- Sticky Nav -->

        <div class="container mt-2 pb-20">

            <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-2 lg:gap-10">

                <div class="lg:col-span-2 xl:col-span-3 relative">

                    <div class="lg:none">
                        @include('partials.pricecard')
                    </div>

                    <div id="overview" class="tds pt-10 bg-white px-4 lg:px-10 pb-4 mb-4">
                        <div>

                            <div class="mb-6 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <div class="flex aic">
                                    <div class="mr-4">
                                        <svg class="w-10 h-10 text-primary">
                                            <use xlink:href="{{asset('img/sprite.svg')}}#calendarduration" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-bold text-gray">
                                            Duration
                                        </div>
                                        <div>
                                            20 days
                                        </div>
                                    </div>
                                </div>

                                <div class="flex aic">
                                    <div class="mr-4">
                                        <svg class="w-10 h-10 text-primary">
                                            <use xlink:href="{{asset('img/sprite.svg')}}#maxelevation" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-bold text-gray">
                                            Max. Elevation
                                        </div>
                                        <div>
                                            5000m
                                        </div>
                                    </div>
                                </div>

                                <div class="flex aic">
                                    <div class="mr-4">
                                        <svg class="w-10 h-10 text-primary">
                                            <use xlink:href="{{asset('img/sprite.svg')}}#groupsize" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-bold text-gray">
                                            Group size
                                        </div>
                                        <div>
                                            8-12
                                        </div>
                                    </div>
                                </div>

                                <div class="flex aic">
                                    <div class="mr-4">
                                        <svg class="w-10 h-10 text-primary">
                                            <use xlink:href="{{asset('img/sprite.svg')}}#level" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-bold text-gray">
                                            Level
                                        </div>
                                        <div>
                                            Advanced
                                        </div>
                                    </div>
                                </div>

                                <div class="flex aic">
                                    <div class="mr-4">
                                        <svg class="w-10 h-10 text-primary">
                                            <use xlink:href="{{asset('img/sprite.svg')}}#transportation" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-bold text-gray">
                                            Transportation
                                        </div>
                                        <div>
                                            Domestic Flight, Private Vehicles
                                        </div>
                                    </div>
                                </div>

                                <div class="flex aic">
                                    <div class="mr-4">
                                        <svg class="w-10 h-10 text-primary">
                                            <use xlink:href="{{asset('img/sprite.svg')}}#bestseason" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-bold text-gray">
                                            Best Season
                                        </div>
                                        <div>
                                            March to May,
                                            September to December
                                        </div>
                                    </div>
                                </div>

                                <div class="flex aic">
                                    <div class="mr-4">
                                        <svg class="w-10 h-10 text-primary">
                                            <use xlink:href="{{asset('img/sprite.svg')}}#accomodation" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-bold text-gray">
                                            Accomodation
                                        </div>
                                        <div>
                                            Hotels, Guest Houses
                                        </div>
                                    </div>
                                </div>

                                <div class="flex aic">
                                    <div class="mr-4">
                                        <svg class="w-10 h-10 text-primary">
                                            <use xlink:href="{{asset('img/sprite.svg')}}#meals" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-bold text-gray">
                                            Meals
                                        </div>
                                        <div>
                                            20 Breakfasts,
                                            20 Lunches,
                                            9 Dinners
                                        </div>
                                    </div>
                                </div>

                                <div class="flex aic">
                                    <div class="mr-4">
                                        <svg class="w-10 h-10 text-primary">
                                            <use xlink:href="{{asset('img/sprite.svg')}}#startsat" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-bold text-gray">
                                            Starts at
                                        </div>
                                        <div>
                                            Kathmandu
                                        </div>
                                    </div>
                                </div>

                                <div class="table-item flex aic">
                                    <div class="mr-4">
                                        <svg class="w-10 h-10 text-primary">
                                            <use xlink:href="{{asset('img/sprite.svg')}}#endsat" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-bold text-gray">
                                            Ends at
                                        </div>
                                        <div>
                                            Kathmandu
                                        </div>
                                    </div>
                                </div>

                                <div class="flex aic lg:col-span-2">
                                    <div class="mr-4">
                                        <svg class="w-10 h-10 text-primary">
                                            <use xlink:href="{{asset('img/sprite.svg')}}#triproute" />
                                        </svg>
                                    </div>

                                    <div>
                                        <div class="text-sm font-bold text-gray">
                                            Trip Route
                                        </div>
                                        <div>
                                            Lukla - Namche Bazzar - Tengboche - Dinboche - Kongma La - Gorakshep - Everest Base camp -
                                            Kalapathar
                                            -
                                            Dzongla-Cho - La pass - Gokyo lake - Reanjo La - Namche Bazzar & Lukla
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="px-3">

                                <h3 class="mb-2 font-display text-2xl text-primary">Highlights</h3>
                                <ul class="highlights mb-4">
                                    @for ($i = 0; $i < 5; $i++)

                                    <li class="flex mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 flex-shrink-0 text-accent mr-2">
                                            <path d="M497.4 70a19.3 19.3 0 00-27.3 0L238.6 300.8 155 210.1a19.3 19.3 0 00-28.4 26.2l97 105.5c3.7 3.8 8.6 6 13.9 6.2h.4c5 0 10-2 13.6-5.6L497.3 97.3a19.3 19.3 0 000-27.3z" fill="currentColor" />
                                            <path d="M492.7 236.7a19.3 19.3 0 00-19.3 19.3A217.6 217.6 0 01256 473.4 217.7 217.7 0 0138.6 256 217.7 217.7 0 01256 38.6 19.3 19.3 0 10256 0 256.3 256.3 0 000 256c0 141.2 114.8 256 256 256s256-114.8 256-256c0-10.7-8.6-19.3-19.3-19.3z" fill="currentColor" />
                                        </svg>
                                        {{ $faker-> text() }}
                                    </li>
                                    @endfor
                                </ul>

                                <div id="overview-text" class="lim collapse">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis semper mi. Etiam eu magna a risus
                                        bibendum elementum a at tortor. Aenean a laoreet diam. Proin vitae semper diam. Ut dapibus rhoncus
                                        venenatis. Aenean accumsan nisl sed nisi lobortis, eget vehicula metus placerat. Nunc interdum tincidunt
                                        lectus, et malesuada neque. Maecenas id arcu erat. Nullam ullamcorper metus purus, ac sagittis ante
                                        molestie
                                        et. Proin consectetur arcu quis mattis consequat. Vestibulum elit ligula, maximus id posuere eleifend,
                                        consectetur non sem. Vivamus sollicitudin ipsum vitae nisl vulputate mollis. Etiam feugiat nunc a quam
                                        consequat mattis. Vivamus feugiat, ante pretium facilisis rhoncus, nibh urna eleifend lacus, iaculis
                                        accumsan sem neque nec nibh. Aliquam scelerisque pulvinar rhoncus.
                                    </p>

                                    <p>
                                        Nunc tempus risus quis mi placerat egestas. In euismod est non felis pulvinar, sed pretium mauris
                                        vehicula.
                                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur non lacus vitae est blandit
                                        ultrices
                                        eu laoreet enim. Maecenas et erat lectus. Proin ut nibh at turpis pellentesque dignissim eu imperdiet
                                        neque.
                                        Phasellus bibendum varius eros, non eleifend tellus. Etiam sit amet congue ante. Ut ultrices id mauris
                                        quis
                                        eleifend. Vestibulum volutpat erat erat, eu tincidunt felis rhoncus ac. In condimentum leo ut turpis
                                        elementum porta. Nullam dapibus enim enim, sit amet sodales nunc mollis nec. Vestibulum condimentum mi
                                        lacinia convallis cursus.
                                    </p>

                                </div>
                                {{-- <p class="text-center">
                                    <button id="toggle-overview" class="btn btn-gray" data-bs-toggle="collapse" data-bs-target="#overview-text">Show
                                        More</button>
                                </p> --}}

                                <div class="bg-light mb-3 p-4">
                                    <h3 class="mb-2 font-display text-xl text-primary"> Important Note</h3>
                                    <p class="mb-0 text-sm">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem sequi vero quasi, error impedit ratione maxime eaque perspiciatis reprehenderit tempore delectus quibusdam ipsam, ipsa pariatur dolore ea veniam temporibus illo eum deleniti quas, a vitae. Dolorum explicabo, ex ullam obcaecati blanditiis tenetur dicta similique. Voluptatum qui molestias consequuntur minus praesentium!
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>

                   <div class='mb-4 embed-container'><iframe src='https://www.youtube.com/embed//dFLxa0VwY-E' frameborder='0' allowfullscreen></iframe></div>

                    <div id="itinerary" class="tds pt-10 bg-white px-4 lg:px-10 pb-4 mb-4" x-data="{
                        day1Open:true,
                        @for ($i = 1; $i < $tour->duration ; $i++)
                            day{{ $i + 1 }}Open:false,
                        @endfor
                        }">
                            <div class="flex justify-between items-end flex-wrap mb-4">
                                <h2 class="text-4xl lg:text-5xl font-display text-primary uppercase">Trip Itinerary</h2>
                                <div>
                                    <button class="mb-2 btn btn-sm btn-primary expand-all" @click="
                                    @for ($i = 0; $i < $tour->duration; $i++)
                                        day{{ $i + 1 }}Open =
                                    @endfor
                                     true">Expand All</button>
                                    <button class="mb-2 btn btn-sm btn-primary collapse-all" @click="
                                    @for ($i = 0; $i < $tour->duration; $i++)
                                        day{{ $i + 1 }}Open =
                                    @endfor
                                    false">Collapse All</button>
                                </div>
                            </div>
                            <div class="itinerary mb-4">
                                @for ($i = 0; $i < $tour->duration; $i++)
                                    <div class="mb-2 border-light">
                                        <button class="flex items-center w-full p-2 text-primary text-left" :aria-expanded="day{{ $i + 1 }}Open" aria-controls="day{{ $i+1 }}" @click="day{{ $i+1 }}Open=!day{{ $i+1 }}Open">
                                            <div class="flex items-center mr-4">
                                                <div class="mr-2 text-sm">Day</div>
                                                <div class="font-display text-primary text-2xl">
                                                    {{ $i + 1 }}
                                                </div>
                                            </div>
                                            <div class="flex justify-between flex-grow-1">
                                                <h3 class="font-display text-xl">{{ Str::title($faker->words(5, true)) }}</h3>
                                                <svg class="w-6 h-6 flex-shrink-0" x-show="!day{{ $i + 1 }}Open">
                                                    <use xlink:href="{{ asset('img/sprite.svg') }}#plus" />
                                                </svg>
                                                <svg class="w-6 h-6 flex-shrink-0" x-show="day{{ $i + 1 }}Open">
                                                    <use xlink:href="{{ asset('img/sprite.svg') }}#minus" />
                                                </svg>
                                            </div>
                                        </button>
                                        <div id="day{{ $i+1 }}" class="border-top-light p-4" x-cloak x-show.transition="day{{ $i+1 }}Open">
                                            <div class="grid xl:grid-cols-3 gap-4">
                                                <img src="{{ asset('img/hero.jpg') }}" alt="">
                                                <div class="xl:col-span-2">
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia minima nam vel veritatis? Est
                                                        laborum
                                                        consectetur temporibus expedita veritatis perferendis beatae sapiente unde, deserunt eveniet
                                                        architecto
                                                        quisquam autem hic! Ut?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <div class="lg:flex justify-between items-center bg-light p-4">
                                <div>
                                    Not satisfied with this itinerary? <b class="text-primary">Make your own</b>.
                                </div>
                                <a href="{{ route('tours.customize', $tour->slug) }}" class="btn btn-sm btn-primary">Customize</a>
                            </div>
                    </div>

                    <div id="inclusions" class="tds pt-10 bg-white px-4 lg:px-10 pb-4 mb-4">
                        <div class="bg-white p-3">
                            <div class="grid lg:grid-cols-2 gap-1">
                                <div>
                                    <h2 class="text-3xl lg:text-4xl font-display text-primary uppercase">Includes</h2>
                                    <ul class="includes">
                                        @for ($i = 0; $i < 5; $i++)
                                        <li class="flex mb-2">
                                            <svg class="w-6 h-6 mr-1 flex-shrink-0 text-green">
                                                <use xlink:href="{{ asset('img/sprite.svg') }}#check" />
                                            </svg>
                                            {{ $faker-> text() }}
                                        </li>
                                        @endfor
                                    </ul>
                                </div>

                                <div>
                                    <h2 class="text-3xl lg:text-4xl font-display text-primary uppercase">Doesn't Include</h2>
                                    <ul class="excludes">
                                        @for ($i = 0; $i < 4; $i++)
                                        <li class="flex mb-2">
                                            <svg class="w-6 h-6 mr-1 flex-shrink-0 text-red">
                                                <use xlink:href="{{ asset('img/sprite.svg') }}#x" />
                                            </svg>

                                            {{ $faker-> text() }}
                                        </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                            <div class="complimentary p-2">
                                <h2 class="text-3xl lg:text-4xl font-display text-primary uppercase">Complimentary</h2>
                                <ul>
                                    @for ($i = 0; $i < 5; $i++)
                                        <li class="flex mb-2">
                                            <svg class="w-6 h-6 mr-1 flex-shrink-0 text-accent">
                                                <use xlink:href="{{ asset('img/sprite.svg') }}#plus" />
                                            </svg>
                                            {{ $faker-> text() }}
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    </div>

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
                                                <use xlink:href="{{ asset('img/sprite.svg')}}#calendar" />
                                            </svg>
                                            <div>
                                                <span class="font-display text-xl text-primary">28 Dec 2019</span><br> to 15 Jan 2020
                                            </div>
                                        </div>
                                        <div class="flex aic mb-2">
                                            <svg class="w-4 h-4 mr-1 text-primary">
                                                <use xlink:href="{{ asset('img/sprite.svg')}}#tag" />
                                            </svg>
                                            <div>
                                                <small class="text-gray"><s>USD 22,000</s></small><br>
                                                <span class="text-green">USD <b>20,000</b></span>
                                            </div>
                                        </div>
                                        <div class="flex mb-4">
                                            <svg class="w-4 h-4 mr-1 text-primary">
                                                <use xlink:href="{{ asset('img/sprite.svg')}}#users" />
                                            </svg>
                                            4 seats left
                                        </div>
                                    </div>
                                    <div><a href="{{ route('tours.book', ['slug' => $tour->slug])}}" class="btn btn-sm btn-accent">Book now</a>
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
                            <div class="review p-4">
                                <div class="review__content">
                                    <h2 class="mb-2 font-display text-2xl text-primary">Rewarding trek with best guides
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio reiciendis
                                        fugiat aperiam beatae et aspernatur consequuntur, iste consequatur totam
                                        eligendi alias quae dolor iure quam exercitationem cumque aliquid architecto
                                        assumenda!</p>
                                </div>
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img src="{{ asset('img/portrait1.jpg') }}" alt="">
                                    </div>
                                    <div>
                                        <div class="font-bold">Emory McCullough</div>
                                        <div class="text-sm text-gray">Virgin Islands, U.S.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="review p-4">
                                <div class="review__content">
                                    <h2 class="mb-2 font-display text-2xl text-primary">Never had so much fun!</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio reiciendis
                                        fugiat aperiam beatae et aspernatur consequuntur, iste consequatur totam
                                        eligendi alias quae dolor iure quam exercitationem cumque aliquid architecto
                                        assumenda!</p>
                                </div>
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img src="{{ asset('img/portrait2.jpg') }}" alt="">
                                    </div>
                                    <div>
                                        <div class="font-bold">Ola Murray</div>
                                        <div class="text-sm text-gray">Gambia</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="reviews.php" class="theme">See more reviews
                            <svg>
                                <use xlink:href="{{ asset('img/sprite.svg') }}#arrownarrowright" />
                            </svg>
                        </a>
                    </div>

                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/d/embed?mid=1o2LaX1o68hVBiycWHWDrK_F18H1epiGB" width="100%" height="480" class="border-none"></iframe>
                    </div>

                    <div id="faqs" class="tds pt-10 bg-white px-4 lg:px-10 pb-4 mb-4">
                        <h2 class="mb-4 text-4xl lg:text-5xl font-display text-primary uppercase">Frequently Asked Questions</h2>

                        <div class="mb-4" x-data="{active: 'none'}">
                            @for ($i = 0; $i < 6; $i++)
                                <div class="mb-1 border-light">
                                    <button class="flex justify-between items-center w-full p-2 text-left" @click="active = (active === {{ $i }} ? 'none' : {{ $i }})">
                                        <h3 class="font-display text-xl text-primary">{{ $faker->sentence() }}</h3>

                                        <svg class="w-6 h-6 flex-shrink-0 text-primary" x-show="active!=={{ $i }}">
                                            <use xlink:href="{{ asset('img/sprite.svg') }}#plus" />
                                        </svg>
                                        <svg class="w-6 h-6 flex-shrink-0 text-primary" x-show="active==={{ $i }}">
                                            <use xlink:href="{{ asset('img/sprite.svg') }}#minus" />
                                        </svg>
                                    </button>
                                    <div class="p-4" x-cloak x-show.transition="active==={{ $i }}">
                                        <p class="mb-0">
                                            {{ $faker->paragraph() }}
                                        </p>
                                    </div>
                                </div>
                            @endfor
                        </div>

                        <a href="#" class="mb-2 theme">Read more FAQs
                            <svg>
                                <use xlink:href="{{ asset('img/sprite.svg') }}#arrownarrowright" />
                            </svg>
                        </a>
                    </div>

                    <div class="flex justify-between flex-wrap mb-4">
                        <div class="flex mb-2">
                            <a href="{{ route('tours.book', $tour->slug) }}" class="btn btn-accent mr-2">Book Now</a>
                            <a href="{{ route('tours.customize', $tour->slug) }}" class="btn btn-primary">
                                <svg class="w-6 h-6 mr-2">
                                    <use xlink:href="{{ asset('img/sprite.svg') }}#adjustments" />
                                </svg>
                                Customize
                            </a>
                        </div>
                        <div class="flex">
                            <a href="#" class="flex items-center mr-2 p-1 text-accent" title="Print tour details">
                                <svg class="w-6 h-6 flex-shrink-0 mr-2">
                                    <use xlink:href="{{ asset('img/sprite.svg') }}#printer" />
                                </svg>
                                <span class="font-display uppercase">Print Tour Details</span>
                            </a>
                            <a href="#" class="flex items-center p-1 text-accent" title="">
                                <svg class="w-6 h-6 flex-shrink-0 mr-2">
                                    <use xlink:href="{{ asset('img/sprite.svg') }}#download" />
                                </svg>
                                <span class="font-display uppercase">Download Tour Brochure</span>
                            </a>
                        </div>
                    </div>

                    <div>
                        <h2 class="mb-2 lg:text-xl font-display text-primary uppercase">Share this tour</h2>
                        <a href="#" class="text-primary hover:text-accent mr-2">
                            <svg class="w-6 h-6">
                                <use xlink:href="{{ asset('img/sprite.svg') }}#facebook" />
                            </svg>
                        </a>
                        <a href="#" class="text-primary hover:text-accent mr-2">
                            <svg class="w-6 h-6">
                                <use xlink:href="{{ asset('img/sprite.svg') }}#twitter" />
                            </svg>
                        </a>
                        <a href="#" class="text-primary hover:text-accent">
                            <svg class="w-6 h-6">
                                <use xlink:href="{{ asset('img/sprite.svg') }}#instagram" />
                            </svg>
                        </a>
                    </div>


                </div>

                <aside class="pt-10">

                    @include('partials.pricecard')

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

                    <a href="booking-form.php" class="mb-8 btn btn-accent w-full">Ask for agency price</a>

                    @include('partials.enquiry')

                    <div class="mb-8">
                        <div class="card-header">
                            <h2 class="mb-2 font-display text-2xl text-primary uppercase">Route Map</h2>
                        </div>
                        <div class="card-body p-0">
                            <a data-fancybox data-caption="Annapurna Base Camp Trek Map" href="{{ asset('img/annapurnaregion-01.jpg') }}">
                                <img class="img-fluid" src="{{ asset('img/annapurnaregion-01.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="experts-card bg-primary px-2 py-10 text-white">
                        <div class="grid grid-cols-3">
                            <div class="col-span-2">
                                <p class="mb-0">Still confused?</p>
                                <h3 class="mb-2">Talk to our experts</h3>
                            </div>
                            <div>
                                <svg class="w-20 h-20">
                                    <use xlink:href="{{ asset('img/sprite.svg') }}#customersupport" />
                                </svg>
                            </div>
                        </div>
                        <div class="experts-phone flex mb-1">
                            <a href="tel:+977 01 4416 177" class="flex aic">
                                <svg class="w-6 h-6 mr-1">
                                    <use xlink:href="{{ asset('img/sprite.svg') }}#phone" />
                                </svg>
                                +977 01 4416 177
                            </a>
                        </div>
                        <div class="experts-phone flex mb-1">
                            <a href="tel:+977 9851 039 480" class="flex aic">
                                <svg class="w-6 h-6 mr-1">
                                    <use xlink:href="{{ asset('img/sprite.svg') }}#devicemobile" />
                                </svg>
                                +977 9851 039 480
                            </a>
                        </div>
                        <div class="experts-phone flex mb-3">
                            <a href="mailto:
                                    info@royalhimalayanholidays.com" class="flex aic">
                                <svg class="w-6 h-6 mr-1">
                                    <use xlink:href="{{ asset('img/sprite.svg') }}#mail" />
                                </svg>
                                info@royalhimalayanholidays<wbr>.com
                            </a>
                        </div>
                    </div>
                    <div class="mb-8 p-2 bg-light">
                        <a href="#" class="text-primary hover:text-accent mr-1">
                            <svg class="w-6 h-6">
                                <use xlink:href="{{ asset('img/sprite.svg') }}#facebookmessenger" />
                            </svg>
                        </a>
                        <a href="#" class="text-primary hover:text-accent mr-1">
                            <svg class="w-6 h-6">
                                <use xlink:href="{{ asset('img/sprite.svg') }}#viber" />
                            </svg>
                        </a>
                        <a href="#" class="text-primary hover:text-accent mr-1">
                            <svg class="w-6 h-6">
                                <use xlink:href="{{ asset('img/sprite.svg') }}#whatsapp" />
                            </svg>
                        </a>
                        <a href="#" class="text-primary hover:text-accent mr-1">
                            <svg class="w-6 h-6">
                                <use xlink:href="{{ asset('img/sprite.svg') }}#skype" />
                            </svg>
                        </a>
                        <a href="#" class="text-primary hover:text-accent mr-1">
                            <svg class="w-6 h-6">
                                <use xlink:href="{{ asset('img/sprite.svg') }}#weixin" />
                            </svg>
                        </a>
                    </div>

                    <div class="mb-8 bg-white p-2 lg:p-4">
                        <h2 class="mb-2 font-display text-2xl text-primary uppercase">Essential Trip Info</h2>
                        <ul class="text-sm px-2" >
                            <li class="mb-1">
                                <a href="lifetime-deposit" target="_blank">
                                    <svg class="w-4 h-4 mr-1 text-gray">
                                        <use xlink:href="{{ asset('img/sprite.svg') }}#arrownarrowright" />
                                    </svg>

                                    Lifetime Deposit </a>
                            </li>
                            <li class="mb-1">
                                <a href="privacy-policy" target="_blank">
                                    <svg class="w-4 h-4 mr-1 text-gray">
                                        <use xlink:href="{{ asset('img/sprite.svg') }}#arrownarrowright" />
                                    </svg>

                                    Privacy Policy </a>
                            </li>
                            <li class="mb-1">
                                <a href="trek-packing-list" target="_blank">
                                    <svg class="w-4 h-4 mr-1 text-gray">
                                        <use xlink:href="{{ asset('img/sprite.svg') }}#arrownarrowright" />
                                    </svg>

                                    Trek Packing List </a>
                            </li>
                            <li class="mb-1">
                                <a href="responsible-tourism" target="_blank">
                                    <svg class="w-4 h-4 mr-1 text-gray">
                                        <use xlink:href="{{ asset('img/sprite.svg') }}#arrownarrowright" />
                                    </svg>

                                    Responsible Tourism </a>
                            </li>
                            <li class="mb-1">
                                <a href="travel-insurance" target="_blank">
                                    <svg class="w-4 h-4 mr-1 text-gray">
                                        <use xlink:href="{{ asset('img/sprite.svg') }}#arrownarrowright" />
                                    </svg>

                                    Travel Insurance </a>
                            </li>
                            <li class="mb-1">
                                <a href="nepal-international-flight" target="_blank">
                                    <svg class="w-4 h-4 mr-1 text-gray">
                                        <use xlink:href="{{ asset('img/sprite.svg') }}#arrownarrowright" />
                                    </svg>

                                    Nepal International Flight </a>
                            </li>
                            <li class="mb-1">
                                <a href="terms-and-conditions" target="_blank">
                                    <svg class="w-4 h-4 mr-1 text-gray">
                                        <use xlink:href="{{ asset('img/sprite.svg') }}#arrownarrowright" />
                                    </svg>

                                    Terms &amp; Conditions </a>
                            </li>
                        </ul>
                    </div>

                    <div class="mb-8">

                        <h2 class="mb-2 font-display text-2xl text-primary uppercase">Additional Tours</h2>
                        @foreach ($similartours as $tour)
                            <a href="#" class="block mb-2">
                                <div class="px-2 py-4 text-white" style="background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), center / cover url('{{ asset('img/'.$tour->image) }}')">
                                    <h1 class="font-display text-xl uppercase">{{ $tour->name }}</h1>
                                    <div class="days mb-4">19 days</div>
                                    <div class="price"><span class="text-xs">from</span> <br><b>USD 2000</b></div>
                                </div>
                            </a>
                        @endforeach
                        </div>

                    <div class="mb-8">
                        <img src="{{ asset('img/tripadvisor.png') }}" alt="">
                    </div>

                    <div class="sticky-top sticky-price none lg:block" style="top: 5rem;">
                        @include('partials.pricecard')
                    </div>


                </aside>

            </div>
        </div>

        <!-- Similar -->
        <div class="bg-light py-20 ">
            <div class="container">
                <h2 class="text-4xl lg:text-5xl font-display text-primary uppercase">Similar Tours</h2>
                <div class="grid gap-10">
                    @foreach ($similartours as $tour)
                        @include('partials.packagebox')
                    @endforeach
                </div>
            </div>
        </div> <!-- Similar -->

    <!-- Trip of the month -->
    <div class="py-10 bg-primary text-white">
        <div class="container">

            <div class="lg:flex justify-between items-center mb-4">
                <h1 class="text-4xl lg:text-5xl font-display uppercase">Trips of the month
                </h1>

                <div class="trips-month-slider-controls">
                    <button>
                        <svg class="w-6 h-6 text-accent">
                            <use xlink:href="{{ asset('img/sprite.svg') }}#arrownarrowleft" />
                        </svg>
                    </button>
                    <button>
                        <svg class="w-6 h-6 text-accent">
                            <use xlink:href="{{ asset('img/sprite.svg') }}#arrownarrowright" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="trips-month-slider">
                @foreach ($herotours as $tour)
                    <div class="relative">
                        <div class="grid lg:grid-cols-2 gap-4">
                            <div>
                                <img src="{{ asset('img/'.$tour->image) }}" alt="{{ $tour->name }}">
                            </div>
                            <div>
                                <h2 class="mb-2 text-3xl font-display uppercase">
                                    {{ $tour->name }}
                                </h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita
                                    assumenda repellat quisquam alias pariatur! Voluptates sint, expedita
                                    deserunt sit dolorum dolore ratione debitis harum quae odio eveniet et
                                    distinctio ex.
                                </p>

                                <div class="flex wrap mb-4">
                                    <div class="flex aic mr-2 p-2">
                                        <svg class="w-6 h-6 mr-2">
                                            <use xlink:href="{{ asset('img/sprite.svg') }}#calendar"></use>
                                        </svg>
                                        <div>
                                            <div class="upper bold fs-xs">Duration</div>
                                            <span class="fs-lg bold"> 21 </span> days
                                        </div>
                                    </div>
                                    <div class="flex aic p-2">
                                        <svg class="w-6 h-6 mr-2">
                                            <use xlink:href="{{ asset('img/sprite.svg') }}#emojihappy"></use>
                                        </svg>
                                        <div>
                                            <div class="upper bold fs-xs">Difficulty</div>
                                            Easy
                                        </div>
                                    </div>
                                </div>

                                <div class="price mb-4">
                                    <div class="text-accent">
                                        <span class="text-sm">
                                            from
                                        </span>
                                        <s class="font-bold">
                                            USD 1000
                                        </s>
                                    </div>
                                    <div class="font-display">
                                        <span>USD</span>
                                        <span class="text-4xl">780</span>
                                        <span>.00</span>
                                    </div>
                                </div>


                                <div>
                                    <a href="tour-details.php" class="btn btn-accent">
                                        Explore
                                        <svg class="w-6 h-6">
                                            <use xlink:href="img/sprite.svg#arrownarrowright"></use>
                                        </svg>
                                    </a>
                                    {{-- <a href="tour-details.php" class="btn btn-gray">
                                        Book Now
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>
    </div>


    <a href="#" class="btn btn-accent lg:none w-full fixed" style="bottom:0;border-radius:0">Book Now</a>

    @endsection

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/tiny-slider@2.9.3/dist/tiny-slider.min.js"></script>

        <script>
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
                    if(!entry.isIntersecting){
                        header.classList.add('none')
                        header.classList.remove('flex')
                    }else {
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
                    if(entry.isIntersecting){
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
        </script>
    @endpush
