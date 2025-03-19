<?php

require_once "src/controller.php";  // Include the Controller class
require_once "app/models/sign_model.php"; // Include model

class Register extends Controller {
    private $userModel;

    public function __construct() {
        parent::__construct(); // Call parent constructor to initialize database & view
        $this->userModel = new Sign_Model();
    }
    
    public function index() {
        // Load the registration form view
        $this->view("register_view");
    }

    public function store() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = trim($_POST["username"]);
            $email = trim($_POST["email"]);
            $password = trim($_POST["password"]);
            $phone = trim($_POST["phone"]);  // Get the phone number from POST data

            // Validate input fields
            if (empty($username) || empty($email) || empty($password) || empty($phone)) {
                header("Location: " . BASE_URL . "register?error=Please fill in all fields");
                exit;
            }

            // Check if email already exists using `getUserWithRole()`
            if ($this->userModel->getUserWithRole($email)) {
                header("Location: " . BASE_URL . "register?error=Email already in use");
                exit;
            }

            // Hash password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // User data
            $data = [
                "username" => $username,
                "email" => $email,
                "password" => $hashedPassword,
                "phone" => $phone  // Add phone number to data
            ];

            // Register user with the default role 'Customer'
            if ($this->userModel->register($data)) {
                header("Location: " . BASE_URL . "login?success=Registration successful! Please log in.");
                exit;
            } else {
                header("Location: " . BASE_URL . "register?error=Something went wrong. Please try again.");
                exit;
            }
        }
    }
}
?>
