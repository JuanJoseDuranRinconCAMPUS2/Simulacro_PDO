<?php
namespace App;
class emergency_contact extends connect{
    private $queryPost = 'INSERT INTO emergency_contact(id_staff, cel_number, relationship, full_name, email) VALUES(:ID_fStaff, :cel_number, :relationship, :full_name, :email)';
    private $queryGetAll = 'SELECT id AS "E_id", id_staff AS "ID_fStaff", cel_number, relationship, full_name, email FROM emergency_contact';
    private $queryUpdate = 'UPDATE emergency_contact SET id_staff = :ID_fStaff, cel_number = :cel_number, relationship = :relationship, full_name = :full_name, email = :email WHERE id = :E_id';
    private $queryDelete = 'DELETE FROM emergency_contact WHERE id = :E_id';
    private $message;
    use getInstance;
    function __construct(private $id = 0, private $id_staff = 1, private $cel_number = 1, private $relationship = 1, private $full_name = 1, private $email = 1){parent::__construct();}
    public function postEmergency_contact(){
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("ID_fStaff", $this->id_staff);
            $res->bindValue("cel_number", $this->cel_number);
            $res->bindValue("relationship", $this->relationship);
            $res->bindValue("full_name", $this->full_name);
            $res->bindValue("email", $this->email);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function getAllEmergency_contact(){
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
    public function updateEmergency_contact(){
        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("E_id", $this->id);
            $res->bindValue("ID_fStaff", $this->id_staff);
            $res->bindValue("cel_number", $this->cel_number);
            $res->bindValue("relationship", $this->relationship);
            $res->bindValue("full_name", $this->full_name);
            $res->bindValue("email", $this->email);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function deleteEmergency_contact(){
        try {
            $res = $this->conx->prepare($this->queryDelete);
            $res->bindValue("E_id", $this->id); 
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