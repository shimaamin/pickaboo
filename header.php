<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pickaboo | Mobile Phone Price in Bangladesh 2021</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="icon" type="image/x-icon" href="https://b2b-pickaboocdn.azureedge.net/media/favicon/stores/1/Pickaboo_favicon_latest.png">    <!-- Custom CSS file -->
    <link rel="stylesheet" href="./HTML Template/sass/style.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>

</head>
<body>

<!-- start #header -->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-rale font-size-12 text-black-80 m-0">Shop No - 1692, House - 342, Road- 12, Banani DOHS, Dhaka, Bangladesh</p>
        <div class="font-rale font-size-14">
            <a href="#" class="px-3 border-right border-left text-dark">+8801784 - 325678</a>
            <a href="#" class="px-3 border-right text-dark">shimaamin906@gmail.com</a>
        </div>
    </div>

    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg" style="padding: 1rem 2rem">
        <a class="navbar-brand" href="/MobileDokan">
            <img src="./assets/pickaboo-small-device.png" alt="Mobile Dokaan" height="40"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                    <a class="nav-link" href="#top-sale">Top Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#special-price">Special Price</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#new-phones">New Phone</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./order.php">Order Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blogs">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Coming Soon</a>
                </li>
            </ul>
            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                </a>
            </form>
        </div>
    </nav>
    <!-- !Primary Navigation -->

</header>
<!-- !start #header -->

<!-- start #main-site -->
<main id="main-site">