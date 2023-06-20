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





// clase 05/06/2023
$nombre=0;    
print_r(isset($nombre));
print_r(empty($nombre));

$lista = [];
var_dump(isset($lista["nombre"]));
var_dump(empty($lista["nombre"]));


//! diferencia ciclo,bucle e iteración
//* Ciclo
// Se controla todo

//* bucle
// Se controla la condicion


//* iteracion
// No se controla nada

switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
};

// if(true){

// };

// foreach ($variable as $key => $value) {
//     # code...
// }
// $index = [];
// for ($index = 0; $index < count($lista); $index++) {

// }
// while(true){

// };

// do{

// }while(false);

// $lista = [];
// $lista["nombre2"] = "Pepito perez";

// if(!isset($lista["nombre"])){
//     $lista["nombre"] = "Miguel";
// }
// print_r($lista);



//? Isset() y Empty()

/**
 * ! Definiciónes formal
 * En PHP, isset() y empty() son dos funciones utilizadas para verificar si una variable o un elemento de
 * un array tiene un valor definido o no. A pesar de que ambas funciones tienen objetivos similares, hay
 * algunas diferencias clave entre ellas.
 * La función isset() comprueba si una variable o un elemento de un array está definido y no es null.
 * Esta función devuelve true si la variable o el elemento de array existe y tiene un valor, y false en caso
 * contrario. Por ejemplo:
 */

$lista = [];
$lista["nombre2"] = "Pepito perez";

if(!isset($lista["nombre"])){
    $lista["nombre"] = "Miguel";
}
print_r($lista);

/**
 *?  En la practica:
 *todo isset()
 * Verifica si la variable esta definida y tiene algo diferente de null
 * 
 *todo empty()
 * Verifica si la variable esta definida 
 */

 //* Otra cosa -> in_array()
 // Esta vaina verificar si existe una variable o si tiene algún dato almacenado también podemos buscar elementos en un arreglo con funciones. 
 //* Ej

 print_r(in_array('audifonos',$carrito));

//* Ordenar

$numeros=array(1,52,5,6,6,5,56,12,1,42,4,5,1,5,12,4,81,6,4897,1,67,12,8,1,475,1,785,1,58);
sort($numero);// De menos a más
rsort($numero);// De más a menos

//? Estructuras de control

/*
todo Las estructuras de control más comunes en programación son:

* Estructuras de control condicionales: 
Como el condicional "if" que mencionamos anteriormente, y también el "switch". Estas estructuras permiten que el programa tome decisiones en función de si se cumple o no una determinada condición.

* Estructuras de control de repetición: 
También conocidas como bucles o ciclos, permiten que el programa repita una determinada acción un número de veces      eterminado o mientras se  cumpla una determinada condición. Entre los bucles más comunes se encuentran el "for", el "while" y el "do-while".

* Estructuras de control de excepciones: 
Permiten manejar errores o situaciones inesperadas que puedan ocurrir durante la ejecución del programa. Por ejemplo, las sentencias "try" y "catch" en Java son estructuras de control de excepciones que permiten manejar errores en tiempo de ejecución. 
*/

// Estructuras condicionales

//? if

// Lo mismo que en Js 

if ($a > $b) {
    echo "a es mayor que b";
}

//? Switch

// Lo mismo que en Js


if ($i == 0) {
    echo "i es igual a 0";
} elseif ($i == 1) {
    echo "i es igual a 1";
} elseif ($i == 2) {
    echo "i es igual a 2";
}

switch ($i) {
    case 0:
        echo "i es igual a 0";
        break;
    case 1:
        echo "i es igual a 1";
        break;
    case 2:
        echo "i es igual a 2";
        break;
}


// Estructuras repetitivas

/**
 * En la mayoría de los lenguajes de programación, existen tres tipos de estructuras repetitivas:
* Bucle while: 
** Permite repetir la ejecución de un bloque de código mientras se cumpla una condición.
* Bucle do-while:
** Similar al bucle while, pero garantiza que el bloque de código se ejecuta al menos una vez, independientemente de si se cumple o no la condición.
* Bucle for:
** Permite repetir la ejecución de un bloque de código un número fijo de veces,controlando el número de iteraciones mediante un contador.
*/

//? While

while (true) {
    echo "a";
}

//? For

for ($i = 0; $i < 10; $i++) {
    echo $i;
}

//? do-while

do {
    echo "a";
} while (true);

//? forEach

foreach (range(0, 10) as $i) {
    echo $i;
}


// Clase de jun/6/2023

//function saludar($nombre){
//    return "Hola $nombre como estas ";
//}

//echo saludar("Oscar");


//declare(strict_types=1);
//function saludar(int $nombre): string{
//return "Hola $nombre como estas ";
//}

//echo saludar(5);

//? Null

// Tengo pero nose 

//? Vacio 

// No tengo


//? No es lo mismo que Void

//declare(strict_types=1);
//    function saludar(string $nombre): void{
//        if($nombre=="Miguel"){
//           return "Hola que mas";
//        }else{
//            return null;
//        }
//        
//    }

