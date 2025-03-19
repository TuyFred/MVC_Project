<?php
require_once ('app/models/user_model.php');
class User extends Controller{
    private $data = [];
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        if(isset($_POST['submit'])){
            $user = new User_model();
           $this->data['resp']= $user->save(["email" => $_POST['email'], "phone" => $_POST['phone']]);
        }
           

        $this->view->render("user_view", $this->data);
    }
}