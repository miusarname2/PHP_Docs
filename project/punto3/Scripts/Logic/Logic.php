<?php
$planetas=[array("nombre"=>"Sol","Habitado"=>"Deshabitado","Habitable"=>false),array("nombre"=>"Mercurio","Habitado"=>"Deshabitado","Habitable"=>true),array("nombre"=>"Venus","Habitado"=>"Deshabitado","Habitable"=>false),array("nombre"=>"Tierra","Habitado"=>"Deshabitado","Habitable"=>true),array("nombre"=>"Marte","Habitado"=>"Deshabitado","Habitable"=>true),array("nombre"=>"Jupiter","Habitado"=>"Deshabitado","Habitable"=>false),array("nombre"=>"Saturno","Habitado"=>"Deshabitado","Habitable"=>false),array("nombre"=>"Urano","Habitado"=>"Deshabitado","Habitable"=>false),array("nombre"=>"Neptuno","Habitado"=>"Deshabitado","Habitable"=>true)];

 if (is_numeric($_POST["Planet"]) ){
     $temp_toReturn=$planetas[intval($_POST["Planet"])]["nombre"];
     if ($temp_toReturn){
         header("location:../Views/Resultado.php?element=".$temp_toReturn."&id=".intval($_POST["Planet"]));
     }else{
         header("location:../Views/BadRequest.php");
     }
 }else{}

 if($_POST["consulta"]==1){

    //header("location:../../static/FiltPlanetsHabit.html?");
 }





