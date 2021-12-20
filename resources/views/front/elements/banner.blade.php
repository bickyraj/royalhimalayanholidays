@push ('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tiny-slider@2.9.3/dist/tiny-slider.css">
@endpush

<!-- Hero -->
<section>
    <div class="hero relative">
             <!-- Slider -->
        <div id="banner-slider" class="hero-slider">
            @forelse ($block_1_trips as $banner)
                <div class="slide relative">
                    <img src="{{ $banner->thumbImageUrl }}" data-img="{{ $banner->imageUrl }}" class="block" alt="{{ $banner->name }}">
                    <div class="text absolute w-full py-4 lg:py-10">
                        <div class="container">
                            <h2 class="mb-2 font-display text-primary text-3xl lg:text-4xl lg:text-5xl uppercase">
                                <span>{{ $banner->name }}</span>
                            </h2>
                            <div class="mb-4 flex items-center">
                                <svg class="mr-2 w-6 h-6 text-accent">
                                    <use xlink:href="{{ asset('assets/front/img/sprite.svg#calendar') }}" />
                                </svg>
                                <span class="mr-4">
                                    {{ $banner->duration }} days
                                </span>
                                <svg class="mr-2 w-6 h-6 text-accent">
                                    <use xlink:href="{{ asset('assets/front/img/sprite.svg#staro') }}" />
                                </svg>
                               

                            </div>
                            <!--<p class="none lg:block mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.-->
                            <!--    Distinctio cupiditate</p>-->
                            <div class="buttons absolute">
                                <a href="{{ route('front.trips.show', ['slug'=> $banner->slug ])}}" class="btn btn-accent">
                                    Explore
                                    <svg class="w-6 h-4">
                                        <use xlink:href="{{ asset('assets/front/img/sprite.svg#arrownarrowright') }}" />
                                    </svg>
                                </a>
                                <a href="{{ route('front.trips.booking', ['slug'=> $banner->slug ])}}" class="btn btn-primary">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!-- Slider -->

        <div class="hero-slider-controls none w-full md:block absolute">
            <div class="container flex justify-between w-full">
                <button>
                    <svg class="w-6 h-6">
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg#arrownarrowleft') }}" />
                    </svg>
                </button>
                <button>
                    <svg class="w-6 h-6">
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg#arrownarrowright') }}" />
                    </svg>
                </button>
            </div>
        </div>
    </div><!-- Hero -->
</section>
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/tiny-slider@2.9.3/dist/tiny-slider.min.js"></script>
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
