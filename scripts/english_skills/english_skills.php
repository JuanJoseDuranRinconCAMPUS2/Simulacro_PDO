<?php
    namespace App;
    class english_skills extends connect{
        private $queryPost = 'INSERT INTO english_skills(id_team_schedule, id_journey, id_teacher, id_location, id_subject) VALUES(:ID_fTeamSchedule, :ID_fJourney, :ID_fTeacher, :ID_fLocation, :ID_fSubject)';
        private $queryGetAll = 'SELECT id AS "E_id", id_team_schedule AS "ID_fTeamSchedule", id_journey AS "ID_fJourney", id_teacher AS "ID_fTeacher", id_location AS "ID_fLocation", id_subject AS "ID_fSubject" FROM english_skills';
        private $queryUpdate = 'UPDATE english_skills SET id_team_schedule = :ID_fTeamSchedule, id_journey = :ID_fJourney, id_teacher = :ID_fTeacher, id_location = :ID_fLocation, id_subject = :ID_fSubject WHERE id = :E_id';
        private $queryDelete = 'DELETE FROM english_skills WHERE id = :E_id';
        private $message;
        use getInstance;
        function __construct(private $id = 0, private $id_team_schedule = 1, private $id_journey = 1, private $id_teachers = 1, private $id_locations = 1, private $id_subjects = 1){parent::__construct();}
        public function postEnglish_skills(){
            try {
                $res = $this->conx->prepare($this->queryPost);
                $res->bindValue("ID_fTeamSchedule", $this->id_team_schedule);
                $res->bindValue("ID_fJourney", $this->id_journey);
                $res->bindValue("ID_fTeacher", $this->id_teachers);
                $res->bindValue("ID_fLocation", $this->id_locations);
                $res->bindValue("ID_fSubject", $this->id_subjects);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function getAllEnglish_skills(){
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
        public function updateEnglish_skills(){
            try {
                $res = $this->conx->prepare($this->queryUpdate);
                $res->bindValue("E_id", $this->id);
                $res->bindValue("ID_fTeamSchedule", $this->id_team_schedule);
                $res->bindValue("ID_fJourney", $this->id_journey);
                $res->bindValue("ID_fTeacher", $this->id_teachers);
                $res->bindValue("ID_fLocation", $this->id_locations);
                $res->bindValue("ID_fSubject", $this->id_subjects);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function deleteEnglish_skills(){
            try {
                $res = $this->conx->prepare($this->queryDelete);
                $res->bindValue("E_id", $this->id); 
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