<?php
namespace App;
class optional_topics extends connect{
    private $queryPost = 'INSERT INTO optional_topics(id_topic, id_team, id_subject, id_camper, id_team_educator) VALUES(:ID_fTopic, :ID_fTeam, :ID_fSubject, :ID_fCamper, :ID_fTeamEducator)';
    private $queryGetAll = 'SELECT id AS "O_id", id_topic AS "ID_fTopic", id_team AS "ID_fTeam", id_subject AS "ID_fSubject", id_camper AS "ID_fCamper", id_team_educator AS "ID_fTeamEducator" FROM optional_topics';
    private $queryUpdate = 'UPDATE optional_topics SET id_topic = :ID_fTopic, id_team = :ID_fTeam, id_subject = :ID_fSubject, id_camper = :ID_fCamper, id_team_educator = :ID_fTeamEducator WHERE id = :O_id';
    private $queryDelete = 'DELETE FROM optional_topics WHERE id = :O_id';
    private $message;
    use getInstance;
    
    function __construct(private $id = 0, private $id_topics = 1, private $id_team_schedule = 1, private $id_subjects = 1, private $id_campers = 1, private $id_team_educators = 1) {parent::__construct();}
    public function postOptional_topics(){
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("ID_fTopic", $this->id_topics);
            $res->bindValue("ID_fTeam", $this->id_team_schedule);
            $res->bindValue("ID_fSubject", $this->id_subjects);
            $res->bindValue("ID_fCamper", $this->id_campers);
            $res->bindValue("ID_fTeamEducator", $this->id_team_educators);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function getAllOptional_topics(){
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
    public function updateOptional_topics(){
        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("O_id", $this->id);
            $res->bindValue("ID_fTopic", $this->id_topics);
            $res->bindValue("ID_fTeam", $this->id_team_schedule);
            $res->bindValue("ID_fSubject", $this->id_subjects);
            $res->bindValue("ID_fCamper", $this->id_campers);
            $res->bindValue("ID_fTeamEducator", $this->id_team_educators);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function deleteOptional_topics(){
        try {
            $res = $this->conx->prepare($this->queryDelete);
            $res->bindValue("O_id", $this->id); 
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