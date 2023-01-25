<?php
require_once "database/DbConnect.php";
class ProductController extends DbConnect
{
    private $db;

    public function __construct()
    {
        $conn = new DbConnect;
        $this->db = $conn->connectDB();
    }

    //CRUD

    public function readAllProducts()
    {
        $query = $this->db->query('SELECT * from products');

        return $query->fetchAll();
    }

    public function readNewProducts()
    {
        $query = $this->db->query('SELECT * from products 
                                   JOIN productcategories ON products.id=productId
                                   JOIN categories ON categories.id=categoryId
                                   WHERE categories.category="new"');

        return $query->fetchAll();
    }

    public function readTrendingProducts()
    {
        $query = $this->db->query('SELECT * from products 
                                   JOIN productcategories ON products.id=productId
                                   JOIN categories ON categories.id=categoryId
                                   WHERE categories.category="trending"');

        return $query->fetchAll();
    }

    public function readLaptops()
    {
        $query = $this->db->query('SELECT * from products 
                                   WHERE type="laptop"');
        return $query->fetchAll();
    }

    public function readLaptopsCount()
    {
        $query = $this->db->query('SELECT COUNT(id) as total from products 
                                   WHERE type="laptop"');
        return $query->fetch();
    }

    public function readDesktops()
    {
        $query = $this->db->query('SELECT * from products 
                                   WHERE type="desktop"');
        return $query->fetchAll();
    }

    public function readDesktopsCount()
    {
        $query = $this->db->query('SELECT COUNT(id) as total from products 
                                   WHERE type="desktop"');
        return $query->fetch();
    }


    public function readMonitors()
    {
        $query = $this->db->query('SELECT * from products 
                                   WHERE type="monitor"');
        return $query->fetchAll();
    }

    public function readMonitorsCount()
    {
        $query = $this->db->query('SELECT COUNT(id) as total from products 
                                   WHERE type="monitor"');
        return $query->fetch();
    }

    public function readBanners()
    {
        $query = $this->db->query('SELECT * from banners');
        return $query->fetchAll();
    }

    public function insertProduct($request)
    {
        $query = $this->db->prepare('INSERT INTO products (description, price, imageuri, type)
        VALUES (:description, :price, :imageuri, :type)');

        $query->bindParam(':description', $request['description']);
        $query->bindParam(':price', $request['price']);
        $query->bindParam(':imageuri', $request['imageuri']);
        $query->bindParam(':type', $request['type']);
        $query->execute();

        return header('Location: index.php');
    }

    public function editProduct($id)
    {
        $query = $this->db->prepare('SELECT * from products WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id)
    {
        $query = $this->db->prepare('UPDATE products SET description = :description,
        price = :price, imageuri = :imageuri, type = :type WHERE id = :id');
        $query->bindParam(':description', $request['description']);
        $query->bindParam(':price', $request['price']);
        $query->bindParam(':imageuri', $request['imageuri']);
        $query->bindParam(':type', $request['type']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: index.php');
    }

    public function deleteProduct($id)
    {
        $query = $this->db->prepare('DELETE from products WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: index.php");
    }
}