//    echo saludar('Pepito');

//? mixed todo boteze

// declare(strict_types=1);
//     function saludar(mixed $nombre): void{
//         if($nombre=="Miguel"){
           
//         }else{
            
//         }
        
//     }

//     echo saludar('Pepito');


//! Declaracion de funcion por variable

//declare(strict_types=1);
    // $fn = function():bool{
    //     return true;
    // };

    // echo $fn();

//! Usar una variable en php
    // declare(strict_types=1);
    // $nombre = "Miguel";

    // $fn = function () use($nombre):string{
    //     return $nombre;
    // };

    // echo $fn();

    // $fn = function():bool{
    //     return true;
    // };

    // echo $fn();

//? Un let php
    // declare(strict_types=1);
    // $nombre = "Miguel";
   
    // $fn = function () use(&$nombre):string{
    //     $nombre = "Andres";
    //     return $nombre;
    // };

    // echo $fn();
    // echo $$nombre;

    // $fn = function():bool{
    //     return true;
    // };

    // echo $fn();

    //todo obtener argumentos sin crearlos
    // function datos():void{
    //     var_dump(func_get_args());
    // };

    // datos("miguel",23,true);


    //todo obtener UN argumentO sin crearlo
    // function datos():void{
    //     var_dump(func_get_arg(2));
    // };

    // datos("miguel",23,true);

    //Obtener ..args
    // function datos():void{
    //     var_dump(...func_get_args());
    // };

    // datos(["nombre"=>"miguel", "edad"=> 23, "casa"=> true]);

    //todo Extraer datos de array

    // function datos():void{
    //     extract(...func_get_args());
    //     echo $nombre;
    //     // var_dump();
    // };

    // datos(["nombre"=>"miguel", "edad"=> 23, "casa"=> true]);

    //todo verificar existencia de data

    // function datos():void{
    //     extract(...func_get_args());
    //     if(isset($edad)){
    //         echo $edad;
    //     }
    //     // var_dump();
    // };

    // datos(["nombre"=> (string) "miguel", "edad"=> (int) 23, "casa"=> (bool) true]);

    //? Documentacion del día

    //Funciones

    /**
     * ! Definicion formal: 
     * Una función es un concepto fundamental en matemáticas y programación. En matemáticas, una función es una relación entre un conjunto de entradas, llamado dominio, y un conjunto de salidas, llamado codominio. Cada elemento del dominio se relaciona con exactamente un elemento del codominio a través de la función.
     * 
     * En términos más formales, una función es una regla o un conjunto de instrucciones que asigna cada elemento en el dominio a un único elemento en el codominio. La notación matemática típica para denotar una función es f(x), donde f es el nombre de la función y x es la variable de entrada.
     * 
     * En programación, una función es un bloque de código que realiza una tarea específica y puede ser llamado desde diferentes partes de un programa. Proporciona una forma de organizar y reutilizar el código al dividir un programa en fragmentos más pequeños y manejables.
     * 
     * En resumen, tanto en matemáticas como en programación, una función es una entidad que toma una o más entradas y produce una salida determinada de acuerdo con una regla o un conjunto de instrucciones específicas.
     * 
     *? Definicion practica
     *  
     * Una función es una relación entre un conjunto de entradas y un conjunto de salidas.
     * 
     * 
     *todo Estructura basica :
     *   
     *  function Identificador ([p1],[p2]...){
     *       Expresiones.....
     *   }
     * 
     *? Division:
     *  Se podrian dividir en "funciones que retornar" y "funciones que no retornan" o ":()" y ":void"
     * 
     *todo Ejempo de funciones que retornan  
     */

     function Saludar():String{
        return "Hola querido....";
     }

     /**
      *todo Funciones NO que retornar
      */

      function SaludarSinRetornar():Void{
        echo "Hola querido";
     }


     /**
      *? Investigación sobre file_get_contents()  
      *todo Definicion formal corta(fuente: ChatGPT)
      * La función file_get_contents() en PHP se utiliza para leer el contenido completo de un archivo y devolverlo como una cadena. 
      *todo Definicion formal 
      * Esta función es similar a file(), excepto que file_get_contents() devuelve el fichero a un string, comenzando por el offset especificado hasta maxlen bytes. Si falla, file_get_contents() devolverá false.
      *
      * file_get_contents() es la manera preferida de transmitir el contenido de un fichero a una cadena. Para mejorar el rendimiento, utiliza técnicas de mapeado de memoria si sistema operativo lo admite..
      *? Aquí tienes una descripción de los parámetros y el valor de retorno de esta función:
      */ 


    //   file_get_contents(
    //     string $filename,
    //     bool $use_include_path = false,
    //     ?resource $context = null,
    //     int $offset = 0,
    //     ?int $length = null
    // ): string|false
    
    //? Ejemplo1 de su uso:

    $homepage = file_get_contents('http://www.example.com/');
    echo $homepage;

