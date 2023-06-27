<?php
    namespace App;
    class team_educators extends connect{
        private $queryPost= 'INSERT INTO team_educators(name_rol) VALUES(:N_Rol)';
        private $queryGetAll = 'SELECT id AS "T_id", name_rol AS "N_Rol" FROM team_educators';
        private $queryUpdate = 'UPDATE team_educators SET name_rol = :N_Rol WHERE id = :T_id';
        private $queryDelete = 'DELETE FROM `team_educators` WHERE `id` = :T_id';
        private $message;
        use getInstance;
        function __construct(private $id = 0, private $name_rol = 1){parent::__construct();}
        public function postTeam_educators(){
            try {
                $res = $this->conx->prepare($this->queryPost);
                $res->bindValue("N_Rol", $this->name_rol);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function getAllTeam_educators(){
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
        public function updateTeam_educators(){
            try {
                $res = $this->conx->prepare($this->queryUpdate);
                $res->bindValue("T_id", $this->id);
                $res->bindValue("N_Rol", $this->name_rol);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function deleteTeam_educators(){
            try {
                $res = $this->conx->prepare($this->queryDelete);
                $res->bindValue("T_id", $this->id); 
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
