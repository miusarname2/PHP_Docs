<?php 
require "./vendor/autoload.php";
// Create Router instance
$router = new \Bramus\Router\Router();
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$router->get('academic_area/get', function() {
    $conect =  new \Apps\connect();
$res = $conect->con->prepare("SELECT * FROM academic_area");
try{
    $row = $res->execute();
}catch(\PDOException $e){
    print_r($e->getMessage());
}
// $res->execute();
$res=$res->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res);
});

$router->delete('academic_area/delete', function() {
    try{
    $connect = new \Apps\connect();
    $data= json_decode(file_get_contents('php://input'),true);
    $sql = "DELETE FROM academic_area WHERE id= :id";
    $stmt = $connect->con->prepare($sql);
    $stmt->bindParam(':id', $data['id']);
    $stmt->execute();
    }catch(\PDOException $e){
        print_r($e->getMessage());
    }
});

$router->post('academic_area/post', function() {
    try{
        $connect = new \Apps\connect();
        $data= json_decode(file_get_contents('php://input'),true);
        $sql = "INSERT INTO academic_area (id_area, id_staff,id_position,id_journey) VALUES (:id_area, :id_staff, :id_position, :id_journey)";
        $stmt = $connect->con->prepare($sql);
        $stmt->bindParam(':id_area', $data['id_area']);
        $stmt->bindParam(':id_staff', $data['id_staff']);
        $stmt->bindParam(':id_position', $data['id_position']);
        $stmt->bindParam(':id_journey', $data['id_journey']);
        $stmt->execute();
        print_r("Inserted");
    
    }catch(PDOException $e){
        echo $e->getMessage();
    }
});

$router->put('academic_area/put', function() {
    try{
    $connect = new \Apps\connect();
    $data= json_decode(file_get_contents('php://input'),true);
    $sql = "UPDATE academic_area SET id_area=:id_area, id_staff=:id_staff,id_position=:id_position,id_journey=:id_journey WHERE id=:id";
    $stmt = $connect->con->prepare($sql);
    $stmt->bindParam(':id', $data['id']);
    $stmt->bindParam(':id_area', $data['id_area']);
    $stmt->bindParam(':id_staff', $data['id_staff']);
    $stmt->bindParam(':id_position', $data['id_position']);
    $stmt->bindParam(':id_journey', $data['id_journey']);
    $stmt->execute();
    }catch(PDOException $e){
        echo $e->getMessage();
    }
});

// Tabla 2 


$router->get('admin_area/get', function() {
    $conect =  new \Apps\connect();
$res = $conect->con->prepare("SELECT * FROM admin_area");
try{
    $row = $res->execute();
}catch(\PDOException $e){
    print_r($e->getMessage());
}
// $res->execute();
$res=$res->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res);
});

$router->delete('admin_area/delete', function() {
    try{
    $connect = new \Apps\connect();
    $data= json_decode(file_get_contents('php://input'),true);
    $sql = "DELETE FROM admin_area WHERE id= :id";
    $stmt = $connect->con->prepare($sql);
    $stmt->bindParam(':id', $data['id']);
    $stmt->execute();
    }catch(\PDOException $e){
        print_r($e->getMessage());
    }
});

$router->post('admin_area/post', function() {
    try{
        $connect = new \Apps\connect();
        $data= json_decode(file_get_contents('php://input'),true);
        $sql = "INSERT INTO admin_area (id_area, id_staff,id_position,id_journey) VALUES (:id_area, :id_staff, :id_position, :id_journey)";
        $stmt = $connect->con->prepare($sql);
        $stmt->bindParam(':id_area', $data['id_area']);
        $stmt->bindParam(':id_staff', $data['id_staff']);
        $stmt->bindParam(':id_position', $data['id_position']);
        $stmt->bindParam(':id_journey', $data['id_journey']);
        $stmt->execute();
        print_r("Inserted");
    
    }catch(PDOException $e){
        echo $e->getMessage();
    }
});

$router->put('admin_area/put', function() {
    try{
    $connect = new \Apps\connect();
    $data= json_decode(file_get_contents('php://input'),true);
    $sql = "UPDATE admin_area SET id_area=:id_area, id_staff=:id_staff,id_position=:id_position,id_journey=:id_journey WHERE id=:id";
    $stmt = $connect->con->prepare($sql);
    $stmt->bindParam(':id', $data['id']);
    $stmt->bindParam(':id_area', $data['id_area']);
    $stmt->bindParam(':id_staff', $data['id_staff']);
    $stmt->bindParam(':id_position', $data['id_position']);
    $stmt->bindParam(':id_journey', $data['id_journey']);
    $stmt->execute();
    }catch(PDOException $e){
        echo $e->getMessage();
    }
});