// Clase 7/jun/2023

$credenciales["http"] = [];
    $credenciales["http"]["method"] = "GET";

    $config = stream_context_create($credenciales);


    $_DATA = file_get_contents("https://pokeapi.co/api/v2/pokemon/ditto", false, $config);
    print_r($_DATA);
    

//header('Content-Type: application/json');
// header('Content-Type: application/json');

//     $credenciales["http"]["method"] = "GET";
//     $config = stream_context_create($credenciales);


//     $_DATA = file_get_contents("https://pokeapi.co/api/v2/pokemon/ditto", false, $config);
//     print_r(json_decode($_DATA));

// header('Content-Type: application/json');

//     $credenciales["http"]["method"] = "POST";
//     $credenciales["http"]["header"]["Content-Type"] = "application/json";
//     $config = stream_context_create($credenciales);


//     $_DATA = file_get_contents("https://6480e3fef061e6ec4d4a0194.mockapi.io/informacion", false, $config);
//     print_r(json_decode($_DATA));



// header('Content-Type: application/json');

//     $credenciales["http"]["method"] = "POST";
//     $credenciales["http"]["headers"]["Content-Type"] = "application/json";
//     $data = [
//         "cc"=>"123",
//         "nombre"=> "Miguel",
//         "apelldio"=> "Castro",
//         "edad"=> 23
//     ];
//     // $data = http_build_query($data);
//     $credenciales["http"]["content"] = $data;
//     $config = stream_context_create($credenciales);

//     $_DATA = file_get_contents("https://6480e3fef061e6ec4d4a0194.mockapi.io/informacion", false, $config);
//     print_r($_DATA);




// $credenciales["http"]["method"] = "POST";
// $credenciales["http"]["header"] = "Content-type: application/json";
// $data = [
//     "nombre"=> "Miguel",
//     "apelldio"=> "Castro",
//     "edad"=> 23
// ];
// $data = json_encode($data);
// $credenciales["http"]["content"] = $data;
// $config = stream_context_create($credenciales);

// $_DATA = file_get_contents("https://6480e3fef061e6ec4d4a0194.mockapi.io/informacion", false, $config);
// print_r($_DATA);




// $credenciales["http"]["method"] = "POST";
// $credenciales["http"]["header"] = "Content-type: application/json";
// $data = [
//     "cc"=>"123",
//     "nombre"=> "Miguel",
//     "apelldio"=> "Castro",
//     "edad"=> 23
// ];
// $data = json_encode($data);
// $credenciales["http"]["content"] = $data;
// $config = stream_context_create($credenciales);

// $_DATA = file_get_contents("https://6480e3fef061e6ec4d4a0194.mockapi.io/informacion", false, $config);
// print_r($_DATA);



// Jun / 9 / 2023

// class getInstance{
	
// 	public static $instance;
	
// 	// public getInstance(){
// 	//   $arg = func_get_arg();
// 	//   self::$instance = (self::$instance insteadOf self ? self::$instance : new static(...$arg));
// 	// }

//     public static function getInstance(){
//         $arg = func_get_args();
//         self::$instance = (self::$instance insteadOf self) ? self::$instance : new static(...$arg);
//     }
// }

// jun / 13 / 2023

    //declare(strict_types=1);

class Humano{
    // public $color;
    // private $huella;
    // protected $alias;

    // public function __construct($color, $huella, $alias){
    //         $this->color = $color;
    //         $this->huella = $huella;
    //         $this->alias = $alias;
    //     }
    protected $saludar;

        
        public function __construct(public $color, private $huella, protected $alias){}

        protected function saludar(){
            return "Hola mi alias es:".$this->alias;
        }

        //Metodo magico en php
        public function __set(string $name, mixed $value){
            $this->{$name} = $value;
        }

        public function __get(string $name){
            //return (method_exists($this, $name)) ? $this->{$name}() : $this->{$name};
            if(method_exists($this, $name) && (property_exists($this, $name)) ){
                return array("FuncSaludar"=>$this->{$name}(),"saludar"=>$this->{$name});
            }else if(property_exists($this, $name)){
                return $this->{$name};
            }else{
                return ["error"=> "no existe esa entidad en la clase ".__CLASS__];
            }
        }



        

        

        
}

// $obj = new Humano("Negro",12.555,"HOlaMudno");
// print_r($obj);

$extruct = array(
        "huella"=> 12.15, 
        "color"=> "Piel",  
        "alias"=>"Trainer"
    ); 
    $obj = new humano(...$extruct);
    print_r($obj);

        $obj->__set("alias", "TRAINER");
    print_r($obj);

    print_r($obj->__get("huella"));

    
    print_r($obj->__get("aaaa"));

    $obj2 = new humano(...$extruct);
    $obj2->__set("saludar", "Hola mundo");

    // print_r($obj);

    // print_r($obj->__get("huella"));

    print_r($obj2->__get("saludar"));


    //Anotaciones y resumen hasta el punto de Herencias


