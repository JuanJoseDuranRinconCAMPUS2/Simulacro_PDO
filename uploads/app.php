<?php
    trait getInstance{
        public static $instance;
        public static function getInstance() {
            $arg = func_get_args();
            $arg = array_pop($arg);
            return (!(self::$instance instanceof self) || !empty($arg)) ? self::$instance = new static(...(array) $arg) : self::$instance;
        }
        function __set($name, $value){
            $this->$name = $value;
        }
       
    }
    function autoload($class){
        //Directorios donde se buscan los archivos de clase
        $directories = [
            dirname(__DIR__).'/scripts/invoice/',
            dirname(__DIR__).'/scripts/client/',
            dirname(__DIR__).'/scripts/product/',
            dirname(__DIR__).'/scripts/seller/',
            dirname(__DIR__).'/scripts/db/',
        ];
        //Convierte el nombre de la clase en un nombre de un archivo relativo

        $classFile = str_replace('\\', '/', $class) . '.php';

        // Recorre los dirrectorios y busca el archivo de la clase

        foreach($directories as $directory){
            $file = $directory.$classFile;

            //verifica si el archivo existe y lo carga
            if (file_exists($file)) {
                require $file;
                break;
            }
        }
    }
    spl_autoload_register('autoload');

    // client::getInstance(json_decode(file_get_contents("php://input"), true))->postClient();
    // client::getInstance(json_decode(file_get_contents("php://input"), true))->getAllClient();
    
?>