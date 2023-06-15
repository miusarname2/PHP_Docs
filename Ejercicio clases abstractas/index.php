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



$_DATA= json_decode(file_get_contents('php://input'),true);

$cuentaA=new CuentaCorriente($_DATA['saldo']);
print_r("Haz retirado ".$_DATA['monto']. " y te queda ".$cuentaA->retirar($_DATA['monto']));




