<?php
require_once "database/DbConnect.php";
class CartController extends DbConnect
{
    private $db;

    public function __construct()
    {
        $conn = new DbConnect;
        $this->db = $conn->connectDB();
    }


    public function getCartProducts()
    {
        if (!isset($_SESSION['userid'])) {
            return header('location:index.php');
        }
        $userId = $_SESSION['userid'];

        $query = $this->db->query("SELECT DISTINCT p.id as productId, p.imageuri, p.type, p.description, p.price, up.userId,
                                      (SELECT COUNT(up1.id) FROM userproducts up1 WHERE up1.userId = $userId AND up1.productId = p.id) as total,
                                      (SELECT MAX(up2.id) FROM userproducts up2 WHERE up2.userId = $userId AND up2.productId = p.id) as id
                                   FROM products p
                                   JOIN userproducts up ON up.userId = $userId AND up.productId = p.id");

        return $query->fetchAll();
    }

    public function getProductById($id)
    {
        $query = $this->db->query("SELECT * FROM userproducts WHERE id=$id");

        return $query->fetch();
    }

    public function addProductToCart($id)
    {
        if (isset($_SESSION['userid'])) {
            $userId = $_SESSION['userid'];
        }
        echo 'HELLOOOO';
        var_dump($userId);
        var_dump($id);

        $query = $this->db->prepare("INSERT INTO userproducts(userId,productId) VALUES ($userId,$id)");
        $query->execute();
    }
    public function deleteProductFromCart($id)
    {
        $query = $this->db->prepare('DELETE FROM userproducts WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();
    }
}
