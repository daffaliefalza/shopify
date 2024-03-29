<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Company Profile</title>

  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <!-- navbar start -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
    <div class="container">
      <a href="#" style="text-decoration: none; color: black; font-size: 30px">Shopify</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="shop.html">Shop</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>

          <li class="nav-item">
            <a href="cart.html">
              <i class="fas fa-shopping-bag"></i>
            </a>
            <a href="account.html"> <i class="fas fa-user"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- navbar end -->

  <!-- home start-->
  <section id="home">
    <div class="container">
      <h5>NEW ARRIVALS</h5>
      <h1><span>Best Prices</span> This Season</h1>
      <p>Eshop offers the best products for the most affordable prices</p>
      <button>Shop Now</button>
    </div>
  </section>

  <!-- home end -->

  <!-- brand start -->

  <section id="brand" class="container">
    <div class="row my-5">
      <img src="assets/imgs/brand1.jpeg" alt="img" class="img-fluid col-lg-3 col-md-6 col-sm-12" />
      <img src="assets/imgs/brand2.jpeg" alt="img" class="img-fluid col-lg-3 col-md-6 col-sm-12" />
      <img src="assets/imgs/brand3.jpeg" alt="img" class="img-fluid col-lg-3 col-md-6 col-sm-12" />
      <img src="assets/imgs/brand4.jpeg" alt="img" class="img-fluid col-lg-3 col-md-6 col-sm-12" />
    </div>
  </section>

  <!-- brand end -->

  <!-- new section start -->

  <section id="new" class="w-100">
    <div class="row p-0 m-0">
      <!-- one -->
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img src="assets/imgs/1.jpeg" alt="new" class="img-fluid" />
        <div class="details">
          <h2>Extremely Awesome Shoes</h2>
          <button class="text-uppercase">Shop Now</button>
        </div>
      </div>

      <!-- two -->
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img src="assets/imgs/2.jpeg" alt="new" class="img-fluid" />
        <div class="details">
          <h2>Awesome Jacket</h2>
          <button class="text-uppercase">Shop Now</button>
        </div>
      </div>
      <!-- three -->

      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img src="assets/imgs/3.jpeg" alt="new" class="img-fluid" />
        <div class="details">
          <h2>50% OFF Watches</h2>
          <button class="text-uppercase">Shop Now</button>
        </div>
      </div>
    </div>
  </section>
  <!-- new section end -->

  <!-- featured product start -->

  <section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
      <h3>Our Featured</h3>
      <hr />
      <p>Here you can check out our featured products</p>
    </div>
    <div class="row mx-auto container-fluid">

      <?php include('server/get_featured_products.php') ?>

      <?php while ($row = $featured_products->fetch_assoc()) {  ?>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" alt="featured" src="assets/imgs/<?php echo $row['product_image'] ?>" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price"><?php echo $row['product_price'] ?></h4>
          <button class="buy-btn">Buy Now</button>
        </div>

      <?php } ?>
    </div>
  </section>

  <!-- featured product end -->

  <!-- banner start -->

  <section id="banner" class="my-5 p-5">
    <div class="container">
      <h4>MID SEASON'S SALE</h4>
      <h1>
        Autumn Collection <br />
        UP to 30% OFF
      </h1>
      <button class="text-uppercase">shop now</button>
    </div>
  </section>

  <!-- banner end -->

  <!-- clothes start -->
  <section id="featured" class="my-5">
    <div class="container text-center mt-5 py-5">
      <h3>Dresses & Coats</h3>
      <hr />
      <p>Here you can check out our amazing clothes</p>
    </div>

    <?php include("server/get_coats.php") ?>

    <div class="row mx-auto container-fluid">
      <?php while ($row = $coats_products->fetch_assoc()) { ?>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" alt="featured" src="assets/imgs/<?php echo $row['product_image'] ?>" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name'] ?></h5>
          <h4 class="p-price"><?php echo $row['product_price'] ?></h4>
          <button class="buy-btn">Buy Now</button>
        </div>
      <?php } ?>
    </div>
  </section>
  <!-- clothes end -->

  <!-- shoes start -->
  <section id="shoes" class="my-5">
    <div class="container text-center mt-5 py-5">
      <h3>Shoes</h3>
      <hr />
      <p>Here you can check out our amazing Shoes</p>
    </div>
    <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" alt="featured" src="assets/imgs/shoes1.jpeg" />
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Sports Shoes</h5>
        <h4 class="p-price">$199.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" alt="featured" src="assets/imgs/shoes2.jpeg" />
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Sports Shoes</h5>
        <h4 class="p-price">$199.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" alt="featured" src="assets/imgs/shoes3.jpeg" />
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Sports Shoes</h5>
        <h4 class="p-price">$199.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" alt="featured" src="assets/imgs/shoes4.jpeg" />
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Sports Shoes</h5>
        <h4 class="p-price">$199.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
    </div>
  </section>
  <!-- shoes end -->

  <!-- watches start -->

  <section id="watches" class="my-5">
    <div class="container text-center mt-5 py-5">
      <h3>Best Watches</h3>
      <hr />
      <p>Checkout our unique watches</p>
    </div>
    <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" alt="featured" src="assets/imgs/watch1.jpeg" />
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Sports Shoes</h5>
        <h4 class="p-price">$199.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" alt="featured" src="assets/imgs/watch2.jpeg" />
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Sports Shoes</h5>
        <h4 class="p-price">$199.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" alt="featured" src="assets/imgs/watch3.jpeg" />
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Sports Shoes</h5>
        <h4 class="p-price">$199.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" alt="featured" src="assets/imgs/watch4.jpeg" />
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Sports Shoes</h5>
        <h4 class="p-price">$199.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
    </div>
  </section>
  <!-- watches end -->

  <!-- footer -->

  <footer class="mt-5 py-5">
    <div class="row container mx-auto pt-5">
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <a href="#" style="text-decoration: none; color: white; font-size: 30px">Shopify</a>
        <p class="pt-3">
          We provide the best products for the most affordable prices
        </p>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-2">Featured</h5>
        <ul class="text-uppercase">
          <li><a href="#">men</a></li>
          <li><a href="#">women</a></li>
          <li><a href="#">boys</a></li>
          <li><a href="#">girls</a></li>
          <li><a href="#">new arrivals</a></li>
          <li><a href="#">clothes</a></li>
        </ul>
      </div>

      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-2">Contact Us</h5>
        <div>
          <h6 class="text-uppercase">address</h6>
          <p>1234 Street Name, City</p>
        </div>
        <div>
          <h6 class="text-uppercase">Phone</h6>
          <p>213 456 7890</p>
        </div>
        <div>
          <h6 class="text-uppercase">Email</h6>
          <p>info@email.com</p>
        </div>
      </div>

      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-2">Instagram</h5>
        <div class="row">
          <img src="assets/imgs/featured1.jpeg" alt="footer" class="img-fluid w-25 h-100 m-2" />
          <img src="assets/imgs/featured2.jpeg" alt="footer" class="img-fluid w-25 h-100 m-2" />
          <img src="assets/imgs/featured3.jpeg" alt="footer" class="img-fluid w-25 h-100 m-2" />
          <img src="assets/imgs/featured4.jpeg" alt="footer" class="img-fluid w-25 h-100 m-2" />
          <img src="assets/imgs/featured2.jpeg" alt="footer" class="img-fluid w-25 h-100 m-2" />
        </div>
      </div>
    </div>
    <div class="copyright mt-5">
      <div class="row container mx-auto">
        <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
          <img src="assets/imgs/payment.jpeg" alt="payment" />
        </div>
        <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2">
          <p>eCommerce @ 2024 All Rights Reserved</p>
        </div>

        <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
          <a href="#">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>

  <!-- footer end -->

  <!--bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>