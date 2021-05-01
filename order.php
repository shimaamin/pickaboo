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
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="./HTML Template/sass/include/orderPlace.css">
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
        <p class="font-rale font-size-12 text-black-50 m-0">Shop No - 1692, House - 342, Road- 12, Banani DOHS, Dhaka, Bangladesh</p>
        <div class="font-rale font-size-14">
            <a href="#" class="px-3 border-right border-left text-dark">Login</a>
            <a href="#" class="px-3 border-right text-dark">Whishlist (0)</a>
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
                    <a class="nav-link" href="./index.php#top-sale">Top Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./index.php#special-price">Special Price</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./index.php#new-phones">New Phone</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./order.php">Order Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./index.php#blogs">Blog</a>
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
  <section id="burger-order-place" style="margin: 3rem 0 10rem">
    <div style="margin: 7rem 0 4rem">
      <h2 class="primary-heading" style="color: #009fe0">
        Submit the Form to place the Order
      </h2>
      <h4 class="secondary-heading" style="color: #333">
        Please provide information correctly so that we can connect with you. 😀😀😀
      </h4>
    </div>
    <div id="order" class="container">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="d-flex">
          <div class="form-input">
            <label>
              <span class="fname">First Name <span class="required">*</span></span>
              <input type="text" name="fname">
            </label>
            <label>
              <span class="lname">Last Name <span class="required">*</span></span>
              <input type="text" name="lname">
            </label>
            <label>
              <span>House No <span class="required">*</span></span>
              <input type="text" name="houseNo" placeholder="House No" required>
            </label>
            <label>
              <span>Road No <span class="required">*</span></span>
              <input type="text" name="roadNo" placeholder="Road No">
            </label>
            <label>
              <span>Area <span class="required">*</span></span>
              <input type="text" name="area">
            </label>
            <label>
              <span>Division <span class="required">*</span></span>
              <select name="division">
                <option value="select">Select a Division...</option>
                <option value="DHA">Dhaka</option>
                <option value="SYL">Sylhet</option>
                <option value="CTG">Chittagong</option>
                <option value="RAJ">Rajshahi</option>
                <option value="GAZ">Gazipur</option>
                <option value="TNG">Tangail</option>
              </select>
            </label>
            <label>
              <span>Phone <span class="required">*</span></span>
              <input type="tel" name="phone">
            </label>
            <label>
              <span>Email Address <span class="required">*</span></span>
              <input type="email" name="email">
            </label>
          </div>
          <div class="Yorder">
            <table>
              <thead>
                <tr>
                  <th colspan="2">Your order</th>
                </tr>
              </thead>

              <tbody id="order-prdoucts">
                <?php
                    foreach ($product->getData('cart') as $item) :
                        $cart = $product->getProduct($item['item_id']);
                        
                        $subTotal[] = array_map(function ($item){
                ?>
                    <tr>
                        <td><?php echo $item['item_name'] ?? "Unknown"; ?></td>
                        <td><?php echo $item['item_price'] ?? 0; ?></td>
                      </tr>
                      <?php
                            return $item['item_price'];
                        }, $cart); // closing array_map function
                    endforeach;
                ?>
              </tbody>
              <tfoot>
                <tr id="total-price-wrapper">
                  <td>Subtotal</td>
                  <td style="display: none;"><input type="text" name="price" value=""/></td>
                  <td id="total-price">
                  <?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?>
                  </td>
                </tr>
                <tr>
                  <td>Shipping</td>
                  <td>Free shipping</td>
                </tr>
              </tfoot>
            </table>
            <div>
              <input type="radio" name="dbt" value="dbt" checked> Direct Bank Transfer
            </div>
            <p>
              Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
            </p>
            <div>
              <input type="radio" name="dbt" value="cd"> Cash on Delivery
            </div>
            <div>
              <input type="radio" name="dbt" value="paypal"> Paypal <span>
                <img src="https://www.logolynx.com/images/logolynx/c3/c36093ca9fb6c250f74d319550acac4d.jpeg" alt="" width="50">
              </span>
            </div>
            <input name="submit" type="submit" id="contact-submit" data-submit="...Sending" value="Place Order">
          </div>
        </div>
      </form>
    </div>
    <?php
    if (isset($_POST["submit"])) {
      $fName = $_POST["fname"];
      $lName = $_POST["lname"];
      $houseNo = $_POST["houseNo"];
      $roadNo = $_POST["roadNo"];
      $area = $_POST["area"];
      $division = $_POST["division"];
      $phone = $_POST["phone"];
      $email = $_POST["email"];
      $price = isset($subTotal) ? $Cart->getSum($subTotal) : 0; 
      $payment_type = $_POST["dbt"];

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "shopee";

      //   //! Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      //Price should be added before payment_type
      $sql = "INSERT INTO orders (first_name, last_name, house, road, area, division, phone, email, price, payment_type) VALUES ('$fName','$lName','$houseNo','$roadNo', '$area', '$division', '$phone', '$email', '$price', '$payment_type')";
      if ($conn->query($sql) === TRUE) {
    ?>
    <div class="alert alert-success" role="alert">
       <?php echo "Order Placed Successfully"; ?>
    </div>
    <?php  
      } else {
    ?>
    <div class="alert alert-danger" role="alert">
       <?php echo "Error creating table: " . $conn->error;?>
    </div>
    <?php     
      }
    }
    ?>

  </Section>

<?php

    /*  include products */
    // include ('Template/_products.php');
    /*  include products */

    /*  include top sale section */
    // include ('Template/_top-sale.php');
    /*  include top sale section */

?>

<?php
// include footer.php file
include ('footer.php');
?>

