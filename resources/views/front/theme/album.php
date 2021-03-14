<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Album—<?= $companyname; ?></title>

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
                <h1>Album</h1>
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="gallery.php">Gallery</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Album</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </section>

    <section class="py-5">
        <div class="container">

            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-1">
                <div class="thumb">
                    <a class="fancybox relative" data-fancybox="gallery" href="img/hero.jpg" data-caption="Mount Everest">
                        <img src="img/hero.jpg" alt="" />
                        <div class="overlay absolute">
                            <svg class="absolute icon-md text-white">
                                <use xlink:href="img/sprite.svg#zoomin" /></svg>

                        </div>
                    </a>
                </div>
                <div class="thumb">
                    <a class="fancybox relative" data-fancybox="gallery" href="img/hero2.jpg" data-caption="Mount Everest">
                        <img src="img/hero2.jpg" alt="" />
                        <div class="overlay absolute">
                            <svg class="absolute icon-md text-white">
                                <use xlink:href="img/sprite.svg#zoomin" /></svg>

                        </div>
                    </a>
                </div>
            </div>
        </div>

    </section>

    </section>

    <?php require_once "partials/footer.php" ?>

    <script src="js/app.js"></script>
    <script src="js/album.js"></script>

</body>