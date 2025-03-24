<?php

class Logout extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . "login?success=You have been logged out");
        exit;
    }
}
?>


