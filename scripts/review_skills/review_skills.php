<?php
namespace App;
class review_skills extends connect{
    private $queryPost = 'INSERT INTO review_skills(id_team_schedule, id_journey, id_tutor, id_location) VALUES(:ID_fTeamSchedule, :ID_fJourney, :ID_fTutor, :ID_fLocation)';
    private $queryGetAll = 'SELECT id AS "R_id", id_team_schedule AS "ID_fTeamSchedule", id_journey AS "ID_fJourney", id_tutor AS "ID_fTutor", id_location AS "ID_fLocation" FROM review_skills';
    private $queryUpdate = 'UPDATE review_skills SET id_team_schedule = :ID_fTeamSchedule, id_journey = :ID_fJourney, id_tutor = :ID_fTutor, id_location = :ID_fLocation WHERE id = :R_id';
    private $queryDelete = 'DELETE FROM review_skills WHERE id = :R_id';
    private $message;
    use getInstance;
    
    function __construct(private $id = 0, private $id_team_schedule = 1, private $id_journey = 1, private $id_tutor = 1, private $id_location = 1) {parent::__construct();}
    public function postReview_skills(){
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("ID_fTeamSchedule", $this->id_team_schedule);
            $res->bindValue("ID_fJourney", $this->id_journey);
            $res->bindValue("ID_fTutor", $this->id_tutor);
            $res->bindValue("ID_fLocation", $this->id_location);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function getAllReview_skills(){
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
    public function updateReview_skills(){
        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("R_id", $this->id);
            $res->bindValue("ID_fTeamSchedule", $this->id_team_schedule);
            $res->bindValue("ID_fJourney", $this->id_journey);
            $res->bindValue("ID_fTutor", $this->id_tutor);
            $res->bindValue("ID_fLocation", $this->id_location);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function deleteReview_skills(){
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
?>