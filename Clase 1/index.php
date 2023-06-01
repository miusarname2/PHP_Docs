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








//? Clase 2
header('Content-Type: application/json');
/**
 * todo Array Indexado
 * *Este tipo de array tiene índices numéricos. Aquí está un ejemplo de cómo definir un array indexado:
 * @var array $nombres
 */
$nombres = array("Juan", "Pedro", "Santiago");
print_r($nombres);
// echo "<hr>";
/**
 * todo Array Asociativo
 * *En este tipo de array, los valores son asociados con claves específicas en lugar de índices numéricos. Aquí está un ejemplo:
 * @var array $edades
 */
$edades = array(
    "Juan" => 35, 
    "Pedro" => 37, 
    "Santiago" => 43);
print_r($edades);
// echo "<hr>";
/**
 * todo Array Multidimensional
 * *Este es un array que contiene uno o más arrays en sí. Un ejemplo común sería un array que contiene información para varias personas, donde cada persona es un array que contiene la información para esa persona. Aquí está un ejemplo:
 * @var array $personas
 */
$personas = array(
    "Juan" => array(
        "Edad" => 35, 
        "Ciudad" => "Madrid", 
        "País" => "España"),
    "Pedro" => array(
        "Edad" => 37, 
        "Ciudad" => "Barcelona", 
        "País" => "España"),
    "Santiago" => array(
        "Edad" => 43, 
        "Ciudad" => "Valencia", 
        "País" => "España")
);
 /**
 * ? Ejemplo de como insertar un dato nuevo al array Multidimensional
 */
$personas["Pedro"]["Altura"] = 1.63;
print_r($personas);
/**
 * ? Ejemplo de como aceder al array
 */
print_r($personas['Pedro']['País']);


//* Ejercicio clase 2
//todo Hacer un ejercicio y documentar cada metodo para arrays en el discord

/* 
! Definición "formal":
? array_flip() devuelve un array dado la vuelta, es decir, las claves de array se convierten en valores y los valores de array se convierten en claves.

? Observe que los valores de array tienen que ser ser claves válidas, es decir, que necesitan ser un valor de tipo integer o string. Se emitirá una advertencia si un valor tiene el tipo erróneo, por lo que el par clave/valor en cuestión no será incluido en el resultado

? Si un valor tiene varias coincidencias, se usará la última clave como su valor, perdiéndose todas las demás.

*Definición "practica":
? array_flip()regresa un array que tiene los "elementos" como "keys" y los "keys" por "elementos"

todo Ejemplo:
*/


$arreglo = array("Oscar", "Juan", "Carlos","Hermenjildo","Paula","Maria");
$executeOfFunction = array_flip($arreglo);
print_r($executeOfFunction);




/* 
! Definición "formal":
? Llena un array con num entradas del valor del parámetro value, las keys inician en el parámetro start_index.

*Definición "practica":
? array_fill() llena un array como un "bucle" del mismo contenido, es dcir llena un array con el numero de veces que "iteremos" en un elemento ya existente dentro del array y le debemos pasar el indice de inicio, la cantidad de veces y lo que le " vamos a poner "
todo Ejemplo:
*/

$varExample1 = array_fill(2, 350, 'Hola mundo');
$varExample2 = array_fill(0, 1500, 'Si se puede imaginar se pude programar');
print_r($varExample1);
print_r($varExample2);




/* 
! Definición "formal":
? Recorre cada valor de array, pasándolos a la función callback. Si la función callback devuelve true el valor actual desde array es devuelto al array resultante. Las claves del array se conservan.

*Definición "practica":
? array_fill() resive un array y una funcion callback y la evalua deacuerdo a esta, cuando no se le pasa solo verifica que el equivalente del valor no sea false o en binario 0
todo Ejemplo:
*/
$arrg = [
    0 => 'Oscar',
    1 => false,
    2 => null,
    3 => null,
    4 => 'Juan Manuel',
    5 => '0',
    6 => 0,
    7 => 1,
    8=> true,
    9 => "HOlam  dad",
];

print_r(array_filter($arrg));





