<?php
class Database {
    public $host = "localhost";
    public $dbname = "22rp07730_fred";  // Ensure this matches your database
    public $username = "root";  // Default for XAMPP
    public $password = "Fred0727167240@";  // Default for XAMPP
    public $conn;

    public function __construct() {
        try {
            // Create a new PDO connection
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", 
                                  $this->username, 
                                  $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database Connection Failed: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->conn;
}
}
?>