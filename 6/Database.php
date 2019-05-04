<?php
class gabungControl{

    protected $host = '127.0.0.1';
    protected $dbname = "arkademy";
    protected $user = "root";
    protected $password = "";

    public function openConection(){
        $link = new PDO("mysql:host=$this->host; dbname=$this->dbname", $this->user, $this->password);
        return $link;
    }
    
    public function closeConection(&$link){
        $link  = null;
    
    }

    public function getAllDokumen(){
        $link = $this->openConection();
        
        $result = $link->query("select * from candidates");
        
        $dokumen = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            //print_r($row);
            $dokumen[] = $row;
        }
    
        $this->closeConection($link);
    
        return $dokumen;
    }

    public function updateVote($id){
        $link = $this->openConection();
        //echo $id;
        $query = "update candidates set earned_vote = earned_vote + 1 where id =:id";
        $statement = $link->prepare($query);
        $statement->bindValue(":id", $id, PDO::PARAM_STR);
        $statement->execute();
        
        $this->closeConection($link);
    }
}