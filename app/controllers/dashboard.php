<?php
class Dashboard extends Controller{
    private $data = [];
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->view->render("dashboard_view", $this->data);
    }
}
