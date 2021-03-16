@extends ('layouts.app')

@section ('title', 'Home')

@push ('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tiny-slider@2.9.3/dist/tiny-slider.css">
@endpush

@section ('content')
<!-- Hero -->
<section>
    <div class="hero relative">
        <!-- Slider -->
        <div class="hero-slider">
            @foreach ($herotours as $tour)
                
            <div class="slide relative">
                <img src="img/{{ $tour->image }}" class="block" alt="{{ $tour->name }}">
                <div class="text absolute w-full py-4 lg:py-10">
                    <div class="container">
                        <h1 class="mb-2 font-display text-primary text-3xl lg:text-4xl uppercase">
                            <span>{{ $tour->name }}</span>
                        </h1>
                        <div class="mb-4 flex items-center">
                            <svg class="mr-2 w-6 h-6 text-accent">
                                <use xlink:href="img/sprite.svg#calendar" />
                            </svg>
                            <span class="mr-4">
                                {{ $tour->duration }} days
                            </span>
                            <svg class="mr-2 w-6 h-6 text-accent">
                                <use xlink:href="img/sprite.svg#staro" />
                            </svg>
                            <span class="mr-4">
                                4.5
                            </span>
                            <svg class="mr-2 w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="mr-4">
                                USD 9999
                            </span>

                        </div>
                        <p class="none lg:block mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Distinctio cupiditate
                            numquam ratione aliquam saepe similique provident pariatur ut, nihil, harum tenetur in. Amet
                            consequuntur optio doloribus facilis. Sint, eaque nihil.</p>
                        <div class="buttons absolute">
                            <a href="{{ route('tours.show', ['slug'=> $tour->slug ])}}" class="btn btn-accent">
                                Explore
                                <svg class="w-6 h-4">
                                    <use xlink:href="img/sprite.svg#arrownarrowright" />
                                </svg>
                            </a>
                            <a href="{{ route('tours.book', ['slug'=> $tour->slug ])}}" class="btn btn-primary">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!-- Slider -->

        <div class="hero-slider-controls none md:block absolute">
            <div class="container flex">
                <button>
                    <svg class="w-6 h-6">
                        <use xlink:href="img/sprite.svg#arrownarrowleft" />
                    </svg>
                </button>
                <button>
                    <svg class="w-6 h-6">
                        <use xlink:href="img/sprite.svg#arrownarrowright" />
                    </svg>
                </button>
            </div>
        </div>
    </div><!-- Hero -->
</section>

<!-- Destinations -->
<div class="destinations py-10">
    <div class="container">
        <div class="lg:flex justify-between items-center mb-4">
            <h1 class="text-4xl lg:text-5xl font-display text-primary uppercase">Destinations</h1>
            <a href="#" class="text-accent">
                View all
                <svg class="w-4 h-4">
                    <use xlink:href="img/sprite.svg#chevronright" />
                </svg>
            </a>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-2">

            <div class="destination relative">
                <a href="tour-listing.php">
                    <img src="img/dest-nepal.jpg" alt="">
                    <div class="absolute text bg-white p-4">
                        <h2 class="font-bold">Nepal</h2>
                        <div class="text-gray text-sm">99 tours</div>
                    </div>
                </a>
            </div>
            <div class="destination relative">
                <a href="tour-listing.php">
                    <img src="img/dest-india.jpg" alt="">
                    <div class="absolute text bg-white p-4">
                        <h2 class="font-bold">India</h2>
                        <div class="text-gray text-sm">32 tours</div>
                    </div>
                </a>
            </div>
            <div class="destination relative">
                <a href="tour-listing.php">
                    <img src="img/dest-tibet.jpg" alt="">
                    <div class="absolute text bg-white p-4">
                        <h2 class="font-bold">Tibet</h2>
                        <div class="text-gray text-sm">16 tours</div>
                    </div>
                </a>
            </div>
            <div class="destination relative">
                <a href="tour-listing.php">
                    <img src="img/dest-bhutan.jpg" alt="">
                    <div class="absolute text bg-white p-4">
                        <h2 class="font-bold">Bhutan</h2>
                        <div class="text-gray text-sm">12 tours</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div><!-- Destinations -->

<!-- About -->
<div class="about bg-light py-10">
    <div class="container">
        <div class="grid lg:grid-cols-2 gap-10">
            <div>
                <h1 class="mb-4 text-4xl lg:text-5xl text-primary font-display uppercase">Best way to explore the world
                </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, itaque! Commodi animi pariatur saepe
                    porro ea facilis sequi tempora quo.</p>
                    
                    <div class="flex">
                        <svg class="mr-4 w-10 h-10 text-primary flex-shrink-0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor"
                            d="M398.6 449.2a7.5 7.5 0 00-10.6.7l-30.9 35.4c-3.3 3.7-7.8 5.9-12.8 6-5 .2-9.6-1.6-13.2-5.2l-23.8-23.8v-15.7a7.5 7.5 0 10-15 0V504.5a7.5 7.5 0 1015 0v-21l13.2 13.3a33 33 0 0048-1.7l30.8-35.3a7.5 7.5 0 00-.7-10.6zM87.1 439a7.5 7.5 0 00-7.5 7.5v57.9a7.5 7.5 0 1015 0v-58c0-4-3.3-7.4-7.5-7.4zm415.4-320.2l-50.3-40.8a11.4 11.4 0 00-12.2-1.5c-4 2-6.5 5.9-6.5 10.4V305L358 391.2l-24-44.7a78.8 78.8 0 00-56.3-40.3l-41.2-6.7c-6.2-1-10.7-6.3-10.7-12.6V278a93.7 93.7 0 0043.6-78.9V196h3a27.8 27.8 0 0027.4-27.5c0-7.9-3.5-15.2-9.1-20.3a23.8 23.8 0 00-9.7-35.5l-2.4-1v-54A57.6 57.6 0 00221.1 0h-89.5a57.6 57.6 0 00-57.5 57.5v54l-2.4 1a23.8 23.8 0 00-9.7 35.6 27.6 27.6 0 00-9 20.3A27.7 27.7 0 0080.3 196h2.9v3.2a93.1 93.1 0 0043.6 78.9v10.4c0 5.8-4 10.8-9.5 12.1L55 316a67.4 67.4 0 00-51.4 65.5v123.1a7.5 7.5 0 1015 0v-123a52.4 52.4 0 0140-51l48.2-12a81.7 81.7 0 00140.2-2.1l28.1 4.6a63.7 63.7 0 0145.6 32.6l24.2 45.2a14.6 14.6 0 0023.8 2.7l51.4-58.5 32.6 32.6h.1l-41.8 48a7.5 7.5 0 0011.3 9.8l69-78.9a38 38 0 00-42.9-60.4V187l54-44a15.5 15.5 0 000-24.1zm-217.7 49.5c0 6.8-5.7 12.5-12.5 12.5h-2.9V158c2.9.2 5.7 0 8.4-.9 4.2 2.1 7 6.4 7 11.2zM83.3 181h-3c-6.7 0-12.4-5.7-12.4-12.5 0-4.8 2.8-9 7-11.2a24 24 0 008.4 1v22.7zm1.8-38.5a9 9 0 01-11.5-4 8.8 8.8 0 014.2-12.1A242.8 242.8 0 01209 107.6a7.5 7.5 0 002-14.9 257.8 257.8 0 00-122 12.9v-48C89 34 108 15 131.6 15h89.5c23.5 0 42.5 19 42.5 42.5v48c-5.7-2-11.5-3.8-17.4-5.5a7.5 7.5 0 00-4 14.5c11.1 3 22.1 7 32.7 11.8 4.5 2 6.5 7.6 4.2 12a9 9 0 01-11.5 4.1 231.6 231.6 0 00-182.5 0zm13.2 56.7v-45.9c50-20 106.1-20 156.2 0v46c0 20.8-8.2 40.4-23 55.2a78.2 78.2 0 01-133.3-55.2zm78 143a66.7 66.7 0 01-54-27.4 28 28 0 0019.6-29 92.6 92.6 0 0069 0c-.8 12.9 8 24.6 20.2 27.9a66.4 66.4 0 01-54.7 28.5zm300.8-30.6c10 8 11.5 23.5 3 33.2l-17.3 19.7-32.7-32.8 15.3-17.3a23 23 0 0131.7-2.8zm16-180l-44.6 36.1V94.3l44.5 36.2c.3.2.3.8 0 1zm-275.4 62c4 0 7.5-3.4 7.5-7.5v-16.6a7.5 7.5 0 10-15 0V186c0 4.1 3.3 7.5 7.5 7.5zM135 161.9a7.5 7.5 0 00-7.5 7.5V186a7.5 7.5 0 1015 0v-16.6c0-4.1-3.4-7.5-7.5-7.5zm64.3 68.9c-2-3.7-6.5-5-10.1-3a27 27 0 01-25.9 0 7.5 7.5 0 10-7.2 13.1 42 42 0 0040.3 0c3.6-2 5-6.5 3-10.1z" />
                        </svg>
                        
                    <div>
                        <h2 class="font-bold">Local expert guides</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam nesciunt vero adipisci,
                            aperiam tenetur nam!</p>
                    </div>
                </div>
                <div class="flex">
                    <svg class="mr-4 w-10 h-10 text-primary flex-shrink-0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor"
                            d="M437.1 0H74.9A75 75 0 000 74.9v290.3a7.5 7.5 0 1015 0V75A60 60 0 0174.9 15h362.2A60 60 0 01497 74.9v362.2a60 60 0 01-59.9 59.9H74.9A60 60 0 0115 437.1v-41.9a7.5 7.5 0 10-15 0v41.9A75 75 0 0074.9 512h362.2a75 75 0 0074.9-74.9V74.9A75 75 0 00437.1 0z" />
                        <path fill="currentColor"
                            d="M103.3 69.6a35 35 0 00-35 35v17.7h-1.6a37 37 0 000 74h1.6v211.1a35 35 0 0070 0V196.3h1.6a37 37 0 000-74h-1.6v-17.7a35 35 0 00-35-35zm-20 35a20 20 0 0140 0v17.7h-40v-17.7zm40 302.8a20 20 0 01-40 0V196.3h40v211.1zm38.6-248.1a22 22 0 01-22 22H66.7a22 22 0 010-44H140a22 22 0 0122 22zM280.7 79.9a35 35 0 00-59.7 24.7V289h-1.6a37 37 0 000 74h1.6v44.4a35 35 0 0070 0V363h1.6a37 37 0 000-74H291V104.6c0-9.3-3.7-18.1-10.3-24.7zM236 104.6a20 20 0 0140 0V289h-40zm40 302.8a20 20 0 01-40 0V363h40v44.4zm38.6-81.4a22 22 0 01-22 22h-73.2a22 22 0 010-44h73.2a22 22 0 0122 22zM436.2 132.4c4.1 0 7.5-3.4 7.5-7.5v-20.3a35 35 0 00-70 0V195h-1.6a37 37 0 000 74h1.6v138.3a35 35 0 0070 0V269.1h1.6a37 37 0 000-74h-1.6v-40.2a7.5 7.5 0 10-15 0V195h-40v-90.5a20 20 0 0140 0v20.3c0 4.1 3.3 7.5 7.5 7.5zm-7.5 275a20 20 0 01-40 0V269.1h40v138.3zm38.6-175.3a22 22 0 01-22 22H372a22 22 0 010-44h73.2a22 22 0 0122 22z" />
                    </svg>

                    <div>
                        <h2 class="font-bold">Customized Tours</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam nesciunt vero adipisci,
                            aperiam tenetur nam!</p>
                    </div>
                </div>
                <div class="flex">
                    <svg class="mr-4 w-10 h-10 text-primary flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M256 40a10 10 0 00-1 20 10 10 0 101-20z" />
                        <path fill="currentColor"
                            d="M456 60a50 50 0 01-50-50 10 10 0 00-10-10H116a10 10 0 00-10 10 50 50 0 01-50 50 10 10 0 00-10 10v163.2a290.5 290.5 0 00207.1 278.4 10 10 0 005.8 0A290.5 290.5 0 00466 233.2V70a10 10 0 00-10-10zm-10 173.2a269 269 0 01-190 258.3A270.4 270.4 0 0166 233.2v-154A70.2 70.2 0 00125.3 20h261.4A70.2 70.2 0 00446 79.3v153.9z" />
                        <path fill="currentColor"
                            d="M420 92.5A90 90 0 01373.5 46a10 10 0 00-9.1-6H296a10 10 0 000 20h62a110 110 0 0048 48v125.2c0 97.9-58.7 182.3-150 216a227.8 227.8 0 01-150-216V108a110 110 0 0048-48h62a10 10 0 000-20h-68.3a10 10 0 00-9.2 6A90 90 0 0192 92.5a10 10 0 00-6 9.2v131.5a249 249 0 00166.7 236.2 10 10 0 006.6 0A249 249 0 00426 233.2V101.7c0-4-2.4-7.6-6-9.2z" />
                        <path fill="currentColor"
                            d="M256 146a90.1 90.1 0 000 180 90.1 90.1 0 000-180zm0 160a70 70 0 11.2-140.2A70 70 0 01256 306z" />
                        <path fill="currentColor"
                            d="M303 209a10 10 0 00-14 0l-43 42.9-13-13a10 10 0 00-14 14.2l20 20c1.9 2 4.4 2.9 7 2.9s5.1-1 7-3l50-50a10 10 0 000-14z" />
                    </svg>

                    <div>
                        <h2 class="font-bold">Safety ensured</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam nesciunt vero adipisci,
                            aperiam tenetur nam!</p>
                    </div>
                </div>
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
            <h1 class="text-4xl lg:text-5xl font-display text-primary uppercase">Tour activities</h1>
            <a href="#" class="text-accent">
                View all
                <svg class="w-4 h-4">
                    <use xlink:href="img/sprite.svg#chevronright" />
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-3">
            <a href="tour-listing.php">
                <div class="activity relative">
                    <img src="img/act-adventure-sports.jpg" alt="" class="block w-full">
                    <div class="text absolute">
                        <h2 class="font-display uppercase text-white px-2 py-4">Adventure Sports</h2>
                    </div>
                    <!-- <div class="tours">
                        <div class="fs-xl bold">10</div>
                        <div class="fs-sm">tours</div>
                    </div> -->
                </div>
            </a>

            <a href="tour-listing.php">
                <div class="activity relative">
                    <img src="img/act-city-tour.jpg" alt="" class="block w-full">
                    <div class="text absolute">
                        <h2 class="font-display uppercase text-white px-2 py-4">Day & City Tours</h2>
                    </div>
                    <!-- <div class="tours">
                        <div class="fs-xl bold">10</div>
                        <div class="fs-sm">tours</div>
                    </div> -->
                </div>
            </a>

            <a href="tour-listing.php">
                <div class="activity relative">
                    <img src="img/act-mountain-flight.jpg" alt="" class="block w-full">
                    <div class="text absolute">
                        <h2 class="font-display uppercase text-white px-2 py-4">Mountain Flight</h2>
                    </div>
                    <!-- <div class="tours">
                        <div class="fs-xl bold">10</div>
                        <div class="fs-sm">tours</div>
                    </div> -->
                </div>
            </a>

            <a href="tour-listing.php">
                <div class="activity relative">
                    <img src="img/act-peak-climbing.jpg" alt="" class="block w-full">
                    <div class="text absolute">
                        <h2 class="font-display uppercase text-white px-2 py-4">Peak Climbing</h2>
                    </div>
                    <!-- <div class="tours">
                        <div class="fs-xl bold">10</div>
                        <div class="fs-sm">tours</div>
                    </div> -->
                </div>
            </a>

            <a href="tour-listing.php">
                <div class="activity relative">
                    <img src="img/act-pilgrimage.jpg" alt="" class="block w-full">
                    <div class="text absolute">
                        <h2 class="font-display uppercase text-white px-2 py-4">Pilgrimage</h2>
                    </div>
                    <!-- <div class="tours">
                        <div class="fs-xl bold">10</div>
                        <div class="fs-sm">tours</div>
                    </div> -->
                </div>
            </a>

            <a href="tour-listing.php">
                <div class="activity relative">
                    <img src="img/act-trekking.jpg" alt="" class="block w-full">
                    <div class="text absolute">
                        <h2 class="font-display uppercase text-white px-2 py-4">Trekking & Hiking</h2>
                    </div>
                    <!-- <div class="tours">
                        <div class="fs-xl bold">10</div>
                        <div class="fs-sm">tours</div>
                    </div> -->
                </div>
            </a>
        </div>

    </div>
</div>

<!-- Popular right now -->
<div class="featured py-10 bg-light">
    <div class="container">

        <div class="lg:flex justify-between items-center mb-4">
            <h1 class="text-4xl lg:text-5xl font-display text-primary uppercase">Luxury Tours</h1>
            <a href="#" class="text-accent">
                View all
                <svg class="w-4 h-4">
                    <use xlink:href="img/sprite.svg#chevronright" />
                </svg>
            </a>
        </div>

        <div class="grid gap-2 md:gap-4">

            @foreach ($populartours as $tour) 
                @include ('partials.packagebox') 
            @endforeach
        </div>
    </div>
</div> <!-- Popular right now -->

<!-- Reviews -->
<div class="reviews py-10">
    <div class="container">

        <div class="lg:flex justify-between items-center mb-4">
            <h1 class="text-4xl lg:text-5xl font-display text-primary uppercase">Reviews from our
                customers</h1>
            <a href="#" class="text-accent">
                View all
                <svg class="w-4 h-4">
                    <use xlink:href="img/sprite.svg#chevronright" />
                </svg>
            </a>
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
    </div>
</div><!-- Reviews -->

<!-- Trip of the month -->
<div class="py-10 bg-primary text-white">
    <div class="container">

        <div class="lg:flex justify-between items-center mb-4">
            <h1 class="text-4xl lg:text-5xl font-display uppercase">Holidays of the month
            </h1>

            <div class="trips-month-slider-controls">
                <button>
                    <svg class="w-6 h-6 text-accent">
                        <use xlink:href="img/sprite.svg#arrownarrowleft" />
                    </svg>
                </button>
                <button>
                    <svg class="w-6 h-6 text-accent">
                        <use xlink:href="img/sprite.svg#arrownarrowright" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="trips-month-slider">
            @foreach ($herotours as $tour)   
                <div class="relative">
                    <div class="grid lg:grid-cols-2 gap-4">
                        <div>
                            <img src="img/{{ $tour->image }}" alt="{{ $tour->name }}">
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
                                    <svg class="w-6 h-6 mr-1">
                                        <use xlink:href="img/sprite.svg#calendar"></use>
                                    </svg>
                                    <div>
                                        <div class="upper bold fs-xs">Duration</div>
                                        <span class="fs-lg bold"> 21 </span> days
                                    </div>
                                </div>
                                <div class="flex aic p-2">
                                    <svg class="w-6 h-6 mr-1">
                                        <use xlink:href="img/sprite.svg#emojihappy"></use>
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
        {{-- <div class="tripadvisor">
                    <div id="TA_selfserveprop827" class="TA_selfserveprop">
                        <ul id="4KT9a3oFnlGT" class="TA_links rF98AxM5Q">
                            <li id="4OLTP8Z" class="106qXXM9"><a target="_blank"
                                    href="https://www.tripadvisor.com/Attraction_Review-g293890-d17581480-Reviews-Hiker_Himalaya_Treks_Expedition_Pvt_Ltd-Kathmandu_Kathmandu_Valley_Bagmati_Zone_.html"><img
                                        src="https://www.tripadvisor.com/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-11900-2.svg"
                                        alt="TripAdvisor" /></a></li>
                        </ul>
                    </div>
                    <script async
                        src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=827&amp;locationId=17581480&amp;lang=en_US&amp;rating=true&amp;nreviews=4&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=true&amp;border=true&amp;display_version=2"
                        data-loadtrk onload="this.loadtrk=true"></script>
                </div> --}}
    </div>
</div>

<!-- Blog -->
<div class="blog py-10">
    <div class="container">
        <div class="grid md:grid-cols-3 gap-2 lg:gap-3">
            @for ($i = 0; $i < 3; $i++)
            <a href="{{ route('blog.show', 'blog-article') }}">
                <div class="article">
                    <div class="image">
                        <img src="img/blog1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                        <div class="flex items-center text-xs text-gray"><svg class="mr-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            1 January 2021
                        </div>
                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Laudantium dicta ipsa, sed illum ea error aspernatur tenetur, et
                            necessitatibus aperiam, adipisci pariatur vitae sunt nulla? Asperiores in
                            voluptatem possimus sed...</p>
                    </div>
                </div>
                </a>
                @endfor
        </div>
        <a href="blog.php" class="theme">Go to blog
            <svg>
                <use xlink:href="img/sprite.svg#arrownarrowright" />
            </svg>
        </a>
    </div>
</div><!-- Blog -->

@include('partials.searchwidget')

@endsection

@push ('scripts')
<script src="https://cdn.jsdelivr.net/npm/tiny-slider@2.9.3/dist/tiny-slider.min.js"></script>

<script>
    const heroSlider = tns({
        container: '.hero-slider',
        nav: false,
        controlsContainer: '.hero-slider-controls .container',
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
</script>
@endpush