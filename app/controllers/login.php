<?php

require_once "src/controller.php";  // Include the Controller class
require_once "app/models/login_model.php"; // Include model

class Login extends Controller {
    private $userModel;

    public function __construct() {
        parent::__construct(); // Call parent constructor to initialize database & view
        $this->userModel = new Login_Model(); // Initialize model
    }

    // Load the login page
    public function index() {
        $this->view("login_view"); // Load the login view
    }

    // If a `login()` method is required, make it redirect to `index()`
    public function login() {
        $this->index(); // Redirect to login page
    }

    // Handle the login request
    public function authenticate() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            session_start(); // Ensure session is started

            $email = filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL);
            $password = trim($_POST["password"]);

            // Validate input fields
            if (!$email || empty($password)) {
                header("Location: " . BASE_URL . "login?error=Please fill in all fields");
                exit;
            }

            // Check user credentials using the model
            $user = $this->userModel->getUserWithRole($email);

            if ($user && password_verify($password, $user["password"])) {
                // Store user session
                $_SESSION["user_id"] = $user["user_id"];
                $_SESSION["username"] = $user["username"];
                $_SESSION["role"] = $user["role_name"];

                // Redirect based on role
                switch ($user["role_name"]) {
                    case "Admin":
                        header("Location: " . BASE_URL . "dashboard.php");
                        break;
                    case "Customer":
                        header("Location: " . BASE_URL . "cart.php");
                        break;
                    case "Seller":
                        header("Location: " . BASE_URL . "dashboard.php");
                        break;
                    default:
                        header("Location: " . BASE_URL . "login?error=Unauthorized access");
                        exit;
                }
                exit();
            } else {
                header("Location: " . BASE_URL . "login?error=Invalid email or password");
                exit();
            }
        }
    }
}
?>

