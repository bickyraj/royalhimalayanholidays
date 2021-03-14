<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tour Packages—<?= $companyname; ?></title>

    <!-- Raleway -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <style>

    </style>
</head>

<body>
    <!-- <body class="tour-details relative" data-bs-spy="scroll" data-bs-target="#secondnav"> -->

    <?php include 'partials/header.php'; ?>

    <!-- Hero -->
    <section class="hero hero-alt relative">
        <img src="img/hero.jpg" alt="">
        <div class="overlay absolute">
            <div class="container ">
                <h1>Tour Packages</h1>
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tour Packages</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </section>

    <section class="pt-5">
        <div class="container">
            <div class="lim mb-4">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor voluptas expedita aspernatur voluptates
                    laudantium natus deleniti nobis. Quos quibusdam hic perferendis incidunt dolorem inventore odit officiis impedit
                    optio, distinctio rerum praesentium quod fugiat ab a maiores similique eius, quia placeat? Vel sequi quo omnis?
                    Velit deleniti natus odio similique eius.
                </p>
            </div>
            <div class="controls mb-4">
                <div class="grid lg:grid-cols-3 gap-2">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Destinations</label>
                            <select name="" id="" class="custom-select">
                                <option value="" selected>All Destinations</option>
                                <option value="">Nepal</option>
                                <option value="">Bhutan</option>
                                <option value="">Tibet</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Activities</label>
                            <select name="" id="" class="custom-select">
                                <option value="" selected>All activities</option>
                                <option value="">Trekking</option>
                                <option value="">Research Trip</option>
                                <option value="">Jungle Safari</option>
                                <option value="">Rafting</option>
                                <option value="">Hiking</option>
                                <option value="">Climbing</option>
                                <option value="">Climbing</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Sort by</label>
                            <select name="" id="" class="custom-select">
                                <option value="">Price (low to high)</option>
                                <option value="">Price (high to low)</option>
                                <option value="">Ratings (low to high)</option>
                                <option value="" selected>Ratings (high to low)</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search Results -->
        </div>
        <div class="bg-light">
            <div class="container py-4">


                <p class="fs-sm">Search results for "Nepal", "Trekking"</p>


                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-2 xl:gap-3">
                    <?php foreach ($tours as $index => $tour) : ?>
                        <?php if ($index < 6) : ?>
                            <?php include 'partials/tour-card.php'; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>


        </div>
    </section>

    <?php require_once "partials/footer.php" ?>

    <script src="js/app.js"></script>

</body>
