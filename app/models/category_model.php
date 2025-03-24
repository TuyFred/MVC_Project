<?php
// models/category_model.php

class CategoryModel {
    private $db;

    public function __construct($pdo) {
        $this->db = $pdo;
    }

    // Add a new category
    public function addCategory($category_name) {
        $sql = "INSERT INTO Categories (category_name) VALUES (:category_name)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute(['category_name' => $category_name]);
    }

    // Retrieve all categories
    public function getAllCategories() {
        $stmt = $this->db->query("SELECT * FROM Categories");
        return $stmt->fetchAll();
    }
}
?>

