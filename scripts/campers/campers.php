<?php
namespace App;
class campers extends connect{
    private $queryPost = 'INSERT INTO campers(id_team_schedule, id_route, id_trainer, id_psycologist, id_teacher, id_level, id_journey, id_staff) VALUES(:ID_fTeamSchedule, :ID_fRoute, :ID_fTrainer, :ID_fPsycologist, :ID_fTeacher, :ID_fLevel, :ID_fJourney, :ID_fStaff)';
    private $queryGetAll = 'SELECT id AS "C_id", id_team_schedule AS "ID_fTeamSchedule", id_route AS "ID_fRoute", id_trainer AS "ID_fTrainer", id_psycologist AS "ID_fPsycologist", id_teacher AS "ID_fTeacher", id_level AS "ID_fLevel", id_journey AS "ID_fJourney", id_staff AS "ID_fStaff" FROM campers';
    private $queryUpdate = 'UPDATE campers SET id_team_schedule = :ID_fTeamSchedule, id_route = :ID_fRoute, id_trainer = :ID_fTrainer, id_psycologist = :ID_fPsycologist, id_teacher = :ID_fTeacher, id_level = :ID_fLevel, id_journey = :ID_fJourney, id_staff = :ID_fStaff WHERE id = :C_id';
    private $queryDelete = 'DELETE FROM campers WHERE id = :C_id';
    private $message;
    use getInstance;
    function __construct(private $id = 0, private $id_team_schedule = 1, private $id_route = 1, private $id_trainer = 1, private $id_psycologist = 1, private $id_teacher = 1, private $id_level = 1, private $id_journey = 1, private $id_staff = 1) {parent::__construct();}
    public function postCampers(){
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("ID_fTeamSchedule", $this->id_team_schedule);
            $res->bindValue("ID_fRoute", $this->id_route);
            $res->bindValue("ID_fTrainer", $this->id_trainer);
            $res->bindValue("ID_fPsycologist", $this->id_psycologist);
            $res->bindValue("ID_fTeacher", $this->id_teacher);
            $res->bindValue("ID_fLevel", $this->id_level);
            $res->bindValue("ID_fJourney", $this->id_journey);
            $res->bindValue("ID_fStaff", $this->id_staff);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function getAllCampers(){
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
    public function updateCampers(){
        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("C_id", $this->id);
            $res->bindValue("ID_fTeamSchedule", $this->id_team_schedule);
            $res->bindValue("ID_fRoute", $this->id_route);
            $res->bindValue("ID_fTrainer", $this->id_trainer);
            $res->bindValue("ID_fPsycologist", $this->id_psycologist);
            $res->bindValue("ID_fTeacher", $this->id_teacher);
            $res->bindValue("ID_fLevel", $this->id_level);
            $res->bindValue("ID_fJourney", $this->id_journey);
            $res->bindValue("ID_fStaff", $this->id_staff);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function deleteCampers(){
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
?>