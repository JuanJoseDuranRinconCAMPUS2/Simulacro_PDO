<?php
namespace App;
class working_info extends connect{
    private $queryPost = 'INSERT INTO working_info(id_staff, years_exp, months_exp, id_work_reference, id_personal_ref, start_contract, end_contract) VALUES(:ID_fStaff, :YearsExp, :MonthsExp, :ID_fWorkReference, :ID_fPersonalRef, :StartContract, :EndContract)';
    private $queryGetAll = 'SELECT id AS "W_id", id_staff AS "ID_fStaff", years_exp AS "YearsExp", months_exp AS "MonthsExp", id_work_reference AS "ID_fWorkReference", id_personal_ref AS "ID_fPersonalRef", start_contract AS "StartContract", end_contract AS "EndContract" FROM working_info';
    private $queryUpdate = 'UPDATE working_info SET id_staff = :ID_fStaff, years_exp = :YearsExp, months_exp = :MonthsExp, id_work_reference = :ID_fWorkReference, id_personal_ref = :ID_fPersonalRef, start_contract = :StartContract, end_contract = :EndContract WHERE id = :W_id';
    private $queryDelete = 'DELETE FROM working_info WHERE id = :W_id';
    private $message;
    use getInstance;
    function __construct(private $id = 0, private $id_staff = 1, private $years_exp = 1, private $months_exp = 1, private $id_work_reference = 1, private $id_personal_ref = 1, private $start_contract = 1, private $end_contract = 1){parent::__construct();}
    public function postWorking_info(){
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("ID_fStaff", $this->id_staff);
            $res->bindValue("YearsExp", $this->years_exp);
            $res->bindValue("MonthsExp", $this->months_exp);
            $res->bindValue("ID_fWorkReference", $this->id_work_reference);
            $res->bindValue("ID_fPersonalRef", $this->id_personal_ref);
            $res->bindValue("StartContract", $this->start_contract);
            $res->bindValue("EndContract", $this->end_contract);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function getAllWorking_info(){
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
    public function updateWorking_info(){
        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("W_id", $this->id);
            $res->bindValue("ID_fStaff", $this->id_staff);
            $res->bindValue("YearsExp", $this->years_exp);
            $res->bindValue("MonthsExp", $this->months_exp);
            $res->bindValue("ID_fWorkReference", $this->id_work_reference);
            $res->bindValue("ID_fPersonalRef", $this->id_personal_ref);
            $res->bindValue("StartContract", $this->start_contract);
            $res->bindValue("EndContract", $this->end_contract);
            $res->execute();
            $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        }finally{
            print_r($this->message);
        }
    }
    public function deleteWorking_info(){
        try {
            $res = $this->conx->prepare($this->queryDelete);
            $res->bindValue("W_id", $this->id); 
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