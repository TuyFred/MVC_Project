<?php

require_once "src/controller.php";  // Include the Controller class
require_once "app/models/user_model.php"; // Include model

class Login extends Controller {
    private $userModel;

    public function __construct() {
        parent::__construct(); // Call parent constructor to initialize database & view
        $this->userModel = new Login_Model(); // Initialize model
    }

    // Display the login form
    public function index() {
        $this->view("login_view"); // Load the login view
    }

    // Handle the login request
    public function authenticate() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $email = trim($_POST["email"]);
            $password = trim($_POST["password"]);

            // Validate input fields
            if (empty($email) || empty($password)) {
                header("Location: " . BASE_URL . "login?error=Please fill in all fields");
                exit;
            }

            // Check user credentials using the model
            $user = $this->userModel->getUserWithRole($email);

            if ($user && password_verify($password, $user["password"])) {
                // Start session and store user information
                $_SESSION["user_id"] = $user["user_id"];
                $_SESSION["username"] = $user["username"];
                $_SESSION["role"] = $user["role_name"];

                // Redirect based on role
                if ($user["role_name"] === "Admin") {
                    header("Location: /admin/dashboard.php");
                } elseif ($user["role_name"] === "Customer") {
                    header("Location: /customer/cart.php");
                } elseif ($user["role_name"] === "Seller") {
                    header("Location: /seller/dashboard.php");
                }
                exit();
            } else {
                header("Location: " . BASE_URL . "login?error=Invalid email or password");
                exit;
            }
        }
    }
}
?>


