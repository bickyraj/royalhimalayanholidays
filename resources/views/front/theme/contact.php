<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us—<?= $companyname; ?></title>

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
                <h1>Contact Us</h1>
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-2 xl:gap-3">
                <div class="lg:col-2 xl:col-3">
                    <h2 class="text-primary bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor voluptas expedita aspernatur voluptates
                        laudantium natus deleniti nobis. Quos quibusdam hic perferendis incidunt dolorem inventore odit officiis
                        impedit optio, distinctio rerum praesentium quod fugiat ab a maiores similique eius, quia placeat? Vel sequi
                        quo
                        omnis?
                    </p>
                    <form action="">
                        <div class="grid lg:grid-cols-3">
                            <div class="lg:col-2">
                                <div class="form-group mb-2">
                                    <label for="">Name <sup>*</sup></label>
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">E-mail <sup>*</sup></label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Country <sup>*</sup></label>
                                    <select name="" id="" class="form-control">
                                        <option disabled selected>Country</option>
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Phone Number <sup>*</sup></label>
                                    <input type="tel" class="form-control" placeholder="Phone No.">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Message <sup>*</sup></label>
                                    <textarea class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <button type="submit" class="btn btn-theme">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <aside>
                    <div class="p-2 border-light">
                        <div class="card-body">
                            <div class="text-center mb-2">
                                <a href="#" class="flex">
                                    <svg class="icon-md shrink-0 mr-1 text-primary">
                                        <use xlink:href="img/sprite.svg#locationmarker" />
                                    </svg>
                                    <?= $address; ?>
                                    <small></small>
                            </div>
                            <div class="text-center mb-2">
                                <a href="#" class="flex">
                                    <svg class="icon-md shrink-0 mr-1 text-primary">
                                        <use xlink:href="img/sprite.svg#mail" />
                                    </svg>
                                    <?= $email; ?>
                                </a>
                                <small></small>
                            </div>
                            <div class="text-center mb-2">
                                <a href="#" class="flex">
                                    <svg class="icon-md shrink-0 mr-1 text-primary">
                                        <use xlink:href="img/sprite.svg#phone" />
                                    </svg>
                                    <?= $cell; ?> (Dipak)</a>
                            </div>
                            <div class="text-center mb-3">
                                <a href="#" class="flex">
                                    <svg class="icon-md shrink-0 mr-1 text-primary">
                                        <use xlink:href="img/sprite.svg#phone" />
                                    </svg>
                                    <?= $phone; ?></a>
                            </div>
                            <p class="text-center mb-0">
                                <a href="#" class="text-primary hover:text-accent mr-2">
                                    <svg class="icon-md">
                                        <use xlink:href="img/sprite.svg#facebookmessenger" /></svg>
                                </a>
                                <a href="#" class="text-primary hover:text-accent mr-2">
                                    <svg class="icon-md">
                                        <use xlink:href="img/sprite.svg#viber" /></svg>
                                </a>
                                <a href="#" class="text-primary hover:text-accent mr-2">
                                    <svg class="icon-md">
                                        <use xlink:href="img/sprite.svg#whatsapp" /></svg>
                                </a>
                                <a href="#" class="text-primary hover:text-accent mr-2">
                                    <svg class="icon-md">
                                        <use xlink:href="img/sprite.svg#skype" /></svg>
                                </a>
                            </p>
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