/**
 *? La programación orientada a objetos (POO) es un paradigma de programación que se basa en el concepto de "objetos".
 ** Los objetos son entidades que representan conceptos del mundo real y pueden tener propiedades (atributos) y realizar acciones (métodos).
 **
 ** En la programación orientada a objetos, los objetos se crean a partir de clases, que son plantillas o moldes que definen las propiedades
 ** y comportamientos de los objetos que se crean a partir de ellas.
 **
 * Los principales conceptos de la programación orientada a objetos son:
 ** - Clase: Es una plantilla que describe las características y comportamientos de los objetos que se pueden crear a partir de ella.
 ** - Objeto: Es una instancia de una clase. Representa un individuo o entidad específica con sus propias propiedades y comportamientos.
 ** - Atributos: Son las propiedades o características de un objeto. Definen el estado de un objeto y se representan mediante variables en la clase.
 ** - Métodos: Son las acciones o comportamientos que un objeto puede realizar. Representan las operaciones que se pueden hacer con un objeto y se definen como funciones en la clase.
 ** - Encapsulación: Es el principio que establece que los atributos y métodos relacionados deben agruparse en una clase para ocultar los detalles internos y exponer solo una interfaz pública.
 ** - Herencia: Es un mecanismo que permite crear nuevas clases basadas en clases existentes. La clase base se denomina "clase padre" o "superclase", y la clase derivada se llama "clase hija" o "subclase". La herencia permite la reutilización de código y la creación de jerarquías de clases.
 ** - Polimorfismo: Es la capacidad de un objeto de tomar diferentes formas o comportarse de diferentes maneras según el contexto. Permite utilizar una interfaz común para objetos de diferentes clases y proporciona flexibilidad y extensibilidad en el diseño de programas.
 **
 * La programación orientada a objetos permite organizar y modularizar el código de manera clara y estructurada, facilitando el desarrollo, la mantenibilidad y la reutilización del código. Es ampliamente utilizado en lenguajes como Java, C++, Python, PHP, entre otros.
 */

/**
 *? Modificadores de acceso en PHP.
 ** Los modificadores de acceso son palabras clave utilizadas en la programación orientada a objetos para controlar la visibilidad y el acceso a los miembros (atributos y métodos) de una clase.
 ** En PHP, hay tres modificadores de acceso:
 ** - public: Los miembros public son accesibles desde cualquier lugar, ya sea desde dentro de la clase, desde las clases heredadas o desde fuera de la clase. Son visibles para todos.
 ** - private: Los miembros private solo son accesibles desde dentro de la misma clase en la que se definen. No pueden ser accedidos desde fuera de la clase, ni siquiera por las clases heredadas.
 ** - protected: Los miembros protected son accesibles desde dentro de la misma clase y desde las clases heredadas (subclases). No pueden ser accedidos directamente desde fuera de la clase.
 ** Es importante elegir adecuadamente los modificadores de acceso según las necesidades de diseño y la seguridad de la aplicación. Un buen diseño de clases utiliza el encapsulamiento y establece un acceso controlado a los miembros, evitando el acceso directo a los datos internos desde fuera de la clase y fomentando el uso de métodos para su manipulación.
 */
class Persona {
    public $nombre;        // Acceso público
    private $edad;         // Acceso privado
    protected $direccion;  // Acceso protegido
    
    public function __construct($nombre, $edad, $direccion) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->direccion = $direccion;
    }
    
    public function saludar() {
        echo "Hola, mi nombre es " . $this->nombre . ".";
    }
    
    private function obtenerEdad() {
        return $this->edad;
    }
    
    protected function obtenerDireccion() {
        return $this->direccion;
    }
}

$persona = new Persona("Juan", 25, "Calle Principal");
echo $persona->nombre;            // Acceso público: se puede acceder desde fuera de la clase
//echo $persona->edad;            // Acceso privado: genera un error, no se puede acceder desde fuera de la clase
//echo $persona->direccion;       // Acceso protegido: genera un error, no se puede acceder desde fuera de la clase

$persona->saludar();               // Método público: se puede llamar desde fuera de la clase
//$persona->obtenerEdad();         // Método privado: genera un error, no se puede llamar desde fuera de la clase
//$persona->obtenerDireccion();    // Método protegido: genera un error, no se puede llamar desde fuera de la clase


/**
 *? Clases en PHP.
 ** Una clase en PHP es una plantilla que permite definir las características y comportamientos de los objetos que se pueden crear a partir de ella.
 ** Para crear una instancia de una clase se utiliza la palabra clave "new" seguida del nombre de la clase y paréntesis.
 ** Los atributos de una clase se definen utilizando variables y pueden tener modificadores de acceso.
 ** Los métodos de una clase se definen utilizando funciones y también pueden tener modificadores de acceso.
 */

class Persona {
    private $nombre;
    private $edad;
    
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    
    public function saludar() {
        echo "Hola, mi nombre es " . $this->nombre . " y tengo " . $this->edad . " años.";
    }
}

