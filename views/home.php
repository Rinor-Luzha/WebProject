<?php
require_once "controllers/ProductController.php";
require_once "controllers/AuthController.php";
$prodController = new ProductController;
$authController = new AuthController;
?>

<title>Polar</title>
<link rel="stylesheet" href="css/footerStyle.css" />
<link rel="stylesheet" href="css/headersStyle.css" />
<link rel="stylesheet" href="css/style.css" />
</head>

<body class="">
  <!-- Header -->
  <header class="header" id="header">
    <nav class="navigation">
      <div class="nav-center container">
        <div class="logo">
          <a href="index.php?page=home"><img src="images/logo.png" alt="logo" id="header-logo" /></a>
        </div>
        <div class="nav-menu">
          <div class="nav-top">
            <div class="logo">
              <a href="index.php?page=home"><img src="images/logo.png" alt="logo" id="header-logo" /></a>
            </div>
            <div class="close">
              <i class="fa-solid fa-xmark"></i>
            </div>
          </div>
          <ul class="nav-list">
            <?php
            if (isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'admin') {
              echo ' 
              <li class="nav-item" id="dashboard">
              <a href="#options" class="nav-link">Dashboard</a>
              <ul>
                <li>
                  <a href="index.php?page=products" class="nav-link">Products</a>
                </li>
                <li>
                  <a href="index.php?page=users" class="nav-link">Users</a>
                </li>
              </ul>
            </li>';
            }
            ?>
            <li class="nav-item">
              <a href="#header" class="nav-link scroll-link">Home</a>
            </li>
            <li class="nav-item" id="dropdown">
              <a href="#products" class="nav-link">Products</a>
              <ul>
                <li>
                  <a href="index.php?page=desktops" class="nav-link">Desktops</a>
                </li>
                <li>
                  <a href="index.php?page=laptops" class="nav-link">Laptops</a>
                </li>
                <li>
                  <a href="index.php?page=monitors" class="nav-link">Monitors</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#trending" class="nav-link scroll-link">Trending</a>
            </li>
            <li class="nav-item">
              <a href="#new" class="nav-link scroll-link">New</a>
            </li>
            <li class="nav-item mobile">
              <a href="index.php?page=cart" class="nav-link">Shopping cart</a>
            </li>
            <li class="nav-item mobile">
              <a href="index.php?page=account" class="nav-link">My Account</a>
            </li>

            <?php
            if (isset($_SESSION['username'])) {
              echo '
                    <li class="nav-item">
                        <a href="?logout=1" class="nav-link">Logout</a>
                    </li>';
            }
            if (isset($_GET['logout'])) {
              $authController->logoutUser();
            }
            ?>
          </ul>
        </div>

        <div class="nav-icons">
          <span><i class="fa-solid fa-cart-arrow-down"></i></span>
          <a href="index.php?page=login"><span><i class="fa-solid fa-user"></i></span></a>
        </div>

        <div class="collapse">
          <i class="fa-solid fa-bars"></i>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <!-- Slider -->
    <section class="slider">
      <div class="glide" id="slider">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides glide__slidercontent">
            <?php
            $bannerImages = $prodController->readBanners();
            foreach ($bannerImages as $key => $value) {
              echo ' 
                <li class="glide__slide">
                  <div class="slider-main">
                    <div class="slider-content">
                      <div class="slider-buttons">
                        <a href="index.php?page=laptops">shop laptops</a>
                        <a href="index.php?page=desktops">shop desktops</a>
                      </div>
                    </div>

                    <img src="' . $value['imageuri'] . '" alt="laptop" />
                  </div>
                </li>';
            }
            ?>
          </ul>
        </div>
        <!-- arrows per slider -->
        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
            <i class="fa-solid fa-arrow-left"></i>
          </button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
            <i class="fa-solid fa-arrow-right"></i>
          </button>
        </div>
      </div>
    </section>
    <!-- Products showcase  -->
    <?php
    $laptopsCount = $prodController->readLaptopsCount()['total'];
    $desktopsCount = $prodController->readDesktopsCount()['total'];
    $monitorsCount = $prodController->readMonitorsCount()['total'];
    ?>
    <section class="category products_category">
      <h2 class="title">Our Products</h2>
      <div class="category-center container">
        <div class="category-box">
          <img src="./images/preview/desktop1.png" alt="" />
          <div class="content">
            <h2>Desktops</h2>
            <span><?php echo $desktopsCount ?> Products</span>
            <a href="index.php?page=desktops">shop now</a>
          </div>
        </div>

        <div class="category-box">
          <img src="./images/preview/laptops3.jpg" alt="" />
          <div class="content">
            <h2>Laptops</h2>
            <span><?php echo $laptopsCount ?> Products</span>
            <!-- TODO: Get count from db -->
            <a href="index.php?page=laptops">shop now</a>
          </div>
        </div>
        <div class="category-box">
          <img src="./images/preview/monitor4.jpg" alt="" />
          <div class="content">
            <h2>Monitors</h2>
            <span><?php echo $monitorsCount ?> Products</span>
            <a href="index.php?page=monitors">shop now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Trending Products -->
    <section class="trending-products" id="trending">
      <h2 class="title">Trending</h2>
      <div class="product-center container">
        <div class="glide" id="trending-products-slider">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <?php
              $trendingProds = $prodController->readTrendingProducts();
              foreach ($trendingProds as $key => $value) {
                echo ' 
                     <li class="glide__slide">
                       <div class="product">
                         <div class="product-header">
                           <img src="' . $value["imageuri"] . '" class="small" alt="product">
                         </div>
                         <div class="product-footer">
                           <div class="description"><span>' . strstr($value['description'], ' ', true) . ' </span>' . substr($value['description'], strpos($value['description'], ' ') + 1) . '</div>
                           <div class="product-price">
                             <h4>' . $value['price'] . '</h4>
                           </div>
                         </div>
                         <ul>
                           <li>
                             <a href="#">
                               <i class="fas fa-cart-plus"></i>
                             </a>
                           </li>';
                if (isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'admin') {
                  echo '<li>
                            <a href="index.php?page=editProduct&id=' . $value['productId'] . '">
                              <i class="fas fa-edit"></i>
                            </a>
                          </li>
                          </ul>
                       </div>
                     </li>';
                } else {
                  echo ' </ul>
                      </div>
                    </li>';
                }
              }
              ?>
            </ul>
          </div>
          <!-- arrows per slider -->
          <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
              <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
    </section>
    <!-- New Products -->
    <section class="new-products" id="new">
      <h2 class="title">New Comings</h2>
      <div class="product-center container">
        <div class="glide" id="new-products-slider">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <?php
              $newProds = $prodController->readNewProducts();
              foreach ($newProds as $key => $value) {
                echo ' 
                     <li class="glide__slide">
                       <div class="product">
                         <div class="product-header">
                           <img src="' . $value["imageuri"] . '" class="small" alt="product">
                         </div>
                         <div class="product-footer">
                           <div class="description"><span>' . strstr($value['description'], ' ', true) . ' </span>' . substr($value['description'], strpos($value['description'], ' ') + 1) . '</div>
                           <div class="product-price">
                             <h4>' . $value['price'] . '</h4>
                           </div>
                         </div>
                         <ul>
                           <li>
                             <a href="#">
                               <i class="fas fa-cart-plus"></i>
                             </a>
                           </li>';
                if (isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'admin') {
                  echo '<li>
                           <a href="index.php?page=editProduct&id=' . $value['productId'] . '">
                             <i class="fas fa-edit"></i>
                           </a>
                         </li>
                         </ul>
                      </div>
                    </li>';
                } else {
                  echo ' </ul>
                       </div>
                    </li>';
                }
              }
              ?>
            </ul>
          </div>
          <!-- arrows per slider -->
          <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
              <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <?php
  require_once "parts/footer.php";
  ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/glide.min.js"></script>
  <script src="./js/index.js"></script>
  <script src="js/product.js"></script>
  <script src="js/slider.js"></script>
</body>

</html>