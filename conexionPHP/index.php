<?php 
require "./vendor/autoload.php";
// Create Router instance
$router = new \Bramus\Router\Router();

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

});

$router->post('/post', function() {
    $connect = new \Apps\connect();
    $data = [
        'name' => 'John Doe',
        'email' => 'johndoe@example.com',
        'password' => '123456',
    ];
    $sql = "INSERT INTO tb_camper (name, email, password) VALUES (:name, :email, :password)";
    $stmt = $connect->with->prepare($sql);
    $stmt->bindParam(':name', $data['name']);
    $stmt->bindParam(':email', $data['email']);
    $stmt->bindParam(':password', $data['password']);
    $stmt->execute();
});

// Run it!
$router->run();