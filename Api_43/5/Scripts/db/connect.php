<?php 

namespace Apps;

class connect extends credentials{
    protected $con;
    function __construct(protected $dsn = "mysql", protected $port = 3306){
        try{
            $this->con=new \PDO( $this->dsn.":host=".$this->__get('host').";dbname=".$this->__get('dbname').";user=". $this->username.";password=".$this->__get('password').";port=". $this->port);
        }catch(\PDOException $e){
            print_r($e);
        }
    }
}