<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dessie Kshlerin—<?= $companyname; ?></title>

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
                <h1>Dessie Kshlerin</h1>
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="our-team.php">Our Team</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dessie Kshlerin</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </section>

    <section class="py-5">
        <div class="container">

            <div class="tour-details-section team-member">

                <div class="row">
                    <div class="col-sm-4 col-md-3 col-lg-2">
                        <div>
                            <img class="img-fluid" src="img/portrait1.jpg" alt="">
                        </div>
                        <h2 class="fs-xl text-primary">Dessie Kshlerin</h2>
                        <p class="fs-lg">Managing Director</p>
                        <div class="lim">

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur incidunt iure eius quos itaque. Iste
                                animi pariatur excepturi sint possimus.</p>
                            <p>Ex reiciendis asperiores distinctio aliquid quia ad autem? A iusto adipisci dolore pariatur ratione
                                repellat nihil dolores eius sunt provident.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae totam magnam eos debitis nostrum nam fugiat
                                voluptates adipisci id non at unde, vel libero, illo necessitatibus deserunt repellendus laborum, aspernatur
                                labore expedita consectetur nisi. Tenetur quod officiis assumenda nam ipsam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <?php require_once "partials/footer.php" ?>

    <script src="js/app.js"></script>

</body>