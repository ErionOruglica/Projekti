<?php
require_once '../controllers/BestSellers.php';
if(isset($_GET['id'])){
    $menuid=$_GET['id'];
}
$bestSeller= new BestSellers;
$currentproduct=$bestSeller->editoProdukte($menuid);
if(isset($_POST['submit'])){
    $bestSeller->updateProdukte($_POST,$menuid);
}
include_once "../components/headerAdmin.php";
?>
<link rel="stylesheet" href="../../css/form.css">
<div>
    <form method="POST">
        Image:
        <input type="file" name="Fotoja" value="<?php echo $currentproduct['Fotoja'];?>"class ="input" >
        <br>
        Title:
        <input type="text" class ="input" name="Marka" value="<?php echo $currentproduct['Marka'];?>">
        <br>
        Body:
        <input type="text" class ="input" name="Pershkrimi" value="<?php echo $currentproduct['Pershkrimi'];?>">
        <br>
        Price:
        <input type="text" class ="input" name="Cmimi_Aktual" value="<?php echo $currentproduct['Cmimi_Aktual'];?>">
        <br>
        Price before discount:
        <input type="text" class ="input" name="Cmimi_Zbritjes" value ="<?php echo $currentproduct['Cmimi_Zbritjes'];?>">
        <br>
        Discount Percentage::
        <input type="text" class ="input" name="Perqindja_Zbritjes" value ="<?php echo $currentproduct['Perqindja_Zbritjes'];?>">
        <input type="submit" class ="input" name="submit" value="Update" class ="save">    
    </form>
</div>