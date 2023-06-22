<?php
    abstract class credentials{
        //CREDENCIALES CAMPUS
        // protected $host = '172.16.48.204';
        // private $username = 'sputnik';
        // private $password = 'Sp3tn1kC@';
        // protected $dbname = 'campusland';
        //CREDENCIALES LOCAL
        protected $host = 'localhost';
        private $username = 'root';
        private $password = '';
        protected $dbname = 'campusland';
        public function __get($name){
            return $this->{$name};
        }
        function __construct(){
            
        }
    }
?>