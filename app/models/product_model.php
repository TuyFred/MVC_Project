<?php
/* Model: ProductModel.php */
class ProductModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function insertProduct($name, $description, $price, $stock, $image, $category_id, $seller_id) {
        $query = "INSERT INTO Products (name, description, price, stock, image, category_id, seller_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssdissi", $name, $description, $price, $stock, $image, $category_id, $seller_id);
        return $stmt->execute();
    }

    public function getProducts() {
        $query = "SELECT * FROM Products";
        $result = $this->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>




