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