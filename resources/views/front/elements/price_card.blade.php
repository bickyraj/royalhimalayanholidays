<div class="price-card relative">
    <div class="ribbon absolute">
        <div class="text">
            Best Price
        </div>
    </div>

    <div class="p-2 pt-4 top text-white ">
        <div class="fs-sm mb-2">Price starting from</div>
        <p class=" price">
            <s>${{ number_format($trip->cost) }}</s>
            <span class="currency">USD</span>
            <span class="figure">{{ number_format($trip->offer_price) }}</span>
        </p>
        <p class="mb-3">
            <small>per person</small>
        </p>
        <div class="mb-2">
            <a href="{{ route('front.trips.booking', $trip->slug) }}" class="btn btn-primary">Book Now</a>
        </div>
        <div class="actions flex jcsa p-1">
            <a href="tour-details-print.php" class="flex jcc aic p-1 text-accent" title="Print tour details">
                <svg class="icon-md">
                    <use xlink:href="{{ asset('assets/front/img/sprite.svg#printer') }}" />
                </svg>
            </a>
            <a href="#" class="flex jcc aic p-1 text-accent" title="">
                <svg class="icon-md">
                    <use xlink:href="{{ asset('assets/front/img/sprite.svg#download') }}" />
                </svg>
            </a>
            <a href="#" class="flex jcc aic p-1 text-accent" title="Share tour">
                <svg class="icon-md">
                    <use xlink:href="{{ asset('assets/front/img/sprite.svg#share') }}" />
                </svg>
            </a>
        </div>
    </div>
</div>
