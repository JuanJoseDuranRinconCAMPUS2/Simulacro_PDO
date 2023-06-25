<?php
    namespace App;
    class chapters extends connect{
        private $queryPost= 'INSERT INTO chapters(id_thematic_units, name_chapter,start_date,end_date,description,duration_days) VALUES(:ID_fThematic,:name,:StartDate,:endingDate,:outline,:duration)';
        private $queryGetAll = 'SELECT id AS "C_id", id_thematic_units AS "ID_fThematic",name_chapter AS "name", start_date AS "StartDate", end_date AS "endingDate", description AS "outline", duration_days AS "duration" FROM chapters';
        private $queryUpdate = 'UPDATE chapters SET id_thematic_units = :ID_fThematic, name_chapter = :name, start_date = :StartDate, end_date = :endingDate, description = :outline, duration_days = :duration  WHERE id = :C_id';
        private $queryDelete = 'DELETE FROM `chapters` WHERE `id` = :C_id';
        private $message;
        use getInstance;
        function __construct(private $id = 0, private $id_thematic_units, private $name_chapter = 1, private $start_date = 1, private $end_date = 1, public $description = 1, public $duration_days = 1){parent::__construct();}
        public function postChapters(){
            try {
                $res = $this->conx->prepare($this->queryPost);
                $res->bindValue("name", $this->name_chapter);
                $res->bindValue("ID_fThematic", $this->id_thematic_units);
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
        public function getAllChapters(){
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
        public function updateChapters(){
            try {
                $res = $this->conx->prepare($this->queryUpdate);
                $res->bindValue("C_id", $this->id);
                $res->bindValue("name", $this->name_chapter);
                $res->bindValue("ID_fThematic", $this->id_thematic_units);
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
        public function deleteChapters(){
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

    // {
    //     "id" : "3",
    //     "id_thematic_units" : "3",
    //     "name_chapter" : "herobrine",
    //     "start_date" : "2023:03:16",
    //     "end_date" : "2023:05:16",
    //     "description" : "aqui se vera terminal",
    //     "duration_days" : "60"
    //  }
?>
