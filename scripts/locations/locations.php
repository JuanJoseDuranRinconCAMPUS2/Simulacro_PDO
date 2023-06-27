<?php
    namespace App;
    class locations extends connect{
        private $queryPost= 'INSERT INTO locations(name_location) VALUES(:N_Location)';
        private $queryGetAll = 'SELECT id AS "L_id", name_location AS "N_Location" FROM locations';
        private $queryUpdate = 'UPDATE locations SET name_location = :N_Location WHERE id = :L_id';
        private $queryDelete = 'DELETE FROM `locations` WHERE `id` = :L_id';
        private $message;
        use getInstance;
        function __construct(private $id = 0, private $name_location = 1){parent::__construct();}
        public function postLocations(){
            try {
                $res = $this->conx->prepare($this->queryPost);
                $res->bindValue("N_Location", $this->name_location);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function getAllLocations(){
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
        public function updateLocations(){
            try {
                $res = $this->conx->prepare($this->queryUpdate);
                $res->bindValue("L_id", $this->id);
                $res->bindValue("N_Location", $this->name_location);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function deleteLocations(){
            try {
                $res = $this->conx->prepare($this->queryDelete);
                $res->bindValue("L_id", $this->id); 
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