//tabla 3 

$router->get('areas/get', function() {
    $conect =  new \Apps\connect();
$res = $conect->con->prepare("SELECT * FROM areas");
try{
    $row = $res->execute();
}catch(\PDOException $e){
    print_r($e->getMessage());
}
// $res->execute();
$res=$res->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res);
});

$router->delete('areas/delete', function() {
    try{
    $connect = new \Apps\connect();
    $data= json_decode(file_get_contents('php://input'),true);
    $sql = "DELETE FROM areas WHERE id= :id";
    $stmt = $connect->con->prepare($sql);
    $stmt->bindParam(':id', $data['id']);
    $stmt->execute();
    }catch(\PDOException $e){
        print_r($e->getMessage());
    }
});

$router->post('areas/post', function() {
    try{
        $connect = new \Apps\connect();
        $data= json_decode(file_get_contents('php://input'),true);
        $sql = "INSERT INTO areas (name_area) VALUES (:name_area)";
        $stmt = $connect->con->prepare($sql);
        $stmt->bindParam(':name_area', $data['name_area']);
        $stmt->execute();
        print_r("Inserted");
    
    }catch(PDOException $e){
        echo $e->getMessage();
    }
});

$router->put('areas/put', function() {
    try{
    $connect = new \Apps\connect();
    $data= json_decode(file_get_contents('php://input'),true);
    $sql = "UPDATE areas SET name_area=:name_area WHERE id=:id";
    $stmt = $connect->con->prepare($sql);
    $stmt->bindParam(':id', $data['id']);
    $stmt->bindParam(':name_area', $data['name_area']);
    $stmt->execute();
    }catch(PDOException $e){
        echo $e->getMessage();
    }
});

//tabla 4

$router->get("/camper", function() {
    $cox = new \Apps\connect();
        $res=$cox->con->prepare("SELECT * FROM cities");
        $res->execute();
        $res=$res->fetchAll(\PDO::FETCH_ASSOC);
        echo json_encode($res);
    });

    $router->put('/camper', function() {
        $_DATA=json_decode(file_get_contents("php://input"),true);
        $cox = new \Apps\connect();
        $stmt=$cox->con->prepare("UPDATE cities SET name_city = :NOMBRE WHERE id=:CEDULA");
        $stmt->bindValue(":NOMBRE",$_DATA["nom"]);
        $stmt->bindValue(":CEDULA",$_DATA["id"]);
        $stmt->execute();
        $stmt=$stmt->rowCount();//es para obtener el número de filas afectadas por la actualización
        echo json_encode($stmt);
    });
/* {
    "id":,
"nom": "Florida",
} */
    $router->delete("/camper", function(){
        $_DATA = json_decode(file_get_contents("php://input"), true);
        $cox = new \Apps\connect();
        $res = $cox->con->prepare("DELETE FROM cities WHERE id = :ID"); 
        $res->bindValue("ID", $_DATA["id"]);
        $res->execute();
        $res = $res->rowCount();//es para obtener el número de filas afectadas por la actualización
        echo json_encode($res);
    });
    
    $router->post("/camper", function(){
        $_DATA = json_decode(file_get_contents("php://input"), true); 
        $cox = new \Apps\connect();
        $res = $cox->con->prepare("INSERT INTO cities (name_city) VALUES (:NOMBRE)");
        $res->bindValue("NOMBRE", $_DATA["nom"]); 
        $res->execute();
        $resi=$res->rowCount(); 
        echo $resi;
    });
/* {
    "nom": "Florida",
    "r": 123
} */

// tabla 5

$router->get("/camper", function() {
    $cox = new \Apps\connect();
    $res=$cox->con->prepare("SELECT * FROM countries");
    $res->execute();
    $res=$res->fetchAll(\PDO::FETCH_ASSOC);
    echo json_encode($res);
});

$router->put('/camper', function() {
    $_DATA=json_decode(file_get_contents("php://input"),true);
    $cox = new \Apps\connect();
    $stmt=$cox->con->prepare("UPDATE countries SET name_country = :NOMBRE WHERE id=:CEDULA");
    $stmt->bindValue("NOMBRE",$_DATA["nom"]);
    $stmt->bindValue("CEDULA",$_DATA["id"]);
    $stmt->execute();
    $stmt=$stmt->rowCount();//es para obtener el número de filas afectadas por la actualización
    echo json_encode($stmt);
});
/* {
    "id": 4,
    "nom": "VENEZUELA"
} */

