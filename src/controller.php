<?php

require_once "app/core/database.php"; // Include Database class
require_once "src/view.php";     // Include View class

class Controller {
    public $db;
    protected $view;

    public function __construct() {
        // Initialize the database connection
        $this->db = new Database();  // Create a new instance of Database class
        $this->view = new View();    // Initialize view object
    }

    // View rendering method
    public function view($view, $data = []) {
        require_once "app/views/" . $view . ".php";
    }
}

?>

