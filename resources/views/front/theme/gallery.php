<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery—<?= $companyname; ?></title>

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
                <h1>Gallery</h1>
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </section>

    <section class="py-5">
        <div class="container">

            <div class="grid lg:grid-cols-3 gap-2 xl:gap-3">
                <?php foreach ($tours as $tour) : ?>
                    <div class="album relative">
                        <a href="album.php" class="block">
                            <?php if (isset($tour['img'])) : ?>
                                <img src="img/<?= $tour['img']; ?>" alt="">
                            <?php else : ?>
                                <img src="img/dest-nepal.jpg" alt="<?php $tour['title']; ?>">
                            <?php endif; ?>
                            <div class="overlay absolute">
                                <h2 class="fs-lg"><span><?= $tour['title']; ?></span></h2>
                                <a href="album.php" class="stretched-link"></a>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

    </section>

    <?php require_once "partials/footer.php" ?>

    <script src="js/app.js"></script>

</body>