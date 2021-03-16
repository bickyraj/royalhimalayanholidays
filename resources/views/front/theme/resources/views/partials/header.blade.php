<!-- Header -->
<header class="header fixed flex items-center w-full" x-data="{searchboxOpen:false, mobilenavOpen:false}">
    <div class="container relative flex justify-between items-center w-full">

        <!-- Logo -->
        <a class="logo flex-shrink-0" href="{{ route('home') }}">
            <img src="{{ asset('img/logo.png')}}" class="block" alt="Royal Himalayan Holidays">
        </a><!-- Logo -->

        <div class="flex items-center">
            {{-- <!-- Nav -->
            <nav>
                <ul>
                    <li>
                        <a href="#" class="uppercase">Destinations
                        </a>

                        <ul class="lg:absolute bg-white text-primary dropdown">

                            <li>
                                <a href="#">
                                    Nepal
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>

                                <ul class="lg:absolute bg-white text-primary dropright"
                                    x-show.transition.origin.top.left="submenu2Open">
                                    <li class="relative" x-data="{submenu3Open:false}" @mouseenter="submenu3Open=true"
                                        @mouseleave="submenu3Open=false">
                                        <a href="#" class="flex justify-between items-center px-4 py-2">Annapurna Region
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </a>

                                        <ul class="lg:absolute bg-white text-primary dropright"
                                            x-show.transition.origin.top.left="submenu3Open">
                                            <li>
                                                <a href="#" class="block px-4 py-2">Annapurna Base Camp Trek</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2">Annapurna Circuit Trek</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2">Mardi Himal Trek</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2">Upper Mustang Trek</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2">Tilicho Lake Trek</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><a href="#" class="block px-4 py-2">Everest Region</a></li>
                                    <li><a href="#" class="block px-4 py-2">Dolpo Region</a></li>
                                    <li><a href="#" class="block px-4 py-2">Langtang Region</a></li>
                                    <li><a href="#" class="block px-4 py-2">Kanchanjungha Region</a></li>
                                </ul>
                            </li>

                            <li
                                @mouseleave="submenu2Open=false">
                                <a href="#" class="block px-4 py-2 w-full">India</a>

                                <ul class="lg:absolute bg-white text-primary dropright"
                                    x-show.transition.origin.top.left="submenu2Open">
                                    <li class="relative" x-data="{submenu3Open:false}" @mouseenter="submenu3Open=true"
                                        @mouseleave="submenu3Open=false">
                                        <a href="#" class="block px-4 py-2">Region 1</a>

                                        <ul class="lg:absolute bg-white text-primary dropright"
                                            x-show.transition.origin.top.left="submenu3Open">
                                            <li>
                                                <a href="#" class="block px-4 py-2">Region 1 Trek 1</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2">Region 1 Trek 2</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="relative" x-data="{submenu3Open:false}" @mouseenter="submenu3Open=true"
                                        @mouseleave="submenu3Open=false">
                                        <a href="#" class="block px-4 py-2">Region 2</a>

                                        <ul class="absolute bg-white text-primary dropright"
                                            x-show.transition.origin.top.left="submenu3Open">
                                            <li>
                                                <a href="#" class="block px-4 py-2">Region 2 Trek 1</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2">Region 2 Trek 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a class="block px-4 py-2 w-full" href="#">Tibet</a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 w-full" href="#">Bhutan</a>
                            </li>

                        </ul>

                    </li>
                    <li class="relative" x-data="{submenuOpen: false}" @mouseenter="submenuOpen=true"
                        @mouseleave="submenuOpen=false">
                        <a href="#" class="flex justify-between items-center p-4 font-display uppercase">
                            Activities
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <ul class="dropdown lg:absolute bg-white text-primary" x-cloak
                            x-show.transition.origin.top.left="submenuOpen">
                            <li><a href="#" class="block px-4 py-2">Trekking & Hiking</a></li>
                            <li><a href="#" class="block px-4 py-2">Sightseeing</a></li>
                            <li><a href="#" class="block px-4 py-2">Mountain Flight</a></li>
                            <li><a href="#" class="block px-4 py-2">Rafting</a></li>
                            <li><a href="#" class="block px-4 py-2">City Tour</a></li>
                        </ul>
                    </li>
                    <li class="relative" x-data="{submenuOpen: false}" @mouseenter="submenuOpen=true"
                        @mouseleave="submenuOpen=false">
                        <a href="#" class="flex justify-between items-center p-4 font-display uppercase">
                            Style
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <ul class="dropdown lg:absolute bg-white text-primary" x-cloak
                            x-show.transition.origin.top.left="submenuOpen">
                            <li><a href="#" class="block px-4 py-2">Family Vacation</a></li>
                            <li><a href="#" class="block px-4 py-2">Sightseeing</a></li>
                            <li><a href="#" class="block px-4 py-2">Mountain Flight</a></li>
                            <li><a href="#" class="block px-4 py-2">Rafting</a></li>
                            <li><a href="#" class="block px-4 py-2">City Tour</a></li>
                        </ul>
                    </li>
                    <li class="relative" x-data="{submenuOpen: false}" @mouseenter="submenuOpen=true"
                        @mouseleave="submenuOpen=false">
                        <a href="#" class="flex justify-between items-center p-4 font-display uppercase">About
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>

                        <ul class="lg:absolute bg-white text-primary dropdown" x-cloak
                            x-show.transition.origin.top.left="submenuOpen">
                            <li>
                                <a href="#" class="block px-4 py-2 w-full">Our Team</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 w-full">Why Choose us?</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 w-full">Gallery</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.php" class="flex p-4 font-display uppercase">Contact Us</a>
                    </li>
                </ul>
            </nav><!-- Nav --> --}}
            <nav :class="{show: mobilenavOpen}">
                <ul id="main-nav" class="sm sm-simple">
                    <li>
                        <a href="#" class="font-display uppercase text-primary">Destinations</a>
                        <ul>
                            <li>
                                <a href="{{ route('tours.index') }}">Nepal</a>
                                <ul>
                                    <li>
                                        <a href="{{ route('tours.index') }}">Annapurna Region</a>
                                        <ul>
                                            <li>
                                                <a href="{{ route('tours.show', 'annapurna-base-camp-trek') }}">Annapurna Base Camp Trek</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('tours.index') }}">Everest Region</a></li>
                                    <li><a href="{{ route('tours.index') }}">Langtang Region</a></li>
                                    <li><a href="{{ route('tours.index') }}">Manaslu Region</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('tours.index') }}">India</a></li>
                            <li><a href="{{ route('tours.index') }}">Tibet</a></li>
                            <li><a href="{{ route('tours.index') }}">Bhutan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="font-display uppercase text-primary">Activities</a>
                        <ul>
                            <li><a href="{{ route('tours.index') }}">Trekking & Hiking</a></li>
                            <li><a href="{{ route('tours.index') }}">Sightseeing</a></li>
                            <li><a href="{{ route('tours.index') }}">Mountain Flight</a></li>
                            <li><a href="{{ route('tours.index') }}">Rafting</a></li>
                            <li><a href="{{ route('tours.index') }}">City Tour</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="font-display uppercase text-primary">Style</a>
                        <ul>
                            <li><a href="{{ route('tours.index') }}">Family Vacation</a></li>
                            <li><a href="{{ route('tours.index') }}">Sightseeing</a></li>
                            <li><a href="{{ route('tours.index') }}">Mountain Flight</a></li>
                            <li><a href="{{ route('tours.index') }}">Rafting</a></li>
                            <li><a href="{{ route('tours.index') }}">City Tour</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="font-display uppercase text-primary">About</a>
                        <ul>
                            <li><a href="{{ route('team.index') }}">Our Team</a></li>
                            <li><a href="{{ route('gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('reviews.index') }}">Reviews</a></li>
                            <li><a href="{{ route('faqs') }}">FAQs</a></li>
                            <li><a href="{{ route('legaldocuments') }}">Legal Documents</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="font-display uppercase text-primary">Contact Us</a>
                    </li>
                </ul>
            </nav><!-- Nav -->

            <!-- Search button -->
            <div>
                <button class="p-4" @click="searchboxOpen=true">
                    <svg class="w-6 h-6">
                        <use xlink:href="{{ asset('img/sprite.svg') }}#search" />
                    </svg>
                </button>
                <form action="" x-show="searchboxOpen" class="flex absolute" style="top:100%;right:0" @click.away="searchboxOpen=false">
                    <input type="search" name="" id="" placeholder="Search site" class="text-lg p-2 bg-gray">
                    <button class="btn-accent p-2">
                        <svg class="w-6 h-6">
                            <use xlink:href="{{ asset('img/sprite.svg') }}#arrownarrowright" />
                        </svg>
                    </button>
                </form>
            </div><!-- Search button -->

            <div class="lg:none">
                <button id="toggle-nav" @click="mobilenavOpen=!mobilenavOpen">
                    <svg class="w-6 h-6" x-show="!mobilenavOpen">
                        <use xlink:href="{{ asset('img/sprite.svg') }}#menu" />
                    </svg>
                    <svg class="w-6 h-6" x-cloak x-show="mobilenavOpen">
                        <use xlink:href="{{ asset('img/sprite.svg') }}#x" />
                    </svg>
                </button>
            </div>

            <!-- Talk to experts -->
            <div class="none xl:block">
                <div class="flex justify-end items-center">
                    <span class="mr-2 text-xs">Talk to an expert</span>
                    <a href="#" class="mr-1"><svg class="w-4 h-4">
                            <use xlink:href="{{ asset('img/sprite.svg') }}#viber" />
                        </svg>
                    </a>
                    <a href="#"><svg class="w-4 h-4">
                            <use xlink:href="{{ asset('img/sprite.svg') }}#whatsapp" />
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="tel:+977 01 4416 177">
                        <svg class="w-4 h-4">
                            <use xlink:href="{{ asset('img/sprite.svg') }}#phone" />
                        </svg>
                        +977 01 4416 177
                    </a>
                </div>
            </div>

        </div>

    </div>
</header><!-- Header -->
