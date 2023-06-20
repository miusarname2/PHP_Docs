<?php
    
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

    new \app\user\usuario();
    

?>
