<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking Form—<?= $companyname; ?></title>

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
                <h1>Book Annapurna Base Camp Tour</h1>
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Booking Form</li>
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
                        <h2 class="fs-lg bold text-primary mb-2">Personal details</h2>
                        <div class="grid lg:grid-cols-3 gap-2 mb-2">
                            <div class="form-group">
                                <label for="">First name *</label>
                                <input type="text" class="form-control" placeholder="First name" required>
                            </div>
                            <div class="form-group">
                                <label for="">Middle name</label>
                                <input type="text" class="form-control" placeholder="Middle name" required>
                            </div>
                            <div class="form-group">
                                <label for="">Last name *</label>
                                <input type="text" class="form-control" placeholder="Last name" required>
                            </div>
                            <div class="form-group">
                                <label for="">Country *</label>
                                <select name="" id="" class="form-control" required>
                                    <option value="" selected disabled>Country</option>
                                </select>
                            </div>
                            <div class="form-group lg:col-2">
                                <label for="">Mailing address *</label>
                                <input type="text" class="form-control" placeholder="Mailing Address" required>
                            </div>
                            <div class="form-group">
                                <label for="">Email *</label>
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="">Contact no. *</label>
                                <input type="tel" class="form-control" placeholder="Contact no." required>
                            </div>
                        </div>
                        <div class="grid lg:grid-cols-3 gap-2 mb-2">
                            <div class="form-group">
                                <label for="">Gender *</label>
                                <select name="" id="" class="form-control" required>
                                    <option value="" selected disabled>Gender</option>
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Date of birth *</label>
                                <input type="date" name="" id="" class="form-control" max="<?php echo date('Y-m-d'); ?>">
                            </div>
                        </div>
                        <br>
                        <hr class="mb-2">

                        <h2 class="fs-lg bold text-primary mb-2">Trip details</h3>
                            <div class="grid lg:grid-cols-3 gap-2 mb-2">
                                <div class="form-group">
                                    <label for="">Passport no. *</label>
                                    <input type="number" class="form-control" placeholder="Passport No." required>
                                </div>
                                <div class="form-group">
                                    <label for="">Place of issue *</label>
                                    <input type="number" class="form-control" placeholder="Place of issue" required>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-3 gap-2 mb-2">
                                <div class="form-group">
                                    <label for="">Issue date *</label>
                                    <input type="date" class="form-control" max="<?php echo date('Y-m-d'); ?>" placeholder="Issue date" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Expiry date *</label>
                                    <input type="date" class="form-control" min="<?php echo date('Y-m-d'); ?>" placeholder="Expiry date" required>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-3 gap-2 mb-2">
                                <div class="form-group">
                                    <label for="">No. of travellers *</label>
                                    <input type="number" class="form-control" min="<?php echo date('Y-m-d'); ?>" placeholder="No. of travellers" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Preferred departure date*</label>
                                    <input type="date" name="" id="" class="form-control" min="<?php echo date('Y-m-d'); ?>">
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-3 gap-2 mb-2">
                                <div class="form-group">
                                    <label for="">Emergency Contact *</label>
                                    <input class="form-control" placeholder="Emergency Contact"></input>
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