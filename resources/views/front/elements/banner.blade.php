@push ('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tiny-slider@2.9.3/dist/tiny-slider.css">
@endpush

<!-- Hero -->
<section>
    <div class="hero relative">
        <!-- Slider -->
        <div id="banner-slider" class="hero-slider">
            @forelse ($tours as $tour)
            <div class="slide relative">
                <img data-img="{{ $tour->imageUrl }}" src="{{ $tour->thumbImageUrl }}" class="block" alt="{{ $tour->name }}">
                <div class="text absolute w-full py-4 lg:py-10">
                    <div class="container">
                        <h1 class="mb-2 font-display text-primary text-3xl lg:text-4xl uppercase">
                            <span>{{ $tour->name }}</span>
                        </h1>
                        <div class="mb-4 flex items-center">
                            <svg class="mr-2 w-6 h-6 text-accent">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg#calendar') }}" />
                            </svg>
                            <span class="mr-4">
                                {{ $tour->duration }} days
                            </span>
                            <svg class="mr-2 w-6 h-6 text-accent">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg#staro') }}" />
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
                            <a href="{{ route('front.trips.show', $tour->slug) }}" class="btn btn-accent">
                                Explore
                                <svg class="w-6 h-4">
                                    <use xlink:href="{{ asset('assets/front/img/sprite.svg#arrownarrowright') }}" />
                                </svg>
                            </a>
                            <a href="{{ route('front.trips.booking', $tour->slug) }}" class="btn btn-primary">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </div><!-- Slider -->

        <div class="hero-slider-controls none md:block absolute">
            <div class="container flex">
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
