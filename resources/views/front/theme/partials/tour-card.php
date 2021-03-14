<div class="tour">
    <div class="top">
        <?php if (isset($tour['img'])) : ?>
            <img src="img/<?= $tour['img']; ?>" alt="">
        <?php else : ?>
            <img src="img/dest-nepal.jpg" alt="<?php $tour['title']; ?>">
        <?php endif; ?>
        <div class="top__overlay">
            <div class="location">
                <svg>
                    <use xlink:href="img/sprite.svg#locationmarker" /></svg>
                <span><?= $tour['location']; ?></span>
            </div>
            <div class="activity">
                Trekking
            </div>
        </div>
    </div>
    <div class="offer">Best Seller</div>
    <div class="bottom">

        <!-- <h2>Mardi Himal Trek</h2> -->
        <h2 class="font-display upper fs-xl"><?= $tour['title'] ?></h2>


        <div class="details flex aic jcsb mb-2">
            <div class="flex aic">
                <svg class="icon">
                    <use xlink:href="img/sprite.svg#calendar" /></svg>
                <div>
                    <span class="fs-lg bold"> <?= $tour['days']; ?> </span> days
                </div>
            </div>
            <div class="divider"></div>
            <div class="flex aic">
                <svg class="icon">
                    <use xlink:href="img/sprite.svg#chartbar" /></svg>
                Easy
            </div>
            <div class="divider"></div>
            <div class="price">
                <div>
                    <span class="from fs-sm">
                        from
                    </span>
                    <span class="old">
                        USD 1000
                    </span>
                </div>
                <div>
                    <span class="fs-sm">
                        USD
                    </span>
                    <span class="fs-xl">
                        780
                    </span>
                    <span class="fs-md">
                        .00
                    </span>
                </div>
            </div>
        </div>



        <div class="actions">
            <a href="tour-details.php" class="btn btn-theme">
                Explore
                <svg>
                    <use xlink:href="img/sprite.svg#arrownarrowright" /></svg>
            </a>
            <a href="booking-form.php" class="btn btn-primary">Book Now

            </a>
        </div>

        <div class="stars">
            <svg>
                <use xlink:href="img/sprite.svg#star" /></svg>
            <svg>
                <use xlink:href="img/sprite.svg#star" /></svg>
            <svg>
                <use xlink:href="img/sprite.svg#star" /></svg>
            <svg>
                <use xlink:href="img/sprite.svg#star" /></svg>
            <svg>
                <use xlink:href="img/sprite.svg#star" /></svg>
            <span>based on 30 ratings</span>
        </div>
    </div>
</div>
