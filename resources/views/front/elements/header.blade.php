@push('styles')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endpush


<!-- Header -->
<header class="header fixed flex items-center w-full" x-data="{searchboxOpen:false, mobilenavOpen:false}">
    <div class="container relative flex justify-between items-center w-full">

        <!-- Logo -->
        <a class="logo flex-shrink-0" href="{{ url('/') }}">
            <img src="{{ asset('assets/front/img/logo.png')}}" class="block" alt="Royal Himalayan Holidays">
        </a><!-- Logo -->

        <div class="flex items-center">
            @include('front.elements.navbar')

            <!-- Search button -->
            <div>
                <button class="p-4" @click="searchboxOpen=true">
                    <svg class="w-6 h-6">
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#search" />
                    </svg>
                </button>
                <form id="search-form" action="{{ route('front.trips.search') }}" method="GET" x-show="searchboxOpen" class="flex absolute" style="top:100%;right:0" @click.away="searchboxOpen=false">
                    <div style="position: relative; display:flex;">
                        <input id="header-search" style="z-index: 9999;" name="keyword" value="{{ request()->get('keyword') }}" placeholder="Search keywords" class="text-lg p-2 bg-gray">
                        <button type="submit" class="btn-accent p-2">
                            <svg class="w-6 h-6">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#arrownarrowright" />
                            </svg>
                        </button>
                        <div id="autocomplete-suggestion-box" style="position: absolute; width: 100%; display: flex; right: 0px;"></div>
                    </div>
                </form>
            </div><!-- Search button -->

            <div class="lg:none">
                <button id="toggle-nav" @click="mobilenavOpen=!mobilenavOpen">
                    <svg class="w-6 h-6" x-show="!mobilenavOpen">
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#menu" />
                    </svg>
                    <svg class="w-6 h-6" x-cloak x-show="mobilenavOpen">
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#x" />
                    </svg>
                </button>
            </div>

            <!-- Talk to experts -->
            <div class="none xl:block">
                <div class="flex justify-end items-center">
                    <span class="mr-2 text-xs">Talk to an expert</span>
                    <a href="{{ Setting::get('viber') ?? '' }}" class="mr-1"><svg class="w-4 h-4">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#viber" />
                        </svg>
                    </a>
                    <a href="{{ Setting::get('whatsapp') ?? '' }}"><svg class="w-4 h-4">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#whatsapp" />
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="tel:{{ Setting::get('mobile1') ?? '' }}">
                        <svg class="w-4 h-4">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#phone" />
                        </svg>
                        {{ Setting::get('mobile1') ?? '' }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</header><!-- Header -->
@push('scripts')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('assets/js/search-trips.js') }}"></script>
@endpush