$persona = new Persona("Juan", 25);
$persona->saludar();


/**
 *? Métodos estáticos en PHP.
 ** Un método estático en PHP pertenece a la clase en sí y no a una instancia específica de la clase.
 ** Algunas características importantes de los métodos estáticos son:
 ** - No requieren una instancia: Se pueden invocar directamente desde la clase utilizando la sintaxis Clase::metodoEstatico().
 ** - No pueden acceder a propiedades de instancia: No pueden acceder directamente a las propiedades de instancia de la clase, solo a propiedades estáticas.
 ** - No pueden utilizar $this: No se puede utilizar la palabra clave $this en un método estático.
 ** - Útiles para utilidades compartidas: Son útiles para definir funciones o utilidades que no dependen del estado de una instancia específica.
 */

 class MathUtils {
    public static function sum($a, $b) {
        return $a + $b;
    }
}

$result = MathUtils::sum(2, 3);
echo $result; // Output: 5


/**
 *? Herencia en PHP.
 ** La herencia en PHP permite crear nuevas clases basadas en clases existentes y extender su funcionalidad.
 ** La clase existente se conoce como clase base o clase padre, mientras que la nueva clase creada se llama clase derivada o clase hija.
 ** Algunos conceptos importantes relacionados con la herencia son:
 ** - Clase base / Clase padre: Es la clase original de la cual se deriva una nueva clase. Define los atributos y métodos básicos que serán heredados por las clases derivadas.
 ** - Clase derivada / Clase hija: Es la nueva clase creada que se basa en la clase base. Hereda los atributos y métodos de la clase base y puede agregar nuevos atributos y métodos, así como modificar o ampliar los existentes.
 ** - Herencia simple y herencia múltiple: La herencia simple se refiere a la relación en la que una clase derivada hereda de una sola clase base. Por otro lado, la herencia múltiple se refiere a la relación en la que una clase derivada hereda de múltiples clases base. No todos los lenguajes de programación admiten la herencia múltiple.
 ** - Polimorfismo: El polimorfismo es la capacidad de un objeto de una clase derivada para ser tratado como un objeto de su clase base.
 */

 class Animal {
    protected $nombre;
    
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
    
    public function comer() {
        echo $this->nombre . " está comiendo.";
    }
}

class Perro extends Animal {
    public function ladrar() {
        echo $this->nombre . " está ladrando.";
    }
}

$perro = new Perro("Max");
$perro->comer(); // Output: Max está comiendo.
$perro->ladrar(); // Output: Max está ladrando.


//14/06/2023

// Este código define dos interfaces, Saludar y Saludar2.
// Una interfaz es un contrato que define un conjunto de métodos que debe implementar una clase.
interface Saludar {
    public function getNumero();
    public function setNumero($numero);
    public function getNome();
}

interface Saludar2 {
    public function getNumeroRamdom();
    public function setNumeroRamdom($numero);
}

// Este código define una clase llamada Hola2 que extiende la clase Hola e implementa las interfaces Saludar y Saludar2.
class Hola2 extends Hola implements Saludar, Saludar2 {

// Este constructor inicializa el objeto Hola2 con el número y nombre dados.
    function __construct($numero,$nome){
        parent::__construct($numero,$nome);
    }

    // Este método imprime el número 1.
    public function getNumero(){
        print_r(1);
    }

    // Este método no hace nada.
    public function setNumero($numero){}

    // Este método no hace nada.
    public function getNome(){}

    // Este método no hace nada.
    public function getNumeroRamdom(){}

    // Este método no hace nada.
    public function setNumeroRamdom($numero){}

}



/*
*Se define una clase abstracta llamada Animal 
*utilizando la palabra clave abstract. 
?Una clase abstracta no se puede instanciar directamente, 
?se utiliza como una clase base para otras clases derivadas. 
*/
abstract class Animal {
    /*
    *La clase Animal tiene una propiedad protegida $nombre y un método abstracto sonidoAnimal().
    */
    protected $nombre;
    protected $apellido;
    protected $edad;
    /*
    *La clase abstracta Animal tiene un constructor llamado __construct() que recibe un parámetro $nombre
    *y lo asigna a la propiedad protegida $nombre.
    */
    public function __construct($nombre,$apellido,$edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->setEdad($edad); // Utilizamos el método setEdad para validar el valor
    }
    /*
    *El método sonidoAnimal() es declarado como ABSTRACTO utilizando la palabra clave abstract.
    ?Esto significa que cualquier CLASE derivada de Animal debe implementar este método.
    */
    abstract public function sonidoAnimal();
    
    /*
    *Agregar un método público para obtener el valor de la propiedad protegida $nombre.
    */
    public function getNombre() {
        return $this->nombre;
    }
    public function getApellido() {
        return $this->apellido;
    }
    public function getEdad() {
        return $this->edad;
    }
    public function setEdad($edad) {
        if (is_numeric($edad) && $edad > 0) {
            $this->edad = $edad;
        } else {
            // Si el valor no es un número válido, asignamos un valor predeterminado
            $this->edad = 1;
        }
    }
}

