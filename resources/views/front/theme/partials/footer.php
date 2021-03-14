<!-- Newsletter -->
<div class="bg-light py-4">
    <div class="container">
        <h1 class="mb-3 font-display fs-2xl text-primary upper center">Why Choose Us</h1>
        <ul style="columns: 18rem 3">
            <li class="flex mb-1" style="break-inside:avoid-column">
                <svg class="icon-md shrink-0 mr-1 text-accent">
                    <use xlink:href="img/sprite.svg#check" />
                </svg>
                Local experts plan your itinerary
            </li>
            <li class="flex mb-1" style="break-inside:avoid-column">
                <svg class="icon-md shrink-0 mr-1 text-accent">
                    <use xlink:href="img/sprite.svg#check" />
                </svg>
                Friendly and fast customer service
            </li>
            <li class="flex mb-1" style="break-inside:avoid-column">
                <svg class="icon-md shrink-0 mr-1 text-accent">
                    <use xlink:href="img/sprite.svg#check" />
                </svg>
                Personal care and attention
            </li>
            <li class="flex mb-1" style="break-inside:avoid-column">
                <svg class="icon-md shrink-0 mr-1 text-accent">
                    <use xlink:href="img/sprite.svg#check" />
                </svg>
                Your safety is our number one priority
            </li>
            <li class="flex mb-1" style="break-inside:avoid-column">
                <svg class="icon-md shrink-0 mr-1 text-accent">
                    <use xlink:href="img/sprite.svg#check" />
                </svg>
                We speak several languages (English, French, Spanish and Chinese)
            </li>
            <li class="flex mb-1" style="break-inside:avoid-column">
                <svg class="icon-md shrink-0 mr-1 text-accent">
                    <use xlink:href="img/sprite.svg#check" />
                </svg>
                Award-winning company with rave reviews
            </li>
            <li class="flex mb-1" style="break-inside:avoid-column">
                <svg class="icon-md shrink-0 mr-1 text-accent">
                    <use xlink:href="img/sprite.svg#check" />
                </svg>
                As a courtesy, we inform your country’s embassy in case of emergency.
            </li>
            <li class="flex mb-1" style="break-inside:avoid-column">
                <svg class="icon-md shrink-0 mr-1 text-accent">
                    <use xlink:href="img/sprite.svg#check" />
                </svg>
                We have extensive experience and local knowledge
            </li>
            <li class="flex mb-1" style="break-inside:avoid-column">
                <svg class="icon-md shrink-0 mr-1 text-accent">
                    <use xlink:href="img/sprite.svg#check" />
                </svg>
                We are always available 24/7 with on-ground support in Nepal
            </li>
            <li class="flex mb-1" style="break-inside:avoid-column">
                <svg class="icon-md shrink-0 mr-1 text-accent">
                    <use xlink:href="img/sprite.svg#check" />
                </svg>
                We cater to every budget
            </li>
            <li class="flex mb-1" style="break-inside:avoid-column">
                <svg class="icon-md shrink-0 mr-1 text-accent">
                    <use xlink:href="img/sprite.svg#check" />
                </svg>
                No booking fees
            </li>
            <li class="flex mb-1" style="break-inside:avoid-column">
                <svg class="icon-md shrink-0 mr-1 text-accent">
                    <use xlink:href="img/sprite.svg#check" />
                </svg>
                We accept last minute booking
            </li>
            <li class="flex mb-1" style="break-inside:avoid-column">
                <svg class="icon-md shrink-0 mr-1 text-accent">
                    <use xlink:href="img/sprite.svg#check" />
                </svg>
                We care about local welfare and take care of our guides and porters
            </li>
            <li class="flex mb-1" style="break-inside:avoid-column">
                <svg class="icon-md shrink-0 mr-1 text-accent">
                    <use xlink:href="img/sprite.svg#check" />
                </svg>
                We use local guide and porter for your trip
            </li>
        </ul>
    </div>
</div>
<div class="newsletter">
    <div class="container">
        <div class="grid">
            <div class="col-1">
                <h1>Join our Newsletter</h1>
                <p>Sign up to stay updated with latest offers, news and more.</p>
            </div>
            <div>
                <form>
                    <label for="emailsub" class="sr-only">Email</label>
                    <input type="email" id="emailsub" placeholder="Your email" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div><!-- Newsletter -->

