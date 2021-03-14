<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Team—<?= $companyname; ?></title>

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
                <h1>Our Team</h1>
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </section>

    <section class="py-5">
        <div class="container">
            <ul class="nav nav-pills mb-3 jcc" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="administration-tab" data-bs-toggle="pill" href="#administration" role="tab" aria-controls="administration" aria-selected="true">Administration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="representatives-tab" data-bs-toggle="pill" href="#representatives" role="tab" aria-controls="representatives" aria-selected="false">Representatives</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tour-guides-tab" data-bs-toggle="pill" href="#tour-guides" role="tab" aria-controls="tour-guides" aria-selected="false">Tour Guides</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="administration" role="tabpanel" aria-labelledby="administration-tab">
                    <h2 class="bold fs-xl text-primary mb-4">Administration</h2>
                    <?php for ($i = 0; $i < 5; $i++) { ?>
                        <div class="team-member border-light p-2  mb-2">
                            <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-2 xl:gap-3">
                                <div class="lg:col-span-1">
                                    <img class="img-fluid" src="img/portrait1.jpg" alt="">
                                </div>
                                <div class="lg:col-2 xl:col-3">
                                    <h3 class="fs-lg text-primary">John Doe</h3>

                                    <p class="title">Managing Director</p>
                                    <div class="lim">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur incidunt iure eius quos itaque.
                                            Iste
                                            animi pariatur excepturi sint possimus.</p>
                                        <p>Ex reiciendis asperiores distinctio aliquid quia ad autem? A iusto adipisci dolore pariatur ratione
                                            repellat nihil dolores eius sunt provident.</p>
                                    </div>
                                    <a href="team-member.php" class="btn btn-theme btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="tab-pane fade" id="representatives" role="tabpanel" aria-labelledby="representatives-tab">
                    <h2 class="bold fs-xl text-primary mb-4">Representatives</h2>
                    <?php for ($i = 0; $i < 5; $i++) { ?>
                        <div class="team-member border-light p-2  mb-2">
                            <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-2 xl:gap-3">
                                <div class="lg:col-span-1">
                                    <img class="img-fluid" src="img/portrait1.jpg" alt="">
                                </div>
                                <div class="lg:col-2 xl:col-3">
                                    <h3 class="fs-lg text-primary">John Doe</h3>

                                    <p class="title">Managing Director</p>
                                    <div class="lim">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur incidunt iure eius quos itaque.
                                            Iste
                                            animi pariatur excepturi sint possimus.</p>
                                        <p>Ex reiciendis asperiores distinctio aliquid quia ad autem? A iusto adipisci dolore pariatur ratione
                                            repellat nihil dolores eius sunt provident.</p>
                                    </div>
                                    <a href="team-member.php" class="btn btn-theme btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="tab-pane fade" id="tour-guides" role="tabpanel" aria-labelledby="tour-guides-tab">
                    <h2 class="bold fs-xl text-primary mb-4">Tour Guides</h2>
                    <?php for ($i = 0; $i < 5; $i++) { ?>
                        <div class="team-member border-light p-2  mb-2">
                            <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-2 xl:gap-3">
                                <div class="lg:col-span-1">
                                    <img class="img-fluid" src="img/portrait1.jpg" alt="">
                                </div>
                                <div class="lg:col-2 xl:col-3">
                                    <h3 class="fs-lg text-primary">John Doe</h3>

                                    <p class="title">Managing Director</p>
                                    <div class="lim">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur incidunt iure eius quos itaque.
                                            Iste
                                            animi pariatur excepturi sint possimus.</p>
                                        <p>Ex reiciendis asperiores distinctio aliquid quia ad autem? A iusto adipisci dolore pariatur ratione
                                            repellat nihil dolores eius sunt provident.</p>
                                    </div>
                                    <a href="team-member.php" class="btn btn-theme btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>


        </div>

    </section>

    <?php require_once "partials/footer.php" ?>

    <script src="js/app.js"></script>

</body>