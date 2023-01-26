<?php
require_once "controllers/AuthController.php";
$authController = new AuthController;
?>
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
                    <?php
                    if (isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'admin') {
                        echo ' 
                        <li class="nav-item" id="dashboard">
                        <a href="#options" class="nav-link">Dashboard</a>
                        <ul>
                            <li>
                            <a href="index.php?page=products" class="nav-link">Products</a>
                            </li>
                            <li>
                            <a href="index.php?page=users" class="nav-link">Users</a>
                            </li>
                        </ul>
                        </li>';
                    }
                    ?>
                    <li class="nav-item">
                        <a href="index.php?page=home" class="nav-link">Home</a>
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
                        <a href="index.php?page=home" class="nav-link">Trending</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=home" class="nav-link">New</a>
                    </li>
                    <li class="nav-item mobile">
                        <a href="index.php?page=cart" class="nav-link">Shopping cart</a>
                    </li>
                    <li class="nav-item mobile">
                        <a href="index.php?page=account" class="nav-link">My Account</a>
                    </li>
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo '
                    <li class="nav-item">
                        <a href="?logout=1" class="nav-link">Logout</a>
                    </li>';
                    }
                    if (isset($_GET['logout'])) {
                        $authController->logoutUser();
                    }
                    ?>
                </ul>
            </div>

            <div class="nav-icons">
                <span><i class="fa-solid fa-cart-arrow-down"></i></span>
                <a href="index.php?page=login"><span><i class="fa-solid fa-user"></i></span></a>
            </div>

            <div class="collapse">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </nav>
</header>