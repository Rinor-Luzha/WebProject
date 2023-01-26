<title>Edit Product</title>
<link rel="stylesheet" href="css/footerStyle.css" />
<link rel="stylesheet" href="css/headersStyle.css" />
<link rel="stylesheet" href="css/productStyle.css" />
<link rel="stylesheet" href="css/productsAdminStyle.css" />

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
    $products = $prodController->readAllProducts();

    ?>

    <main>
        <h2 class="title">Products</h2>
        <section class="wrapper">
            <a href="index.php?page=addProduct">
                <div class="add-button">

                    <i class="icon fa fa-plus"></i>
                    <span>Add Product</span>
                </div>
            </a>
            <table class="styled-table">
                <thead>
                    <tr class="head-row">
                        <th>Image</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($products as $key => $value) {
                        echo '
                                <tr class="product-row">
                                    <td class="product-image">
                                        <img class="product-img" src="' . $value['imageuri'] . '" alt="' . $value['type'] . '">
                                    </td>
                                    <td class="product-description">
                                        <p class="product-description-field">' . $value['description'] . '</p>
                                    </td>
                                    <td class="action-column">
                                        <a class="edit-link" href="index.php?page=editProduct&id=' . $value['id'] . '">Edit</a>
                                    </td>
                                    <td class="action-column">
                                        <a class="delete-link" href="index.php?page=deleteProduct&id=' . $value['id'] . '">Delete</a>
                                    </td>
                                </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>

    <!-- Footer -->
    <?php
    require_once "parts/footer.php";
    ?>
    <script src="./js/index.js"></script>
</body>

</html>