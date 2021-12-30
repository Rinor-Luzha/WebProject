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
            <li class="nav-item">
              <a href="index.php?page=login" class="nav-link">My Account</a>
            </li>
          </ul>
        </div>

        <div class="nav-icons">
          <span><i class="fa-solid fa-cart-arrow-down"></i></span>
          <span><a href="login.html"><i class="fa-solid fa-user"></i></a></span>
          <span class="search"><input id="search-bar" type="text" placeholder="Type to Search">
            <i class="fa-solid fa-magnifying-glass"></i></span>
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
            <li class="glide__slide">
              <div class="slider-main">
                <div class="slider-content">
                  <div class="slider-buttons">
                    <a href="index.php?page=laptops">shop laptops</a>
                    <a href="index.php?page=desktops">shop desktops</a>
                  </div>
                </div>

                <img src="images/slider/gigabyteMonitor.jpg" alt="laptop" />
              </div>
            </li>
            <li class="glide__slide">
              <div class="slider-main">
                <div class="slider-content">
                  <div class="slider-buttons">
                    <a href="index.php?page=laptops">shop laptops</a>
                    <a href="index.php?page=desktops">shop desktops</a>
                  </div>
                </div>

                <img src="images/slider/msiLaptop.png" alt="laptop" />
              </div>
            </li>
            <li class="glide__slide" sty>
              <div class="slider-main">
                <div class="slider-content">
                  <div class="slider-buttons">
                    <a href="index.php?page=laptops">shop laptops</a>
                    <a href="index.php?page=desktops">shop desktops</a>
                  </div>
                </div>

                <img src="images/slider/razerPc.png" alt="laptop" />
              </div>
            </li>
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
    <section class="category products_category">
      <h2 class="title">Our Products</h2>
      <div class="category-center container">
        <div class="category-box">
          <img src="./images/preview/desktop1.png" alt="" />
          <div class="content">
            <h2>Desktops</h2>
            <span>15 Products</span>
            <a href="index.php?page=desktops">shop now</a>
          </div>
        </div>

        <div class="category-box">
          <img src="./images/preview/laptops3.jpg" alt="" />
          <div class="content">
            <h2>Laptops</h2>
            <span>10 Products</span>
            <a href="index.php?page=laptops">shop now</a>
          </div>
        </div>
        <div class="category-box">
          <img src="./images/preview/monitor4.jpg" alt="" />
          <div class="content">
            <h2>Monitors</h2>
            <span>12 Products</span>
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
              <li class="glide__slide">
                <div class="product">
                  <div class="product-header">
                    <img src="images/desktop/desktop2.png" class='small' alt="product">
                  </div>
                  <div class="product-footer">
                    <div class="description"><span>MSI</span> MAG VAMPIRIC 300 SeriesIntel Core i5, 16 GB RAM, 512 GB
                      SSD,
                      NVIDIA
                      GeForce
                      GTX 1650 Ti, grey</div>
                    <div class="product-price">
                      <h4>$1800.00</h4>
                    </div>
                  </div>
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fas fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="glide__slide">
                <div class="product">
                  <div class="product-header">
                    <img src="images/laptop/laptop2.png" class='small' alt="product">
                  </div>
                  <div class="product-footer">
                    <div class="description"><span>MSI</span> GS76 STEALTH Core i7 11th Gen, 16 GB RAM, 512 GB
                      SSD,
                      NVIDIA®
                      GeForce
                      GTX™ 1650 Ti, Black</div>
                    <div class="product-price">
                      <h4>$2200.00</h4>
                    </div>
                  </div>
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fas fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="glide__slide">
                <div class="product">
                  <div class="product-header">
                    <img src="images/desktop/desktop6.png" class='small' alt="product">
                  </div>
                  <div class="product-footer">
                    <div class="description"><span>OMEN</span> by HP 30L GT13-0038nc, Intel Core i7, 32GB RAM, 2TB SSD,
                      NVIDIA GeForce RTX 3080, black</div>
                    <div class="product-price">
                      <h4>$2000.99</h4>
                    </div>
                  </div>
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fas fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="glide__slide">
                <div class="product">
                  <div class="product-header">
                    <img src="images/laptop/laptop1.png" class='small' alt="product">
                  </div>
                  <div class="product-footer">
                    <div class="description"><span>DELL</span> ALIENWARE M15 R6 GAMING Core i9 12th Gen, 32 GB RAM, 1
                      TB
                      SSD,
                      NVIDIA® GeForce RTX™ 3050 Ti, Black</div>
                    <div class="product-price">
                      <h4>$1999.99</h4>
                    </div>
                  </div>
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fas fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="glide__slide">
                <div class="product">
                  <div class="product-header">
                    <img src="images/laptop/laptop7.png" class='small' alt="product">
                  </div>
                  <div class="product-footer">
                    <div class="description"><span>DELL</span> ALIENWARE M15 R6 GAMING Core i7 11th Gen, 16 GB RAM, 512
                      GB
                      SSD,
                      NVIDIA® GeForce RTX™ 3050 Ti, White</div>
                    <div class="product-price">
                      <h4>$2199.99</h4>
                    </div>
                  </div>
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fas fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="glide__slide">
                <div class="product">
                  <div class="product-header">
                    <img src="images/desktop/desktop1.png" class='small' alt="product">
                  </div>
                  <div class="product-footer">
                    <div class="description"><span>MSI</span> Aegis TI3 VR7RD SLI-031EU, 32GB DDR4, 16GB GDDR5,NVIDIA®
                      GeForce RTX™ 2080, black</div>
                    <div class="product-price">
                      <h4>$2200.00</h4>
                    </div>
                  </div>
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fas fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
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
              <li class="glide__slide">
                <div class="product">
                  <div class="product-header">
                    <img src="images/laptop/laptop7.png" class='small' alt="product">
                  </div>
                  <div class="product-footer">
                    <div class="description"><span>DELL</span> ALIENWARE M15 R6 GAMING Core i7 11th Gen, 16 GB RAM, 512
                      GB
                      SSD,
                      NVIDIA® GeForce RTX™ 3050 Ti, White</div>
                    <div class="product-price">
                      <h4>$2199.99</h4>
                    </div>
                  </div>
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fas fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="glide__slide">
                <div class="product">
                  <div class="product-header">
                    <img src="images/desktop/desktop4.png" class='small' alt="product">
                  </div>
                  <div class="product-footer">
                    <div class="description"><span>MSI</span> MAG VAMPIRIC 300 SeriesIntel Core i5, 16 GB RAM, 512 GB
                      SSD,
                      NVIDIA
                      GeForce
                      GTX 1650 Ti, grey</div>
                    <div class="product-price">
                      <h4>$2500.99</h4>
                    </div>
                  </div>
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fas fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="glide__slide">
                <div class="product">
                  <div class="product-header">
                    <img src="images/laptop/laptop9.png" class='small' alt="product">
                  </div>
                  <div class="product-footer">
                    <div class="description"><span>ACER</span> PREDATOR TRITON 500 SE Core i7 11th Gen, 16 GB RAM, 512
                      GB
                      SSD,
                      NVIDIA® GeForce RTX™ 3050 ti, Silver</div>
                    <div class="product-price">
                      <h4>$2950.99</h4>
                    </div>
                  </div>
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fas fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="glide__slide">
                <div class="product">
                  <div class="product-header">
                    <img src="images/monitor/monitor3.png" class='small' alt="product">
                  </div>
                  <div class="product-footer">
                    <div class="description"><span>ACER</span> PREDATOR X38 UltraWide QHD 4K 2560 x 1440, Curved,
                      35",DCI P3 (90%), 175Hz, Dolby atmos Grey
                    </div>
                    <div class="product-price">
                      <h4>$2500.99</h4>
                    </div>
                  </div>
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fas fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="glide__slide">
                <div class="product">
                  <div class="product-header">
                    <img src="images/monitor/monitor5.png" class='small' alt="product">
                  </div>
                  <div class="product-footer">
                    <div class="description"><span>ASUS</span> ROG SWIFT PG43UQ Gaming Monitor 43" 4K UHD 2560 x 1440,
                      Curved ,DCI P3 (90%), 175Hz, Dolby atmos, IPS, 144Hz,
                      Black</div>
                    <div class="product-price">
                      <h4>$2500.99</h4>
                    </div>
                  </div>
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fas fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="glide__slide">
                <div class="product">
                  <div class="product-header">
                    <img src="images/laptop/laptop1.png" class='small' alt="product">
                  </div>
                  <div class="product-footer">
                    <div class="description"><span>MSI</span> GAMING MAG GT76 TITAN Core i7, 16 GB RAM, 256 GB
                      SSD,
                      NVIDIA®
                      GeForce
                      GTX™ 1650 Ti, Black</div>
                    <div class="product-price">
                      <h4>$1099.99</h4>
                    </div>
                  </div>
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fas fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
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