<?php
namespace App;
class optional_topics extends connect{
    private $queryPost = 'INSERT INTO optional_topics(id_topic, id_team, id_subject, id_camper, id_team_educator) VALUES(:ID_fTopic, :ID_fTeam, :ID_fSubject, :ID_fCamper, :ID_fTeamEducator)';
    private $queryGetAll = 'SELECT id AS "O_id", id_topic AS "ID_fTopic", id_team AS "ID_fTeam", id_subject AS "ID_fSubject", id_camper AS "ID_fCamper", id_team_educator AS "ID_fTeamEducator" FROM optional_topics';
    private $queryUpdate = 'UPDATE optional_topics SET id_topic = :ID_fTopic, id_team = :ID_fTeam, id_subject = :ID_fSubject, id_camper = :ID_fCamper, id_team_educator = :ID_fTeamEducator WHERE id = :O_id';
    private $queryDelete = 'DELETE FROM optional_topics WHERE id = :O_id';
    private $message;
    use getInstance;
    
    function __construct(private $id = 0, private $id_topic = 1, private $id_team = 1, private $id_subject = 1, private $id_camper = 1, private $id_team_educator = 1) {parent::__construct();}
    public function postOptional_topics(){
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("ID_fTopic", $this->id_topic);
            $res->bindValue("ID_fTeam", $this->id_team);
            $res->bindValue("ID_fSubject", $this->id_subject);
            $res->bindValue("ID_fCamper", $this->id_camper);
            $res->bindValue("ID_fTeamEducator", $this->id_team_educator);
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
            $this->message = ["Code"=> 200, "Message"=> $res->fetchAll(\PDO::FETCH_ASSOC)];
        } catch(\PDOException $e) {
            $this->message = ["Code"=> $e->getCode(), "Message"=> $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function updateOptional_topics(){
        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("O_id", $this->id);
            $res->bindValue("ID_fTopic", $this->id_topic);
            $res->bindValue("ID_fTeam", $this->id_team);
            $res->bindValue("ID_fSubject", $this->id_subject);
            $res->bindValue("ID_fCamper", $this->id_camper);
            $res->bindValue("ID_fTeamEducator", $this->id_team_educator);
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