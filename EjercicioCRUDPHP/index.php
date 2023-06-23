<?php
require "./vendor/autoload.php";

$router = new \Bramus\Router\Router();

$router->get("/bebe",function(){
     try{
         $_ORIGIN= new Connection\Connection("https://6480fa30f061e6ec4d4a21b7.mockapi.io/Example");
         print_r($_ORIGIN->getData());
     }catch(\Throwable $e){
        print_r($e->getMessage());
    }
});

$router->post("/bebe", function() {
    $_DATA = empty(file_get_contents('php://input')) ? json_encode(["Message"=> "Not found"]) : json_decode(file_get_contents('php://input'),true);
    try{
        $_ORIGIN= new Connection\Connection("https://6480fa30f061e6ec4d4a21b7.mockapi.io/Example");
        try{
            print_r($_ORIGIN->postData($_DATA));
        }catch(\Throwable $e){
            print_r($e->getMessage());
        }
    }catch(\Throwable $e){
       print_r($e->getMessage());
   }
    
});
$router->put("/bebe", function() { echo "hola mundoi"; });
$router->delete("/bebe", function() { 
    
});




$router->run();