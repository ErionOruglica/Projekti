<?php
require_once '../config/Database.php';
    class userController{
        public $db;

        public function __construct(){
            $this->db=new Database;
        }


        public function validoUserin($user){
            $query = $this->db->pdo->prepare('SELECT count(Emaili) as Emailiat from user where Emaili=:Emaili');
            $query->bindParam(':Emaili', $user['Emaili']);
            $query->execute();
        
            $count = $query->fetchColumn();
            return $count;
        }
        

        public function ekziston($user){
            $query=$this->db->pdo->prepare('SELECT Emaili, Password FROM user WHERE Emaili=:Emaili AND Password=:Password');
            $query->bindParam(':Emaili', $user['Emaili']);
            $query->bindParam(':Password', $user['Password']);
            $query->execute();
            $count = $query->fetchColumn();
            return $count;
        }
        public function insertoUser($useri){
            $query=$this->db->pdo->prepare('INSERT INTO user(Emri,Mbiemri,Emaili,Password) VALUES (:Emri, :Mbiemri, :Emaili, :Password)');
            $query->bindParam(':Emri', $useri['Emri']);
            $query->bindParam(':Mbiemri', $useri['Mbiemri']);
            $query->bindParam(':Emaili', $useri['Emaili']);
            $query->bindParam(':Password', $useri['Password']);
            $query->execute();
            return header('Location:loginpage.php');

        }
        public function readUsers(){
            $query=$this->db->pdo->query('SELECT * FROM user');
            return $query->fetchAll();
        }
        public function deleteUsers($id){
            $query=$this->db->pdo->prepare('DELETE FROM user where ID=:ID');
            $query->bindParam(':ID',$id);
            $query->execute();
            return header("Location:menuDashboard.php");
        }
        public function editUsers($id){
            $query=$this->db->pdo->prepare('SELECT * from user WHERE id=:id');
            $query->bindParam(':id',$id);
            $query->execute();

            return $query->fetch();
        }
        public function getUser($email){
            $query=$this->db->pdo->prepare('SELECT * from user WHERE Emaili=:Emaili');
            $query->bindParam(':Emaili',$email);
            $query->execute();

            return $query->fetch();
        }
        public function updateUsers($request,$id){
            $query= $this->db->pdo->prepare('UPDATE user SET Emri=:Emri, Mbiemri=:Mbiemri,Emaili=:Emaili,Password=:Password,role=:role WHERE ID=:id');
            $query->bindParam(':Emri',$request['Emri']);
            $query->bindParam(':Mbiemri',$request['Mbiemri']);
            $query->bindParam(':Emaili',$request['Emaili']);
            $query->bindParam(':Password',$request['Password']);
            $query->bindParam(':role',$request['role']);
            $query->bindParam(':id',$id);
            $query->execute();
            return header('Location:menuDashboard.php');
        }
    }
    ?>