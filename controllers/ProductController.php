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

    public function getProductById($id)
    {
        $query = $this->db->query("SELECT * FROM products WHERE id=$id");

        return $query->fetch();
    }

    public function getLastInsertedProduct()
    {
        $query = $this->db->query("SELECT * FROM products ORDER BY id DESC LIMIT 1");
        return $query->fetch();
    }


    public function readNewProducts()
    {
        $query = $this->db->query('SELECT * from products 
                                   JOIN productcategories ON products.id=productId
                                   JOIN categories ON categories.id=categoryId
                                   WHERE categories.category="new"');

        return $query->fetchAll();
    }
    public function getNewProductById($id)
    {
        $query = $this->db->query("SELECT * from products 
                                   JOIN productcategories ON products.id=productId
                                   JOIN categories ON categories.id=categoryId
                                   WHERE categories.category='new'
                                   AND products.id=$id");

        return $query->fetch();
    }

    public function readTrendingProducts()
    {
        $query = $this->db->query('SELECT * from products 
                                   JOIN productcategories ON products.id=productId
                                   JOIN categories ON categories.id=categoryId
                                   WHERE categories.category="trending"');

        return $query->fetchAll();
    }
    public function getTrendingProductById($id)
    {
        $query = $this->db->query("SELECT * from products 
                                   JOIN productcategories ON products.id=productId
                                   JOIN categories ON categories.id=categoryId
                                   WHERE categories.category='trending'
                                   AND products.id=$id");

        return $query->fetch();
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
        $query = $this->db->prepare('INSERT INTO products (description, price, imageuri, type, lastEditedBy)
        VALUES (:description, :price, :imageuri, :type,:lastEditedBy)');
        $query->bindParam(':description', $request['description']);
        $query->bindParam(':price', $request['price']);
        $query->bindParam(':imageuri', $request['imageuri']);
        $query->bindParam(':type', $request['type']);
        $query->bindParam(':lastEditedBy', $_SESSION['username']);

        $query->execute();

        $productInserted = $this->getLastInsertedProduct();
        if (isset($request['new'])) {
            $this->addProductToNew($productInserted['id']);
        }
        if (isset($request['trending'])) {
            $this->addProductToTrending($productInserted['id']);
        }
        return header('location:index.php');
    }
    private function addProductToNew($id)
    {
        $product = $this->getNewProductById($id);
        if (isset($product['productId'])) {
            return;
        }
        $query = $this->db->prepare("INSERT INTO productcategories (productId,categoryId) 
                                         VALUES('$id','1')");
        $query->execute();
    }
    private function addProductToTrending($id)
    {
        $product = $this->getTrendingProductById($id);
        if (isset($product['productId'])) {
            return;
        }
        $query = $this->db->prepare("INSERT INTO productcategories (productId,categoryId) 
                                         VALUES('$id','2')");
        $query->execute();
    }
    private function removeTrendingProduct($id)
    {
        $product = $this->getTrendingProductById($id);
        if (!isset($product['productId'])) {
            return;
        }
        $query = $this->db->prepare("DELETE FROM productcategories WHERE productId='$id' AND categoryId='2'");
        $query->execute();
    }
    private function removeNewProduct($id)
    {
        $product = $this->getNewProductById($id);
        if (!isset($product['productId'])) {
            return;
        }
        $query = $this->db->prepare("DELETE FROM productcategories WHERE productId='$id' AND categoryId='1'");
        $query->execute();
    }

    public function editProduct($id, $request)
    {
        if (isset($request['new'])) {
            $this->addProductToNew($id);
        } else {
            $this->removeNewProduct($id);
        }
        if (isset($request['trending'])) {
            $this->addProductToTrending($id);
        } else {
            $this->removeTrendingProduct($id);
        }
        $query = $this->db->prepare('UPDATE products SET description = :description,
        price = :price, imageuri = :imageuri, type = :type, lastEditedBy = :lastEditedBy WHERE id = :id');
        $query->bindParam(':description', $request['description']);
        $query->bindParam(':price', $request['price']);
        $query->bindParam(':imageuri', $request['imageuri']);
        $query->bindParam(':type', $request['type']);
        $query->bindParam(':lastEditedBy', $_SESSION['username']);
        $query->bindParam(':id', $id);
        $query->execute();
        return header('location:index.php');
    }


    public function deleteProduct($id)
    {
        $query = $this->db->prepare('DELETE from products WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();
    }
}
