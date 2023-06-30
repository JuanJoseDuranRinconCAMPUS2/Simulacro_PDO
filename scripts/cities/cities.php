<?php
    namespace App;
    class cities extends connect{
        private $queryPost= 'INSERT INTO cities(name_city, id_region) VALUES(:N_City, :ID_fRegions)';
        private $queryGetAll = 'SELECT id AS "C_id", name_city AS "N_City", id_region AS "ID_fRegions" FROM cities';
        private $queryUpdate = 'UPDATE cities SET name_city = :N_City WHERE id = :C_id';
        private $queryDelete = 'DELETE FROM `cities` WHERE `cities`.`id` = :C_id';
        private $message;
        use getInstance;
        function __construct(private $id = 0, private $name_city = 1, private $id_regions = 1){parent::__construct();}
        public function postCities(){
            try {
                $res = $this->conx->prepare($this->queryPost);
                $res->bindValue("N_City", $this->name_city);
                $res->bindValue("ID_fRegions", $this->id_regions);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function getAllCities(){
            try {
                $res = $this->conx->prepare($this->queryGetAll);
                $res->execute();
                $this->message = $res->fetchAll(\PDO::FETCH_ASSOC);
            } catch(\PDOException $e) {
                $this->message = ["Code"=> $e->getCode(), "Message"=> $res->errorInfo()[2]];
            }finally{
                echo json_encode($this->message);
            }
        }
        public function updateCities(){
            try {
                $res = $this->conx->prepare($this->queryUpdate);
                $res->bindValue("C_id", $this->id);
                $res->bindValue("N_City", $this->name_city);
                $res->bindValue("ID_fRegions", $this->id_regions);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function deleteCities(){
            try {
                $res = $this->conx->prepare($this->queryDelete);
                $res->bindValue("C_id", $this->id); 
                $res->execute();
                $this->message = ["Code"=> 200, "Message"=> $res->fetchAll(\PDO::FETCH_ASSOC)];
            } catch(\PDOException $e) {
                $this->message = ["Code"=> $e->getCode(), "Message"=> $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
    }
?> 
