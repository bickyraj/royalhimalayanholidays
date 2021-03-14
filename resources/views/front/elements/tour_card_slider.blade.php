<div>
    <div class="grid lg:grid-cols-2 gap-3">
        <div>
            <img src="{{ $block2tour->imageUrl }}" alt="{{ $block2tour->name }}">
        </div>
        <div>
            <h2 class="fs-2xl bold">
                {{ $block2tour->name }}
            </h2>
            {{ truncate(strip_tags($block2tour->trip_info['overview'])) }}

            <div class="flex wrap text-primary mb-2">
                <div class="flex aic m-1 p-2 bg-light">
                    <svg class="icon-md mr-1">
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg#calendar') }}"></use>
                    </svg>
                    <div>
                        <div class="upper bold fs-xs">Duration</div>
                        <span class="fs-lg bold"> <?= $block2tour->duration; ?> </span> days
                    </div>
                </div>
                <div class="flex aic m-1 p-2 bg-light">
                    <svg class="icon-md mr-1">
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg#emojihappy') }}"></use>
                    </svg>
                    <div>
                        <div class="upper bold fs-xs">Difficulty</div>
                        {{ $block2tour->difficulty_grade_value }}
                    </div>
                </div>
            </div>

            <div class="price mb-4">
                <div>
                    <span class="fs-sm">
                        from
                    </span>
                    <s class="old">
                        USD {{ number_format($block2tour->cost, 2) }}
                    </s>
                </div>
                <div>
                    <span class=" text-accent fs-sm">
                        USD
                    </span>
                    @php
                        $price_arr = explode('.', number_format($block2tour->offer_price, 2));
                    @endphp
                    <span class=" text-accent fs-2xl bold">
                        {{ $price_arr[0] }}
                    </span>
                    <span class=" text-accent fs-md">
                        .{{ $price_arr[1] }}
                    </span>
                </div>
            </div>


            <div>
                <a href="{{ route('front.trips.show', $block2tour->slug) }}" class="btn btn-theme">
                    Explore
                    <svg class="icon">
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg#arrownarrowright') }}"></use>
                    </svg>
                </a>
                <a href="{{ route('front.trips.booking', $block2tour->slug) }}" class="btn btn-gray">
                    Book Now
                </a>
            </div>
        </div>
    </div>
</div>
