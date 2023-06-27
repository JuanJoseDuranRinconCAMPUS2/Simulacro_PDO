<?php
    namespace App;
    class themes extends connect{
        private $queryPost= 'INSERT INTO themes(id_chapter, name_theme,start_date,end_date,description,duration_days) VALUES(:ID_fChapter,:name,:StartDate,:endingDate,:outline,:duration)';
        private $queryGetAll = 'SELECT id AS "T_id", id_chapter AS "ID_fChapter",name_theme AS "name", start_date AS "StartDate", end_date AS "endingDate", description AS "outline", duration_days AS "duration" FROM themes';
        private $queryUpdate = 'UPDATE themes SET id_chapter = :ID_fChapter, name_theme = :name, start_date = :StartDate, end_date = :endingDate, description = :outline, duration_days = :duration  WHERE id = :T_id';
        private $queryDelete = 'DELETE FROM `themes` WHERE `id` = :T_id';
        private $message;
        use getInstance;
        function __construct(private $id = 0, private $id_chapter = 1, private $name_theme = 1, private $start_date = 1, private $end_date = 1, public $description = 1, public $duration_days = 1){parent::__construct();}
        public function postThemes(){
            try {
                $res = $this->conx->prepare($this->queryPost);
                $res->bindValue("name", $this->name_theme);
                $res->bindValue("ID_fChapter", $this->id_chapter);
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
        public function getAllThemes(){
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
        public function updateThemes(){
            try {
                $res = $this->conx->prepare($this->queryUpdate);
                $res->bindValue("T_id", $this->id);
                $res->bindValue("name", $this->name_theme);
                $res->bindValue("ID_fChapter", $this->id_chapter);
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
        public function deleteThemes(){
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
    //     "id" : "2",
    //     "id_chapter" : "2",
    //     "name_theme" : "hola",
    //     "start_date" : "3333:03:16",
    //     "end_date" : "1222:05:16",
    //     "description" : "aqui se vera mysql",
    //     "duration_days" : "23"
    // }
?>
