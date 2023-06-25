<?php
    namespace App;
    class topics extends connect{
        private $queryPost= 'INSERT INTO topics(id_module, name_topic,start_date,end_date,description,duration_days) VALUES(:ID_fModule,:name,:StartDate,:endingDate,:outline,:duration)';
        private $queryGetAll = 'SELECT id AS "T_id", id_module AS "ID_fModule",name_topic AS "name", start_date AS "StartDate", end_date AS "endingDate", description AS "outline", duration_days AS "duration" FROM topics';
        private $queryUpdate = 'UPDATE topics SET id_module = :ID_fModule, name_topic = :name, start_date = :StartDate, end_date = :endingDate, description = :outline, duration_days = :duration  WHERE id = :T_id';
        private $queryDelete = 'DELETE FROM `topics` WHERE `id` = :T_id';
        private $message;
        use getInstance;
        function __construct(private $id = 0, private $id_module = 1, private $name_topic = 1, private $start_date = 1, private $end_date = 1, public $description = 1, public $duration_days = 1){parent::__construct();}
        public function postTopics(){
            try {
                $res = $this->conx->prepare($this->queryPost);
                $res->bindValue("name", $this->name_topic);
                $res->bindValue("ID_fModule", $this->id_module);
                $res->bindValue("StartDate", $this->start_date);
                $res->bindValue("endingDate", $this->end_date);
                $res->bindValue("outline", $this->description);
                $res->bindValue("duration", $this->duration_days);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function getAllTopics(){
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
        public function updateTopics(){
            try {
                $res = $this->conx->prepare($this->queryUpdate);
                $res->bindValue("T_id", $this->id);
                $res->bindValue("name", $this->name_topic);
                $res->bindValue("ID_fModule", $this->id_module);
                $res->bindValue("StartDate", $this->start_date);
                $res->bindValue("endingDate", $this->end_date);
                $res->bindValue("outline", $this->description);
                $res->bindValue("duration", $this->duration_days);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function deleteTopics(){
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

    // {
    //     "id" : "4",
    //     "id_module" : "1",
    //     "name_topic" : "sql",
    //     "start_date" : "3243:03:16",
    //     "end_date" : "2344:05:16",
    //     "description" : " veremos sql",
    //     "duration_days" : "10"
    // }
?>
