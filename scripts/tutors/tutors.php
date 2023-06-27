<?php
namespace App;
class tutors extends connect{
    private $queryPost = 'INSERT INTO tutors(id_staff, id_academic_area, id_position) VALUES(:ID_fStaff, :ID_fAcademicArea, :ID_fPosition)';
    private $queryGetAll = 'SELECT id AS "T_id", id_staff AS "ID_fStaff", id_academic_area AS "ID_fAcademicArea", id_position AS "ID_fPosition" FROM tutors';
    private $queryUpdate = 'UPDATE tutors SET id_staff = :ID_fStaff, id_academic_area = :ID_fAcademicArea, id_position = :ID_fPosition WHERE id = :T_id';
    private $queryDelete = 'DELETE FROM tutors WHERE id = :T_id';
    private $message;
    use getInstance;
    function __construct(private $id = 0, private $id_staff = 1, private $id_academic_area = 1, private $id_position = 1){parent::__construct();}
    public function postTutors(){
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("ID_fStaff", $this->id_staff);
            $res->bindValue("ID_fAcademicArea", $this->id_academic_area);
            $res->bindValue("ID_fPosition", $this->id_position);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function getAllTutors(){
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
    public function updateTutors(){
        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("T_id", $this->id);
            $res->bindValue("ID_fStaff", $this->id_staff);
            $res->bindValue("ID_fAcademicArea", $this->id_academic_area);
            $res->bindValue("ID_fPosition", $this->id_position);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function deleteTutors(){
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