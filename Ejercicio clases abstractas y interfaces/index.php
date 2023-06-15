<?php

abstract class Vehiculo{
    public function __construct(public String $placa){}

    abstract public function getType();


    public function __get(string $name){
        if (property_exists($this, $name)){
            return $this->{$name};
        }
    }

}

interface ParqueaderoInterface{
    public function estacionar(Vehiculo $vehiculo);
    public function retirar(Vehiculo $vehiculo);
}

class Coche extends Vehiculo{
    public function __construct(public String $placa){
        parent::__construct($placa);
    }
    public function getType(){}
}

class Motocicleta extends Vehiculo{
    public function __construct(public String $placa){
        parent::__construct($placa);
    }
    public function getType(){}
}

class Parqueadero implements ParqueaderoInterface{

    public function __construct(public array $vehiculosParqueadero){}

    public function estacionar(Vehiculo $vehiculo){
        array_push($this->vehiculosParqueadero,$vehiculo->placa);
        return $vehiculosParqueadero;
    }

    public function retirar(Vehiculo $vehiculo){
        $keyE=array_search($vehiculo,$this->vehiculosParqueadero);
        unset($vehiculosParqueadero[$keyE]);
        print_r($this->vehiculosParqueadero);
        return $vehiculosParqueadero;
    }
}


$parqueadero_elProgresoDelPobre=new Parqueadero(array());

$_DATA= json_decode(file_get_contents('php://input'),true);

$motos = $_DATA['Vehiculos']['Motos'];
$carros = $_DATA['Vehiculos']['coches'];

foreach ($motos as $moto) {
    $moto1=new Motocicleta($moto);
    $parqueadero_elProgresoDelPobre->estacionar($moto1);
}


foreach ($carros as $carro) {
    $carro1=new Motocicleta($carro);
    $parqueadero_elProgresoDelPobre->estacionar($carro1);
}

print_r($parqueadero_elProgresoDelPobre);


print_r("\nVoy a sacar todos los vehiculos");


foreach ($parqueadero_elProgresoDelPobre->vehiculosParqueadero as $vehiculo) {
    $vehiculo1=new Motocicleta($vehiculo);
    $parqueadero_elProgresoDelPobre->retirar($vehiculo1);
    //print_r("Se ha sacado un vehiculo ");
}

print_r("\n\n");

print_r($parqueadero_elProgresoDelPobre);






