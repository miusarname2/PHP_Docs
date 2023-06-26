<?php 
require "./vendor/autoload.php";
// Create Router instance
$router = new \Bramus\Router\Router();
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$router->get('/get', function() {
    $conect =  new \Apps\connect();
$res = $conect->con->prepare("SELECT * FROM tb_camper");
try{
    $row = $res->execute();
}catch(\PDOException $e){
    print_r($e->getMessage());
}
// $res->execute();
$res=$res->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res);
});

$router->delete('/delete', function() {
    try{
    $connect = new \Apps\connect();
    $data= json_decode(file_get_contents('php://input'),true);
    $sql = "DELETE FROM tb_camper WHERE id= :id";
    $stmt = $connect->con->prepare($sql);
    $stmt->bindParam(':id', $data['id']);
    $stmt->execute();
    }catch(\PDOException $e){
        print_r($e->getMessage());
    }
});

$router->post('/post', function() {
    try{
        $connect = new \Apps\connect();
        $data= json_decode(file_get_contents('php://input'),true);
        $sql = "INSERT INTO tb_camper (nombre, edad) VALUES (:nombre, :edad)";
        $stmt = $connect->con->prepare($sql);
        $stmt->bindParam(':nombre', $data['nombre']);
        $stmt->bindParam(':edad', $data['edad']);
        $stmt->execute();
        print_r("Inserted");
    
    }catch(PDOException $e){
        echo $e->getMessage();
    }
});

$router->put('/put', function() {
    try{
    $connect = new \Apps\connect();
    $data= json_decode(file_get_contents('php://input'),true);
    $sql = "UPDATE tb_camper SET nombre=:nombre, edad=:edad WHERE id=:id";
    $stmt = $connect->con->prepare($sql);
    $stmt->bindParam(':id', $data['id']);
    $stmt->bindParam(':nombre', $data['nombre']);
    $stmt->bindParam(':edad', $data['edad']);
    $stmt->execute();
    }catch(PDOException $e){
        echo $e->getMessage();
    }
});

// Run it!
$router->run();