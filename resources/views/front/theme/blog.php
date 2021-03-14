<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog—<?= $companyname; ?></title>

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
                <h1>Blog</h1>
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </section>

    <section class="news py-5">
        <div class="container">

            <div class="grid lg:grid-cols-3 gap-2 xl:gap-3">
                <?php for ($i = 0; $i < 9; $i++) : ?>
                    <a href="#">
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
            <a href="#" class="theme">Go to blog
                <svg>
                    <use xlink:href="img/sprite.svg#arrownarrowright" /></svg>
            </a>
        </div>
    </section>
    <?php require_once "partials/footer.php" ?>

    <script src="js/app.js"></script>

</body>

</html>