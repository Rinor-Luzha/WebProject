<title>Desktops</title>
<link rel="stylesheet" href="css/footerStyle.css" />
<link rel="stylesheet" href="css/headersStyle.css" />
<link rel="stylesheet" href="css/productStyle.css" />
</head>

<body>
  <!-- Header -->
  <?php
  require_once "parts/header.php";
  require_once "controllers/ProductController.php";
  $prodController = new ProductController;
  ?>

  <main>
    <section class="products-section">
      <h2 class="title">Desktops</h2>
      <div class="product-center container">
        <?php
        $desktops = $prodController->readDesktops();
        foreach ($desktops as $key => $value) {
          echo ' 
              <div class="product">
                <div class="product-header">
                  <img src="' . $value["imageuri"] . '" class="small" alt="product">
                </div>
                <div class="product-footer">
                  <div class="description"><span>' . strstr($value['description'], ' ', true) . ' </span>' . substr($value['description'], strpos($value['description'], ' ') + 1) . '</div>
                  <div class="product-price">
                    <h4>$' . $value['price'] . '</h4>
                  </div>
                </div>
                <ul>
                  <li>
                    <a href="index.php?page=addCartProduct&id=' . $value['id'] . '">
                      <i class="fas fa-cart-plus"></i>
                    </a>
                  </li>';
          if (isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'admin') {
            echo '<li>
                                     <a href="index.php?page=editProduct&id=' . $value['id'] . '">
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
      </div>
    </section>

    <?php
    $laptopsCount = $prodController->readLaptopsCount()['total'];
    $monitorsCount = $prodController->readMonitorsCount()['total'];
    ?>
    <section class="category products_category">
      <h2 class="title">Other Products</h2>
      <div class="category-center container">
        <div class="category-box">
          <img src="./images/preview/laptops3.jpg" alt="" />
          <div class="content">
            <h2>Laptops</h2>
            <span><?php echo $laptopsCount ?> Products</span>
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

  </main>

  <!-- Footer -->
  <?php
  require_once "parts/footer.php";
  ?>
  <script src="./js/index.js"></script>
</body>

</html>