$router->delete("/camper", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $cox = new \Apps\connect();
    $res = $cox->con->prepare("DELETE FROM countries WHERE id = :ID"); 
    $res->bindValue("ID", $_DATA["id"]);
    $res->execute();
    $res = $res->rowCount();//es para obtener el número de filas afectadas por la actualización
    echo json_encode($res);
});

$router->post("/camper", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true); 
    $cox = new \Apps\connect();
    $res = $cox->con->prepare("INSERT INTO countries (name_country) VALUES (:NOMBRE)");
    $res->bindValue("NOMBRE", $_DATA["nom"]); 
    $res->execute();
    $resi=$res->rowCount(); 
    echo $resi;
});


// TABLA 6

$router->get("/campers", function() {
    $cox = new \Apps\connect();
    $res=$cox->con->prepare("SELECT * FROM campers");
    $res->execute();
    $res=$res->fetchAll(\PDO::FETCH_ASSOC);
    echo json_encode($res);
});

$router->put('/campers', function() {
    $_DATA=json_decode(file_get_contents("php://input"),true);
    $cox = new \Apps\connect();
    $res=$cox->con->prepare("UPDATE campers SET id_team_schedule = :id_team_schedule, id_route=:id_route,id_trainer= :id_trainer, id_psycologist= :id_psycologist, id_teacher = :id_teacher, id_level=:id_level, id_journey = :id_journey , id_staff= :id_staff   WHERE id=:CEDULA");
    $res->bindValue(":id_team_schedule",$_DATA["id_team_schedule"]);
    $res->bindValue(":id_route",$_DATA["id_route"]);
    $res->bindValue(":id_trainer",$_DATA["id_trainer"]);
    $res->bindValue(":id_psycologist",$_DATA["id_psycologist"]);
    $res->bindValue(":id_teacher",$_DATA["id_teacher"]);
    $res->bindValue(":id_level",$_DATA["id_level"]);
    $res->bindValue(":id_journey",$_DATA["id_journey"]);
    $res->bindValue(":id_staff",$_DATA["id_staff"]);
    $res->bindValue(":CEDULA",$_DATA["id"]);
    $res->execute();
    $res=$res->rowCount();//es para obtener el número de filas afectadas por la actualización
    echo json_encode($res);
});
/* {
    "id": 5,
    "nom": "tempranooo"
} */

$router->delete("/campers", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $cox = new \Apps\connect();
    $res = $cox->con->prepare("DELETE FROM campers WHERE id = :ID"); 
    $res->bindValue("ID", $_DATA["id"]);
    $res->execute();
    $res = $res->rowCount();//es para obtener el número de filas afectadas por la actualización
    echo json_encode($res);
});

$router->post("/campers", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true); 
    $cox = new \Apps\connect();
    $res = $cox->con->prepare("INSERT INTO campers (id_team_schedule, id_route,id_trainer, id_psycologist, id_teacher, id_level, id_journey,id_staff) VALUES (:id_team_schedule,:id_route,:id_trainer,:id_psycologist,:id_teacher,:id_level,:id_journey,:id_staff)");
    $res->bindValue(":id_team_schedule",$_DATA["id_team_schedule"]);
    $res->bindValue(":id_route",$_DATA["id_route"]);
    $res->bindValue(":id_trainer",$_DATA["id_trainer"]);
    $res->bindValue(":id_psycologist",$_DATA["id_psycologist"]);
    $res->bindValue(":id_teacher",$_DATA["id_teacher"]);
    $res->bindValue(":id_level",$_DATA["id_level"]);
    $res->bindValue(":id_journey",$_DATA["id_journey"]);
    $res->bindValue(":id_staff",$_DATA["id_staff"]);
    $res->execute();
    $resi=$res->rowCount(); 
    echo $resi;
});



// TABLA 7

$router->get("/chapters", function() {
    $cox = new \Apps\connect();
    $res=$cox->con->prepare("SELECT * FROM chapters");
    $res->execute();
    $res=$res->fetchAll(\PDO::FETCH_ASSOC);
    echo json_encode($res);
});

