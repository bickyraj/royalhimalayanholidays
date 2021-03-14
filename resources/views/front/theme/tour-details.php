<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Annapurna Base Camp Trek—<?= $companyname; ?></title>

    <!-- Raleway -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
</head>

<body class="tour-details relative">
    <!-- <body class="tour-details relative" data-bs-spy="scroll" data-bs-target="#secondnav"> -->

    <?php include 'partials/header.php'; ?>

    <!-- Hero -->
    <section class="hero relative">
        <img src="img/hero.jpg" alt="">
        <div class="overlay lg:absolute">
            <div class="container flex jcsb wrap">
                <div class="caption">
                    <h2 class="mb-0">Annapurna Base Camp Tour</h2>

                    <div class="breadcrumb-wrapper">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb fs-sm wrap">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="tour-listing.php">Nepal</a></li>
                                <li class="breadcrumb-item"><a href="tour-listing.php">Trekkings</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Everest Three Passes Trek</li>
                            </ol>
                        </nav>
                    </div>

                </div>

                <div class="ratings-wrapper none lg:block">
                    <div class="ratings d-flex align-items-center bg-primary px-3 py-1 text-secondary">
                        <div>
                            <svg>
                                <use xlink:href="img/sprite.svg#star" />
                            </svg>
                            <svg>
                                <use xlink:href="img/sprite.svg#star" />
                            </svg>
                            <svg>
                                <use xlink:href="img/sprite.svg#star" />
                            </svg>
                            <svg>
                                <use xlink:href="img/sprite.svg#star" />
                            </svg>
                            <svg>
                                <use xlink:href="img/sprite.svg#star" />
                            </svg>
                            <div class="fs-xs">from 25 reviews</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- <div class="breadcrumb-wrapper">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb fs-sm">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Nepal</a></li>
                    <li class="breadcrumb-item"><a href="#">Trekkings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Everest Three Passes Trek</li>
                </ol>
            </nav>
        </div>
    </div> -->

    <section>

        <!-- Sticky Nav -->
        <div class="tour-details-bar sticky-top">
            <div class="container flex jcc aic">
                <nav class="tour-details-tabs flex jcc aic" id="secondnav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="#overview" class="flex aic nav-link">
                                <svg class="icon mr-1">
                                    <use xlink:href="img/sprite.svg#viewgrid" />
                                </svg>
                                <span>Overview</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#itinerary" class="flex aic nav-link">
                                <svg class="icon mr-1">
                                    <use xlink:href="img/sprite.svg#clock" />
                                </svg>
                                <span>Itinerary</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#inclusions" class="flex aic nav-link">
                                <svg class="icon mr-1">
                                    <use xlink:href="img/sprite.svg#archive" />
                                </svg>
                                <span>Inclusions</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#date-price" class="flex aic nav-link">
                                <svg class="icon mr-1">
                                    <use xlink:href="img/sprite.svg#calendar" />
                                </svg>
                                <span>Date & Price</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#reviews" class="flex aic nav-link">
                                <svg class="icon mr-1">
                                    <use xlink:href="img/sprite.svg#chat" />
                                </svg><span>Review</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#faqs" class="flex aic nav-link">
                                <svg class="icon mr-1">
                                    <use xlink:href="img/sprite.svg#questionmarkcircle" />
                                </svg><span>FAQs</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!-- Sticky Nav -->

        <div class="container mt-2 mb-4">

            <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-2 xl:gap-3">
                <div class="lg:col-2 xl:col-3 relative" id="ss">

                    <div id="overview" class="tour-details-section pt-4">
                        <div class="bg-white">

                            <div class="lg:none">
                                <?php require 'partials/price-card.php'; ?>
                            </div>
                            <!-- <h2>Overview</h2> -->
                            <div class="tabular grid lg:grid-cols-2 gap-2">
                                <div class="table-item flex aic">
                                    <div class="icon mr-2">
                                        <svg>
                                            <use xlink:href="img/sprite.svg#calendarduration" />
                                        </svg>
                                    </div>
                                    <div class="data">
                                        <p class="field-name">
                                            Duration
                                        </p>
                                        <p class="field-value">
                                            20 days
                                        </p>
                                    </div>
                                </div>

                                <div class="table-item flex aic">
                                    <div class="icon mr-2">
                                        <svg>
                                            <use xlink:href="img/sprite.svg#maxelevation" />
                                        </svg>
                                    </div>
                                    <div class="data">
                                        <p class="field-name">
                                            Max. Elevation
                                        </p>
                                        <p class="field-value">
                                            5000m
                                        </p>
                                    </div>
                                </div>

                                <div class="table-item flex aic">
                                    <div class="icon mr-2">
                                        <svg>
                                            <use xlink:href="img/sprite.svg#groupsize" />
                                        </svg>
                                    </div>
                                    <div class="data">
                                        <p class="field-name">
                                            Group size
                                        </p>
                                        <p class="field-value">
                                            8-12
                                        </p>
                                    </div>
                                </div>

                                <div class="table-item flex aic">
                                    <div class="icon mr-2">
                                        <svg>
                                            <use xlink:href="img/sprite.svg#level" />
                                        </svg>
                                    </div>
                                    <div class="data">

                                        <div class="field-name">

                                            Level
                                        </div>
                                        <div class="field-value">
                                            Advanced
                                        </div>
                                    </div>
                                </div>

                                <div class="table-item flex aic">
                                    <div class="icon mr-2">
                                        <svg>
                                            <use xlink:href="img/sprite.svg#transportation" />
                                        </svg>
                                    </div>
                                    <div class="data">
                                        <div class="field-name">
                                            Transportation
                                        </div>
                                        <div class="field-value">
                                            Domestic Flight, Private Vehicles
                                        </div>
                                    </div>
                                </div>

                                <div class="table-item flex aic">
                                    <div class="icon mr-2">
                                        <svg>
                                            <use xlink:href="img/sprite.svg#bestseason" />
                                        </svg>
                                    </div>
                                    <div class="data">

                                        <div class="field-name">
                                            Best Season
                                        </div>
                                        <div class="field-value">
                                            March to May,
                                            September to December
                                        </div>
                                    </div>
                                </div>

                                <div class="table-item flex aic">
                                    <div class="icon mr-2">
                                        <svg>
                                            <use xlink:href="img/sprite.svg#accomodation" />
                                        </svg>
                                    </div>
                                    <div class="data">
                                        <div class="field-name">
                                            Accomodation
                                        </div>
                                        <div class="field-value">
                                            Hotels, Guest Houses
                                        </div>
                                    </div>
                                </div>

                                <div class="table-item flex aic">
                                    <div class="icon mr-2">
                                        <svg>
                                            <use xlink:href="img/sprite.svg#meals" />
                                        </svg>
                                    </div>
                                    <div class="data">
                                        <div class="field-name">
                                            Meals
                                        </div>
                                        <div class="field-value">
                                            20 Breakfasts,
                                            20 Lunches,
                                            9 Dinners
                                        </div>
                                    </div>
                                </div>

                                <div class="table-item flex aic">
                                    <div class="icon mr-2">
                                        <svg>
                                            <use xlink:href="img/sprite.svg#startsat" />
                                        </svg>
                                    </div>
                                    <div class="data">

                                        <div class="field-name">

                                            Starts at
                                        </div>
                                        <div class="field-value">
                                            Kathmandu
                                        </div>
                                    </div>
                                </div>

                                <div class="table-item flex aic">
                                    <div class="icon mr-2">
                                        <svg>
                                            <use xlink:href="img/sprite.svg#endsat" />
                                        </svg>
                                    </div>
                                    <div class="data">

                                        <div class="field-name">

                                            Ends at
                                        </div>
                                        <div class="field-value">
                                            Kathmandu
                                        </div>
                                    </div>
                                </div>

                                <div class="table-item flex aic lg:col-2">
                                    <div class="icon mr-2">
                                        <svg>
                                            <use xlink:href="img/sprite.svg#triproute" />
                                        </svg>
                                    </div>
                                    <div class="data">

                                        <div class="field-name">

                                            Trip Route
                                        </div>
                                        <div class="field-value">
                                            Lukla - Namche Bazzar - Tengboche - Dinboche - Kongma La - Gorakshep - Everest Base camp -
                                            Kalapathar
                                            -
                                            Dzongla-Cho - La pass - Gokyo lake - Reanjo La - Namche Bazzar & Lukla
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="px-3 pb-2">

                                <h3>Highlights</h3>
                                <ul class="highlights mb-2">
                                    <li class="flex"><svg class="icon shrink-0 mr-1">
                                            <use xlink:href="img/sprite.svg#star" />
                                        </svg>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, ex.</li>
                                    <li class="flex"><svg class="icon shrink-0 mr-1">
                                            <use xlink:href="img/sprite.svg#star" />
                                        </svg>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, laboriosam!</li>
                                    <li class="flex"><svg class="icon shrink-0 mr-1">
                                            <use xlink:href="img/sprite.svg#star" />
                                        </svg>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, voluptatem?</li>
                                    <li class="flex"><svg class="icon shrink-0 mr-1">
                                            <use xlink:href="img/sprite.svg#star" />
                                        </svg>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, nemo.</li>
                                    <li class="flex"><svg class="icon shrink-0 mr-1">
                                            <use xlink:href="img/sprite.svg#star" />
                                        </svg>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus modi molestias placeat dolores,
                                        numquam atque.</li>
                                    <li class="flex"><svg class="icon shrink-0 mr-1">
                                            <use xlink:href="img/sprite.svg#star" />
                                        </svg>
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam id cumque repudiandae odio, vitae
                                        quidem mollitia doloremque eaque laudantium velit!</li>
                                </ul>

                                <div id="overview-text" class="lim collapse">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis semper mi. Etiam eu magna a risus
                                        bibendum elementum a at tortor. Aenean a laoreet diam. Proin vitae semper diam. Ut dapibus rhoncus
                                        venenatis. Aenean accumsan nisl sed nisi lobortis, eget vehicula metus placerat. Nunc interdum tincidunt
                                        lectus, et malesuada neque. Maecenas id arcu erat. Nullam ullamcorper metus purus, ac sagittis ante
                                        molestie
                                        et. Proin consectetur arcu quis mattis consequat. Vestibulum elit ligula, maximus id posuere eleifend,
                                        consectetur non sem. Vivamus sollicitudin ipsum vitae nisl vulputate mollis. Etiam feugiat nunc a quam
                                        consequat mattis. Vivamus feugiat, ante pretium facilisis rhoncus, nibh urna eleifend lacus, iaculis
                                        accumsan sem neque nec nibh. Aliquam scelerisque pulvinar rhoncus.
                                    </p>

                                    <p>
                                        Nunc tempus risus quis mi placerat egestas. In euismod est non felis pulvinar, sed pretium mauris
                                        vehicula.
                                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur non lacus vitae est blandit
                                        ultrices
                                        eu laoreet enim. Maecenas et erat lectus. Proin ut nibh at turpis pellentesque dignissim eu imperdiet
                                        neque.
                                        Phasellus bibendum varius eros, non eleifend tellus. Etiam sit amet congue ante. Ut ultrices id mauris
                                        quis
                                        eleifend. Vestibulum volutpat erat erat, eu tincidunt felis rhoncus ac. In condimentum leo ut turpis
                                        elementum porta. Nullam dapibus enim enim, sit amet sodales nunc mollis nec. Vestibulum condimentum mi
                                        lacinia convallis cursus.
                                    </p>

                                </div>
                                <p class="text-center">
                                    <button id="toggle-overview" class="btn btn-gray" data-bs-toggle="collapse" data-bs-target="#overview-text">Show
                                        More</button>
                                </p>

                                <div class="trip-note bg-light mb-3">
                                    <p class="font-weight-bold mb-0"><i class="fas fa-info"></i> Important Note</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam aspernatur corporis, quibusdam
                                        nostrum itaque cum quod quaerat ea! Unde magnam provident quod! Fugit in enim deleniti ex, tenetur modi
                                        neque?</p>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div id="itinerary" class="tour-details-section" x-data="{day1Open: false, day2Open: false, day3Open: false, day4Open: false}">
                        <div class="p-3">
                            <h2 class="fs-xl">Trip Itinerary</h2>
                            <button class="btn btn-sm btn-gray expand-all" @click="day1Open = day2Open = day3Open = day4Open = true">Expand All</button>
                            <button class="btn btn-sm btn-gray collapse-all" @click="day1Open = day2Open = day3Open = day4Open = false">Collapse All</button>
                            <div class="itinerary">
                                <div class="itinerary-row">
                                    <div class="day">
                                        <p class="d">Day</p>
                                        1
                                    </div>
                                    <div class="itinerary-text">
                                        <div class="collapse-toggle">
                                            <button :aria-expanded="day1Open" aria-controls="day1" @click="day1Open=!day1Open">
                                                <h3 class="text-left fs-lg">Arrival in Kathmandu</h3>
                                                <svg class="icon-md shrink-0">
                                                    <use xlink:href="img/sprite.svg#plus" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div id="day1" class="day-details" x-show.transition="day1Open">
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia minima nam vel veritatis? Est
                                                laborum
                                                consectetur temporibus expedita veritatis perferendis beatae sapiente unde, deserunt eveniet
                                                architecto
                                                quisquam autem hic! Ut?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="itinerary-row">
                                    <div class="day">
                                        <p class="d">Day</p>
                                        2
                                    </div>
                                    <div class="itinerary-text">
                                        <div class="collapse-toggle">
                                            <button :aria-expanded="day2Open" aria-controls="day2" @click="day2Open=!day2Open">
                                                <h3 class="text-left fs-lg">Flight from Kathmandu to Lukla and hike towards Phakding</h3>
                                                <svg class="icon-md shrink-0">
                                                    <use xlink:href="img/sprite.svg#plus" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div id="day2" class="day-details" x-show.transition="day2Open">
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia minima nam vel veritatis? Est
                                                laborum
                                                consectetur temporibus expedita veritatis perferendis beatae sapiente unde, deserunt eveniet
                                                architecto
                                                quisquam autem hic! Ut?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="itinerary-row">
                                    <div class="day">
                                        <p class="d">Day</p>
                                        3
                                    </div>
                                    <div class="itinerary-text">
                                        <div class="collapse-toggle">
                                            <button :aria-expanded="day3Open" aria-controls="day3" @click="day3Open=!day3Open">
                                                <h3 class="text-left fs-lg">Phakding to Namche Bazzar</h3>
                                                <svg class="icon-md shrink-0">
                                                    <use xlink:href="img/sprite.svg#plus" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div id="day3" class="day-details" x-show.transition="day3Open">
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia minima nam vel veritatis? Est
                                                laborum
                                                consectetur temporibus expedita veritatis perferendis beatae sapiente unde, deserunt eveniet
                                                architecto
                                                quisquam autem hic! Ut?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="itinerary-row">
                                    <div class="day">
                                        <p class="d">Day</p>
                                        4
                                    </div>
                                    <div class="itinerary-text">
                                        <div class="collapse-toggle">
                                            <button :aria-expanded="day4Open" aria-controls="day4" @click="day4Open=!day4Open">
                                                <h3 class="text-left fs-lg">Acclimatization and rest at Namche Bazzar</h3>
                                                <svg class="icon-md shrink-0">
                                                    <use xlink:href="img/sprite.svg#plus" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div id="day4" class="day-details" x-show.transition="day4Open">
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia minima nam vel veritatis? Est
                                                laborum
                                                consectetur temporibus expedita veritatis perferendis beatae sapiente unde, deserunt eveniet
                                                architecto
                                                quisquam autem hic! Ut?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="inclusions" class="tour-details-section">
                        <div class="bg-white p-3">
                            <h2 class="fs-xl">Inclusions</h2>
                            <div class="grid lg:grid-cols-2 gap-1">

                                <ul class="includes">
                                    <li class="flex">
                                        <svg class="icon-md mr-1 shrink-0">
                                            <use xlink:href="img/sprite.svg#check" />
                                        </svg>

                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolor atque error iste!
                                        Praesentium, possimus.
                                    </li>
                                    <li class="flex">
                                        <svg class="icon-md mr-1 shrink-0">
                                            <use xlink:href="img/sprite.svg#check" />
                                        </svg>

                                        Commodi dolore iure laborum illo quas accusantium, eum eos mollitia enim quos ad nisi. Mollitia.
                                    </li>
                                    <li class="flex">
                                        <svg class="icon-md mr-1 shrink-0">
                                            <use xlink:href="img/sprite.svg#check" />
                                        </svg>

                                        Ad minima odit voluptatem voluptas quisquam soluta ab culpa, itaque hic vero eveniet eaque rerum?
                                    </li>
                                    <li class="flex">
                                        <svg class="icon-md mr-1 shrink-0">
                                            <use xlink:href="img/sprite.svg#check" />
                                        </svg>

                                        Exercitationem error fugit non asperiores repellendus, nemo eveniet ipsum sit veritatis, eum
                                        molestias praesentium placeat!
                                    </li>
                                    <li class="flex">
                                        <svg class="icon-md mr-1 shrink-0">
                                            <use xlink:href="img/sprite.svg#check" />
                                        </svg>

                                        Commodi nostrum nulla fuga, natus perspiciatis laborum hic omnis accusamus blanditiis, debitis
                                        cupiditate fugiat? Blanditiis.
                                    </li>
                                </ul>

                                <ul class="excludes">
                                    <li class="flex">
                                        <svg class="icon-md mr-1 shrink-0">
                                            <use xlink:href="img/sprite.svg#x" />
                                        </svg>

                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum provident accusantium quos
                                        eligendi, aliquid earum.
                                    </li>
                                    <li class="flex">
                                        <svg class="icon-md mr-1 shrink-0">
                                            <use xlink:href="img/sprite.svg#x" />
                                        </svg>

                                        Fuga sed impedit eius, ipsum ratione, at veritatis quam quae magni, id tenetur suscipit quos?
                                    </li>
                                    <li class="flex">
                                        <svg class="icon-md mr-1 shrink-0">
                                            <use xlink:href="img/sprite.svg#x" />
                                        </svg>

                                        Aliquid molestias dolorem iusto aut recusandae cum repellendus mollitia deserunt, reprehenderit at
                                        quia accusamus enim.
                                    </li>
                                    <li class="flex">
                                        <svg class="icon-md mr-1 shrink-0">
                                            <use xlink:href="img/sprite.svg#x" />
                                        </svg>

                                        Obcaecati quod accusamus accusantium aliquam suscipit, ab quas delectus, officiis possimus
                                        consequatur quasi fugiat aliquid?
                                    </li>
                                    <li class="flex">
                                        <svg class="icon-md mr-1 shrink-0">
                                            <use xlink:href="img/sprite.svg#x" />
                                        </svg>

                                        Sint cum perferendis autem, temporibus esse laudantium maxime sit assumenda aperiam, voluptas amet
                                        neque accusamus?
                                    </li>
                                </ul>
                            </div>
                            <div class="complimentary p-2">
                                <h3>Complimentary</h3>
                                <ul>
                                    <li class="flex">
                                        <svg class="icon-md mr-1 shrink-0">
                                            <use xlink:href="img/sprite.svg#plus" />
                                        </svg>

                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita aut iure quis odit
                                        dignissimos.
                                    </li>
                                    <li class="flex">
                                        <svg class="icon-md mr-1 shrink-0">
                                            <use xlink:href="img/sprite.svg#plus" />
                                        </svg>

                                        Perferendis quasi reiciendis repellendus ratione, iure atque quia voluptatibus fugiat quaerat
                                        voluptatem, aperiam a dolorem?
                                    </li>
                                    <li class="flex">
                                        <svg class="icon-md mr-1 shrink-0">
                                            <use xlink:href="img/sprite.svg#plus" />
                                        </svg>

                                        Voluptate totam maiores neque laudantium. Placeat maxime odit sequi tenetur quo vero? Commodi, aperiam
                                        deleniti?
                                    </li>
                                    <li class="flex">
                                        <svg class="icon-md mr-1 shrink-0">
                                            <use xlink:href="img/sprite.svg#plus" />
                                        </svg>

                                        Quibusdam commodi laboriosam quia voluptatum velit officiis, explicabo nulla! Impedit, ut? Totam porro
                                        tenetur magnam.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--  <div id="date-price" class="tour-details-section">
                        <div class="bg-white p-3">
                            <!~~ <h2>Date & Price</h2> ~~>
                            <h2 class="fs-xl">Upcoming Departure Dates</h2>
                            <!~~ <h3>Upcoming Departure Dates</h3> ~~>
                            <table>
                                <thead>
                                    <th class="upper text-left">Date</th>
                                    <th class="upper text-left">Price</th>
                                    <th class="upper text-left">Seats Left</th>
                                    <th></th>
                                </thead>
                            </table>
                            <div class="table-wrapper">
                                <table class="table mb-2">
                                    <thead>
                                        <!~~ th is hidden on large screens ~~>
                                        <th class="upper text-left">Date</th>
                                        <th class="upper text-left">Price</th>
                                        <th class="upper text-left">Seats Left</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i < 15; $i++) : ?>
                                            <tr>
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
                                        <?php endfor; ?>
                                    </tbody>
                                </table>
                                <!~~ <p class="text-center"><button id="more-dates" class="btn btn-sm btn-gray">See more dates</button></p> ~~>
                            </div>
                        </div>
                    </div> -->

                    <div id="date-price" class="tour-details-section">
                        <div class="bg-white p-3">
                            <!-- <h2>Date & Price</h2> -->
                            <h2 class="fs-xl">Upcoming Departure Dates</h2>
                            <!-- <h3>Upcoming Departure Dates</h3> -->
                            <!-- <table>
                                <thead>
                                    <th class="upper text-left">Date</th>
                                    <th class="upper text-left">Price</th>
                                    <th class="upper text-left">Seats Left</th>
                                    <th></th>
                                </thead>
                            </table> -->
                            <div class="table-wrapper-scroll">
                                <table class="table mb-2">
                                    <thead>
                                        <th class="upper text-left">Date</th>
                                        <th class="upper text-left">Price</th>
                                        <th class="upper text-left">Seats Left</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i < 15; $i++) : ?>
                                            <tr>
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
                                        <?php endfor; ?>
                                    </tbody>
                                </table>
                                <!-- <p class="text-center"><button id="more-dates" class="btn btn-sm btn-gray">See more dates</button></p> -->
                            </div>
                        </div>
                    </div>

                    <div id="reviews" class="tour-details-section">
                        <div class="bg-white p-3">
                            <h2 class="fs-xl">Reviews</h2>
                            <div class="grid gap-1 mb-2">
                                <?php for ($i = 0; $i < 1; $i++) { ?>
                                    <div class="review">
                                        <div class="review__content">
                                            <h3 class="fs-lg">Rewarding trek with best guides</h3>
                                            <p class="fs-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio reiciendis fugiat aperiam beatae et aspernatur consequuntur, iste consequatur totam eligendi alias quae dolor iure quam exercitationem cumque aliquid architecto assumenda!</p>
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
                                            <h3 class="fs-lg">Never had so much fun!</h3>
                                            <p class="fs-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio reiciendis fugiat aperiam beatae et aspernatur consequuntur, iste consequatur totam eligendi alias quae dolor iure quam exercitationem cumque aliquid architecto assumenda!</p>
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
                                <?php } ?>
                            </div>
                            <p class="text-center">
                                <a href="write-review.php" class="btn btn-theme mr-1" data-toggle="modal" data-target="#review-modal">
                                    Write a review</a>
                                <a href="reviews.php" class="theme">See more reviews
                                    <svg>
                                        <use xlink:href="img/sprite.svg#arrownarrowright" />
                                    </svg>
                                </a>
                            </p>
                        </div>
                    </div>

                    <div id="faqs" class="tour-details-section mb-4">
                        <div class="bg-white p-3">
                            <h2 class="fs-xl">Frequently Asked Questions</h2>
                            <div class="accordion" id="faq-accordion">
                                <div class="accordion-item">
                                    <h3 class="accordion-header mb-0" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Accordion Item #1
                                        </button>
                                    </h3>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body fs-sm">
                                            <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header mb-0" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Accordion Item #2
                                        </button>
                                    </h3>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body fs-sm">
                                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header mb-0" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Accordion Item #3
                                        </button>
                                    </h3>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body fs-sm">
                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="mb-5">
                        <a href="booking-form.php" class="btn btn-theme">Book Now</a>
                    </p>

                    <!-- <div class="share-links mb-5">
                        <h3>Share this tour</h3>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                        <a href="#"><i class="fab fa-blogger-b"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    </div> -->

                </div>

                <aside class="py-4">

                    <?php include 'partials/price-card.php'; ?>

                    <div class=" mb-3 text bg-primary text-white p-2">
                        <h4 class="mb-1 font-display upper">
                            You can customize this trip
                        </h4>
                        <ul class="mb-2 fs-sm">
                            <li><svg class="icon text-light">
                                    <use xlink:href="img/sprite.svg#questionmarkcircle" />
                                </svg>
                                Have a big group?</li>
                            <li><svg class="icon text-light">
                                    <use xlink:href="img/sprite.svg#questionmarkcircle" />
                                </svg>
                                Budget problem?</li>
                            <li><svg class="icon text-light">
                                    <use xlink:href="img/sprite.svg#questionmarkcircle" />
                                </svg>
                                Date & Itinerary problem?</li>
                            <li><svg class="icon text-light">
                                    <use xlink:href="img/sprite.svg#questionmarkcircle" />
                                </svg>
                                Wanna add / remove services?</li>
                        </ul>
                        <div class="fs-xs mb-2">
                            All right, we'll help you personalize your trips
                        </div>
                        <a href="customize-form.php" class="btn btn-sm btn-theme" title="Customize this tour">
                            Customize
                            <svg class="icon">
                                <use xlink:href="img/sprite.svg#adjustments" />
                            </svg>
                        </a>
                    </div>

                    <div class="quick-enquiry-card mb-4 bg-white p-2" id="quickEnquiry">
                        <h2 class="bold text-primary">Quick Enquiry</h2>
                        <div class="card-body">
                            <form action="">
                                <div class="form-group mb-2">
                                    <label class="visually-hidden" for="">Name</label>
                                    <div class="flex">
                                        <div class="flex jcc aic bg-light px-2">
                                            <svg class="icon text-primary">
                                                <use xlink:href="img/sprite.svg#users" />
                                            </svg>
                                        </div>
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="visually-hidden" for="email">E-mail</label>
                                    <div class="flex">
                                        <div class="flex jcc aic bg-light px-2">
                                            <svg class="icon text-primary">
                                                <use xlink:href="img/sprite.svg#mail" />
                                            </svg>
                                        </div>
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="visually-hidden" for="country">Country</label>
                                    <div class="flex">
                                        <div class="flex jcc aic bg-light px-2">
                                            <svg class="icon text-primary">
                                                <use xlink:href="img/sprite.svg#flag" />
                                            </svg>
                                        </div>
                                        <select name="" id="" class="form-control">
                                            <option disabled selected>Country</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="visually-hidden" for="phone">Phone Number</label>
                                    <div class="flex">
                                        <div class="flex jcc aic bg-light px-2">
                                            <svg class="icon text-primary">
                                                <use xlink:href="img/sprite.svg#phone" />
                                            </svg>
                                        </div>
                                        <input type="tel" class="form-control block" id="phone" placeholder="Phone No.">
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="visually-hidden" for="">Message</label>
                                    <textarea class="form-control block" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <button type="submit" class="btn btn-sm btn-theme">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="card-header">
                            <h2 class="mb-2">Map & Route</h2>
                        </div>
                        <div class="card-body p-0" x-data="{lightBoxOpen: false}">
                            <!-- <a data-fancybox data-caption="Annapurna Base Camp Trek Map" href="img/annapurnaregion-01.jpg">
                                <img class="img-fluid" src="img/annapurnaregion-01.jpg" alt="">
                            </a> -->
                            <a @click.prevent="lightBoxOpen=true" href="img/annapurnaregion-01.jpg">
                                <img class="img-fluid" src="img/annapurnaregion-01.jpg" alt="">
                            </a>
                            <div class="fixed cover z-100 bg-light" x-show="lightBoxOpen===true">
                                <div class="h-100 flex jcc aic">
                                    <div class="h-100">
                                        <img src=" img/annapurnaregion-01.jpg" alt="" class="h-100 wheelzoom" @click.away="lightBoxOpen=false">
                                    </div>
                                </div>
                                <button class="absolute" style="top:1rem;right:1rem;" @click="lightBoxOpen==false">
                                    <svg class="icon icon-md">
                                        <use xlink:href="img/sprite.svg#x" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- <div class="card-body p-0" x-data="lightBox()">
                            <a @click.prevent="open()" href="img/annapurnaregion-01.jpg">
                                <img class="img-fluid" src="img/annapurnaregion-01.jpg" alt="">
                            </a>
                            <div class="fixed cover z-100 bg-light overflow-hidden" x-cloak x-show="isOpen()">
                                <div class="absolute cover flex jcc aic" @wheel.prevent="zoomIn()">
                                    <img src="img/annapurnaregion-01.jpg" alt="" class="h-100" @click.away="close()" :style="`transform-origin: ${getTransformOrigin()}; transform: scale(${getScale()})`">
                                </div>
                                <button class="absolute" style="top:1rem;right:1rem;" @click="close()">
                                    <svg class="icon icon-md">
                                        <use xlink:href="img/sprite.svg#x" />
                                    </svg>
                                </button>
                            </div>
                        </div> -->
                        <!-- <script>
                            function lightBox() {
                                return {
                                    scale: 1,
                                    show: true,
                                    minScale: 1,
                                    maxScale: 5,
                                    transformOrigin: `50% 50%`,
                                    open() {
                                        this.show = true
                                    },
                                    close() {
                                        this.show = false
                                    },
                                    isOpen() {
                                        return this.show
                                    },
                                    getScale() {
                                        return this.scale
                                    },
                                    getTransformOrigin() {
                                        return this.transformOrigin
                                    },
                                    zoomIn() {
                                        this.scale += event.deltaY * -0.01
                                        this.scale = Math.min(Math.max(this.scale, this.minScale), this.maxScale)
                                        this.transformOrigin = `${event.clientX.toString()/2}px ${event.clientY.toString()/2}px`
                                        console.log(this.transformOrigin);
                                    }
                                }
                            }
                        </script> -->
                    </div>

                    <div class=" experts-card">
                        <div class="grid grid-cols-3">
                            <div class="col-2">
                                <p class="mb-0">Still confused?</p>
                                <h3 class="mb-2">Talk to our experts</h3>
                            </div>
                            <div>
                                <svg class="icon-lg">
                                    <use xlink:href="img/sprite.svg#customersupport" />
                                </svg>
                            </div>
                        </div>
                        <div class="experts-phone flex mb-1">
                            <a href="tel:<?= $cell; ?>" class="flex aic">
                                <svg class="icon-md mr-1">
                                    <use xlink:href="img/sprite.svg#phone" />
                                </svg>
                                <?= $cell; ?> (Dipak)
                            </a>
                        </div>
                        <div class="experts-phone flex mb-3">
                            <a href="mailto:
                                    <?= $email; ?>" class="flex aic">
                                <svg class="icon-md mr-1">
                                    <use xlink:href="img/sprite.svg#mail" />
                                </svg>
                                <?= $email; ?>
                            </a>
                        </div>


                    </div>

                    <div class="mb-3 p-2 bg-light">
                        <a href="#" class="text-primary hover:text-accent mr-1">
                            <svg class="icon-md">
                                <use xlink:href="img/sprite.svg#facebookmessenger" />
                            </svg>
                        </a>
                        <a href="#" class="text-primary hover:text-accent mr-1">
                            <svg class="icon-md">
                                <use xlink:href="img/sprite.svg#viber" />
                            </svg>
                        </a>
                        <a href="#" class="text-primary hover:text-accent mr-1">
                            <svg class="icon-md">
                                <use xlink:href="img/sprite.svg#whatsapp" />
                            </svg>
                        </a>
                        <a href="#" class="text-primary hover:text-accent mr-1">
                            <svg class="icon-md">
                                <use xlink:href="img/sprite.svg#skype" />
                            </svg>
                        </a>
                        <a href="#" class="text-primary hover:text-accent mr-1">
                            <svg class="icon-md">
                                <use xlink:href="img/sprite.svg#weixin" />
                            </svg>
                        </a>
                    </div>

                    <div class="mb-3 essential-info">
                        <h3 class="mb-2 text-primary">Essential Trip Information</h3>
                        <ul class="essential-links">
                            <li>
                                <a href="lifetime-deposit" target="_blank">
                                    <svg class="icon mr-1">
                                        <use xlink:href="img/sprite.svg#arrownarrowright" />
                                    </svg>

                                    Lifetime Deposit </a>
                            </li>
                            <li>
                                <a href="privacy-policy" target="_blank">
                                    <svg class="icon mr-1">
                                        <use xlink:href="img/sprite.svg#arrownarrowright" />
                                    </svg>

                                    Privacy Policy </a>
                            </li>
                            <li>
                                <a href="trek-packing-list" target="_blank">
                                    <svg class="icon mr-1">
                                        <use xlink:href="img/sprite.svg#arrownarrowright" />
                                    </svg>

                                    Trek Packing List </a>
                            </li>
                            <li>
                                <a href="responsible-tourism" target="_blank">
                                    <svg class="icon mr-1">
                                        <use xlink:href="img/sprite.svg#arrownarrowright" />
                                    </svg>

                                    Responsible Tourism </a>
                            </li>
                            <li>
                                <a href="travel-insurance" target="_blank">
                                    <svg class="icon mr-1">
                                        <use xlink:href="img/sprite.svg#arrownarrowright" />
                                    </svg>

                                    Travel Insurance </a>
                            </li>
                            <li>
                                <a href="nepal-international-flight" target="_blank">
                                    <svg class="icon mr-1">
                                        <use xlink:href="img/sprite.svg#arrownarrowright" />
                                    </svg>

                                    Nepal International Flight </a>
                            </li>
                            <li>
                                <a href="terms-and-conditions" target="_blank">
                                    <svg class="icon mr-1">
                                        <use xlink:href="img/sprite.svg#arrownarrowright" />
                                    </svg>

                                    Terms &amp; Conditions </a>
                            </li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <div class="package-card-sm">
                            <a href="#" class="stretched-link">
                                <div class="img" style="background-image: linear-gradient(rgba(0,0,0,.2), rgba(0,0,0,.2)),url('img/hero.jpg')">
                                </div>
                                <div class="info">
                                    <h1 class="title">Everest Base Camp Treks</h1>
                                    <div class="info-bottom">
                                        <div class="days">19 days</div>
                                        <div class="price"><small>from</small> <br><b>USD 2000</b></div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="package-card-sm">
                            <a href="#" class="stretched-link">
                                <div class="img" style="background-image: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)),url('img/hero.jpg')">
                                </div>
                                <div class="info">
                                    <h1 class="title">Everest Base Camp Treks</h1>
                                    <div class="info-bottom">
                                        <div class="days">19 days</div>
                                        <div class="price"><small>from</small> <br><b>USD 2000</b></div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="package-card-sm">
                            <a href="#" class="stretched-link">
                                <div class="img" style="background-image: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)),url('img/hero.jpg')">
                                </div>
                                <div class="info">
                                    <h1 class="title">Everest Base Camp Treks</h1>
                                    <div class="info-bottom">
                                        <div class="days">19 days</div>
                                        <div class="price"><small>from</small> <br><b>USD 2000</b></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- <div id="TA_selfserveprop827" class="TA_selfserveprop mb-3">
                        <ul id="4KT9a3oFnlGT" class="TA_links rF98AxM5Q">
                            <li id="4OLTP8Z" class="106qXXM9"><a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g293890-d17581480-Reviews-Hiker_Himalaya_Treks_Expedition_Pvt_Ltd-Kathmandu_Kathmandu_Valley_Bagmati_Zone_.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-11900-2.svg" alt="TripAdvisor" /></a></li>
                        </ul>
                    </div>
                    <script async src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=827&amp;locationId=17581480&amp;lang=en_US&amp;rating=true&amp;nreviews=4&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=true&amp;border=true&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script> -->

                    <div>
                        <img src="https://www.tripadvisor.com/TripAdvisorInsights/wp-content/uploads/2018/01/widget_long_form_copy.jpg%22" alt="">
                    </div>

                    <div class="sticky-top sticky-price none lg:block" style="top: 8rem;">
                        <?php include 'partials/price-card.php'; ?>
                    </div>

                    <!-- <div class="features card mb-3">
                            <div class="card-header">
                                <h3>Why Us</h3>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>Full Board Included Price</li>
                                    <li>Best Price Guaranteed</li>
                                    <li>Guaranteed Departure Dates</li>
                                    <li>Well-crafted Itinerary</li>
                                </ul>
                            </div>
                        </div>

                        <div class="latest-blog card mb-3">
                            <div class="card-body p-0">
                                <div class="latest-blog-card">
                                    <b>Latest news/blog</b>
                                </div>
                                <div class="latest-blog-card">
                                    <h1 class="title">Everest Base Camp Treksdfa sdfasdfa dfasd</h1>
                                    <a href="" class="stretched-link"></a>
                                </div>
                                <div class="latest-blog-card">
                                    <h1 class="title">Everest Base Camp Treksdfa sdfasdfa dfasd</h1>
                                    <a href="" class="stretched-link"></a>
                                </div>
                                <div class="latest-blog-card">
                                    <h1 class="title">Everest Base Camp Treksdfa sdfasdfa dfasd</h1>
                                    <a href="" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>

                        <div class="ta-widget">
                            <img src="img/ta-widget.jpg" alt="" class="img-fluid">
                        </div> -->
                </aside>

            </div>
        </div>

        <!-- Featured -->
        <div class="featured section bg-light py-4">
            <div class="container">
                <h2 class="fs-lg mb-2">Similar Tours</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-2 xl:gap-3">
                    <?php foreach ($tours as $index => $tour) : ?>
                        <?php if ($index < 3) : ?>
                            <?php include 'partials/tour-card.php'; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div> <!-- Featured -->

    </section>

    </div>

    <datalist id="countries">
        <option value="Afghanistan">
        <option value="Albania">
        <option value="Algeria">
        <option value="American Samoa">
        <option value="Andorra">
        <option value="Angola">
        <option value="Anguilla">
        <option value="Antarctica">
        <option value="Antigua and Barbuda">
        <option value="Argentina">
        <option value="Armenia">
        <option value="Aruba">
        <option value="Australia">
        <option value="Austria">
        <option value="Azerbaijan">
        <option value="Bahamas">
        <option value="Bahrain">
        <option value="Bangladesh">
        <option value="Barbados">
        <option value="Belarus">
        <option value="Belgium">
        <option value="Belize">
        <option value="Benin">
        <option value="Bermuda">
        <option value="Bhutan">
        <option value="Bolivia">
        <option value="Bosnia and Herzegovina">
        <option value="Botswana">
        <option value="Bouvet Island">
        <option value="Brazil">
        <option value="British Indian Ocean Territory">
        <option value="Brunei Darussalam">
        <option value="Bulgaria">
        <option value="Burkina Faso">
        <option value="Burundi">
        <option value="Cambodia">
        <option value="Cameroon">
        <option value="Canada">
        <option value="Cape Verde">
        <option value="Cayman Islands">
        <option value="Central African Republic">
        <option value="Chad">
        <option value="Chile">
        <option value="China">
        <option value="Christmas Island">
        <option value="Cocos (Keeling) Islands">
        <option value="Colombia">
        <option value="Comoros">
        <option value="Congo">
        <option value="Congo, The Democratic Republic of The">
        <option value="Cook Islands">
        <option value="Costa Rica">
        <option value="Cote D'ivoire">
        <option value="Croatia">
        <option value="Cuba">
        <option value="Cyprus">
        <option value="Czech Republic">
        <option value="Denmark">
        <option value="Djibouti">
        <option value="Dominica">
        <option value="Dominican Republic">
        <option value="Ecuador">
        <option value="Egypt">
        <option value="El Salvador">
        <option value="Equatorial Guinea">
        <option value="Eritrea">
        <option value="Estonia">
        <option value="Ethiopia">
        <option value="Falkland Islands (Malvinas)">
        <option value="Faroe Islands">
        <option value="Fiji">
        <option value="Finland">
        <option value="France">
        <option value="French Guiana">
        <option value="French Polynesia">
        <option value="French Southern Territories">
        <option value="Gabon">
        <option value="Gambia">
        <option value="Georgia">
        <option value="Germany">
        <option value="Ghana">
        <option value="Gibraltar">
        <option value="Greece">
        <option value="Greenland">
        <option value="Grenada">
        <option value="Guadeloupe">
        <option value="Guam">
        <option value="Guatemala">
        <option value="Guinea">
        <option value="Guinea-bissau">
        <option value="Guyana">
        <option value="Haiti">
        <option value="Heard Island and Mcdonald Islands">
        <option value="Holy See (Vatican City State)">
        <option value="Honduras">
        <option value="Hong Kong">
        <option value="Hungary">
        <option value="Iceland">
        <option value="India">
        <option value="Indonesia">
        <option value="Iran, Islamic Republic of">
        <option value="Iraq">
        <option value="Ireland">
        <option value="Israel">
        <option value="Italy">
        <option value="Jamaica">
        <option value="Japan">
        <option value="Jordan">
        <option value="Kazakhstan">
        <option value="Kenya">
        <option value="Kiribati">
        <option value="Korea, Democratic People's Republic of">
        <option value="Korea, Republic of">
        <option value="Kuwait">
        <option value="Kyrgyzstan">
        <option value="Lao People's Democratic Republic">
        <option value="Latvia">
        <option value="Lebanon">
        <option value="Lesotho">
        <option value="Liberia">
        <option value="Libyan Arab Jamahiriya">
        <option value="Liechtenstein">
        <option value="Lithuania">
        <option value="Luxembourg">
        <option value="Macao">
        <option value="Macedonia, The Former Yugoslav Republic of">
        <option value="Madagascar">
        <option value="Malawi">
        <option value="Malaysia">
        <option value="Maldives">
        <option value="Mali">
        <option value="Malta">
        <option value="Marshall Islands">
        <option value="Martinique">
        <option value="Mauritania">
        <option value="Mauritius">
        <option value="Mayotte">
        <option value="Mexico">
        <option value="Micronesia, Federated States of">
        <option value="Moldova, Republic of">
        <option value="Monaco">
        <option value="Mongolia">
        <option value="Montserrat">
        <option value="Morocco">
        <option value="Mozambique">
        <option value="Myanmar">
        <option value="Namibia">
        <option value="Nauru">
        <option value="Nepal">
        <option value="Netherlands">
        <option value="Netherlands Antilles">
        <option value="New Caledonia">
        <option value="New Zealand">
        <option value="Nicaragua">
        <option value="Niger">
        <option value="Nigeria">
        <option value="Niue">
        <option value="Norfolk Island">
        <option value="Northern Mariana Islands">
        <option value="Norway">
        <option value="Oman">
        <option value="Pakistan">
        <option value="Palau">
        <option value="Palestinian Territory, Occupied">
        <option value="Panama">
        <option value="Papua New Guinea">
        <option value="Paraguay">
        <option value="Peru">
        <option value="Philippines">
        <option value="Pitcairn">
        <option value="Poland">
        <option value="Portugal">
        <option value="Puerto Rico">
        <option value="Qatar">
        <option value="Reunion">
        <option value="Romania">
        <option value="Russian Federation">
        <option value="Rwanda">
        <option value="Saint Helena">
        <option value="Saint Kitts and Nevis">
        <option value="Saint Lucia">
        <option value="Saint Pierre and Miquelon">
        <option value="Saint Vincent and The Grenadines">
        <option value="Samoa">
        <option value="San Marino">
        <option value="Sao Tome and Principe">
        <option value="Saudi Arabia">
        <option value="Senegal">
        <option value="Serbia and Montenegro">
        <option value="Seychelles">
        <option value="Sierra Leone">
        <option value="Singapore">
        <option value="Slovakia">
        <option value="Slovenia">
        <option value="Solomon Islands">
        <option value="Somalia">
        <option value="South Africa">
        <option value="South Georgia and The South Sandwich Islands">
        <option value="Spain">
        <option value="Sri Lanka">
        <option value="Sudan">
        <option value="Suriname">
        <option value="Svalbard and Jan Mayen">
        <option value="Swaziland">
        <option value="Sweden">
        <option value="Switzerland">
        <option value="Syrian Arab Republic">
        <option value="Taiwan, Province of China">
        <option value="Tajikistan">
        <option value="Tanzania, United Republic of">
        <option value="Thailand">
        <option value="Timor-leste">
        <option value="Togo">
        <option value="Tokelau">
        <option value="Tonga">
        <option value="Trinidad and Tobago">
        <option value="Tunisia">
        <option value="Turkey">
        <option value="Turkmenistan">
        <option value="Turks and Caicos Islands">
        <option value="Tuvalu">
        <option value="Uganda">
        <option value="Ukraine">
        <option value="United Arab Emirates">
        <option value="United Kingdom">
        <option value="United States">
        <option value="United States Minor Outlying Islands">
        <option value="Uruguay">
        <option value="Uzbekistan">
        <option value="Vanuatu">
        <option value="Venezuela">
        <option value="Viet Nam">
        <option value="Virgin Islands, British">
        <option value="Virgin Islands, U.S">
        <option value="Wallis and Futuna">
        <option value="Western Sahara">
        <option value="Yemen">
        <option value="Zambia">
        <option value="Zimbabwe">
    </datalist>

    <?php require_once "partials/footer.php" ?>

    <script src="js/app.js"></script>
    <script src="js/tour-details.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/wheelzoom@4.0.1/wheelzoom.min.js"></script>
    <script>
        wheelzoom(document.querySelector('.wheelzoom'))
    </script>


</body>

</html>
