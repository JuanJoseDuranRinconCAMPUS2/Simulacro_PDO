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

        $TB = array(
            "db",
            "academic_area",
            "admin_area",
            "areas",
            "campers",
            "chapters",
            "cities",
            "contact_info",
            "countries",
            "design_area",
            "emergency_contact",
            "english_skills",
            "journey",
            "levels",
            "locations",
            "maint_area",
            "marketing_area",
            "modules",
            "optional_topics",
            "personal_ref",
            "position",
            "psychologist",
            "regions",
            "review_skills",
            "routes",
            "software_skills",
            "soft_skills",
            "staff",
            "subjects",
            "teachers",
            "team_educators",
            "team_schedule",
            "thematic_units",
            "themes",
            "topics",
            "trainers",
            "tutors",
            "working_info",
            "work_reference"
        );
        $directories = array();
        foreach ($TB as $name) {
            $directory = dirname(__DIR__).'/scripts/'.$name.'/';
            $directories[] = $directory;
        }
        
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