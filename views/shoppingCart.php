<title>Shoppng Cart</title>
<link rel="stylesheet" href="css/footerStyle.css" />
<link rel="stylesheet" href="css/headersStyle.css" />
<link rel="stylesheet" href="css/productStyle.css" />
<link rel="stylesheet" href="css/shoppingCartStyle.css" />

</head>

<body>
    <!-- Header -->
    <?php
    require_once "controllers/CartController.php";
    $cartController = new CartController;
    $products = $cartController->getCartProducts();
    if (count($products) == 0) {
        echo '<script>alert("No products in cart!")</script>';
        return header("location:index.php");
    }
    require_once "parts/header.php";

    ?>

    <main>
        <h2 class="title">Your Shoppng Cart</h2>
        <section class="wrapper">
            <table class="styled-table">
                <thead>
                    <tr class="head-row">
                        <th>Image</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Add</th>
                        <th>Remove</th>
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
                                    <td class="price">
                                        <p class="price-field">$' . $value['price'] . '</p>
                                    </td>
                                    <td class="total">
                                        <p class="total-field">x' . $value['total'] . '</p>
                                    </td>
                                    <td class="action-column">
                                        <a class="add-link" href="index.php?page=addCartProduct&id=' . $value['productId'] . '">Add</a>
                                    </td>
                                    <td class="action-column">
                                        <a class="delete-link" href="index.php?page=deleteCartProduct&id=' . $value['id'] . '">Remove</a>
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