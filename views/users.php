<title>Users</title>
<link rel="stylesheet" href="css/footerStyle.css" />
<link rel="stylesheet" href="css/headersStyle.css" />
<link rel="stylesheet" href="css/productStyle.css" />

</head>

<body>
    <!-- Header -->
    <?php
    require_once "controllers/UserController.php";
    $userController = new UserController;
    if (!isset($_SESSION['usertype']) || $_SESSION['usertype'] != 'admin') {
        echo '<script>alert("You don\'t have enough privileges to enter this site.")</script>';
        return header('location:index.php');
    }
    require_once "parts/header.php";
    $users = $userController->readAllUsers();
    ?>

    <main>
        <h2 class="title">Users</h2>
        <section class="wrapper">
            <table class="styled-table">
                <thead>
                    <tr class="head-row">
                        <th>Username</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Birthdate</th>
                        <th>Usertype</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($users as $key => $value) {
                        echo ''; // tabla me (name + lastname), email, gender, birthdate, usertype, edit and delete button
                        // edit -> munesh me bo admin user and edit all his other fields

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