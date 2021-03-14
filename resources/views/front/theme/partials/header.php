<!-- Header -->
<header class="header">
    <div class="container">

        <!-- Logo -->
        <a class="header__logo" href="index.php">
            <img src="img/logo.png" alt="<?= $companyname; ?>">
        </a><!-- Logo -->

        <!-- Nav -->
        <nav>
            <ul id="main-nav" class="header__nav sm sm-simple">
                <li>
                    <a href="#" class="header__navlink">Destinations</a>
                    <ul class="submenu">
                        <li>
                            <a href="#">Nepal</a>
                            <ul>
                                <li>
                                    <a href="#">Annapurna Region</a>
                                    <ul>
                                        <li>
                                            <a href="#">Annapurna Base Camp Trek</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Everest Region</a></li>
                                <li><a href="#">Langtang Region</a></li>
                                <li><a href="#">Manaslu Region</a></li>
                            </ul>
                        </li>
                        <li><a href="#">India</a></li>
                        <li><a href="#">Tibet</a></li>
                        <li><a href="#">Bhutan</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="header__navlink">Activities</a>
                    <ul class="submenu">
                        <li><a href="#">Trekking & Hiking</a></li>
                        <li><a href="#">Sightseeing</a></li>
                        <li><a href="#">Mountain Flight</a></li>
                        <li><a href="#">Rafting</a></li>
                        <li><a href="#">City Tour</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="header__navlink">Style</a>
                    <ul class="submenu">
                        <li><a href="#">Family Vacation</a></li>
                        <li><a href="#">Sightseeing</a></li>
                        <li><a href="#">Mountain Flight</a></li>
                        <li><a href="#">Rafting</a></li>
                        <li><a href="#">City Tour</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="header__navlink">About Us</a>
                </li>
                <li>
                    <a href="contact.php" class="header__navlink">Contact Us</a>
                </li>
            </ul>
        </nav><!-- Nav -->

        <div class="header__search">
            <button id="show-searchbox">
                <svg>
                    <use xlink:href="img/sprite.svg#search" />
                </svg>
            </button>
        </div>

        <div class="header__togglenav">
            <button id="toggle-nav">
                <svg id="icon-menu">
                    <use xlink:href="img/sprite.svg#menu" />
                </svg>
                <svg id="icon-x">
                    <use xlink:href="img/sprite.svg#x" /></svg>
            </button>
        </div>

        <!-- Talk to experts -->
        <div class="header__experts hide-on-mobile">
            <div class="small">Talk to an expert</div>
            <div>
                <a href="tel:<?= $cell; ?>">
                    <svg>
                        <use xlink:href="img/sprite.svg#phone" />
                    </svg>
                    <?= $cell; ?>
                </a>
                <a href="#"><svg class="icon">
                        <use xlink:href="img/sprite.svg#viber" /></svg>
                </a>
                <a href="#"><svg class="icon">
                        <use xlink:href="img/sprite.svg#whatsapp" /></svg>
                </a>
            </div>
        </div>

        <div class="header__searchbox">
            <form action="">
                <input type="text" placeholder="Search keywords">
                <button type="submit">
                    <svg>
                        <use xlink:href="img/sprite.svg#arrownarrowright" /></svg>
                </button>
            </form>
        </div>

    </div>
</header><!-- Header -->