$router->put('/chapters', function() {
    $_DATA=json_decode(file_get_contents("php://input"),true);
    $cox = new \Apps\connect();
    $res=$cox->con->prepare("UPDATE chapters SET  id_thematic_units = :id_thematic_units,  name_chapter=:name_chapter, start_date= :start_date,  end_date= :end_date,  description = :description,  duration_days=:duration_days WHERE id=:CEDULA");
    $res->bindValue(":id_thematic_units",$_DATA[" id_thematic_units"]);
    $res->bindValue(":name_chapter",$_DATA[" name_chapter"]);
    $res->bindValue(":start_date",$_DATA[" start_date"]);
    $res->bindValue(":end_date",$_DATA[" end_date"]);
    $res->bindValue(":description",$_DATA[" description"]);
    $res->bindValue(":duration_days",$_DATA[" duration_days"]);
    $res->bindValue(":CEDULA",$_DATA["id"]);
    $res->execute();
    $res=$res->rowCount();//es para obtener el número de filas afectadas por la actualización
    echo json_encode($res);
});

$router->delete("/chapters", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $cox = new \Apps\connect();
    $res = $cox->con->prepare("DELETE FROM chapters WHERE id = :ID"); 
    $res->bindValue("ID", $_DATA["id"]);
    $res->execute();
    $res = $res->rowCount();//es para obtener el número de filas afectadas por la actualización
    echo json_encode($res);
});

$router->post("/chapters", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true); 
    $cox = new \Apps\connect();
    $res = $cox->con->prepare("INSERT INTO chapters ( id_thematic_units,  name_chapter, start_date,  end_date,  description,  duration_days) VALUES (:id_thematic_units,:name_chapter,:start_date,:end_date,:description,:duration_days)");
    $res->bindValue(":id_thematic_units",$_DATA[" id_thematic_units"]);
    $res->bindValue(":name_chapter",$_DATA[" name_chapter"]);
    $res->bindValue(":start_date",$_DATA[" start_date"]);
    $res->bindValue(":end_date",$_DATA[" end_date"]);
    $res->bindValue(":description",$_DATA[" description"]);
    $res->bindValue(":duration_days",$_DATA[" duration_days"]);
        $res->execute();
    $resi=$res->rowCount(); 
    echo $resi;
});



//tabla 8

$router->get("/contact_info", function() {
    $cox = new \Apps\connect();
    $res=$cox->con->prepare("SELECT * FROM contact_info");
    $res->execute();
    $res=$res->fetchAll(\PDO::FETCH_ASSOC);
    echo json_encode($res);
});

$router->put('/contact_info', function() {
    $_DATA=json_decode(file_get_contents("php://input"),true);
    $cox = new \Apps\connect();
    $res=$cox->con->prepare("UPDATE contact_info SET   id_staff = :id_staff,   whatsapp=:whatsapp,  instagram= :instagram,   linkedin= :linkedin,   email = :email,   address=:address,  cel_number = :cel_number   WHERE id=:CEDULA");
    $res->bindValue(":id_staff",$_DATA["id_staff"]);
    $res->bindValue(":whatsapp",$_DATA["whatsapp"]);
    $res->bindValue(":instagram",$_DATA["instagram"]);
    $res->bindValue(":linkedin",$_DATA["linkedin"]);
    $res->bindValue(":email",$_DATA["email"]);
    $res->bindValue(":address",$_DATA["address"]);
    $res->bindValue(":cel_number",$_DATA["cel_number"]);
    $res->bindValue(":CEDULA",$_DATA["id"]);
    $res->execute();
    $res=$res->rowCount();//es para obtener el número de filas afectadas por la actualización
    echo json_encode($res);
});

$router->delete("/contact_info", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $cox = new \Apps\connect();
    $res = $cox->con->prepare("DELETE FROM contact_info WHERE id = :ID"); 
    $res->bindValue("ID", $_DATA["id"]);
    $res->execute();
    $res = $res->rowCount();//es para obtener el número de filas afectadas por la actualización
    echo json_encode($res);
});

$router->post("/contact_info", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true); 
    $cox = new \Apps\connect();
    $res = $cox->con->prepare("INSERT INTO contact_info ( id_staff,  whatsapp, instagram,  linkedin,  email,  address,cel_number) VALUES (:id_staff,:whatsapp,:instagram,:linkedin,:email,:address,:cel_number)");
    $res->bindValue(":id_staff",$_DATA["id_staff"]);
    $res->bindValue(":whatsapp",$_DATA["whatsapp"]);
    $res->bindValue(":instagram",$_DATA["instagram"]);
    $res->bindValue(":linkedin",$_DATA["linkedin"]);
    $res->bindValue(":email",$_DATA["email"]);
    $res->bindValue(":address",$_DATA["address"]);
    $res->bindValue(":cel_number",$_DATA["cel_number"]);
    $res->execute();
    $resi=$res->rowCount(); 
    echo $resi;
});


