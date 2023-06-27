<?php
    namespace App;
    class thematic_units extends connect{
        private $queryPost= 'INSERT INTO thematic_units(id_route, name_thematics_units,start_date,end_date,description,duration_days) VALUES(:ID_fRoute,:name,:StartDate,:endingDate,:outline,:duration)';
        private $queryGetAll = 'SELECT id AS "T_id", id_route AS "ID_fRoute",name_thematics_units AS "name", start_date AS "StartDate", end_date AS "endingDate", description AS "outline", duration_days AS "duration" FROM thematic_units';
        private $queryUpdate = 'UPDATE thematic_units SET id_route = :ID_fRoute, name_thematics_units = :name, start_date = :StartDate, end_date = :endingDate, description = :outline, duration_days = :duration  WHERE id = :T_id';
        private $queryDelete = 'DELETE FROM `thematic_units` WHERE `id` = :T_id';
        private $message;
        use getInstance;
        function __construct(private $id = 0, private $id_route = 1, private $name_thematics_units = 1, private $start_date = 1, private $end_date = 1, public $description = 1, public $duration_days = 1){parent::__construct();}
        public function postThematic_units(){
            try {
                $res = $this->conx->prepare($this->queryPost);
                $res->bindValue("name", $this->name_thematics_units);
                $res->bindValue("ID_fRoute", $this->id_route);
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
        public function getAllThematic_units(){
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
        public function updateThematic_units(){
            try {
                $res = $this->conx->prepare($this->queryUpdate);
                $res->bindValue("T_id", $this->id);
                $res->bindValue("name", $this->name_thematics_units);
                $res->bindValue("ID_fRoute", $this->id_route);
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
        public function deleteThematic_units(){
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
    //     "id" : "3",
    //     "name_route" : "sql",
    //     "start_date" : "2023:05:16",
    //     "end_date" : "2023:06:20",
    //     "description" : "ruta donde los campers aprenderan php",
    //     "duration_month" : "1"
    // }
?>