/* 
! Definición "formal":
? array_map() devuelve un array que contiene todos los elementos de array1 después de haber aplicado la función callback a cada uno de ellos. El número de parámetros que la función callback acepta debería coincidir con el número de arrays proporcionados a array_map().

*Definición "practica":
? Toma la funcion la pasa por la funcion y lo que retorna lo añade al array que se "muestra"
todo Ejemplo:
*/

function addNuevoElemento($n)
{
    return($n." Es un nuevo miembro");
}

$arrayE = array("Juan", 2, True, 4.5, 'Hola mundo');
$finalArray = array_map("addNuevoElemento", $arrayE);
print_r($finalArray);




/* 
! Definición "formal":
? array_reduce() aplica iterativamente la función callback a los elementos de array, con el propósito de reducir el array a un solo valor.

*Definición "practica":
? Toma la funcion que le pasamos y la ejecuta teniendo cierta "persistencia", pero si le pasamos otro lo añadira o se lo pasara primero
todo Ejemplo:
*/

function añadirDeNuevo($actualCurrent, $newToOper)
{
    $actualCurrent += $newToOper;
    return $actualCurrent;
}

function producto($actualCurrent, $newToOper)
{
    return($actualCurrent." ".$newToOper);
}

$axample1 = array(1, 2, 3, 4, 5);
$xample2arr = [
    "Habia","una","Vez","una","Iguana","con","pura","cara","de", "rana..."
];

var_dump(array_reduce($axample1, "añadirDeNuevo"));
var_dump(array_reduce($xample2arr, "producto"));





/* 
! Definición "formal":
? array_key_exists() devuelve true si la key dada existe en el array. La key puede ser cualquier valor posible para índice de un array.

*Definición "practica":
? verifica si una "key" existe en el array
todo Ejemplo:
*/

$ramdomArr= array('hola' => 1, 'mundo' => 4,'huevo'=>5,'venezolano'=>"pobre");
if (array_key_exists('venezolano', $ramdomArr)) {
    echo "Hay un ladron";
}else{
    echo "No hay un ladron";
}




/* 
! Definición "formal":
? Busca la aguja (needle) en el pajar (haystack) usando una comparación flexible a menos que esté establecido strict.

*Definición "practica":
? verifica si un elemento existe dentro de un array(Tal cual con mayus y minus)
todo Ejemplo:
*/

$dockers = array("Ubuntu", "Nginx", "Debian", "Distro");
if (in_array("Irix", $dockers)) {
    echo "Existe Irix";
}elseif (in_array("Nginx", $dockers)) {
    echo "Existe Nginx";
}




/* 
! Definición "formal":
? Selecciona uno o más valores aleatorios de un array y devuelve la clave (o claves) de dichos valores aleatorios. Utiliza un generador de números seudoaleatorios que no es apto para fines criptográficos.

*Definición "practica":
? Toma un elemento a de manera ramdom (para lo programadores a la maldita sea...)
todo Ejemplo:
*/

$dockers = array("Ubuntu", "Nginx", "Debian", "Distro");
$claves_aleatorias = array_rand($dockers, 2);
echo $dockers[$claves_aleatorias[0]] . "\n";
echo $dockers[$claves_aleatorias[1]] . "\n";




/* 
! Definición "formal":
? Toma un array y devuelve un nuevo array sin valores duplicados.

? Tenga en cuenta que las claves se conservan. Si múltiples elementos se comparan bajo el parámetro sort_flags, entonces la clave y el valor del primer elemento igual se conservarán.

*Definición "practica":
? Devuelve un array con todos sus valores unicos
todo Ejemplo:
*/

$dockers = array("Ubuntu", "Nginx", "Debian", "Distro","Ubuntu","CentOS","LInux","Irix");
$arrayUnico = array_unique($dockers);
print_r($arrayUnico);




/* 
! Definición "formal":
? array_intersect() retorna un array que contiene todos los valores de array1 que están presentes en todos los argumentos. Observe que las claves se mantienen.

*Definición "practica":
? Devuelve un array con los elementos en comun de dos arrays
todo Ejemplo:
*/

$dockers = array("Ubuntu", "Nginx", "Debian", "Distro","Ubuntu","CentOS","Linux","Irix");
$so=["Ubuntu","Linux","Arch","Kubuntu","Xubuntu "];
$onCommon = array_intersect($so, $dockers);
print_r($onCommon);




