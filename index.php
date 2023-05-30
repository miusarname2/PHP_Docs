<?php

//? funciones de salida en PHP

echo "Texto a imprimir";//* <- Esto imprimira <code> Texto a imprimir </code>

$texto="MUndo";
//printf("Hola %s",$texto); //* Esto imprimira <code> Hola MUndo </code>

$mensaje = sprintf("Hola %s",$texto); // Basicamente retorna a la variable  "Hola MUndo"
echo $mensaje;  //* Esto imprimira <code> Hola MUndo </code>

//? Variables y constantes

// Declarar una variable númerica 
$edad = 25;

// Declarar una variable de texto 
$nombre = "JUan";

// Declarar una variable booleana
$es_valido =  true;
echo  var_dump($nombre);

//! Definicion de constante a la "antigua"

// Declarar constante numerica
define("Pi",3.1416180);

// Declarar una constante de texto 
define("SALUDO","Hola mundo");

//Declarar una constante boolean
define("ES_VALIDO",true);

//o "nueva" forma

const texto = "TEzto";

//todo Tipos de datos

// Bolean
$logIn= true;
var_dump($logIn);

// Int
$numero = 1;
var_dump($numero);

//Floats
$float = 1.02;
var_dump($float);

//Str
$cadena = "Juan";
var_dump($cadena);


//? Número y operadores

$numero1=20;
$numero2=30;
$numero3=30;
$numero4="30";

//* Operador mayor que $numero2
var_dump($numero1 > $numero2);
echo "<br/>";

//* Operador menor que $numero2
var_dump($numero1 < $numero2);
echo "<br/>";

//* Operador mayor o igual que $numero2
var_dump($numero1 >= $numero2);
echo "<br/>";

//* Operador menor o igual que $numero2
var_dump($numero1 <= $numero2);
echo "<br/>";

//* Operador igual a $numero3
var_dump($numero2 == $numero3);
echo "<br/>";

//* Operador igual a $numero3
var_dump($numero2 == $numero4);
echo "<br/>";

//* Operador estrictamente igual a $numero4
var_dump($numero2 === $numero4);
echo "<br/>";

//Un integer menor que, igual a, o mayor que cero cuando $a es respectivamente menor que, igual a, o mayor que $b.
var_dump($a <=> $b);
echo "<br/>";


//todo Ejercicio Largo...

$nombreCliente = "Campers Campuslands";

//conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

//Eliminar espacios en blanco 
$texto = trim($nombreCliente);
echo strlen($nombreCliente);

//Convertirlo a mayuscula
echo strtoupper($nombreCliente);


//Convertirlo a minuscula
echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "correo@correo.com";

var_dump(strtolower($mail1) ===strtolower($mail2));
echo str_replace('Juan','J',$nombreCliente);

// Revisar si un str existe o no

echo strpos($nombreCliente,"Pedro");

//HOlamund