<!-- Footer -->
<footer>
    <div class="container fs-sm">
        <div class="grid">
            <div class="col">
                <h1>Destinations</h1>
                <ul>
                    <li><a href="tour-listing.php">Nepal</a></li>
                    <li><a href="tour-listing.php">India</a></li>
                    <li><a href="tour-listing.php">Bhutan</a></li>
                    <li><a href="tour-listing.php">Tibet</a></li>
                </ul>
            </div>
            <div class="col">
                <h1>Activities</h1>
                <ul>
                    <li><a href="tour-listing.php">Trekking & Hiking</a></li>
                    <li><a href="tour-listing.php">Sightseeing</a></li>
                    <li><a href="tour-listing.php">Mountain Flight</a></li>
                    <li><a href="tour-listing.php">Rafting</a></li>
                    <li><a href="tour-listing.php">City Tour</a></li>
                </ul>
            </div>
            <div class="col">
                <h1>About</h1>
                <ul>
                    <li><a href="faqs.php">FAQs</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="about.php">Travel Insurance</a></li>
                    <li><a href="about.php">Privacy Policy</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                </ul>
            </div>
            <div class="col">
                <h1><?= $companyname ?></h1>
                <ul class="icon-list">
                    <li><svg class="text-primary">
                            <use xlink:href="img/sprite.svg#locationmarker" />
                        </svg>
                        <?= $address ?></li>
                    <li><svg class="text-primary">
                            <use xlink:href="img/sprite.svg#phone" />
                        </svg><a href="tel:<?= $cell; ?>"><?= $cell; ?> (Dipak)</a></li>
                    <li><svg class="text-primary">
                            <use xlink:href="img/sprite.svg#phone" />
                        </svg> <a href="tel:<?= $phone; ?>"><?= $phone; ?></a></li>
                    <li><svg class="text-primary">
                            <use xlink:href="img/sprite.svg#mail" />
                        </svg> <a href="mailto:<?= $email; ?>"><?= $email; ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <ul class="social-links wrap">
                <li class="mb-1">
                    <a href="#">
                        <svg>
                            <use xlink:href="img/sprite.svg#facebook" />
                        </svg>
                    </a>
                </li>
                <li class="mb-1">
                    <a href="#">
                        <svg>
                            <use xlink:href="img/sprite.svg#twitter" />
                        </svg>
                    </a>
                </li>
                <li class="mb-1">
                    <a href="#">
                        <svg>
                            <use xlink:href="img/sprite.svg#instagram" />
                        </svg>
                    </a>
                </li>
                <li class="mb-1">
                    <a href="#">
                        <svg>
                            <use xlink:href="img/sprite.svg#whatsapp" />
                        </svg>
                    </a>
                </li>
                <li class="mb-1">
                    <a href="#">
                        <svg>
                            <use xlink:href="img/sprite.svg#viber" />
                        </svg>
                    </a>
                </li>
                <li class="mb-1">
                    <a href="#">
                        <svg>
                            <use xlink:href="img/sprite.svg#weixin" />
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="col-end">
                &copy; 2020. All right Reserved.
            </div>
            <div class="col-end">
                Powered by
                <a href="https://thirdeyesystem.com">Third Eye Systems</a>
            </div>
        </div>
    </div>
    <div class="ap bg-light">
        <div class="container">

            <div class="affiliations">
                <div class="fs-xs">We are affiliated to</div>
                <ul>
                    <li><a href="#"><img src="img/ng.svg" alt="Nepal Government Ministry of Culture, Tourism & Civil Aviation"></a></li>
                    <li><a href="#"><img src="img/ntb.svg" alt="Nepal Tourism Board"></a></li>
                    <li><a href="https://www.taan.org.np/"><img src="img/taan.svg" alt="Trekking Agencies' Association of Nepal"></a></li>
                    <li><a href="#"><img src="img/nma.svg" alt="Nepal Mountaineering Association"></a></li>
                </ul>
            </div>

            <div class="payments">
                <img src="img/payment.svg" alt="">
            </div>
        </div>
    </div>
</footer><!-- Footer -->
