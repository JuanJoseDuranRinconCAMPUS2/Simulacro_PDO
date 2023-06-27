<?php
    namespace App;
    class routes extends connect{
        private $queryPost= 'INSERT INTO routes(name_route,start_date,end_date,description,duration_month) VALUES(:name,:StartDate,:endingDate,:outline,:duration)';
        private $queryGetAll = 'SELECT id AS "R_id", name_route AS "name", start_date AS "StartDate", end_date AS "endingDate", description AS "outline", duration_month AS "duration" FROM routes';
        private $queryUpdate = 'UPDATE routes SET name_route = :name, start_date = :StartDate, end_date = :endingDate, description = :outline, duration_month = :duration  WHERE id = :R_id';
        private $queryDelete = 'DELETE FROM `routes` WHERE `id` = :R_id';
        private $message;
        use getInstance;
        function __construct(private $id = 0, private $name_route = 1, private $start_date = 1, private $end_date = 1, public $description = 1, public $duration_month = 1){parent::__construct();}
        public function postRoutes(){
            try {
                $res = $this->conx->prepare($this->queryPost);
                $res->bindValue("name", $this->name_route);
                $res->bindValue("StartDate", $this->start_date);
                $res->bindValue("endingDate", $this->end_date);
                $res->bindValue("outline", $this->description);
                $res->bindValue("duration", $this->duration_month);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function getAllRoutes(){
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
        public function updateRoutes(){
            try {
                $res = $this->conx->prepare($this->queryUpdate);
                $res->bindValue("R_id", $this->id);
                $res->bindValue("name", $this->name_route);
                $res->bindValue("StartDate", $this->start_date);
                $res->bindValue("endingDate", $this->end_date);
                $res->bindValue("outline", $this->description);
                $res->bindValue("duration", $this->duration_month);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function deleteRoutes(){
            try {
                $res = $this->conx->prepare($this->queryDelete);
                $res->bindValue("R_id", $this->id); 
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
 
