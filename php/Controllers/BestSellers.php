<?php
require_once '../config/Database.php';
    class BestSellers{
        public $db;

        public function __construct(){
            $this->db=new Database;
        }

        public function insertoProdukte($request){
            $request['Fotoja']='../images/'.$request['Fotoja'];
            $query=$this->db->pdo->prepare('INSERT INTO bestsellers (Fotoja,Marka,Pershkrimi,Cmimi_Aktual,Cmimi_Zbritjes,Perqindja_Zbritjes) VALUES(:Fotoja,:Marka,:Pershkrimi,:Cmimi_Aktual,:Cmimi_Zbritjes,:Perqindja_Zbritjes)');
        $query->bindParam(':Fotoja',$request['Fotoja']);
        $query->bindParam(':Marka',$request['Marka']);
        $query->bindParam(':Pershkrimi',$request['Pershkrimi']);
        $query->bindParam(':Cmimi_Aktual',$request['Cmimi_Aktual']);
        $query->bindParam(':Cmimi_Zbritjes',$request['Cmimi_Zbritjes']);
        $query->bindParam(':Perqindja_Zbritjes',$request['Perqindja_Zbritjes']);
        $query->execute();
        return header('Location:menuDashboard.php');
        }
        public function editoProdukte($id){
            $query=$this->db->pdo->prepare('SELECT * from bestsellers WHERE id=:id');
            $query->bindParam(':id',$id);
            $query->execute();

            return $query->fetch();
        }
      
        public function updateProdukte($request,$id){
            $query= $this->db->pdo->prepare('UPDATE bestsellers SET Fotoja=:Fotoja, Marka=:Marka,Pershkrimi=:Pershkrimi,Cmimi_Aktual=:Cmimi_Aktual,Cmimi_Zbritjes=:Cmimi_Zbritjes,Perqindja_Zbritjes=:Perqindja_Zbritjes WHERE id=:id');
            $query->bindParam(':Fotoja',$request['image']);
            $query->bindParam(':Marka',$request['title']);
            $query->bindParam(':Pershkrimi',$request['body']);
            $query->bindParam(':Cmimi_Aktual',$request['price']);
            $query->bindParam(':Cmimi_Zbritjes',$request['oldprice']);
            $query->bindParam(':Perqindja_Zbritjes',$request['zbritje']);
            $query->bindParam(':id',$id);
            $query->execute();
            return header('Location:menuDashboard.php');
        }
        
        public function deleteProdukte($id){
            $query=$this->db->pdo->prepare('DELETE from bestsellers Where id=:id');
            $query->bindParam(':id',$id);
            $query->execute();
            return header("Location:menuDashboard.php");

        }
        public function shfaqBestSellers(){
            $query=$this->db->pdo->query('SELECT * FROM bestsellers');
            return $query->fetchAll();
        }


    }
?>