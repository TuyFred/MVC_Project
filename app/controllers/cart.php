<?php
class Cart extends Controller{
    private $data = [];
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->view->render("cart_view", $this->data);
    }
}
