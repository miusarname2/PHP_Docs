<?php
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


