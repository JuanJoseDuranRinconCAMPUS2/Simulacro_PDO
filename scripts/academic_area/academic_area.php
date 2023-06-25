<?php
namespace App;
class academic_area extends connect{
    private $queryPost = 'INSERT INTO academic_area(id_area, id_staff, id_position, id_journeys) VALUES(:ID_fArea, :ID_fStaff, :ID_fPosition, :ID_fJourneys)';
    private $queryGetAll = 'SELECT id AS "A_id", id_area AS "ID_fArea", id_staff AS "ID_fStaff", id_position AS "ID_fPosition", id_journeys AS "ID_fJourneys" FROM academic_area';
    private $queryUpdate = 'UPDATE academic_area SET id_area = :ID_fArea, id_staff = :ID_fStaff, id_position = :ID_fPosition, id_journeys = :ID_fJourneys WHERE id = :A_id';
    private $queryDelete = 'DELETE FROM academic_area WHERE id = :A_id';
    private $message;
    use getInstance;
    function __construct(private $id = 0, private $id_area = 1, private $id_staff = 1, private $id_position = 1, private $id_journeys = 1){parent::__construct();}
    public function postAcademic_area(){
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("ID_fArea", $this->id_area);
            $res->bindValue("ID_fStaff", $this->id_staff);
            $res->bindValue("ID_fPosition", $this->id_position);
            $res->bindValue("ID_fJourneys", $this->id_journeys);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function getAllAcademic_area(){
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
    public function updateAcademic_area(){
        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("A_id", $this->id);
            $res->bindValue("ID_fArea", $this->id_area);
            $res->bindValue("ID_fStaff", $this->id_staff);
            $res->bindValue("ID_fPosition", $this->id_position);
            $res->bindValue("ID_fJourneys", $this->id_journeys);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function deleteAcademic_area(){
        try {
            $res = $this->conx->prepare($this->queryDelete);
            $res->bindValue("A_id", $this->id); 
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
