<?php
/**
 * Class which establishes a connection to the database
 */
require_once 'src/config.php';

class Model {
    public $db;

    public function __construct(){
      
        $this->db = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false]);
    }

    public function save($table, $data){
       try{
        $qb = "INSERT INTO ".$table."(";
        $num = count($data);
        $i = 0;
        $qm = "";
        $values = [];
       // return $qb;
        foreach($data as $column => $value){
            $qb .= $i>0 ? ",".$column : $column;
            $qm .= $i>0 ? ",?" : "?";
            array_push($values, $value);
            ++$i;
        }
        
        $qb .= ")values(".$qm.")";
        //return $qb;
        $stm = $this->db->prepare($qb);
        $stm->execute($values);
        
        return ["status" => "OK", "message" => "Data inserted succesfully", "id" => $this->db->lastInsertId()];
    }
    catch(PDOException $e){
        return ["status" => "FAIL", "message", "Something went wrong", "error" => $e->getMessage()];
        
    }

    }

    public function findAll($table){
        $q = "SELECT * FROM ".$table;
        $stm = $this->db->prepare($q);
        $stm->execute();
        return $stm->fetchAll();
    }

    public function findOne($table, $column, $value){
        $q = "SELECT * FROM ".$table." WHERE ".$column="?" ;
        $stm = $this->db->prepare($q);
        $stm->execute([$value]);
        return $stm->fetchAll();
    }
}
?>

