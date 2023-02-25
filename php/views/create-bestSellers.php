<?php
require_once '../controllers/BestSellers.php';
$bestSellers= new BestSellers;
if(isset($_POST['submit'])){
    $bestSellers->insertoProdukte($_POST);
    header('Location:../views/BestSellersTable.php');
}
include "../components/headerAdmin.php";
?>
<link rel="stylesheet" href="../../css/form.css">
<div>
    <form method="POST">
        Image:
        <input type="file" name="Fotoja" class ="input">
        <br>
        Title:
        <input type="text" name="Marka" class ="input">
        <br>
        Body:
        <textarea name="Pershkrimi"  cols="30" rows="10" class ="input" ></textarea>
        Price:
        <input type="text" name="Cmimi_Aktual" class ="input">
        <br>
        Price before discount:
        <input type="text" name="Cmimi_Zbritjes" class ="input">
        Discount percentage:
        <input type="text" name="Perqindja_Zbritjes" class ="input">
        <input type="submit" name="submit" value="save" class="input">    
    </form>
</div>