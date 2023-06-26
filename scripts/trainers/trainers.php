<?php
namespace App;
class trainers extends connect{
    private $queryPost = 'INSERT INTO trainers(id_staff, id_level, id_route, id_academic_area, id_position, id_team_educator) VALUES(:ID_fStaff, :ID_fLevel, :ID_fRoute, :ID_fAcademicArea, :ID_fPosition, :ID_fTeamEducator)';
    private $queryGetAll = 'SELECT id AS "T_id", id_staff AS "ID_fStaff", id_level AS "ID_fLevel", id_route AS "ID_fRoute", id_academic_area AS "ID_fAcademicArea", id_position AS "ID_fPosition", id_team_educator AS "ID_fTeamEducator" FROM trainers';
    private $queryUpdate = 'UPDATE trainers SET id_staff = :ID_fStaff, id_level = :ID_fLevel, id_route = :ID_fRoute, id_academic_area = :ID_fAcademicArea, id_position = :ID_fPosition, id_team_educator = :ID_fTeamEducator WHERE id = :T_id';
    private $queryDelete = 'DELETE FROM trainers WHERE id = :T_id';
    private $message;
    use getInstance;
    function __construct(private $id = 1, private $id_staff = 1, private $id_level = 1, private $id_route = 1, private $id_academic_area = 1, private $id_position = 1, private $id_team_educator = 1){parent::__construct();}
    public function postTrainers(){
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("ID_fStaff", $this->id_staff);
            $res->bindValue("ID_fLevel", $this->id_level);
            $res->bindValue("ID_fRoute", $this->id_route);
            $res->bindValue("ID_fAcademicArea", $this->id_academic_area);
            $res->bindValue("ID_fPosition", $this->id_position);
            $res->bindValue("ID_fTeamEducator", $this->id_team_educator);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function getAllTrainers(){
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
    public function updateTrainers(){
        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("T_id", $this->id);
            $res->bindValue("ID_fStaff", $this->id_staff);
            $res->bindValue("ID_fLevel", $this->id_level);
            $res->bindValue("ID_fRoute", $this->id_route);
            $res->bindValue("ID_fAcademicArea", $this->id_academic_area);
            $res->bindValue("ID_fPosition", $this->id_position);
            $res->bindValue("ID_fTeamEducator", $this->id_team_educator);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function deleteTrainers(){
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
?> 
 
