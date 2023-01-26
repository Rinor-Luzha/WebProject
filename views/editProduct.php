<title>Edit Product</title>
<link rel="stylesheet" href="css/footerStyle.css" />
<link rel="stylesheet" href="css/headersStyle.css" />
<link rel="stylesheet" href="css/productStyle.css" />
<link rel="stylesheet" href="css/editPageStyle.css" />
</head>

<body>
    <!-- Header -->
    <?php
    require_once "parts/header.php";
    require_once "controllers/ProductController.php";
    $prodController = new ProductController;
    if (!isset($_SESSION['usertype']) || $_SESSION['usertype'] != 'admin') {
        echo '<script>alert("You don\'t have enough privileges to enter this site.")</script>';
        return header('location:index.php');
    }
    if (!isset($_GET['id'])) {
        echo '<script>alert("Bad product id given ")</script>';
        return header('location:index.php');
    }
    $product = $prodController->getProductById($_GET['id']);

    $productIsNew = $prodController->getNewProductById($_GET['id']);
    $productIsTrending = $prodController->getTrendingProductById($_GET['id']);

    if (isset($_POST['submit'])) {
        if (empty($_POST['imageuri'])) {
            $_POST['imageuri'] = $product['imageuri'];
        } else {
            if (strpos($_POST['imageuri'], 'png') !== false || strpos($_POST['imageuri'], 'jpg') !== false) {
                $_POST['imageuri'] = "images/" . $_POST['type'] . "/" . $_POST['imageuri'];
            } else {
                $_POST['imageuri'] = $product['imageuri'];
            }
        }
        $prodController->editProduct($_GET['id'], $_POST);
    }

    ?>

    <main>
        <section>
            <h2 class="title">Editing Product</h2>
            <div class="product-center">
                <form method="POST" id="submit" class="form">
                    <div class="container">
                        <div class="image">
                            <img src="<?php echo $product['imageuri'] ?>" alt="<?php echo $product['type'] ?>" class='product'>
                            <br>
                            <input name="imageuri" type="file" class="input" id="imageuri">
                        </div>
                        <div class=" product-details">
                            <div class="input-div">
                                <label for="description">
                                    <p class="input-text">Description</p>
                                </label>
                                <textarea required rows="4" name="description" placeholder="Enter description" type="text" class="input" id="description"><?php echo $product['description'] ?></textarea>
                            </div>
                            <div class="input-div">
                                <label for="price">
                                    <p class="input-text">Price</p>
                                </label>
                                <input required name="price" placeholder="Enter price" value="<?php echo $product['price'] ?>" type="number" step=".01" class="input" id="price">
                            </div>
                            <div class="input-div">
                                <label for="type">
                                    <p class="input-text">Type</p>
                                </label>
                                <select id="type" name="type">
                                    <option name="desktop" value="desktop" <?php if ($product['type'] == 'desktop') echo 'selected' ?>>Desktop</option>
                                    <option name="laptop" value="laptop" <?php if ($product['type'] == 'laptop') echo 'selected' ?>>Laptop</option>
                                    <option name="monitor" value="monitor" <?php if ($product['type'] == 'monitor') echo 'selected' ?>>Monitor</option>
                                </select>
                            </div>
                            <div class="input-div">
                                <p class="input-text">Categories</p>
                                <div class="categories">
                                    <div class="category">
                                        <input type="checkbox" id="new" name="new" value="new" <?php if (isset($productIsNew['id'])) echo 'checked' ?> />
                                        <label for="new">New</label>
                                    </div>
                                    <div class="category">
                                        <input type="checkbox" id="trending" name="trending" value="trending" <?php if (isset($productIsTrending['id'])) echo 'checked' ?> />
                                        <label for="trending">Trending</label>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if (isset($product['lastEditedBy'])) {
                                echo '
                                 <div class="last-editor">
                                      <p>Last edited by: ' . $product['lastEditedBy'] . ' </p>
                                 </div>';
                            }
                            ?>
                            <div class="submit-button">
                                <button name='submit' type="submit" id="edit">Save edit</button>
                            </div>
                        </div>
                    </div>
                </form>
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