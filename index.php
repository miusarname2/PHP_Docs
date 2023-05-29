<?php

//? funciones de salida en PHP

echo "Texto a imprimir";//* <- Esto imprimira <code> Texto a imprimir </code>

$texto="MUndo";
//printf("Hola %s",$texto); //* Esto imprimira <code> Hola MUndo </code>

$mensaje = sprintf("Hola %s",$texto); // Basicamente retorna a la variable  "Hola MUndo"
echo $mensaje;  //* Esto imprimira <code> Hola MUndo </code>





