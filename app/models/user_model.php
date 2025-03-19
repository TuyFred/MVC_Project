<?php
class User_model extends Model{
    private $userId;
    private $phone;
    private $email;
    private $tables = ['users'];

    public function __construct(){
        parent::__construct();
    }

    public function save($tables , $data){
        return parent::save($this->tables[0],$data);
        
    }

    public function getAll(){

    }

    public function getOne(){

    }
}
?>

