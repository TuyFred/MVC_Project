<?php
class Dashboard extends Controller {
    private $data = [];

    public function __construct() {
        parent::__construct();
        session_start();

        // Redirect if user is not logged i

        // Store user data for the view
     
    }

    public function index() {
        // Redirect unauthorized users if needed

        // Load the dashboard view with data
        $this->view->render("dashboard_view", $this->data);
    }
}
?>


