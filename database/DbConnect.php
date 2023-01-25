<?php
class DbConnect
{
    private $host = 'localhost';
    private $dbname = 'polar';
    private $username = 'root';
    private $password = '';
    private $conn = null;
    public function connectDB()
    {
        try {
            $this->conn = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) . "<br/>";
            $this->conn->setAttribute(PDO::FETCH_BOUND, PDO::FETCH_BOTH);
            return $this->conn;
        } catch (PDOException $exc) {
            die("Lidhja me bazën e të dhënave {$this->dbname} nuk mund të bëhej: " . $exc->getMessage());
        }
    }
}
