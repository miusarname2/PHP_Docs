<?php

require "./vendor/autoload.php";

$router = new \Bramus\Router\Router();
// new \App\Cliente();
// new \App\compra();

$router->get("/bebe",function(){
    echo "hola mundoi";
});

$router->post("/bebe", function() {
    $_DATA = empty(file_get_contents('php://input')) ? json_encode(["Message"=> "Not found"]) : json_decode(file_get_contents('php://input'),true);    
    print_r($_DATA);
});
$router->put("/bebe", function() { echo "hola mundoi"; });
$router->delete("/bebe", function() { echo "hola mundoi"; });
$router->patch("/bebe", function() { echo "hola mundoi"; });

$router->run();
