<?php
    namespace App;
    class modules extends connect{
        private $queryPost= 'INSERT INTO modules(id_theme, name_module,start_date,end_date,description,duration_days) VALUES(:ID_fThemes,:name,:StartDate,:endingDate,:outline,:duration)';
        private $queryGetAll = 'SELECT id AS "M_id", id_theme AS "ID_fThemes",name_module AS "name", start_date AS "StartDate", end_date AS "endingDate", description AS "outline", duration_days AS "duration" FROM modules';
        private $queryUpdate = 'UPDATE modules SET id_theme = :ID_fThemes, name_module = :name, start_date = :StartDate, end_date = :endingDate, description = :outline, duration_days = :duration  WHERE id = :M_id';
        private $queryDelete = 'DELETE FROM `modules` WHERE `id` = :M_id';
        private $message;
        use getInstance;
        function __construct(private $id = 0, private $id_theme = 1, private $name_module = 1, private $start_date = 1, private $end_date = 1, public $description = 1, public $duration_days = 1){parent::__construct();}
        public function postModules(){
            try {
                $res = $this->conx->prepare($this->queryPost);
                $res->bindValue("name", $this->name_module);
                $res->bindValue("ID_fThemes", $this->id_theme);
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
        public function getAllModules(){
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
        public function updateModules(){
            try {
                $res = $this->conx->prepare($this->queryUpdate);
                $res->bindValue("M_id", $this->id);
                $res->bindValue("name", $this->name_module);
                $res->bindValue("ID_fThemes", $this->id_theme);
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
        public function deleteModules(){
            try {
                $res = $this->conx->prepare($this->queryDelete);
                $res->bindValue("M_id", $this->id); 
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
    //     "id_theme" : "1",
    //     "name_module" : "modulo2",
    //     "start_date" : "3243:03:16",
    //     "end_date" : "2344:05:16",
    //     "description" : "aqui no se que poner :3",
    //     "duration_days" : "12"
    // }
?>
