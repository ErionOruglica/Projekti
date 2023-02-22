<?php
require_once '../controllers/BestSellers.php';
$bestSellers= new BestSellers;
if(isset($_GET['id'])){
    $deleteid=$_GET['id'];
}
$bestSellers->deleteProdukte($deleteid);
?>