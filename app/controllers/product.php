<?php
/* Controller: Product.php */
class Product {
    private $model;

    public function __construct($db) { // Accept $db parameter
        $this->model = new ProductModel($db); // Pass $db to ProductModel
    }

    public function addProduct() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';
            $price = $_POST['price'] ?? 0;
            $stock = $_POST['stock'] ?? 0;
            $image = $_POST['image'] ?? '';
            $category_id = $_POST['category_id'] ?? 0;
            $seller_id = $_POST['seller_id'] ?? 0;

            if ($this->model->insertProduct($name, $description, $price, $stock, $image, $category_id, $seller_id)) {
                header("Location: products.php?success=Product added successfully");
                exit();
            } else {
                echo "Error adding product.";
            }
        }
    }

    public function showProducts() {
        return $this->model->getProducts();
    }
}
?>
