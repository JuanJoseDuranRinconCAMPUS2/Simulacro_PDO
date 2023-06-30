<?php
namespace App;
class teachers extends connect{
    private $queryPost = 'INSERT INTO teachers(id_staff, id_route, id_academic_area, id_position, id_team_educator) VALUES(:ID_fStaff, :ID_fRoute, :ID_fAcademicArea, :ID_fPosition, :ID_fTeamEducator)';
    private $queryGetAll = 'SELECT id AS "T_id", id_staff AS "ID_fStaff", id_route AS "ID_fRoute", id_academic_area AS "ID_fAcademicArea", id_position AS "ID_fPosition", id_team_educator AS "ID_fTeamEducator" FROM teachers';
    private $queryUpdate = 'UPDATE teachers SET id_staff = :ID_fStaff, id_route = :ID_fRoute, id_academic_area = :ID_fAcademicArea, id_position = :ID_fPosition, id_team_educator = :ID_fTeamEducator WHERE id = :T_id';
    private $queryDelete = 'DELETE FROM teachers WHERE id = :T_id';
    private $message;
    use getInstance;
    function __construct(private $id = 1,private $id_staff = 0, private $id_routes = 1, private $id_academic_area = 1, private $id_position = 1, private $id_team_educators = 1){parent::__construct();}
    public function postTeachers(){
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("ID_fStaff", $this->id_staff);
            $res->bindValue("ID_fRoute", $this->id_routes);
            $res->bindValue("ID_fAcademicArea", $this->id_academic_area);
            $res->bindValue("ID_fPosition", $this->id_position);
            $res->bindValue("ID_fTeamEducator", $this->id_team_educators);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function getAllTeachers(){
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
    public function updateTeachers(){
        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("T_id", $this->id);
            $res->bindValue("ID_fStaff", $this->id_staff);
            $res->bindValue("ID_fRoute", $this->id_routes);
            $res->bindValue("ID_fAcademicArea", $this->id_academic_area);
            $res->bindValue("ID_fPosition", $this->id_position);
            $res->bindValue("ID_fTeamEducator", $this->id_team_educators);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function deleteTeachers(){
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
