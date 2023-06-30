<?php
    namespace App;
    class team_schedule extends connect{
        private $queryPost= 'INSERT INTO team_schedule(team_name, check_in_skills, check_out_skills, check_in_soft, check_out_soft, check_in_english, check_out_english, check_in_review, check_out_review, id_journey) VALUES(:N_Team, :start_Skills, :ending_Skills, :start_Soft, :ending_Soft, :start_English, :ending_English, :start_Review, :ending_Review, :ID_Journey)';
        private $queryGetAll = 'SELECT id AS "T_id", team_name AS "N_Team", check_in_skills AS "start_Skills", check_out_skills AS "ending_Skills", check_in_soft AS "start_Soft", check_out_soft AS "ending_Soft", check_in_english AS "start_English", check_out_english AS "ending_English", check_in_review AS "start_Review", check_out_review AS "ending_Review", id_journey AS "ID_Journey" FROM team_schedule';
        private $queryUpdate = 'UPDATE team_schedule SET team_name = :N_Team, check_in_skills = :start_Skills, check_out_skills = :ending_Skills, check_in_soft = :start_Soft, check_out_soft = :ending_Soft, check_in_english = :start_English, check_out_english = :ending_English, check_in_review = :start_Review, check_out_review = :ending_Review WHERE id = :T_id';
        private $queryDelete = 'DELETE FROM `team_schedule` WHERE `id` = :T_id';
        private $message;
        use getInstance;
        function __construct(private $id = 0, private $team_name = 1, private $check_in_skills = 1, private $check_out_skills = 1, private $check_in_soft = 1, private $check_out_soft = 1, private $check_in_english = 1, private $check_out_english = 1, private $check_in_review = 1, private $check_out_review = 1, $id_journey = 1){parent::__construct();}
        public function postTeam_schedule(){
            try {
                $res = $this->conx->prepare($this->queryPost);
                $res->bindValue("N_Team", $this->team_name);
                $res->bindValue("start_Skills", $this->check_in_skills);
                $res->bindValue("ending_Skills", $this->check_out_skills);
                $res->bindValue("start_Soft", $this->check_in_soft);
                $res->bindValue("ending_Soft", $this->check_out_soft);
                $res->bindValue("start_English", $this->check_in_english);
                $res->bindValue("ending_English", $this->check_out_english);
                $res->bindValue("start_Review", $this->check_in_review);
                $res->bindValue("ending_Review", $this->check_out_review);
                $res->bindValue("ID_Journey", $this->id_journey);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function getAllTeam_schedule(){
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
        public function updateTeam_schedule(){
            try {
                $res = $this->conx->prepare($this->queryUpdate);
                $res->bindValue("T_id", $this->id);
                $res->bindValue("N_Team", $this->team_name);
                $res->bindValue("start_Skills", $this->check_in_skills);
                $res->bindValue("ending_Skills", $this->check_out_skills);
                $res->bindValue("start_Soft", $this->check_in_soft);
                $res->bindValue("ending_Soft", $this->check_out_soft);
                $res->bindValue("start_English", $this->check_in_english);
                $res->bindValue("ending_English", $this->check_out_english);
                $res->bindValue("start_Review", $this->check_in_review);
                $res->bindValue("ending_Review", $this->check_out_review);
                $res->bindValue("ID_Journey", $this->id_journey);
                $res->execute();
                $this->message = ["Code" => 200+$res->rowCount(), "Message" => "the data were inserted correctly"];
            } catch (\PDOException $e) {
                $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }finally{
                print_r($this->message);
            }
        }
        public function deleteTeam_schedule(){
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
