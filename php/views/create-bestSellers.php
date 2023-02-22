<?php
require_once '../controllers/BestSellers.php';
$bestSellers= new BestSellers;
if(isset($_POST['submit'])){
    $bestSellers->insertoProdukte($_POST);
    header('Location:../views/BestSellersTable.php');
}
?>
<link rel="stylesheet" href="../css/create-menu.css">
<div>
    <form method="POST">
        Image:
        <input type="file" name="Fotoja" class ="upload-button">
        <br>
        Title:
        <input type="text" name="Marka">
        <br>
        Body:
        <textarea name="Pershkrimi"  cols="30" rows="10"></textarea>
        Price:
        <input type="text" name="Cmimi_Aktual">
        <br>
        Price before discount:
        <input type="text" name="Cmimi_Zbritjes">
        Discount percentage:
        <input type="text" name="Perqindja_Zbritjes">
        <input type="submit" name="submit" value="save" class="save">    
    </form>
</div>