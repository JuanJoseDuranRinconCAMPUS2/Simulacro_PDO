<?php
    namespace App;
    class countries extends connect{
        private $queryPost= 'INSERT INTO countries(name_country) VALUES(:N_Country)';
        private $queryGetAll = 'SELECT id AS "C_id", name_country AS "N_Country" FROM countries';
        private $queryUpdate = 'UPDATE countries SET name_country = :N_Country WHERE id = :C_id';
        private $queryDelete = 'DELETE FROM `countries` WHERE `countries`.`id` = :C_id';
        private $message;
        use getInstance;
        function __construct(private $id = 0, private $name_country = 1){parent::__construct();}
        public function postCountries(){
            try {
                $res = $this->conx->prepare($this->queryPost);
                $res->bindValue("N_Country", $this->name_country);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function getAllCountries(){
            try {
                $res = $this->conx->prepare($this->queryGetAll);
                $res->execute();
                $this->message = ["Code"=> 200, "Message"=> $res->fetchAll(\PDO::FETCH_ASSOC)];
            } catch(\PDOException $e) {
                $this->message = ["Code"=> $e->getCode(), "Message"=> $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function updateCountries(){
            try {
                $res = $this->conx->prepare($this->queryUpdate);
                $res->bindValue("C_id", $this->id);
                $res->bindValue("N_Country", $this->name_country);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function deleteCountries(){
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
 
