<?php
// controllers/category.php

require_once 'models/category_model.php';


class CategoryController {
    private $categoryModel;

    public function __construct() {
        global $pdo;
        $this->categoryModel = new CategoryModel($pdo);
    }

    // Method for creating a new category
    public function createCategory() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get the category name from the POST request
            $category_name = $_POST['category_name'];

            // Add the category to the database
            $result = $this->categoryModel->addCategory($category_name);
            $message = $result ? "Category added successfully!" : "Failed to add category.";

            // Retrieve updated list of categories
            $categories = $this->categoryModel->getAllCategories();

            // Load the view
            require 'views/createcategory_view.php';
        } else {
            // Retrieve all categories for the view
            $categories = $this->categoryModel->getAllCategories();
            require 'views/createcategory_view.php';
        }
    }
}
?>
