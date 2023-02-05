<?php
require_once "controllers/UserController.php";
$userController = new UserController;
if (!isset($_SESSION['usertype']) || $_SESSION['usertype'] != 'admin') {
    echo '<script>alert("You don\'t have enough privileges to enter this site.")</script>';
    return header('location:index.php');
}
if (!isset($_GET['id'])) {
    echo '<script>alert("Bad user id given ")</script>';
    return header('location:index.php?page=users');
}
$user = $userController->getUserById($_GET['id']);

if (isset($user['id'])) {
    $userController->deleteUser($user['id']);
}
return header('location:index.php?page=users');
