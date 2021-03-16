<div class="price-card bg-primary mb-6 pt-4">
    <div class="relative flex mb-4 ribbon">
        <div class="bg-white relative px-4 py-1 font-display text-accent text-2xl">
            Best Price
        </div>
    </div>

    <div class="p-4 text-white">
        <div class="">
            <span class="text-sm mb-2 mr-2">Price starting from</span>
            <s class="font-bold text-xl">${{ number_format($trip->cost) }}</s>
        </div>
        <div class="mb-2 font-display mb-0">
            <span class="font-bold text-2xl">USD $</span>
            <span class="font-bold text-5xl text-accent">{{ number_format($trip->offer_price) }}</span>
            <span class="text-xl">per person</span>
        </div>
        <div class="mb-2 text-center">
            <a href="{{ route('front.trips.booking', $trip->slug) }}" class="mb-2 btn btn-accent w-full">Book Now</a>
            <a href="{{ route('front.trips.customize', $trip->slug) }}" class="btn btn-accent">

                <svg class="w-6 h-6 flex-shrink-0 mr-2">
                    <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#adjustments" />
                </svg>
                Customize
            </a>
        </div>
        <div class="actions p-1">
            <a href="" class="flex items-center p-1 text-accent" title="Print tour details">
                <svg class="w-4 h-4 flex-shrink-0 mr-2">
                    <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#printer" />
                </svg>
                <span class="text-sm">Print Tour Details</span>
            </a>
            <a href="#" class="flex items-center p-1 text-accent" title="">
                <svg class="w-4 h-4 flex-shrink-0 mr-2">
                    <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#download" />
                </svg>
                <span class="text-sm">Download Tour Brochure</span>
            </a>
            <a href="#" class="flex items-center p-1 text-accent" title="Share tour">
                <svg class="w-4 h-4 flex-shrink-0 mr-2">
                    <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#share" />
                </svg>
                <span class="text-sm">Share Tour</span>
            </a>
        </div>
    </div>
    <div class="bg-light p-2">
        <div class="mb-2 font-bold">Get group discounts</div>
        <table>
            <thead>
                <th class="font-display px-1 py-2">Group size</th>
                <th class="font-display px-1 py-2">Price per person</th>
            </thead>
            <tbody>
                <tr>
                    <td class="px-1 py-2 text-sm">1 person</td>
                    <td class="px-1 py-2 text-sm text-right">$1500</td>
                </tr>
                <tr>
                    <td class="px-1 py-2 text-sm">2 - 4 people</td>
                    <td class="px-1 py-2 text-sm text-right">$1450</td>
                </tr>
                <tr>
                    <td class="px-1 py-2 text-sm">5-10 people</td>
                    <td class="px-1 py-2 text-sm text-right">$1425</td>
                </tr>
                <tr>
                    <td class="px-1 py-2 text-sm">10-20 people</td>
                    <td class="px-1 py-2 text-sm text-right">$1415</td>
                </tr>
                <tr>
                    <td class="px-1 py-2 text-sm">more than 20 people</td>
                    <td class="px-1 py-2 text-sm text-right">$1415</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
