<title>Users</title>
<link rel="stylesheet" href="css/footerStyle.css" />
<link rel="stylesheet" href="css/headersStyle.css" />
<link rel="stylesheet" href="css/productStyle.css" />
<link rel="stylesheet" href="css/usersAdminStyle.css" />

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
                        <th>Name</th>
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
                        echo '
                            <tr class="user-row">
                                <td class="user-field">
                                    <p class="user-field">' . $value['name'] . $value['surname'] . '</p>
                                </td>
                                <td class="user-field">
                                    <p class="user-field">' . $value['email'] . '</p>
                                </td>
                                <td class="user-field">
                                    <p class="user-field">' . (($value['gender'] == 'M') ? ('Male') : ('Female') ). '</p>
                                </td>
                                <td class="user-field">
                                    <p class="user-field">' . $value['birthdate'] . '</p>
                                </td>
                                <td class="user-field">
                                    <p class="user-field">' . $value['usertype'] . '</p>
                                </td>
                                <td class="action-column">
                                    <a class="edit-link" href="index.php?page=editUser&id=' . $value['id'] . '">Edit</a>
                                </td>
                                <td class="action-column">
                                    <a class="delete-link" href="index.php?page=deleteUser&id=' . $value['id'] . '">Delete</a>
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