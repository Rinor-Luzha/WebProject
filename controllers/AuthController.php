<?php
require_once "database/DbConnect.php";
class AuthController extends DbConnect
{
    private $db;
    public function __construct()
    {
        $conn = new DbConnect;
        $this->db = $conn->connectDB();
    }

    //CRUD
    public function loginUser($request)
    {
        $email = $request['email'];
        $password = $request['password'];

        if (empty($email)) {
            echo '<script>alert("Email is required")</script>';
            return;
        }
        if (empty($password)) {
            echo '<script>alert("Password is required")</script>';
            return;
        }
        var_dump($password);
        $password = md5($password);
        $query = $this->db->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
        $userExists = $query->fetch();
        var_dump($userExists);
        var_dump($password);
        var_dump($email);

        if (isset($userExists['email'])) { // user found
            // check if user is admin 
            if ($userExists['usertype'] == 'admin') {
                $_SESSION['usertype'] = 'admin';
            } else {
                $_SESSION['usertype'] = 'user';
            }
            $name = $userExists['name'];
            $surname = $userExists['surname'];
            $_SESSION['username'] = "$name $surname";
            $_SESSION['userid'] = $userExists['id'];
            return header('location:index.php');
        } else {
            echo '<script>alert("Wrong username/password combination")</script>';
            return;
        }
    }

    public function logoutUser()
    {
        session_destroy();
        header("location:index.php");
    }
}
