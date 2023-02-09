<title>My account</title>
<link rel="stylesheet" href="css/footerStyle.css" />
<link rel="stylesheet" href="css/headersStyle.css" />
<link rel="stylesheet" href="css/productStyle.css" />
<link rel="stylesheet" href="css/editPageStyle.css" />
</head>

<body>
    <?php
    require_once "controllers/UserController.php";
    $userController = new UserController;

    if (!isset($_SESSION['userid'])) {
        echo '<script>alert("Bad user id given ")</script>';
        return header('location:views/index.php');
    }
    $user = $userController->getUserById($_SESSION['userid']);
    
    if (isset($_POST['submit'])) {
        $_POST['usertype'] = $user['usertype'];
        $userController->editUser($_SESSION['userid'], $_POST);

    }
    require_once "parts/header.php";
    ?>

<main>
        <section>
            <h2 class="title">Account</h2>
            <div class="product-center">
                <form method="POST" id="submit" class="form">
                    <div class="container">
                        <div class=" product-details">
                            <div class="input-div">
                                <label for="name">
                                    <p class="input-text">Name</p>
                                </label>
                                <input type="text" required name="name" placeholder="Enter name" class="input" id="name" value="<?php echo $user['name'] ?>">
                            </div>
                            <div class="input-div">
                                <label for="surname">
                                    <p class="input-text">Surname</p>
                                </label>
                                <input type="text" required name="surname" placeholder="Enter surname" class="input" id="surname" value="<?php echo $user['surname'] ?>">
                            </div>
                            <div class="input-div">
                                <label for="email">
                                    <p class="input-text">Email</p>
                                </label>
                                <input type="text" required name="email" placeholder="Enter email" class="input" id="email" value="<?php echo $user['email'] ?>">
                            </div>
                            <div class="input-div">
                                <label for="email">
                                    <p class="input-text">Birth date</p>
                                </label>
                                <input type="date" required name="birthdate" placeholder="Enter birthdate" class="input" id="birthdate" value="<?php echo $user['birthdate'] ?>">
                            </div>
                            <div class="input-div">
                                <label>
                                    <p class="input-text">Gender</p>
                                </label>
                                <div class="gender-wrapper">
                                        <div class="radio-option">
                                            <input type="radio" name="gender"
                                            <?php if (isset($user['gender']) && $user['gender']=="F") echo "checked";?>
                                            value="F">Female
                                        </div>
                                        <div class="radio-option">
                                            <input type="radio" name="gender"
                                            <?php if (isset($user['gender']) && $user['gender']=="M") echo "checked";?>
                                            value="M">Male
                                        </div>
                                </div>
                            </div>
                            <?php
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