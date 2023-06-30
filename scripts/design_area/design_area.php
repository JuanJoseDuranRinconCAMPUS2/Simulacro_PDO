<?php
namespace App;
class design_area extends connect{
    private $queryPost = 'INSERT INTO design_area(id_area, id_staff, id_position, id_journey) VALUES(:ID_fArea, :ID_fStaff, :ID_fPosition, :ID_fJourney)';
    private $queryGetAll = 'SELECT id AS "D_id", id_area AS "ID_fArea", id_staff AS "ID_fStaff", id_position AS "ID_fPosition", id_journey AS "ID_fJourney" FROM design_area';
    private $queryUpdate = 'UPDATE design_area SET id_area = :ID_fArea, id_staff = :ID_fStaff, id_position = :ID_fPosition, id_journey = :ID_fJourney WHERE id = :D_id';
    private $queryDelete = 'DELETE FROM design_area WHERE id = :D_id';
    private $message;
    use getInstance;
    function __construct(private $id = 0, private $id_areas = 1, private $id_staff = 1, private $id_position = 1, private $id_journey = 1){parent::__construct();}
    public function postDesign_area(){
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("ID_fArea", $this->id_areas);
            $res->bindValue("ID_fStaff", $this->id_staff);
            $res->bindValue("ID_fPosition", $this->id_position);
            $res->bindValue("ID_fJourney", $this->id_journey);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function getAllDesign_area(){
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
    public function updateDesign_area(){
        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("D_id", $this->id);
            $res->bindValue("ID_fArea", $this->id_areas);
            $res->bindValue("ID_fStaff", $this->id_staff);
            $res->bindValue("ID_fPosition", $this->id_position);
            $res->bindValue("ID_fJourney", $this->id_journey);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function deleteDesign_area(){
        try {
            $res = $this->conx->prepare($this->queryDelete);
            $res->bindValue("D_id", $this->id); 
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