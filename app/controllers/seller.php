<?php
class Seller extends Controller{
    private $data = [];
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->view->render("seller_view", $this->data);
    }
}
