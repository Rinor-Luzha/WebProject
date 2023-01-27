<?php
require_once "controllers/CartController.php";
require_once "controllers/ProductController.php";

$cartController = new CartController;
$prodController = new ProductController;

if (!isset($_SESSION['userid'])) {
    echo '<script>alert("You have to be logged in to enter this site.")</script>';
    return header('location:index.php');
}
if (!isset($_GET['id'])) {
    echo '<script>alert("Bad cart product id given ")</script>';
    return header('location:index.php?page=cart');
}
$product = $prodController->getProductById($_GET['id']);
if (isset($product['id'])) {
    $cartController->addProductToCart($product['id']);
}
return header('location:index.php?page=cart');
