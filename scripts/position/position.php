<?php
    class position extends connect{
        private $queryPost = 'INSERT INTO `position` (name_position, arl) VALUES (:N_Position, :sure)';
        private $queryGetAll = 'SELECT id AS "P_id", name_position AS "N_Position", arl AS "sure" FROM `position`';
        private $queryUpdate = 'UPDATE `position` SET name_position = :N_Position, arl = :sure WHERE id = :P_id';
        private $queryDelete = 'DELETE FROM `position` WHERE id = :P_id';
        private $message;
        use getInstance;
        function __construct(private $id = 0, private $name_position = 1, public $arl = 1){parent::__construct();}
        public function postPosition(){
            try {
                $res = $this->conx->prepare($this->queryPost);
                $res->bindValue("N_Position", $this->name_position);
                $res->bindValue("sure", $this->arl);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function getAllPosition(){
            try {
                $res = $this->conx->prepare($this->queryGetAll);
                $res->execute();
                $this->message = ["Code"=> 200, "Message"=> $res->fetchAll(PDO::FETCH_ASSOC)];
            } catch(\PDOException $e) {
                $this->message = ["Code"=> $e->getCode(), "Message"=> $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function updatePosition(){
            try {
                $res = $this->conx->prepare($this->queryUpdate);
                $res->bindValue("P_id", $this->id);
                $res->bindValue("N_Position", $this->name_position);
                $res->bindValue("sure", $this->arl);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function deletePosition(){
            try {
                $res = $this->conx->prepare($this->queryDelete);
                $res->bindValue("P_id", $this->id); 
                $res->execute();
                $this->message = ["Code"=> 200, "Message"=> $res->fetchAll(PDO::FETCH_ASSOC)];
            } catch(\PDOException $e) {
                $this->message = ["Code"=> $e->getCode(), "Message"=> $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
    }
?> 
 
