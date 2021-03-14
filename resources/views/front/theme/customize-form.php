<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Customize—<?= $companyname; ?></title>

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
                <h1>Customize Annapurna Base Camp Tour</h1>
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Customize Form</li>
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
                        <h2 class="fs-lg bold text-primary mb-2">Custom trip details</h2>
                        <div class="grid lg:grid-cols-3 gap-2 mb-2">
                            <div class="form-group">
                                <label for="">Trip duration *</label>
                                <input type="number" class="form-control" min="<?php echo date('Y-m-d'); ?>" placeholder="Trip duration" required>
                            </div>
                            <div class="form-group">
                                <label for="">No. of travellers *</label>
                                <input type="number" class="form-control" min="<?php echo date('Y-m-d'); ?>" placeholder="No. of travellers" required>
                            </div>
                            <div class="form-group">
                                <label for="">Departure date*</label>
                                <input type="date" name="" id="" class="form-control" min=" <?php echo date('Y-m-d'); ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Price range*</label>
                                <select name="" id="" class="form-control" required>
                                    <option value="" selected>$5,000 - $8,000</option>
                                    <option value="">$3,000 - $5,000</option>
                                    <option value="">$2,000 - $3,000</option>
                                    <option value="">$1,000 - $2,000</option>
                                    <option value="">$800 - $1,000</option>
                                    <option value="">$500 - $800</option>
                                    <option value="">$300 - $500</option>
                                    <option value="">Less than $300</option>
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
                        <div class="grid lg:grid-cols-3">
                            <div class="form-group lg:col-2">
                                <label for="">Message</label>
                                <textarea name="" id="" class="form-control" cols="30" rows="3" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <br>
                        <hr class="mb-2">
                        <h2 class="fs-lg bold text-primary mb-2">Personal details</h2>
                        <div class="grid lg:grid-cols-3 gap-2 mb-2">
                            <div class="form-group">
                                <label for="">Name *</label>
                                <input type="text" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <label for="">Email *</label>
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="">Contact No. *</label>
                                <input type="tel" class="form-control" placeholder="Contact No." required>
                            </div>
                            <div class="form-group">
                                <label for="">Country *</label>
                                <select name="" id="" class="form-control" required>
                                    <option value="" selected disabled>Country</option>
                                </select>
                            </div>
                            <div class="form-group lg:col-2">
                                <label for="">Address *</label>
                                <input class="form-control" placeholder="Address" required>
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