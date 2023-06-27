<?php
    namespace App;
    class work_reference extends connect{
        private $queryPost= 'INSERT INTO work_reference(full_name,cel_number,position,company) VALUES(:name,:phone,:rol,:n_Company)';
        private $queryGetAll = 'SELECT id AS "N_id", full_name AS "name", cel_number AS "phone", position AS "rol", company AS "n_Company" FROM work_reference';
        private $queryUpdate = 'UPDATE work_reference SET full_name = :name, cel_number = :phone, position = :rol, company = :n_Company  WHERE id = :N_id';
        private $queryDelete = 'DELETE FROM `work_reference` WHERE `work_reference`.`id` = :N_id';
        private $message;
        use getInstance;
        function __construct(private $id = 0, private $full_name = 1, private $cel_number = 1, private $position = 1, public $company = 1){parent::__construct();}
        public function postWork_reference(){
            try {
                $res = $this->conx->prepare($this->queryPost);
                $res->bindValue("name", $this->full_name);
                $res->bindValue("phone", $this->cel_number);
                $res->bindValue("rol", $this->position);
                $res->bindValue("n_Company", $this->company);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function getAllWork_reference(){
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
        public function updateWork_reference(){
            try {
                $res = $this->conx->prepare($this->queryUpdate);
                $res->bindValue("N_id", $this->ID);
                $res->bindValue("name", $this->full_name);
                $res->bindValue("phone", $this->cel_number);
                $res->bindValue("rol", $this->position);
                $res->bindValue("n_Company", $this->company);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function deleteWork_reference(){
            try {
                $res = $this->conx->prepare($this->queryDelete);
                $res->bindValue("N_id", $this->ID); 
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