//tabla 9


$router->get("/design_area", function() {
    $cox = new \Apps\connect();
    $res=$cox->con->prepare("SELECT * FROM design_area");
    $res->execute();
    $res=$res->fetchAll(\PDO::FETCH_ASSOC);
    echo json_encode($res);
});

$router->put('/design_area', function() {
    $_DATA=json_decode(file_get_contents("php://input"),true);
    $cox = new \Apps\connect();
    $res=$cox->con->prepare("UPDATE design_area SET  id_area = :id_area,  id_staff=:id_staff, id_position= :id_position,  id_journey= :id_journey WHERE id=:CEDULA");
    $res->bindValue(":id_area",$_DATA[" id_area"]);
    $res->bindValue(":id_staff",$_DATA[" id_staff"]);
    $res->bindValue(":id_position",$_DATA[" id_position"]);
    $res->bindValue(":id_journey",$_DATA[" id_journey"]);
    $res->bindValue(":CEDULA",$_DATA["id"]);
    $res->execute();
    $res=$res->rowCount();//es para obtener el número de filas afectadas por la actualización
    echo json_encode($res);
});

$router->delete("/design_area", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $cox = new \Apps\connect();
    $res = $cox->con->prepare("DELETE FROM design_area WHERE id = :ID"); 
    $res->bindValue("ID", $_DATA["id"]);
    $res->execute();
    $res = $res->rowCount();//es para obtener el número de filas afectadas por la actualización
    echo json_encode($res);
});

$router->post("/design_area", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true); 
    $cox = new \Apps\connect();
    $res = $cox->con->prepare("INSERT INTO design_area ( id_area,  id_staff, id_position,  id_journey,  description) VALUES (:id_area,:id_staff,:id_position,:id_journey)");
    $res->bindValue(":id_area",$_DATA[" id_area"]);
    $res->bindValue(":id_staff",$_DATA[" id_staff"]);
    $res->bindValue(":id_position",$_DATA[" id_position"]);
    $res->bindValue(":id_journey",$_DATA[" id_journey"]);
    $res->execute();
    $resi=$res->rowCount(); 
    echo $resi;
});


//tabla 10


$router->get("/emergency_contact", function() {
    $cox = new \Apps\connect();
    $res=$cox->con->prepare("SELECT * FROM emergency_contact");
    $res->execute();
    $res=$res->fetchAll(\PDO::FETCH_ASSOC);
    echo json_encode($res);
});

$router->put('/emergency_contact', function() {
    $_DATA=json_decode(file_get_contents("php://input"),true);
    $cox = new \Apps\connect();
    $res=$cox->con->prepare("UPDATE emergency_contact SET   id_staff = : id_staff,   cel_number=: cel_number,  relationship= : relationship,   full_name= : full_name, email=:email WHERE id=:CEDULA");
    $res->bindValue(":id_staff",$_DATA["  id_staff"]);
    $res->bindValue(":cel_number",$_DATA["  cel_number"]);
    $res->bindValue(":relationship",$_DATA["relationship"]);
    $res->bindValue(":full_name",$_DATA["  full_name"]);
    $res->bindValue(":email",$_DATA["email"]);
    $res->bindValue(":CEDULA",$_DATA["id"]);
    $res->execute();
    $res=$res->rowCount();//es para obtener el número de filas afectadas por la actualización
    echo json_encode($res);
});

$router->delete("/emergency_contact", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $cox = new \Apps\connect();
    $res = $cox->con->prepare("DELETE FROM emergency_contact WHERE id = :ID"); 
    $res->bindValue("ID", $_DATA["id"]);
    $res->execute();
    $res = $res->rowCount();//es para obtener el número de filas afectadas por la actualización
    echo json_encode($res);
});

$router->post("/emergency_contact", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true); 
    $cox = new \Apps\connect();
    $res = $cox->con->prepare("INSERT INTO emergency_contact ( id_staff,  cel_number, relationship,  full_name,  email) VALUES (:id_staff,:cel_number,:relationship,:full_name,:email)");
    $res->bindValue(":id_staff",$_DATA["  id_staff"]);
    $res->bindValue(":cel_number",$_DATA["  cel_number"]);
    $res->bindValue(":relationship",$_DATA["relationship"]);
    $res->bindValue(":full_name",$_DATA["  full_name"]);
    $res->bindValue(":email",$_DATA["email"]);
    $res->execute();
    $resi=$res->rowCount(); 
    echo $resi;
});

// Run it!
$router->run();