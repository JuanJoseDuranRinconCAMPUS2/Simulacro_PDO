<?php
namespace App;
class contact_info extends connect{
    private $queryPost = 'INSERT INTO contact_info(id_staff, whatsapp, instagram, linkedin, email, address, cel_number) VALUES(:ID_fStaff, :whatsapp, :instagram, :linkedin, :email, :address, :cel_number)';
    private $queryGetAll = 'SELECT id AS "C_id", id_staff AS "ID_fStaff", whatsapp, instagram, linkedin, email, address, cel_number FROM contact_info';
    private $queryUpdate = 'UPDATE contact_info SET id_staff = :ID_fStaff, whatsapp = :whatsapp, instagram = :instagram, linkedin = :linkedin, email = :email, address = :address, cel_number = :cel_number WHERE id = :C_id';
    private $queryDelete = 'DELETE FROM contact_info WHERE id = :C_id';
    private $message;
    use getInstance;
    function __construct(private $id = 0, private $id_staff = 1, private $whatsapp = 1, private $instagram = 1, private $linkedin = 1, private $email = 1, private $address = 1, private $cel_number = 1){parent::__construct();}
    public function postContact_info(){
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("ID_fStaff", $this->id_staff);
            $res->bindValue("whatsapp", $this->whatsapp);
            $res->bindValue("instagram", $this->instagram);
            $res->bindValue("linkedin", $this->linkedin);
            $res->bindValue("email", $this->email);
            $res->bindValue("address", $this->address);
            $res->bindValue("cel_number", $this->cel_number);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function getAllContact_info(){
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
    public function updateContact_info(){
        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("C_id", $this->id);
            $res->bindValue("ID_fStaff", $this->id_staff);
            $res->bindValue("whatsapp", $this->whatsapp);
            $res->bindValue("instagram", $this->instagram);
            $res->bindValue("linkedin", $this->linkedin);
            $res->bindValue("email", $this->email);
            $res->bindValue("address", $this->address);
            $res->bindValue("cel_number", $this->cel_number);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function deleteContact_info(){
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