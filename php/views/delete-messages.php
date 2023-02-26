<?php
require_once '../controllers/MessageController.php';
$message= new MessageController;
if(isset($_GET['id'])){
    $deleteid=$_GET['id'];
}
$message->deleteMessages($deleteid);
?>