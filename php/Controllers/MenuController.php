<?php
require_once '../config/Database.php';
    class MenuController{
        public $db;

        public function __construct(){
            $this->db=new Database;
        }

        public function readData(){
            $query =$this->db->pdo->query('SELECT * FROM menu');
            return $query->fetchAll();
        }
        public function insert($request){
            $request['image']='../images/'.$request['image'];
            $query=$this->db->pdo->prepare('INSERT INTO menu (menu_image,menu_title,menu_body,menu_price) VALUES(:menu_image,:menu_title,:menu_body,:menu_price)');
        $query->bindParam(':menu_image',$request['image']);
        $query->bindParam(':menu_title',$request['title']);
        $query->bindParam(':menu_body',$request['body']);
        $query->bindParam(':menu_price',$request['price']);
        $query->execute();
        return header('Location:menuDashboard.php');
        }
        public function edit($id){
            $query=$this->db->pdo->prepare('SELECT * from menu WHERE id=:id');
            $query->bindParam(':id',$id);
            $query->execute();

            return $query->fetch();
        }
        public function update($request,$id){
            $query= $this->db->pdo->prepare('UPDATE menu SET menu_image=:menu_image, menu_title=:menu_title,menu_body=:menu_body,menu_price=:menu_price WHERE id=:id');
            $query->bindParam(':menu_image',$request['image']);
            $query->bindParam(':menu_title',$request['title']);
            $query->bindParam(':menu_body',$request['body']);
            $query->bindParam(':menu_price',$request['price']);
            $query->bindParam(':id',$id);
            $query->execute();
            return header('Location:menuDashboard.php');

        }
        public function delete($id){
            $query=$this->db->pdo->prepare('DELETE from menu Where id=:id');
            $query->bindParam(':id',$id);
            $query->execute();
            return header("Location:menuDashboard.php");

        }

        public function validoUserin($user){
            $query = $this->db->pdo->prepare('SELECT count(Emaili) as Emailiat from user where Emaili=:Emaili');
            $query->bindParam(':Emaili', $user['Emaili']);
            $query->execute();
        
            $count = $query->fetchColumn();
            return $count;
        }
        public function ekziston($user){
            $query=$this->db->pdo->prepare('SELECT Emaili, Password from user where Emaili=:Emaili AND Password=:Password');
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
            $query=$this->db->pdo->prepare('SELECT * from user WHERE ID=:ID');
            $query->bindParam(':ID',$id);
            $query->execute();

            return $query->fetch();
        }
        public function updateUsers($request,$id){
            $query= $this->db->pdo->prepare('UPDATE user SET Emri=:Emri, Mbiemri=:Mbiemri,Emaili=:Emaili,Password=:Password WHERE ID=:ID');
            $query->bindParam(':Emri',$request['Emri']);
            $query->bindParam(':Mbiemri',$request['Mbiemri']);
            $query->bindParam(':Emaili',$request['Emaili']);
            $query->bindParam(':Password',$request['Password']);
            $query->bindParam(':ID',$id);
            $query->execute();
            return header('Location:menuDashboard.php');
        }
        public function readMessages(){
            $query=$this->db->pdo->query('SELECT * FROM messages');
            return $query->fetchAll();
        }
        public function insertMessages($mesazhet){
            $query=$this->db->pdo->prepare('INSERT INTO messages(Emri_Plote,Email,Mesazhi) VALUES (:Emri_Plote,:Email,:Mesazhi)');
            $query->bindParam(':Emri_Plote',$mesazhet['EmriPlote']);
            $query->bindParam(':Email',$mesazhet['Email']);
            $query->bindParam(':Mesazhi',$mesazhet['Mesazhi']);
            $query->execute();
            return header('Location:menuDashboard.php');
        }
        public function deleteMessages($id){
            $query=$this->db->pdo->prepare('DELETE FROM messages where id=:id');
            $query->bindParam(':id',$id);
            $query->execute();
            return header("Location:menuDashboard.php");
        }
    }
?>