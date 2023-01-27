<?php
require_once "controllers/ProductController.php";
$prodController = new ProductController;
if (!isset($_SESSION['usertype']) || $_SESSION['usertype'] != 'admin') {
    echo '<script>alert("You don\'t have enough privileges to enter this site.")</script>';
    return header('location:index.php');
}
if (!isset($_GET['id'])) {
    echo '<script>alert("Bad product id given ")</script>';
    return header('location:index.php?page=products');
}
$product = $prodController->getProductById($_GET['id']);

if (isset($product['id'])) {
    $prodController->deleteProduct($product['id']);
}
return header('location:index.php?page=products');
