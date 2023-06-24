<?php
    namespace App;
    class journey extends connect{
        private $queryPost = 'INSERT INTO `journey` (name_journey, check_in, check_out) VALUES (:N_Journey, :start_Date, :ending_Date)';
        private $queryGetAll = 'SELECT id AS "J_id", name_journey AS "N_Journey", check_in AS "start_Date", check_out AS "ending_Date" FROM `journey`';
        private $queryUpdate = 'UPDATE `journey` SET name_journey = :N_Journey, check_in = :start_Date, check_out = :ending_Date WHERE id = :J_id';
        private $queryDelete = 'DELETE FROM `journey` WHERE id = :J_id';
        private $message;
        use getInstance;
        function __construct(private $id = 0, private $name_journey = 1, private $check_in = 1, private $check_out = 1){parent::__construct();}
        public function postJourney(){
            try {
                $res = $this->conx->prepare($this->queryPost);
                $res->bindValue("N_Journey", $this->name_journey);
                $res->bindValue("start_Date", $this->check_in);
                $res->bindValue("ending_Date", $this->check_out);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function getAllJourney(){
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
        public function updateJourney(){
            try {
                $res = $this->conx->prepare($this->queryUpdate);
                $res->bindValue("J_id", $this->id);
                $res->bindValue("N_Journey", $this->name_journey);
                $res->bindValue("start_Date", $this->check_in);
                $res->bindValue("ending_Date", $this->check_out);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function deleteJourney(){
            try {
                $res = $this->conx->prepare($this->queryDelete);
                $res->bindValue("J_id", $this->id); 
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