/*
*Se definen dos clases derivadas de Animal: Perro y Gato. 
?Ambas clases implementan el método sonidoAnimal() que se define en la clase abstracta Animal.
*/
class Perro extends Animal {
    public function sonidoAnimal() {
        return "Guau Guau Guau!";
    }
}

class Gato extends Animal {
    public function sonidoAnimal() {
        return "Miau Miau Miau!";
    }
}

/*
*Se crean objetos de las clases derivadas: $perro de la clase Perro y $gato de la clase Gato. 
*Se proporciona un nombre en el constructor de cada objeto.
*/
// Crear objetos de las clases derivadas
$perro = new Perro("Sheila","Cubides",32);
$gato = new Gato("Angel","Ramirez",20);

/*
*Se llama al método sonidoAnimal() en cada objeto ($perro->sonidoAnimal() y $gato->sonidoAnimal()) y se imprime el resultado utilizando echo. 
*El método sonidoAnimal() devuelve el sonido característico de cada animal.
*/

// Llamar al método sonidoAnimal() y getNombre()
echo "El perro: " . $perro->getNombre() . " " . $perro->getApellido() . " tiene una edad de " . $perro->getEdad() . " y hace el sonido:  " . $perro->sonidoAnimal() . "<br>";
echo "El gato: " . $gato->getNombre() . " " . $gato->getApellido() . " tiene una edad de " . $gato->getEdad() . " y hace el sonido:  " . $gato->sonidoAnimal() . "<br>";




/* -------------------------------------------------------------------------- */
/*                                   traits                                   */
/* -------------------------------------------------------------------------- */

/**
 *  no es posible invocar directamente parent::
 *  dentro de una clase que utiliza un trait para acceder 
 *  a los métodos o propiedades de la clase padre.
 * 
 * no siguen la misma relación de herencia.
 * Los traits son mecanismos de reutilización de código que se pueden incluir en múltiples clases. 
 * No hay una jerarquía de clases con traits.
 * 
*/

trait MiTrait
{
    public function miMetodo()
    {
        return "¡Hola desde el trait!";
    }
}
class MiClase
{
    use MiTrait;
    public function llamarMetodoTrait()
    {
        return $this->miMetodo();
    }
}

$objeto = new MiClase();
echo $objeto->llamarMetodoTrait(); 

/* -------------------------------------------------------------------------- */
/*                                  SINGLETON                                 */
/* -------------------------------------------------------------------------- */
echo "<h3>traits</h3>";

trait Singleton
{
    private int $atributoishon = 12;
    private static $instance;
    public static function getInstance()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function getAtributoishon()
    {
        return $this->atributoishon;
    }

    public function setVariableishon($atributoishon)
    {
        $this->atributoishon = $atributoishon;
    }
}

class DbReaderT
{
    use Singleton;
}

class FileReaderT
{
    use Singleton;
}

$a = DbReaderT::getInstance();
$b = DbReaderT::getInstance();
/**
 * se modifica en ambas instancias, porque ambas isntancias apuntan
 * a la misma referencia de memoria
 */
$b->setVariableishon(3);
var_dump($a);
var_dump($b);

/* -------------------------------------------------------------------------- */
/*                              multiples traits                              */
/* -------------------------------------------------------------------------- */


trait Saludar
{
    function decirHola()
    {
        return "hola";
    }
}
trait Despedir
{
    function decirAdios()
    {
        return "adios";
    }
}
class Comunicacion
{
    use Saludar, Despedir;
}
$comunicacion = new Comunicacion();
echo $comunicacion->decirHola() . ", que tal. " . $comunicacion->decirAdios();

echo "<br>";

/* -------------------------------------------------------------------------- */
/*                           traits dentro de traits                          */
/* -------------------------------------------------------------------------- */

trait SaludoYDespedida
{
    use Saludar, Despedir;
}

class ComunicacionM
{
    use SaludoYDespedida;
}
$comunicacion = new ComunicacionM;
echo $comunicacion->decirHola() . ", que tal. " . $comunicacion->decirAdios();



/* -------------------------------------------------------------------------- */
/*                          conflictos entre metodos                          */
/* -------------------------------------------------------------------------- */

// ----- 1 

trait JuegoE
{
    function play()
    {
        echo "Jugando a un juego";
    }
}
trait MusicaE
{
    function play()
    {
        echo "Escuchando música";
    }
}
class ReproductorE
{
    use JuegoE, MusicaE;
}
$reproductor = new ReproductorE;
$reproductor->play();
// Devuelve Fatal error: Trait method play has not been applied,
// because there are collisions with other trait methods on Reproductor


// ---- 2

trait Saludare
{
    public function decirHola()
    {
        return "Hola desde el trait";
    }
}
class MiClasee
{
    use Saludare;
    public function decirHola()
    {
        return "Hola desde la clase";
    }
}
$objeto = new MiClasee();
echo $objeto->decirHola();

// ----- 3

