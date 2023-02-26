<?php
require_once '../config/Database.php';
    class MessageController{
        public $db;

        public function __construct(){
            $this->db=new Database;
        }

        public function readMessages(){
            $query=$this->db->pdo->query('SELECT * FROM messages');
            return $query->fetchAll();
        }
        public function insertMessages($mesazhet){
            $query=$this->db->pdo->prepare('INSERT INTO messages(Emri_Plote,Email,Mesazhi) VALUES (Emri_Plote=:Emri_Plote,Email=:Email,Mesazhi=:Mesazhi)');
            $query->bindParam(':Emri_Plote',$mesazhet['EmriPlote']);
            $query->bindParam(':Email',$mesazhet['Email']);
            $query->bindParam(':Mesazhi',$mesazhet['Mesazhi']);
            $query->execute();
        }
        public function deleteMessages($id){
            $query=$this->db->pdo->prepare('DELETE FROM messages where id=:id');
            $query->bindParam(':id',$id);
            $query->execute();
            return header("Location:Mesazhet.php");
        }
    }
    ?>