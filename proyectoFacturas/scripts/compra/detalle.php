<?php
    namespace app\details;

    use getInstance as Instance;
    class detalle{
        use Instance;
        function __construct(public $nombre, protected $edad){}
    }
