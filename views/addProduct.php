<title>Add Product</title>
<link rel="stylesheet" href="css/footerStyle.css" />
<link rel="stylesheet" href="css/headersStyle.css" />
<link rel="stylesheet" href="css/productStyle.css" />
<link rel="stylesheet" href="css/editPageStyle.css" />

</head>

<body>
    <!-- Header -->
    <?php
    require_once "controllers/ProductController.php";
    $prodController = new ProductController;
    if (!isset($_SESSION['usertype']) || $_SESSION['usertype'] != 'admin') {
        echo '<script>alert("You don\'t have enough privileges to enter this site.")</script>';
        return header('location:index.php');
    }
    if (isset($_POST['submit'])) {
        if (isset($_POST['imageuri']) && !empty($_POST['imageuri'])) {
            $_POST['imageuri'] = "images/" . $_POST['type'] . "/" . $_POST['imageuri'];
        } else {
            $_POST['imageuri'] = "";
        }
        $prodController->insertProduct($_POST);
    }
    require_once "parts/header.php";

    ?>

    <main>
        <section>
            <h2 class="title">Adding Product</h2>
            <div class="product-center">
                <form method="POST" id="submit" class="form">
                    <div class="container">
                        <div class="image">
                            <br>
                            <input required name="imageuri" type="file" class="input" id="imageuri">
                        </div>
                        <div class=" product-details">
                            <div class="input-div">
                                <label for="description">
                                    <p class="input-text">Description</p>
                                </label>
                                <textarea required rows="4" name="description" placeholder="Enter description" type="text" class="input" id="description"></textarea>
                            </div>
                            <div class="input-div">
                                <label for="price">
                                    <p class="input-text">Price</p>
                                </label>
                                <input required name="price" placeholder="Enter price" type="number" step=".01" class="input" id="price">
                            </div>
                            <div class="input-div">
                                <label for="type">
                                    <p class="input-text">Type</p>
                                </label>
                                <select id="type" name="type">
                                    <option name="desktop" value="desktop" selected>Desktop</option>
                                    <option name="laptop" value="laptop">Laptop</option>
                                    <option name="monitor" value="monitor">Monitor</option>
                                </select>
                            </div>
                            <div class="input-div">
                                <p class="input-text">Categories</p>
                                <div class="categories">
                                    <div class="category">
                                        <input type="checkbox" id="new" name="new" value="new" />
                                        <label for="new">New</label>
                                    </div>
                                    <div class="category">
                                        <input type="checkbox" id="trending" name="trending" value="trending" />
                                        <label for="trending">Trending</label>
                                    </div>
                                </div>
                            </div>
                            <button class="add-button" name="submit">
                                <i class="icon fa fa-plus"></i>
                                <span>Add Product</span>
                            </button>
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