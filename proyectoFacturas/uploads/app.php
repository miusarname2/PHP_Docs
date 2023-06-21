<?php
    trait getInstance{
        static $getInstance;
        static function getInstance(){
            $arg=(array) func_get_args()[0];
            if (!self::$getInstance instanceof self){
                try{
                    self::$getInstance=new self(...$arg);
                return self::$getInstance;
                }catch(\Throwable $e){
                    return $e->getMessage();
            }
        }
            return self::$getInstance;
        }

    }

    function autoload($e){ 
        $carpeta = (array) [
            dirname(__DIR__)."/scripts/clients",
            dirname(__DIR__)."/scripts/compra"
        ];
        foreach ($carpeta as $ruta) {
            if ($handler = opendir($ruta)) {
                while ($file = readdir($handler)) {
                    if($file!= "." & $file!=".."){
                        require_once $ruta."/".$file;
                    }
                }
            }
        }

    }

    spl_autoload_register('autoload');

    print_r(\app\details\detalle::getInstance(["nombre"=>"Oscar","edad"=>150]));

?>
