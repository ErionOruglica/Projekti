<?php
require_once '../controllers/userController.php';
$user= new userController;
if(isset($_GET['id'])){
    $deleteid=$_GET['id'];
}
$user->deleteUsers($deleteid);
?>