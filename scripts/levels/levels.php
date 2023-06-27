<?php
    namespace App;
    class levels extends connect{
        private $queryPost= 'INSERT INTO levels(name_level, group_level) VALUES(:N_level, :G_Level)';
        private $queryGetAll = 'SELECT id AS "L_id", name_level AS "N_level", group_level AS "G_Level" FROM levels';
        private $queryUpdate = 'UPDATE levels SET name_level = :N_level, group_level = :G_Level WHERE id = :L_id';
        private $queryDelete = 'DELETE FROM `levels` WHERE `id` = :L_id';
        private $message;
        use getInstance;
        function __construct(private $id = 0, private $name_level = 1, private $group_level = 1){parent::__construct();}
        public function postLevels(){
            try {
                $res = $this->conx->prepare($this->queryPost);
                $res->bindValue("N_level", $this->name_level);
                $res->bindValue("G_Level", $this->group_level);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function getAllLevels(){
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
        public function updateLevels(){
            try {
                $res = $this->conx->prepare($this->queryUpdate);
                $res->bindValue("L_id", $this->id);
                $res->bindValue("N_level", $this->name_level);
                $res->bindValue("G_Level", $this->group_level);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function deleteLevels(){
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