class ReproductorAS
{
    use JuegoE, MusicaE {
        JuegoE::play as playDeJuego;
        MusicaE::play insteadof JuegoE;
    }
}

$reproductor = new ReproductorAS;
$reproductor->play(); // Devuelve: Escuchando música
$reproductor->playDeJuego(); // Devuelve: Jugando a un juego

// 15/06/2023

$_DATA= json_decode(file_get_contents('php://input'),true);

print_r($_DATA);

// Anotaciones desde el 15/06/2023 hasta hoy(Parcialmente)

 /**
* 2.6. Polimorfismo:
*El polimorfismo en la POO permite tratar objetos de diferentes clases de manera uniforme utilizando una interfaz común. Se logra a través de la herencia, donde una clase hija hereda de una clase padre y puede redefinir o sobrescribir los métodos heredados. Los objetos de las clases hijas pueden ser tratados como objetos de la clase padre.*/

// Clase padre
class Animal {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function hacerSonido() {
        return "El animal hace un sonido.";
    }
}

// Clase hija que hereda de Animal
class Perro extends Animal {
    public function hacerSonido() {
        return "El perro ladra.";
    }
}

// Clase hija que hereda de Animal
class Gato extends Animal {
    public function hacerSonido() {
        return "El gato maulla.";
    }
}

// Función que acepta un objeto de tipo Animal
function hacerSonidoAnimal(Animal $animal) {
    echo $animal->hacerSonido() . "\n";
}

// Crear instancias de las clases hijas
$perro = new Perro("Firulais");
$gato = new Gato("Pelusa");

// Llamar a la función hacerSonidoAnimal con los objetos de las clases hijas
hacerSonidoAnimal($perro);
hacerSonidoAnimal($gato);


 /**
*2.7. Autoload:
*El autoload en PHP es una técnica que carga automáticamente las clases cuando son necesarias, sin tener que incluir manualmente los archivos de clase en cada punto del código. Se basa en la función spl_autoload_register(), que permite registrar funciones de autoload que se ejecutan cuando se intenta utilizar una clase no cargada.*/


// Define una función de autoload que cargará automáticamente las clases
function miAutoload($nombreClase) {
    // Ruta base donde se encuentran las clases
    $rutaBase = 'ruta/del/proyecto/clases/';

    // Convierte el nombre de la clase en una ruta de archivo
    $rutaArchivo = $rutaBase . $nombreClase . '.php';

    // Comprueba si el archivo de la clase existe y lo incluye
    if (file_exists($rutaArchivo)) {
        require_once $rutaArchivo;
    }
}

// Registra la función de autoload
spl_autoload_register('miAutoload');

// Ahora puedes utilizar las clases sin tener que incluir manualmente los archivos
$miObjeto = new MiClase();
$otroObjeto = new OtraClase();




 /**
*2.8. Namespaces en PHP:
*Los namespaces en PHP se utilizan para definir espacios de nombres y evitar conflictos de nombres entre clases, funciones y constantes. La palabra clave use se utiliza para importar elementos desde otros espacios de nombres y proporcionar rutas cortas para acceder a ellos.*/



namespace MiProyecto;

// Definición de una clase dentro del namespace
class MiClase
{
    public function saludar()
    {
        echo "Hola desde MiProyecto\MiClase";
    }
}

namespace OtroProyecto;

// Importar la clase MiClase del namespace MiProyecto
use MiProyecto\MiClase;

// Crear una instancia de la clase MiClase
$miObjeto = new MiClase();

// Acceder al método saludar de la clase MiClase
$miObjeto->saludar();


//20

 /**
*2.9. Composer:
*Composer es un administrador de dependencias para PHP que facilita la instalación de librerías de terceros en un proyecto PHP. Se utiliza un archivo composer.json para especificar las dependencias y el comando composer update para instalarlas.
*/


// Incluir el autoloader de Composer
require 'vendor/autoload.php';

// Usar una dependencia instalada a través de Composer
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Crear un nuevo registro de log
$log = new Logger('myApp');
$log->pushHandler(new StreamHandler('logs/app.log', Logger::WARNING));

// Escribir un mensaje de log
$log->warning('Este es un mensaje de advertencia');

 /**
*3.1. Integración de PHP con Bases de datos relacionales (Mysql):
*Esta sección aborda la integración de PHP con bases de datos relacionales, como MySQL. Se mencionan las características de las bases de datos relacionales, como la organización de la información en tablas y el uso de SQL para interactuar con los datos.
*/

// Conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$database = "nombre_de_la_base_de_datos";

$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar la conexión
if (!$conn) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

// Consulta SQL
$sql = "SELECT * FROM tabla";

// Ejecutar la consulta
$result = mysqli_query($conn, $sql);

