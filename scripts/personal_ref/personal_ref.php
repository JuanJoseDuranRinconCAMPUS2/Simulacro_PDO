<?php
    namespace App;
    class personal_ref extends connect{
        private $queryPost= 'INSERT INTO personal_ref(full_name,cel_number,relationship,occupation) VALUES(:name,:phone,:relation,:job)';
        private $queryGetAll = 'SELECT id AS "P_id", full_name AS "name", cel_number AS "phone", relationship AS "relation", occupation AS "job" FROM personal_ref';
        private $queryUpdate = 'UPDATE personal_ref SET full_name = :name, cel_number = :phone, relationship = :relation, occupation = :job  WHERE id = :P_id';
        private $queryDelete = 'DELETE FROM `personal_ref` WHERE `personal_ref`.`id` = :P_id';
        private $message;
        use getInstance;
        function __construct(private $id = 0, private $full_name = 1, private $cel_number = 1, private $relationship = 1, public $occupation = 1){parent::__construct();}
        public function postPersonal_ref(){
            try {
                $res = $this->conx->prepare($this->queryPost);
                $res->bindValue("name", $this->full_name);
                $res->bindValue("phone", $this->cel_number);
                $res->bindValue("relation", $this->relationship);
                $res->bindValue("job", $this->occupation);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function getAllPersonal_ref(){
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
        public function updatePersonal_ref(){
            try {
                $res = $this->conx->prepare($this->queryUpdate);
                $res->bindValue("P_id", $this->id);
                $res->bindValue("name", $this->full_name);
                $res->bindValue("phone", $this->cel_number);
                $res->bindValue("relation", $this->relationship);
                $res->bindValue("job", $this->occupation);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function deletePersonal_ref(){
            try {
                $res = $this->conx->prepare($this->queryDelete);
                $res->bindValue("P_id", $this->id); 
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
