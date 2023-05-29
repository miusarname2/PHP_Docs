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
    