// Verificar si hay resultados
if (mysqli_num_rows($result) > 0) {
    // Recorrer los resultados y mostrar los datos
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . ", Nombre: " . $row["nombre"] . ", Email: " . $row["email"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
mysqli_close($conn);

 /**
*3.1.1. Bases de datos relacionales:
*Se explican las bases de datos relacionales, su estructura basada en tablas y la relación entre ellas utilizando claves primarias y claves foráneas.
*/

 /**
*3.1.2. Entidades y Atributos:
*Se define qué son las entidades en el contexto de una base de datos y se mencionan algunos ejemplos de entidades y atributos.
*/

// Definición de una entidad "Usuario" con algunos atributos
class Usuario {
    private $id;
    private $nombre;
    private $email;
    
    // Constructor de la clase Usuario
    public function __construct($id, $nombre, $email) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
    }
    
    // Métodos getter y setter para los atributos de la entidad Usuario
    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function getNombre() {
        return $this->nombre;
    }
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
}

// Creación de una instancia de la entidad Usuario
$usuario = new Usuario(1, "John Doe", "johndoe@example.com");

// Acceso a los atributos de la entidad Usuario
echo "ID: " . $usuario->getId() . "<br>";
echo "Nombre: " . $usuario->getNombre() . "<br>";
echo "Email: " . $usuario->getEmail() . "<br>";

 /**
*3.1.3. Identificadores Únicos:
*Se explica el concepto de identificadores únicos (claves primarias) en las bases de datos, su función de garantizar la unicidad de los registros y su uso en la indexación y las relaciones entre tablas.
*/

// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$dbname = "nombre_base_de_datos";

// Crear una nueva conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores en la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Crear una tabla llamada "usuarios" con un identificador único llamado "id"
$sql = "CREATE TABLE usuarios (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla 'usuarios' creada exitosamente.";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();

 /**
*3.1.4. Relaciones:
*Se describe cómo se establecen las relaciones entre tablas en una base de datos relacional, y se mencionan las reglas de negocio que definen esas relaciones.
*/

// Definición de las tablas
$tablaUsuarios = [
    'id' => 'INT',
    'nombre' => 'VARCHAR',
    // ...
];

$tablaPedidos = [
    'id' => 'INT',
    'usuario_id' => 'INT',
    'producto' => 'VARCHAR',
    // ...
];

// Establecimiento de la relación entre tablas
$relacionUsuariosPedidos = [
    'tabla_padre' => 'usuarios',
    'clave_primaria_padre' => 'id',
    'tabla_hija' => 'pedidos',
    'clave_foranea_hija' => 'usuario_id',
    // ...
];

// Reglas de negocio que definen las relaciones
$reglasNegocio = [
    'usuarios' => [
        'validaciones' => [
            // ...
        ],
        // ...
    ],
    'pedidos' => [
        'validaciones' => [
            // ...
        ],
        // ...
    ],
    // ...
];

// Ejemplo de uso de la estructura de datos
$idUsuario = 1;
$nombreUsuario = 'John Doe';

$consultaInsertarUsuario = "INSERT INTO usuarios (id, nombre) VALUES ($idUsuario, '$nombreUsuario')";
// Ejecutar consulta para insertar el usuario en la tabla usuarios

$idPedido = 1;
$productoPedido = 'Camisa';

$consultaInsertarPedido = "INSERT INTO pedidos (id, usuario_id, producto) VALUES ($idPedido, $idUsuario, '$productoPedido')";
// Ejecutar consulta para insertar el pedido en la tabla pedidos


 /**
*3.1.5. Clave ajena (Foránea):
*Se explica el concepto de claves foráneas (claves externas) y cómo se utilizan para establecer relaciones entre tablas en una base de datos relacional.
*/


// Conexión a la base de datos
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$dbname = "basedatos";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";

    // Crear la tabla de Usuarios
    $sql = "CREATE TABLE Usuarios (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL
    )";
    $conn->exec($sql);
    echo "Tabla Usuarios creada correctamente";

    // Crear la tabla de Pedidos
    $sql = "CREATE TABLE Pedidos (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        producto VARCHAR(50) NOT NULL,
        usuario_id INT(6) UNSIGNED,
        FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
    )";
    $conn->exec($sql);
    echo "Tabla Pedidos creada correctamente";
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

// Cerrar la conexión
$conn = null;



 /**
*3.1.6. Normalización de bases de datos:
*Se menciona la normalización de bases de datos como un proceso de diseño que se utiliza para organizar y estructurar las tablas de una base de datos de manera eficiente y libre de redundancias. Se hace referencia a las formas normales establecidas por Edgar Codd. 
*/



// Configuración de la base de datos
$host = 'localhost';
$dbname = 'nombre_base_de_datos';
$user = 'nombre_usuario';
$password = 'contraseña';

try {
    // Conexión a la base de datos usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Consulta SQL
    $sql = "SELECT * FROM nombre_tabla";
    
    // Ejecutar la consulta y obtener los resultados
    $stmt = $pdo->query($sql);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Mostrar los resultados
    foreach ($results as $row) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Nombre: " . $row['nombre'] . "<br>";
        echo "Apellido: " . $row['apellido'] . "<br>";
        echo "<br>";
    }
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
