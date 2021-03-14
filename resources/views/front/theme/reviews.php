<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reviews—<?= $companyname; ?></title>

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
                <h1>Reviews</h1>
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-2 xl:gap-3">
                <div class="lg:col-2 xl:col-3">
                    <div class="grid gap-1 mb-2">
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                            <div class="review mb-3">
                                <div class="review__content lim">
                                    <h2 class="fs-lg">Rewarding trek with best guides</h2>
                                    <p class="fs-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio reiciendis fugiat aperiam beatae et aspernatur consequuntur, iste consequatur totam eligendi alias quae dolor iure quam exercitationem cumque aliquid architecto assumenda!</p>
                                </div>
                                <div class="review__person">
                                    <div class="image">
                                        <img src="img/portrait1.jpg" alt="">
                                    </div>
                                    <div>
                                        <div class="name">Emory McCullough</div>
                                        <div class="from">Virgin Islands, U.S.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <div class="review__content lim">
                                    <h2 class="fs-lg">Never had so much fun!</h2>
                                    <p class="fs-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio reiciendis fugiat aperiam beatae et aspernatur consequuntur, iste consequatur totam eligendi alias quae dolor iure quam exercitationem cumque aliquid architecto assumenda!</p>
                                </div>
                                <div class="review__person">
                                    <div class="image">
                                        <img src="img/portrait2.jpg" alt="">
                                    </div>
                                    <div>
                                        <div class="name">Ola Murray</div>
                                        <div class="from">Gambia</div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <aside>
                    <a href="write-review.php" class="btn btn-theme"> Write a review</a>
                    <div class="ta-widget">
                        <img src="img/ta-widget.jpg" alt="" class="img-fluid">
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!-- Write a review modal -->
    <!-- <div class="modal fade" id="review-modal" tabindex="-1" role="dialog" aria-labelledby="reviewModal" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-primary mb-0" id="exampleModalLabel">Write a review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="photo-input">Photo</label>
                            <input type="file" class="form-control-file" id="photo-input">
                            <img src="img/person-placeholder.jpg" alt="" id="write-review-photo">
                        </div>
                        <div class="form-row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Country</label>
                                    <select name="" id="" class="form-control">
                                        <option value="" selected disabled>Country</option>
                                        <option value="">Australia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Package</label>
                                    <select class="form-control">
                                        <option value="" selected disabled>Choose a package</option>
                                        <option value="">Everest Three Passes Tour</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control" placeholder="Short title">
                                </div>
                                <div class="form-group">
                                    <label for="">Rate this tour</label>
                                    <input type="hidden" name="" id="ratings-input">
                                    <p class="select-ratings">
                                        <i class="fas fa-star active" title="1 star"></i>
                                        <i class="fas fa-star active" title="2 stars"></i>
                                        <i class="fas fa-star active" title="3 stars"></i>
                                        <i class="fas fa-star active" title="4 stars"></i>
                                        <i class="fas fa-star active" title="5 stars"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="">Review</label>
                                <textarea type="text" rows="5" class="form-control" placeholder="Review"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Submit review</button>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <script>
        window.onload = function() {
            //Display user image upon select
            const showImage = (src, target) => {
                var fr = new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                fr.onload = function(e) {
                    target.src = this.result;
                };
                src.addEventListener("change", function() {
                    // fill fr with image data    
                    fr.readAsDataURL(src.files[0]);
                });
            }
            const src = document.getElementById("photo-input");
            const target = document.getElementById("write-review-photo");
            showImage(src, target);

            //Control ratings
            const stars = document.querySelectorAll('.select-ratings i')
            const ratingsInput = document.querySelector('#ratings-input')
            stars.forEach((star, index) => {
                star.addEventListener('click', () => {
                    ratingsInput.value = index + 1
                    console.log(ratingsInput.value)
                    stars.forEach((star, indexx) => {
                        star.classList.remove('active')
                        if (indexx <= index) star.classList.add('active')
                    })
                })
            })
        }
    </script> -->

    <?php require_once "partials/footer.php" ?>

    <script src="js/app.js"></script>

</body>