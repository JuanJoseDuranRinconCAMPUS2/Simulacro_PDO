<?php
    namespace App;
    class regions extends connect{
        
        private $queryPost= 'INSERT INTO regions(name_region, id_country) VALUES(:N_Region, :ID_fCuontry)';
        private $queryGetAll = 'SELECT id AS "R_id", name_region AS "N_Region", id_country AS "ID_fCuontry" FROM regions';
        private $queryUpdate = 'UPDATE regions SET name_region = :N_Region WHERE id = :R_id';
        private $queryDelete = 'DELETE FROM `regions` WHERE `regions`.`id` = :R_id';
        private $message;
        use getInstance;
        function __construct(private $id = 0, private $name_region = 1){parent::__construct();}
        public function postRegions(){
            try {
                $res = $this->conx->prepare($this->queryPost);
                $res->bindValue("N_Region", $this->name_region);
                $res->bindValue("ID_fCuontry", $this->id_country);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function getAllRegions(){
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
        public function updateRegions(){
            try {
                $res = $this->conx->prepare($this->queryUpdate);
                $res->bindValue("R_id", $this->id);
                $res->bindValue("N_Region", $this->name_region);
                $res->bindValue("ID_fCuontry", $this->id_country);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function deleteRegions(){
            try {
                $res = $this->conx->prepare($this->queryDelete);
                $res->bindValue("R_id", $this->id); 
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
 
