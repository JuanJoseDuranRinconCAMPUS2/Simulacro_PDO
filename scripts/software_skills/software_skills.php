<?php
namespace App;
class software_skills extends connect{
    private $queryPost = 'INSERT INTO software_skills(id_team_schedule, id_journey, id_trainer, id_location, id_subject) VALUES(:ID_fTeamSchedule, :ID_fJourney, :ID_fTrainer, :ID_fLocation, :ID_fSubject)';
    private $queryGetAll = 'SELECT id AS "S_id", id_team_schedule AS "ID_fTeamSchedule", id_journey AS "ID_fJourney", id_trainer AS "ID_fTrainer", id_location AS "ID_fLocation", id_subject AS "ID_fSubject" FROM software_skills';
    private $queryUpdate = 'UPDATE software_skills SET id_team_schedule = :ID_fTeamSchedule, id_journey = :ID_fJourney, id_trainer = :ID_fTrainer, id_location = :ID_fLocation, id_subject = :ID_fSubject WHERE id = :S_id';
    private $queryDelete = 'DELETE FROM software_skills WHERE id = :S_id';
    private $message;
    use getInstance;
    
    function __construct(private $id = 0, private $id_team_schedule = 1, private $id_journey = 1, private $id_trainers = 1, private $id_locations = 1, private $id_subjects = 1) {parent::__construct();}
    public function postSoftware_skills(){
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("ID_fTeamSchedule", $this->id_team_schedule);
            $res->bindValue("ID_fJourney", $this->id_journey);
            $res->bindValue("ID_fTrainer", $this->id_trainers);
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
    public function getAllSoftware_skills(){
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
    public function updateSoftware_skills(){
        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("S_id", $this->id);
            $res->bindValue("ID_fTeamSchedule", $this->id_team_schedule);
            $res->bindValue("ID_fJourney", $this->id_journey);
            $res->bindValue("ID_fTrainer", $this->id_trainers);
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
    public function deleteSoftware_skills(){
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
?>