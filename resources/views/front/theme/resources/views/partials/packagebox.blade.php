<div class="tour grid md:grid-cols-2 lg:grid-cols-3">
    <div class="top">
        <img src="{{ asset('img/'.$tour->image) }}" alt="{{ $tour->name }}">
        <div class="stars absolute flex items-center mr-4 text-accent">
            <svg class="w-4 h-4">
                <use xlink:href="{{ asset('img/sprite.svg') }}#star" /></svg>
            <svg class="w-4 h-4">
                <use xlink:href="{{ asset('img/sprite.svg') }}#star" /></svg>
            <svg class="w-4 h-4">
                <use xlink:href="{{ asset('img/sprite.svg') }}#star" /></svg>
            <svg class="w-4 h-4">
                <use xlink:href="{{ asset('img/sprite.svg') }}#star" /></svg>
            <svg class="w-4 h-4">
                <use xlink:href="{{ asset('img/sprite.svg') }}#star" /></svg>
            </div>
        </div>
    <div class="offer">Best Seller</div>
    <div class="lg:col-span-2">
        <div class="px-4">
            <div class="py-4">
                {{-- Top --}}
                <div class="lg:flex mb-8">
                    <div class="flex-grow-1">
                        <a href="{{ route('tours.show', ['slug' => $tour->slug])}}"><h2 class="mb-1 font-display text-2xl text-primary uppercase">{{ $tour->name }}</h2></a>
                        <div class="flex text-sm">
                            <svg class="flex-shrink-0 mr-2 w-4 h-4">
                                <use xlink:href="{{ asset('img/sprite.svg') }}#locationmarker" />
                            </svg>
                            <span>Kathmandu, Pokhara, Chitwan, Mount Everest</span>
                        </div>
                    </div>
                    <div class="flex-shrink-0 mb-4 flex items-baseline price">
                        <div class="mr-2 text-gray">
                            <span class="text-sm">
                                from
                            </span>
                            <s class="font-bold text-red">
                                USD 1000
                            </s>
                        </div>
                        <div class="font-display text-primary">
                            <span>USD</span>
                            <span class="text-3xl">780</span>
                            <span>.00</span>
                        </div>
                    </div>
                </div>
                {{-- Highlights --}}
                <div class="article text-sm">
                    <ul>
                        <li>Enjoy breathtaking views of surrounding mountains.</li>
                        <li>Travel comfortably by helicopter wherever you go.</li>
                        <li>Stay at 5-star hotels in the city and luxury lodges elsewhere.</li>
                        <li>Experience up-close encounters with indigeneous culture and wildlife.</li>
                        <li>Go on a hiking trails in Sagarmatha National Park.</li>
                    </ul>
                </div>
            </div>
            {{-- Bottom --}}
            <div class="bottom flex gap-4 flex-wrap py-4">
                <div class="flex-grow-1 mb-2 lg:mb-0">
                    <div class="mb-1 font-display text-gray text-sm uppercase">When to go</div>
                    <div class="flex text-xs gap-1">
                        <div class="flex justify-center items-center w-5 h-5 bg-gray" style="border-radius: 50%">J</div>
                        <div class="flex justify-center items-center w-5 h-5 bg-gray" style="border-radius: 50%">F</div>
                        <div class="flex justify-center items-center w-5 h-5 bg-accent text-white" style="border-radius: 50%">M</div>
                        <div class="flex justify-center items-center w-5 h-5 bg-gray" style="border-radius: 50%">A</div>
                        <div class="flex justify-center items-center w-5 h-5 bg-gray" style="border-radius: 50%">M</div>
                        <div class="flex justify-center items-center w-5 h-5 bg-gray" style="border-radius: 50%">J</div>
                        <div class="flex justify-center items-center w-5 h-5 bg-gray" style="border-radius: 50%">J</div>
                        <div class="flex justify-center items-center w-5 h-5 bg-gray" style="border-radius: 50%">A</div>
                        <div class="flex justify-center items-center w-5 h-5 bg-gray" style="border-radius: 50%">S</div>
                        <div class="flex justify-center items-center w-5 h-5 bg-gray" style="border-radius: 50%">O</div>
                        <div class="flex justify-center items-center w-5 h-5 bg-accent text-white" style="border-radius: 50%">N</div>
                        <div class="flex justify-center items-center w-5 h-5 bg-accent text-white" style="border-radius: 50%">D</div>
                    </div>
                </div>
                <div class="flex-grow-1 flex items-center mb-2 lg:mb-0">
                    <svg class="mr-4 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                    <div>
                        <div class="font-display text-gray text-sm uppercase">Duration</div>
                        <div>
                            <span class="text-2xl font-display">{{ $tour->duration }}</span> days
                        </div>
                    </div>
                </div>
                <div class="flex-grow-1">
                    <a href="{{ route('tours.show', ['slug' => $tour->slug]) }}" class="block w-full btn btn-primary">
                        Explore
                        <svg class="w-6 h-6">
                            <use xlink:href="{{ asset('img/sprite.svg') }}#arrownarrowright" /></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>