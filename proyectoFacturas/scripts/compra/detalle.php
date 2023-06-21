<?php
    namespace app\details;
    class detalle{
        static $getInstance;
        function __construct(public $nombre, protected $edad){}

        public static function getInstance(){
            $arg=(array) func_get_args()[0];
            if (!self::$getInstance instanceof self){
                self::$getInstance=new self(...$arg);
                return self::$getInstance;
            }
            return self::$getInstance;
        }
    }
