<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About us—<?= $companyname; ?></title>

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
                <h1>About Us</h1>
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </section>

    <section class="about-page py-5">
        <div class="container">
            <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-1">
                <div class="lg:col-2 xl:col-3">
                    <div class="tour-details-section lim">
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor voluptas expedita aspernatur voluptates
                            laudantium natus deleniti nobis. Quos quibusdam hic perferendis incidunt dolorem inventore odit officiis
                            impedit
                            optio, distinctio rerum praesentium quod fugiat ab a maiores similique eius, quia placeat? Vel sequi quo
                            omnis?
                            Velit deleniti natus odio similique eius.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet harum nostrum reprehenderit delectus suscipit
                            exercitationem quisquam, vel quidem autem nobis mollitia adipisci inventore totam, eos consequatur eius
                            cupiditate modi id at sit. Quasi ex omnis reiciendis laudantium doloremque, voluptatum, molestias, delectus
                            quibusdam obcaecati minima magni laboriosam perspiciatis voluptatem. Consectetur similique sunt possimus qui
                            animi dolorem at temporibus harum necessitatibus molestiae?
                        </p>
                    </div>
                </div>
                <aside>
                    <div class="quick-enquiry-card border-light p-2">
                        <h2 class="bold text-primary">Quick Enquiry</h2>
                        <div class="card-body">
                            <form action="">
                                <div class="form-group mb-2">
                                    <label class="fs-xs" for="">Name</label>
                                    <input type="text" class="form-control block" placeholder="Name">
                                </div>
                                <div class="form-group mb-2">
                                    <label class="fs-xs" for="">E-mail</label>
                                    <input type="email" class="form-control block" placeholder="Email">
                                </div>
                                <div class="form-group mb-2">
                                    <label class="fs-xs" for="">Country</label>
                                    <select name="" id="" class="form-control block">
                                        <option disabled selected>Country</option>
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="fs-xs" for="">Phone Number</label>
                                    <input type="tel" class="form-control block" placeholder="Phone No.">
                                </div>
                                <div class="form-group mb-2">
                                    <label class="fs-xs" for="">Message</label>
                                    <textarea class="form-control block" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <button type="submit" class="btn btn-sm btn-theme">Send</button>
                                </div>
                            </form>
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