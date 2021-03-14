<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $companyname; ?></title>

    <!-- Raleway -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
</head>

<body class="home-page" x-data="{searchWidgetOpen: false}">

    <?php require 'partials/header.php'; ?>

    <!-- Hero -->
    <div class="hero relative">
        <!-- Slider -->
        <div class="hero-slider">
            <!-- <img src="img/hero.jpg" alt="Mountains" class="hero__img" /> -->

            <div class="slide">
                <img src="img/hero.jpg" alt="">
                <div class="hero__text">
                    <div class="container">
                        <h1><span>Annapurna Base Camp Tour</span></h1>
                        <button class="hero__button">
                            Explore
                            <svg>
                                <use xlink:href="img/sprite.svg#arrownarrowright" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="img/hero2.jpg" alt="">
                <div class="hero__text">
                    <div class="container">
                        <h1><span>Everest Base Camp Tour</span></h1>
                        <button class="hero__button">
                            Explore
                            <svg>
                                <use xlink:href="img/sprite.svg#arrownarrowright" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="img/hero3.jpg" alt="">
                <div class="hero__text">
                    <div class="container">
                        <h1><span>Experience Nepal with its best</span></h1>
                        <button class="hero__button" @click="searchWidgetOpen = true">
                            Find a tour
                            <svg>
                                <use xlink:href="img/sprite.svg#arrownarrowright" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- Slider -->

        <div class="absolute search-widget-toggle">
            <button class="hero__button" @click="searchWidgetOpen = true">
                Find tour
                <svg>
                    <use xlink:href="img/sprite.svg#search" />
                </svg>
            </button>
        </div>

        <!-- <img src="img/cloudoverlay.png" alt="" class="hero__overlay" /> -->
    </div><!-- Hero -->

    <?php require 'partials/search-widget.php'; ?>

    <!-- Activities -->
    <div class="activities section">
        <div class="container">
            <h1>Tour Activities</h1>

            <div class="grid">
                <a href="tour-listing.php">
                    <div class="activity">
                        <img src="img/act-adventure-sports.jpg" alt="">
                        <div class="activity-title">
                            <h2>Adventure Sports</h2>
                            <svg>
                                <use xlink:href="img/sprite.svg#arrownarrowright" />
                            </svg>
                        </div>
                        <div class="tours">
                            <div class="fs-xl bold">10</div>
                            <div class="fs-sm">tours</div>
                        </div>
                    </div>
                </a>

                <a href="tour-listing.php">
                    <div class="activity">
                        <img src="img/act-city-tour.jpg" alt="">
                        <div class="activity-title">
                            <h2>Day & City Tours</h2>
                            <svg>
                                <use xlink:href="img/sprite.svg#arrownarrowright" />
                            </svg>
                        </div>
                        <div class="tours">
                            <div class="fs-xl bold">10</div>
                            <div class="fs-sm">tours</div>
                        </div>
                    </div>
                </a>

                <a href="tour-listing.php">
                    <div class="activity">
                        <img src="img/act-mountain-flight.jpg" alt="">
                        <div class="activity-title">
                            <h2>Mountain Flight</h2>
                            <svg>
                                <use xlink:href="img/sprite.svg#arrownarrowright" />
                            </svg>
                        </div>
                        <div class="tours">
                            <div class="fs-xl bold">10</div>
                            <div class="fs-sm">tours</div>
                        </div>
                    </div>
                </a>

                <a href="tour-listing.php">
                    <div class="activity">
                        <img src="img/act-peak-climbing.jpg" alt="">
                        <div class="activity-title">
                            <h2>Peak Climbing</h2>
                            <svg>
                                <use xlink:href="img/sprite.svg#arrownarrowright" />
                            </svg>
                        </div>
                        <div class="tours">
                            <div class="fs-xl bold">10</div>
                            <div class="fs-sm">tours</div>
                        </div>
                    </div>
                </a>

                <a href="tour-listing.php">
                    <div class="activity">
                        <img src="img/act-pilgrimage.jpg" alt="">
                        <div class="activity-title">
                            <h2>Pilgrimage</h2>
                            <svg>
                                <use xlink:href="img/sprite.svg#arrownarrowright" />
                            </svg>
                        </div>
                        <div class="tours">
                            <div class="fs-xl bold">10</div>
                            <div class="fs-sm">tours</div>
                        </div>
                    </div>
                </a>

                <a href="tour-listing.php">
                    <div class="activity">
                        <img src="img/act-trekking.jpg" alt="">
                        <div class="activity-title">
                            <h2>Trekking & Hiking</h2>
                            <svg>
                                <use xlink:href="img/sprite.svg#arrownarrowright" />
                            </svg>
                        </div>
                        <div class="tours">
                            <div class="fs-xl bold">10</div>
                            <div class="fs-sm">tours</div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div><!-- Activities -->

    <!-- About -->
    <div class="about section bg-light">
        <div class="container">
            <div class="grid">
                <div class="about__text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, itaque! Commodi animi pariatur saepe porro ea facilis sequi tempora quo.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque illum sequi modi odio. Aliquam reprehenderit sequi dolores itaque deserunt esse quos ipsam adipisci, dolore ducimus quaerat fugit quod molestiae nihil consectetur at odio architecto exercitationem harum cum earum! Eum, inventore!</p>

                    <!-- <div class="highlights">
                            <div class="grid"></div>
                        </div> -->

                    <div>
                        <a href="our-team.php" class="theme">
                            Our Team
                            <svg>
                                <use xlink:href="img/sprite.svg#arrownarrowright" />
                            </svg>
                        </a>
                    </div>
                    <div>
                        <a href="gallery.php" class="theme">
                            Gallery
                            <svg>
                                <use xlink:href="img/sprite.svg#arrownarrowright" />
                            </svg>
                        </a>
                    </div>
                    <img src="img/about.jpg" alt="Syowanbhunath Stupa, Kathmandu" class="about__imgsm">
                </div>
                <div class="about__imagewrapper">
                    <img src="img/about2.jpg" alt="" class="about__img">
                </div>
            </div>
        </div>
    </div><!-- About -->

    <!-- Destinations -->
    <div class="destinations section">
        <div class="container">
            <div class="grid">
                <div>
                    <h1>Where do you want to go?</h1>
                    <div class="destination__controls">
                        <button class="dest-prev">
                            <svg>
                                <use xlink:href="img/sprite.svg#arrownarrowleft" />
                            </svg>
                        </button>
                        <button class="dest-next">
                            <svg>
                                <use xlink:href="img/sprite.svg#arrownarrowright" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="destination__wrapper">
                    <div class="destination__slider">
                        <div class="destination">
                            <a href="tour-listing.php">
                                <img src="img/dest-nepal.jpg" alt="">
                                <div class="overlay">
                                    <h2>Nepal</h2>
                                    <div>99 tours</div>
                                </div>
                            </a>
                        </div>
                        <div class="destination">
                            <a href="tour-listing.php">
                                <img src="img/dest-india.jpg" alt="">
                                <div class="overlay">
                                    <h2>India</h2>
                                    <div>32 tours</div>
                                </div>
                            </a>
                        </div>
                        <div class="destination">
                            <a href="tour-listing.php">
                                <img src="img/dest-tibet.jpg" alt="">
                                <div class="overlay">
                                    <h2>Tibet</h2>
                                    <div>16 tours</div>
                                </div>
                            </a>
                        </div>
                        <div class="destination">
                            <a href="tour-listing.php">
                                <img src="img/dest-bhutan.jpg" alt="">
                                <div class="overlay">
                                    <h2>Bhutan</h2>
                                    <div>12 tours</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Destinations -->

    <!-- Featured -->
    <div class="featured section bg-light">
        <div class="container">
            <h1>Popular Right Now</h1>
            <div class="grid gap-2 xl:gap-3">
                <?php foreach ($tours as $tour) : ?>
                    <?php include 'partials/tour-card.php'; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div> <!-- Featured -->

    <!-- Reviews -->
    <div class="reviews section">
        <div class="container">
            <h1>Reviews from our customers</h1>
            <div class="grid">
                <div class="review">
                    <div class="review__content">
                        <h2>Rewarding trek with best guides</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio reiciendis fugiat aperiam beatae et aspernatur consequuntur, iste consequatur totam eligendi alias quae dolor iure quam exercitationem cumque aliquid architecto assumenda!</p>
                    </div>
                    <div class="review__person">
                        <div class="image">
                            <img src="img/portrait1.jpg" alt="">
                        </div>
                        <div>
                            <div class="name">Emory McCullough</div>
                            <div class="from">Virgin Islands, U.S.</div>
                        </div>
                    </div>
                </div>
                <div class="review">
                    <div class="review__content">
                        <h2>Never had so much fun!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio reiciendis fugiat aperiam beatae et aspernatur consequuntur, iste consequatur totam eligendi alias quae dolor iure quam exercitationem cumque aliquid architecto assumenda!</p>
                    </div>
                    <div class="review__person">
                        <div class="image">
                            <img src="img/portrait2.jpg" alt="">
                        </div>
                        <div>
                            <div class="name">Ola Murray</div>
                            <div class="from">Gambia</div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="reviews.php" class="theme">Read reviews
                <svg>
                    <use xlink:href="img/sprite.svg#arrownarrowright" />
                </svg>
            </a>
        </div>
    </div><!-- Reviews -->

    <!-- Videos & TA -->
    <div class="vta section bg-light">

        <div class="container">
            <div class="video">
                <div class="video-wrapper mb-5">
                    <iframe src="https://www.youtube.com/embed/K7q8kPuxxQI?modestbranding=1" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="tripadvisor">
                <img src="https://www.tripadvisor.com/TripAdvisorInsights/wp-content/uploads/2018/01/widget_long_form_copy.jpg%22" alt="Tripadvisor">
                <!-- <div id="TA_selfserveprop827" class="TA_selfserveprop">
                    <ul id="4KT9a3oFnlGT" class="TA_links rF98AxM5Q">
                        <li id="4OLTP8Z" class="106qXXM9"><a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g293890-d17581480-Reviews-Hiker_Himalaya_Treks_Expedition_Pvt_Ltd-Kathmandu_Kathmandu_Valley_Bagmati_Zone_.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-11900-2.svg" alt="TripAdvisor" /></a></li>
                    </ul>
                </div>
                <script async src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=827&amp;locationId=17581480&amp;lang=en_US&amp;rating=true&amp;nreviews=4&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=true&amp;border=true&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script> -->
            </div>
        </div>
    </div>

    <!-- Trip of the month -->
    <div class="section bg-primary text-white">
        <div class="container">
            <div class="lg:flex jcsb aife">
                <h1 class="text-white mr-2">Trips of the month</h1>
                <div class="tripsSlider__controls">
                    <button>
                        <svg class="icon-md text-accent">
                            <use xlink:href="img/sprite.svg#arrownarrowleft" />
                        </svg>
                    </button>
                    <button>
                        <svg class="icon-md text-accent">
                            <use xlink:href="img/sprite.svg#arrownarrowright" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="relative">
                <div class="trips__slider">
                    <?php foreach ($tours as $tour) : ?>
                        <div>
                            <div class="grid lg:grid-cols-2 gap-3">
                                <div>
                                    <?php if (isset($tour['img'])) : ?>
                                        <img src="img/<?= $tour['img']; ?>" alt="<?php $tour['title']; ?>">
                                    <?php else : ?>
                                        <img src="img/dest-nepal.jpg" alt="<?php $tour['title']; ?>">
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <h2 class="fs-2xl bold">
                                        <?= $tour['title']; ?>
                                    </h2>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita assumenda repellat quisquam alias pariatur! Voluptates sint, expedita deserunt sit dolorum dolore ratione debitis harum quae odio eveniet et distinctio ex.
                                    </p>

                                    <div class="flex wrap text-primary mb-2">
                                        <div class="flex aic m-1 p-2 bg-light">
                                            <svg class="icon-md mr-1">
                                                <use xlink:href="img/sprite.svg#calendar"></use>
                                            </svg>
                                            <div>
                                                <div class="upper bold fs-xs">Duration</div>
                                                <span class="fs-lg bold"> 21 </span> days
                                            </div>
                                        </div>
                                        <div class="flex aic m-1 p-2 bg-light">
                                            <svg class="icon-md mr-1">
                                                <use xlink:href="img/sprite.svg#emojihappy"></use>
                                            </svg>
                                            <div>
                                                <div class="upper bold fs-xs">Difficulty</div>
                                                Easy
                                            </div>
                                        </div>
                                    </div>

                                    <div class="price mb-4">
                                        <div>
                                            <span class="fs-sm">
                                                from
                                            </span>
                                            <s class="old">
                                                USD 1000
                                            </s>
                                        </div>
                                        <div>
                                            <span class=" text-accent fs-sm">
                                                USD
                                            </span>
                                            <span class=" text-accent fs-2xl bold">
                                                780
                                            </span>
                                            <span class=" text-accent fs-md">
                                                .00
                                            </span>
                                        </div>
                                    </div>


                                    <div>
                                        <a href="tour-details.php" class="btn btn-theme">
                                            Explore
                                            <svg class="icon">
                                                <use xlink:href="img/sprite.svg#arrownarrowright"></use>
                                            </svg>
                                        </a>
                                        <a href="tour-details.php" class="btn btn-gray">
                                            Book Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>

    <!-- Departure Dates -->
    <div class="departure-dates section">
        <div class="container">
            <div class="flex wrap jcsb aic">
                <h1 class="fs-xl mr-2">Upcoming Departures</h1>
                <div class="mb-2">
                    <form action="">
                        <div class="form-group">
                            <select name="" id="" class="bg-light">
                                <option selected disabled>Choose Month & Year</option>
                                <option value="">Jan 2021</option>
                                <option value="">Feb 2021</option>
                                <option value="">Mar 2021</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bg-white">
                <!-- <h2>Date & Price</h2> -->
                <!-- <h3>Upcoming Departure Dates</h3> -->
                <div class="table-wrapper-scroll">
                    <table class="table mb-2">
                        <thead>
                            <th class="upper text-left">Tour</th>
                            <th class="upper text-left">Date</th>
                            <th class="upper text-left">Price</th>
                            <th class="upper text-left">Seats Left</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php foreach ($tours as $tour) : ?>
                                <tr>
                                    <td>
                                        <a href="tour-details.php">
                                            <?= $tour['title']; ?>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="flex aic">
                                            <svg class="icon mr-1 text-primary">
                                                <use xlink:href="img/sprite.svg#calendar" />
                                            </svg>
                                            28 Dec 2019 — 15 Jan 2020
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex aic">
                                            <svg class="icon mr-1 text-primary">
                                                <use xlink:href="img/sprite.svg#tag" />
                                            </svg>
                                            <div>
                                                <small class="text-gray"><s>USD 22,000</s></small><br>
                                                <span class="text-green">USD <b>20,000</b></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex aic">
                                            <svg class="icon mr-1 text-primary">
                                                <use xlink:href="img/sprite.svg#users" />
                                            </svg>

                                            4
                                        </div>
                                    </td>
                                    <td><a href="booking-form.php" class="btn btn-sm btn-theme">Book now</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="tour-details.php">
                                            <?= $tour['title']; ?>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="flex aic">
                                            <svg class="icon mr-1 text-primary">
                                                <use xlink:href="img/sprite.svg#calendar" />
                                            </svg>
                                            28 Dec 2019 — 15 Jan 2020
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex aic">
                                            <svg class="icon mr-1 text-primary">
                                                <use xlink:href="img/sprite.svg#tag" />
                                            </svg>
                                            <div>
                                                <small class="text-gray"><s>USD 22,000</s></small><br>
                                                <span class="text-green">USD <b>20,000</b></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex aic">
                                            <svg class="icon mr-1 text-primary">
                                                <use xlink:href="img/sprite.svg#users" />
                                            </svg>

                                            4
                                        </div>
                                    </td>
                                    <td><a href="booking-form.php" class="btn btn-sm btn-theme">Book now</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- <p class="text-center"><button id="more-dates" class="btn btn-sm btn-gray">See more dates</button></p> -->
                </div>
            </div>
        </div>
    </div><!-- Departure Dates -->

    <!-- Blog -->

    <div class="blog section">
        <div class="container">
            <!-- <h1>Reviews from our customers</h1> -->
            <div class="grid">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <a href="blog-article.php">
                        <div class="article">
                            <div class="image">
                                <img src="img/blog1.jpg" alt="">
                            </div>
                            <div class="content">
                                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                                <p class="fs-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium dicta ipsa, sed illum ea error aspernatur tenetur, et necessitatibus aperiam, adipisci pariatur vitae sunt nulla? Asperiores in voluptatem possimus sed...</p>
                            </div>
                        </div>
                    </a>
                <?php endfor; ?>
            </div>
            <a href="blog.php" class="theme">Go to blog
                <svg>
                    <use xlink:href="img/sprite.svg#arrownarrowright" />
                </svg>
            </a>
        </div>
    </div><!-- Blog -->

    <?php require 'partials/footer.php'; ?>

    <script src="js/app.js"></script>
    <script src="js/home.js"></script>

</body>

</html>
