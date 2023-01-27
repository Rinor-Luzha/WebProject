<?php
require_once "database/DbConnect.php";
class UserController extends DbConnect
{
    private $db;
    public function __construct()
    {
        $conn = new DbConnect;
        $this->db = $conn->connectDB();
    }

    //CRUD

    public function readAllUsers()
    {
        // TODO: Admin only
        $query = $this->db->query('SELECT * from users');
        return $query->fetchAll();
    }

    private function validateIncomingUserData($request)
    {
        $name = $request['name'];
        $surname = $request['surname'];
        $gender = $request['gender'];
        $birthdate = $request['birthdate'];
        $email = $request['email'];
        $password = $request['password'];

        if (empty($name)) {
            return "Name is required";
        }
        if (empty($surname)) {
            return "Surname is required";
        }
        if (empty($gender)) {
            return "Gender is required";
        }
        if (empty($birthdate)) {
            return "Birthdate is required";
        }
        if (empty($email)) {
            return "Email is required";
        }
        $query = $this->db->query("SELECT * FROM users WHERE email='$email'");
        $userWithEmailExists = $query->fetch();
        if (isset($userWithEmailExists['email'])) {
            return "User with that email already exists.";
        }
        if (empty($password)) {
            return "Password is required";
        }
        if (strlen($name) < 2) {
            return "Name should have at least 2 characters";
        }
        if (strlen($surname) < 2) {
            return "Surname should have at least 2 characters";
        }
        if ($gender != 'M' && $gender != 'F') {
            return "Gender not given correctly.";
        }
        if (strlen($password) < 8) {
            return "Password should be at least 8 characters.";
        }
        if (preg_match('/[#?!@$%^&*\-_\\\/]/', $password) && preg_match('/[A-Z]/', $password)) {
            return "Password should contain at least one special character and uppercase letter.";
        }
    }

    public function insertUser($request)
    {

        $name = $request['name'];
        $surname = $request['surname'];
        $gender = $request['gender'];
        $birthdate = $request['birthdate'];
        $email = $request['email'];
        $password = $request['password'];
        $validationFailed = $this->validateIncomingUserData($request);
        // Insert only if we have no errors
        if (!isset($validationFailed)) {
            $password = md5($password); //encrypt the password 
            $query = $this->db->prepare("INSERT INTO users (name, surname, email, password, gender, birthdate, usertype) 
                                         VALUES('$name', '$surname','$email', '$password', '$gender','$birthdate','user')");
            $query->execute();
            return header('location:index.php');
        } else {
            echo "<script>alert('$validationFailed')</script>";
        }
    }


    public function editUser($id)
    {
        $query = $this->db->prepare('SELECT * from users WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function updateUser($request, $id)
    {
        $validationFailed = $this->validateIncomingUserData($request);
        if (!isset($validationFailed)) {
            if (isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'admin') {
                $usertype = $request['usertype'];
            }
            $usertype = 'user';
            $query = $this->db->prepare('UPDATE users SET name = :name,
                   surname = :surname, email = :email, password = :password
                   , gender = :gender, birthdate=:birthdate, usertype=:usertype
                    WHERE id = :id');
            $query->bindParam(':name', $request['name']);
            $query->bindParam(':surname', $request['surname']);
            $query->bindParam(':email', $request['email']);
            $query->bindParam(':password', $request['password']);
            $query->bindParam(':gender', $request['gender']);
            $query->bindParam(':birthdate', $request['birthdate']);
            $query->bindParam(':usertype', $usertype);
            $query->bindParam(':id', $id);
            $query->execute();
            return header('Location: index.php');
        } else {
            echo "<script>alert('$validationFailed')</script>";
            return;
        }
    }

    public function deleteUser($id)
    {
        $query = $this->db->prepare('DELETE from products WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("location:index.php");
    }
}