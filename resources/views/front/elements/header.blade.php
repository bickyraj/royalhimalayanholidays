@push('styles')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endpush
<!-- Header -->
<header class="header">
    <div class="container">

        <!-- Logo -->
        <a class="header__logo" href="{{ url('/') }}">
            <img src="{{ asset('assets/front/img/logo.png') }}" alt="Hiker Himalaya Treks & Expedition">
        </a><!-- Logo -->

        @include('front.elements.navbar')

        <div class="header__search">
            <button id="show-searchbox">
                <svg>
                    <use xlink:href="{{ asset('assets/front/img/sprite.svg#search') }}" />
                </svg>
            </button>
        </div>

        <div class="header__togglenav">
            <button id="toggle-nav">
                <svg id="icon-menu">
                    <use xlink:href="{{ asset('assets/front/img/sprite.svg#menu') }}" />
                </svg>
                <svg id="icon-x">
                    <use xlink:href="{{ asset('assets/front/img/sprite.svg#x') }}" /></svg>
            </button>
        </div>

        <!-- Talk to experts -->
        <div class="header__experts hide-on-mobile">
            <div class="small">Talk to an expert</div>
            <div>
                <a href="tel:{{ Setting::get('mobile1') ?? '' }}">
                    <svg>
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg#phone') }}" />
                    </svg>
                    {{ Setting::get('mobile1') ?? '' }}
                </a>
                <a href="{{ Setting::get('viber') ?? '' }}"><svg class="icon">
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg#viber') }}" /></svg>
                </a>
                <a href="{{ Setting::get('whatsapp') ?? '' }}"><svg class="icon">
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg#whatsapp') }}" /></svg>
                </a>
            </div>
        </div>

        <div class="header__searchbox">
            <form id="search-form" action="{{ route('front.trips.search') }}" method="GET">
                <input id="header-search" style="z-index: 9999;" name="keyword" value="{{ request()->get('keyword') }}" type="text" placeholder="Search keywords">
                {{-- <input id="header-search" class="form-control" name="keyword" value="{{ request()->get('keyword') }}" type="text" placeholder="Where would you like to go?" style="font-size: 16px;"> --}}
                <button type="submit">
                    <svg>
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#arrownarrowright" /></svg>
                </button>
            </form>
        </div>

    </div>
</header><!-- Header -->
@push('scripts')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('assets/js/search-trips.js') }}"></script>
@endpush

<!-- <div id="mobile-nav">
    <div class="close">
        <button id="close-nav">
            <svg>
                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#x" /></svg>
        </button>
    </div>
    <ul class="nav">
        <li>
            <a href="#" class="navlink">
                Destinations
                <button class="toggle-submenu">
                    <svg class="caret">
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#chevrondown" /></svg>
                </button>
            </a>
            <ul class="submenu">
                <li><a href="#">Nepal</a></li>
                <li><a href="#">India</a></li>
                <li><a href="#">Tibet</a></li>
                <li><a href="#">Bhutan</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="navlink">
                Activities
                <button class="toggle-submenu">
                    <svg class="caret">
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#chevrondown" /></svg>
                </button>
            </a>
            <ul class="submenu">
                <li><a href="#">Trekking & Hiking</a></li>
                <li><a href="#">Sightseeing</a></li>
                <li><a href="#">Mountain Flight</a></li>
                <li><a href="#">Rafting</a></li>
                <li><a href="#">City Tour</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="navlink">About Us</a>
        </li>
        <li>
            <a href="#" class="navlink">Contact Us</a>
        </li>
        <li>
            <a href=""></a>
        </li>
    </ul>
    <a href="tel:+977-7496314882" class="expert">
        <span class="small">Talk to an expert</span>
        <div>
            <svg>
                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#phone" />
            </svg>
            +977 949-631-4882
        </div>
    </a>
</div> -->