/* 
! Definición "formal":
? Compara array1 con uno o más arrays y devuelve los valores de array1 que no estén presentes en ninguno de los otros arrays.

*Definición "practica":
? Devuelve lo unico y diferente del primer array
todo Ejemplo:
*/
$dockers = array("Ubuntu", "Nginx", "Debian", "Distro","Ubuntu","CentOS","Linux","Irix");
$so=["Ubuntu","Linux","Arch","Kubuntu","Xubuntu "];
$resultado = array_diff($dockers, $so);

print_r($resultado);




/* 
! Definición "formal":
? array_push() trata array como si fuera una pila y coloca la variable que se le proporciona al final del array. El tamaño del array será incrementado por el número de variables insertados.

*Definición "practica":
? Envia aun array lo que le digamos que envie
todo Ejemplo:
*/

$dockers = array("Ubuntu", "Nginx", "Debian", "Distro","Ubuntu","CentOS");

print_r($dockers);
array_push($dockers,"Linux","Irix");
print_r($dockers);




/* 
! Definición "formal":
? array_pop() extrae y devuelve el último elemento del array, acortando el array con un elemento menos.

*Definición "practica":
? Elimina el ultimo elemento del array
todo Ejemplo:
*/

$dockers = array("Ubuntu", "Nginx", "Debian", "Distro","Ubuntu","CentOS");

print_r($dockers);
array_pop($dockers);
print_r($dockers);




/* 
! Definición "formal":
? Toma un valor array y devuelve un nuevo array con el orden de los elementos invertido.
*Definición "practica":
? Invierte el orden de los elementos
todo Ejemplo:
*/

$dockers = array("Ubuntu", "Nginx", "Debian", "Distro","Ubuntu","CentOS");

$reversed = array_reverse($dockers);
$preserved = array_reverse($dockers, true);

print_r($input);
print_r($reversed);
print_r($preserved);




/* 
! Definición "formal":
? array_sum() devuelve la suma de los valores de un array.

*Definición "practica":
? Equivalente a la funcion sum() de python
todo Ejemplo:
*/

$arrxample = array(2, 4, 6, 8);
print_r($arrxample." "."\nla suma de toda esta vaina es =>" . array_sum($arrxample) . "\n");




/* 
! Definición "formal":
? array_product() devuelve el producto de valores de un array.

*Definición "practica":
? Equivalente a la funcion sum() pero en lugar de sumar multiplica
todo Ejemplo:
*/

print_r($arrxample." "."\nla multiplicación de toda esta vaina es =>" . array_product($arrxample) . "\n");




/* 
! Definición "formal":
? Divide un array en arrays con elementos del tamaño definido en size. El último fragmento puede contener menos elementos que size.

*Definición "practica":
? Parte los array en arrays internos del tamaño asignado
todo Ejemplo:
*/

$dockers = array("Ubuntu", "Nginx", "Debian", "Distro","Ubuntu","CentOS");
print_r(array_chunk($dockers, 2));




/* 
! Definición "formal":
? array_values() returns all the values from the array and indexes the array numerically.

*Definición "practica":
? Es un for para los flojos
todo Ejemplo:
*/

$dockers = array("Ubuntu", "Nginx", "Debian", "Distro","Ubuntu","CentOS");
print_r(array_values($dockers));




/* 
! Definición "formal":
? Aplica la función definida por el usuario dada por callback a cada elemento del array dado por array.

? array_walk() no le afecta el puntero de arrays interno de array. array_walk() recorrerá el array completo sin tener en cuenta la posición del puntero.

*Definición "practica":
? Es un for para los flojos
todo Ejemplo:
*/

$frutas = array("d" => "limón", "a" => "naranja", "b" => "banana", "c" => "manzana");

function test_alter(&$elemento1, $clave, $prefijo)
{
    $elemento1 = "$prefijo: $elemento1";
}

function test_print($elemento2, $clave)
{
    echo "$clave. $elemento2<br />\n";
}

echo "Antes ...:\n";
array_walk($frutas, 'test_print');

array_walk($frutas, 'test_alter', 'fruta');
echo "... y después:\n";

array_walk($frutas, 'test_print');