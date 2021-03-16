<!-- Newsletter -->
<div class="bg-light py-8">
    <div class="container">
        <div class="grid lg:grid-cols-2 gap-4">
            <div>
                <h1 class="mb-2 font-display uppercase text-2xl text-primary">Join our Newsletter</h1>
                <div>Sign up to stay updated with latest offers, news and more.</div>
            </div>
            <div>
                <form class="flex flex-wrap">
                    <label for="emailsub" class="sr-only">Email</label>
                    <input type="email" id="emailsub" class="text-xl p-4 mb-1 lg:mb-0 lg:mr-2" placeholder="Your email" required>
                    <button type="submit" class="btn btn-accent">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div><!-- Newsletter -->

<!-- Footer -->
<footer class="bg-primary text-white">
    <div class="container fs-sm">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
            <div class="mb-4">
                <h1>Destinations</h1>
                <ul>
                    <li><a class="text-sm" href="{{ route('tours.index') }}">Nepal</a></li>
                    <li><a class="text-sm" href="{{ route('tours.index') }}">India</a></li>
                    <li><a class="text-sm" href="{{ route('tours.index') }}">Bhutan</a></li>
                    <li><a class="text-sm" href="{{ route('tours.index') }}">Tibet</a></li>
                </ul>
            </div>
            <div class="mb-4">
                <h1>Activities</h1>
                <ul>
                    <li><a class="text-sm" href="{{ route('tours.index') }}">Trekking & Hiking</a></li>
                    <li><a class="text-sm" href="{{ route('tours.index') }}">Sightseeing</a></li>
                    <li><a class="text-sm" href="{{ route('tours.index') }}">Mountain Flight</a></li>
                    <li><a class="text-sm" href="{{ route('tours.index') }}">Rafting</a></li>
                    <li><a class="text-sm" href="{{ route('tours.index') }}">City Tour</a></li>
                </ul>
            </div>
            <div class="mb-4">
                <h1>About</h1>
                <ul>
                    <li><a class="text-sm" href="{{ route('faqs') }}">FAQs</a></li>
                    <li><a class="text-sm" href="{{ route('contact') }}">Contact Us</a></li>
                    <li><a class="text-sm" href="about.php">Travel Insurance</a></li>
                    <li><a class="text-sm" href="about.php">Privacy Policy</a></li>
                    <li><a class="text-sm" href="{{ route('gallery') }}">Gallery</a></li>
                </ul>
            </div>
            <div class="col-span-2 lg:col-span-1">
                <h1 class="font-display text-2xl text-white">Royal Himalayan Holidays</h1>
                <ul class="icon-list">
                    <li class="flex">
                        <svg class="flex-shrink-0 mr-1">
                            <use xlink:href="{{ asset('img/sprite.svg') }}#locationmarker" /></svg>
                        <span class="text-sm">Thamel, Kathmandu<br> Nepal</span></li>
                    <li class="flex">
                        <svg class="flex-shrink-0 mr-1">
                            <use xlink:href="{{ asset('img/sprite.svg') }}#phone" /></svg>
                        <a class="text-sm" href="tel:+977 01 4416 177">+977 01 4416 177</a></li>
                    <li class="flex">
                        <svg class="flex-shrink-0 mr-1">
                            <use xlink:href="{{ asset('img/sprite.svg') }}#devicemobile" /></svg>
                        <a class="text-sm" href="tel:+977 9851 039 480">+977 9851 039 480</a></li>
                    <li class="flex">
                        <svg class="flex-shrink-0 mr-1">
                            <use xlink:href="{{ asset('img/sprite.svg') }}#mail" /></svg>
                        <a class="text-sm" href="mailto:info@royalhimalayanholidays.com">info@royalhimalayanholidays<wbr>.com</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <ul class="social-links flex-wrap mb-4">
                <li class="mb-1">
                    <a href="#">
                        <svg>
                            <use xlink:href="{{ asset('img/sprite.svg') }}#facebook" />
                        </svg>
                    </a>
                </li>
                <li class="mb-1">
                    <a href="#">
                        <svg>
                            <use xlink:href="{{ asset('img/sprite.svg') }}#twitter" />
                        </svg>
                    </a>
                </li>
                <li class="mb-1">
                    <a href="#">
                        <svg>
                            <use xlink:href="{{ asset('img/sprite.svg') }}#instagram" />
                        </svg>
                    </a>
                </li>
                <li class="mb-1">
                    <a href="#">
                        <svg>
                            <use xlink:href="{{ asset('img/sprite.svg') }}#whatsapp" />
                        </svg>
                    </a>
                </li>
                <li class="mb-1">
                    <a href="#">
                        <svg>
                            <use xlink:href="{{ asset('img/sprite.svg') }}#viber" />
                        </svg>
                    </a>
                </li>
                <li class="mb-1">
                    <a href="#">
                        <svg>
                            <use xlink:href="{{ asset('img/sprite.svg') }}#weixin" />
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="mb-2 affiliations">
                <div class="mb-2 text-xs">We are affiliated to</div>
                <ul>
                    <li class="mr-1 p-2"><a href="#"><img src="{{ asset('img/ng.svg') }}"
                                alt="Nepal Government Ministry of Culture, Tourism & Civil Aviation"></a></li>
                    <li class="mr-1 p-2"><a href="#"><img src="{{ asset('img/ntb.svg') }}" alt="Nepal Tourism Board"></a></li>
                    <li class="mr-1 p-2"><a href="https://www.taan.org.np/"><img src="{{ asset('img/taan.svg') }}"
                                alt="Trekking Agencies' Association of Nepal"></a></li>
                    <li class="p-2"><a href="#"><img src="{{ asset('img/nma.svg') }}" alt="Nepal Mountaineering Association"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bg-primary text-xs text-center pb-20">
        <div class="container md:flex justify-between">
            <div class="mb-2">
                &copy; 2020. All right Reserved.
            </div>
            <div class="mb-4">
                Powered by
                <a href="https://thirdeyesystem.com">Third Eye Systems</a>
            </div>
            <div class="payments">
                <img src="{{ asset('img/payment.svg') }}" alt="">
            </div>
        </div>
    </div>
</footer><!-- Footer -->