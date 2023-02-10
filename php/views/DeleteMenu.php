<?php
require_once '../controllers/MenuController.php';
$menu= new MenuController;
if(isset($_GET['id'])){
    $deleteid=$_GET['id'];
}
$menu->delete($deleteid);
?>