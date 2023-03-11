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
        public function insert($request,$session){
            $request['image']='../../images/'.$request['image'];
            $query=$this->db->pdo->prepare('INSERT INTO menu (menu_image,menu_title,menu_body,menu_price,LastEditedBY) VALUES(:menu_image,:menu_title,:menu_body,:menu_price,:LastEditedBY)');
        $query->bindParam(':menu_image',$request['image']);
        $query->bindParam(':menu_title',$request['title']);
        $query->bindParam(':menu_body',$request['body']);
        $query->bindParam(':menu_price',$request['price']);
        $query->bindParam(':LastEditedBY',$session);
        $query->execute();
        return header('Location:menuDashboard.php');
        }
        public function edit($id){
            $query=$this->db->pdo->prepare('SELECT * from menu WHERE id=:id');
            $query->bindParam(':id',$id);
            $query->execute();

            return $query->fetch();
        }
        public function update($request,$id,$session){
            $request['image']='../../images/'.$request['image'];
            $query= $this->db->pdo->prepare('UPDATE menu SET menu_image=:menu_image, menu_title=:menu_title,menu_body=:menu_body,menu_price=:menu_price,LastEditedBY=:LastEditedBY WHERE id=:id');
            $query->bindParam(':menu_image',$request['image']);
            $query->bindParam(':menu_title',$request['title']);
            $query->bindParam(':menu_body',$request['body']);
            $query->bindParam(':menu_price',$request['price']);
            $query->bindParam(':LastEditedBY',$session);
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

       
    }
?>