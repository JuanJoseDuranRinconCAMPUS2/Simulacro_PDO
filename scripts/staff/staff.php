<?php
    namespace App;
    class staff extends connect{
        private $queryPost = 'INSERT INTO staff(doc, first_name, second_name, first_surname, second_surname, eps, id_area, id_city) VALUES(:CC, :1name, :2name, :1surname, :2surname, :health_Insurance, :ID_fArea, :ID_fCity)';
        private $queryGetAll = 'SELECT id AS "S_id", doc AS "CC", first_name AS "1name", second_name AS "2name", first_surname AS "1surname", second_surname AS "2surname", eps AS "health_Insurance", id_area AS "ID_fArea", id_city AS "ID_fCity" FROM staff';
        private $queryUpdate = 'UPDATE staff SET doc = :CC, first_name = :1name, second_name = :2name, first_surname = :1surname, second_surname = :2surname, eps = :health_Insurance, id_area = :ID_fArea, id_city = :ID_fCity WHERE id = :S_id';
        private $queryDelete = 'DELETE FROM staff WHERE id = :S_id';
        private $message;
        use getInstance;
        function __construct(private $id = 0, private $doc = 1, private $first_name = 1, private $second_name = 1, private $first_surname = 1, public $second_surname = 1, public $eps = 1, public $id_areas = 1, public $id_cities = 1){parent::__construct();}
        public function postStaff(){
            try {
                $res = $this->conx->prepare($this->queryPost);
                $res->bindValue("CC", $this->doc);
                $res->bindValue("1name", $this->first_name);
                $res->bindValue("2name", $this->second_name);
                $res->bindValue("1surname", $this->first_surname);
                $res->bindValue("2surname", $this->second_surname);
                $res->bindValue("health_Insurance", $this->eps);
                $res->bindValue("ID_fArea", $this->id_areas);
                $res->bindValue("ID_fCity", $this->id_cities);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function getAllStaff(){
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
        public function updateStaff(){
            try {
                $res = $this->conx->prepare($this->queryUpdate);
                $res->bindValue("S_id", $this->id);
                $res->bindValue("CC", $this->doc);
                $res->bindValue("1name", $this->first_name);
                $res->bindValue("2name", $this->second_name);
                $res->bindValue("1surname", $this->first_surname);
                $res->bindValue("2surname", $this->second_surname);
                $res->bindValue("health_Insurance", $this->eps);
                $res->bindValue("ID_fArea", $this->id_areas);
                $res->bindValue("ID_fCity", $this->id_cities);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function deleteStaff(){
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