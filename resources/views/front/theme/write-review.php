<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rate Annapurna Base Camp Trek—<?= $companyname; ?></title>

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
                <h1>Rate Annapurna Base Camp Tour</h1>
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Rate Annapurna Base Camp Trek</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-2 xl:gap-3">
                <div class="lg:col-2 xl:col-3">
                    <form action="">
                        <h2 class="fs-lg bold text-primary mb-2">Your personal details</h2>
                        <div class="grid lg:grid-cols-3 gap-2 mb-2">
                            <div class="form-group">
                                <label for="">Your Photo *</label>
                                <input type="file" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <label for="">Country *</label>
                                <select name="" id="" class="form-control" required>
                                    <option value="" selected disabled>Country</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Difficulty</label>
                                <select name="" id="" class="form-control">
                                    <option value="" selected>Easy</option>
                                    <option value="">Moderate</option>
                                    <option value="">Difficult</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <hr class="mb-2">
                        <h2 class="fs-lg bold text-primary mb-2">Review details</h2>
                        <div class="grid lg:grid-cols-3 gap-2 mb-2">

                            <div class="form-group">
                                <label for="">Tour Package You Completed *</label>
                                <select name="" id="" class="form-control" required>
                                    <option value="" selected disabled>Tour Package</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Short Title *</label>
                                <input type="text" placeholder="Short Title" required>
                            </div>
                            <div class="form-group">
                                <label for="">Rate *</label>
                                <input type="hidden" id="rating" name="rating" value="5" required>
                                <div class="stars text-primary flex">
                                    <div class="star">
                                        <svg class="icon-md">
                                            <use xlink:href="img/sprite.svg#star" /></svg>
                                    </div>
                                    <div class="star">
                                        <svg class="icon-md">
                                            <use xlink:href="img/sprite.svg#star" /></svg>
                                    </div>
                                    <div class="star">
                                        <svg class="icon-md">
                                            <use xlink:href="img/sprite.svg#star" /></svg>
                                    </div>
                                    <div class="star">
                                        <svg class="icon-md">
                                            <use xlink:href="img/sprite.svg#star" /></svg>
                                    </div>
                                    <div class="star">
                                        <svg class="icon-md">
                                            <use xlink:href="img/sprite.svg#star" /></svg>
                                    </div>
                                </div>

                                <script>
                                    const starsSvgs = document.querySelectorAll('.stars svg')
                                    const ratingInput = document.querySelector('#rating')
                                    starsSvgs.forEach((starsSvg, i) => {
                                        starsSvg.addEventListener('click', () => {
                                            ratingInput.value = i + 1
                                            starsSvgs.forEach((star, j) => {
                                                if (j > i) {
                                                    star.querySelector('use').setAttributeNS('http://www.w3.org/1999/xlink', 'xlink:href', 'img/sprite.svg#staro')
                                                } else {
                                                    star.querySelector('use').setAttributeNS('http://www.w3.org/1999/xlink', 'xlink:href', 'img/sprite.svg#star')
                                                }
                                            })
                                        })
                                    })
                                </script>
                            </div>
                            <div class="form-group lg:col-2">
                                <label for="">Message</label>
                                <textarea name="" id="" class="form-control" cols="30" rows="3" placeholder="Message"></textarea>
                            </div>
                        </div>

                        <button class="btn btn-theme">Submit</button>
                    </form>
                </div>

                <aside>
                    <div class="border-light p-2">
                        <h2 class="fs-lg text-primary bold">Annapurna Base Camp Trek</h2>
                        <div class="card-body">
                            <p>16 days</p>
                            <div>Earliest Fixed Depature Date</div>
                            <p>1 Jan 2020</p>
                            <b>USD 20,000</b> per person
                        </div>
                    </div>
                </aside>
            </div>
        </div>

    </section>


    <?php require_once "partials/footer.php" ?>

    <script src="js/app.js"></script>

</body>

</html>