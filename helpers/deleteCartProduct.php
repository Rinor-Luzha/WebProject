<?php
require_once "controllers/CartController.php";
$cartController = new CartController;
if (!isset($_SESSION['userid'])) {
    echo '<script>alert("You have to be logged in to enter this site.")</script>';
    return header('location:index.php');
}
if (!isset($_GET['id'])) {
    echo '<script>alert("Bad cart product id given ")</script>';
    return header('location:index.php?page=cart');
}
$product = $cartController->getProductById($_GET['id']);

if (isset($product['id'])) {
    $cartController->deleteProductFromCart($product['id']);
}
return header('location:index.php?page=cart');
