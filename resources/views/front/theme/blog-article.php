<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog Article—<?= $companyname; ?></title>

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
                <h1>Blog Article</h1>
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Article</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </section>

    <section class="tour-details mb-4">
        <div class="container mt-2">
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas iusto voluptas quod hic corrupti dicta omnis nemo
                    eaque aliquam rem. Id dolorum obcaecati earum veniam quod nesciunt quam consequatur placeat illum molestias
                    harum, ex debitis, aperiam consequuntur ea. Quod laudantium quia eos dignissimos! Neque recusandae, eligendi
                    autem at magnam officia nihil maxime quasi laboriosam sunt deserunt minus adipisci natus officiis dolorem ipsa.
                    Molestiae tenetur dignissimos repellat nisi velit ab dolor, rem harum. Architecto deleniti dolorem aspernatur,
                    voluptatum quibusdam molestias quidem magni similique rerum inventore, nihil error laborum. Vero quas ipsa
                    maxime quaerat accusamus maiores eveniet fugiat dignissimos quod ducimus? Molestias!</p>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure perspiciatis a facilis nam ipsam ad. Eaque
                    exercitationem alias consectetur earum id facilis provident magni molestiae quas architecto praesentium, sequi
                    omnis at unde deleniti iure, illo impedit corrupti, mollitia commodi ea nulla. Commodi porro accusamus possimus!
                    Similique eos quod natus omnis accusamus, esse ad laudantium ducimus, ipsum, blanditiis non porro veritatis
                    maiores! Mollitia rem atque consequuntur, fugiat velit laudantium animi quas sapiente doloremque minus enim
                    accusamus, soluta, consectetur ut! Possimus minus, quo cum laborum fuga aperiam suscipit inventore iusto, enim
                    qui ducimus blanditiis facere laudantium ad obcaecati sint rerum, omnis eligendi incidunt adipisci! Laboriosam
                    earum libero sed animi sapiente tempore quisquam necessitatibus voluptatibus repudiandae consequuntur placeat
                    suscipit non, ut rem exercitationem unde neque consequatur? Nemo harum est ipsum nobis? Id ab voluptate, vel
                    dolore quae modi deleniti odit blanditiis officia facilis nesciunt voluptates iure, vitae labore qui provident?
                    Vel, aperiam dolore.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium et dignissimos fugit dolorem natus
                    consequuntur quas numquam nisi, reprehenderit mollitia, odio nemo minima voluptatibus dolor molestiae esse
                    commodi maiores beatae!
                </p>
            </div>
        </div>

    </section>

    <!-- Latest News -->
    <section class="news mb-5">
        <div class="container">

            <div class="grid lg:grid-cols-3 gap-2 xl:gap-3">
                <?php for ($i = 0; $i < 3; $i++) : ?>
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
        </div>
    </section>

    <?php require_once "partials/footer.php" ?>

    <script src="js/app.js"></script>

</body>

</html>