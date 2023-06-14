<?php

abstract class CuentaBancaria{
    public function __construct(protected Int $saldo){}

    public function depositar($monto){
        $this->saldo += $monto;
        return $this->saldo;
    }


    public function retirar($monto){
        if ($this->saldo > $monto){
            $this->saldo -= $monto;
            return $this->saldo;
        }else{
            return "No te alcanza POBRE";
        }
    }
}


class CuentaCorriente extends CuentaBancaria{
    public function __construct(protected Int $saldo){
        parent::__construct($saldo);
    }

    public function retirar($monto){
        $this->saldo -= $monto+($monto*0.1);
        return $this->saldo;
    }
}


class CuentaAhorros extends CuentaBancaria{
    public function __construct(protected Int $saldo){
        parent::__construct($saldo);
    }
}

$cuentaA=new CuentaCorriente(5000);
print_r($cuentaA->retirar(1500));


