<?php
    namespace App;
    class subjects extends connect{
        private $queryPost= 'INSERT INTO subjects(name_subject) VALUES(:N_Subject)';
        private $queryGetAll = 'SELECT id AS "S_id", name_subject AS "N_Subject" FROM subjects';
        private $queryUpdate = 'UPDATE subjects SET name_subject = :N_Subject WHERE id = :S_id';
        private $queryDelete = 'DELETE FROM `subjects` WHERE `id` = :S_id';
        private $message;
        use getInstance;
        function __construct(private $id = 0, private $name_subject = 1){parent::__construct();}
        public function postSubjects(){
            try {
                $res = $this->conx->prepare($this->queryPost);
                $res->bindValue("N_Subject", $this->name_subject);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function getAllSubjects(){
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
        public function updateSubjects(){
            try {
                $res = $this->conx->prepare($this->queryUpdate);
                $res->bindValue("S_id", $this->id);
                $res->bindValue("N_Subject", $this->name_subject);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function deleteSubjects(){
            try {
                $res = $this->conx->prepare($this->queryDelete);
                $res->bindValue("S_id", $this->id); 
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
