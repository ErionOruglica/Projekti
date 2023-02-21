<?php
require_once '../controllers/MenuController.php';
if(isset($_GET['id'])){
    $menuid=$_GET['id'];
}
$menu= new MenuController;
$currentuser=$menu->editUsers($menuid);
if(isset($_POST['submit'])){
    $menu->update($_POST,$menuid);
}
?>
<link rel="stylesheet" href="../css/create-menu.css">
<div>
    <form method="POST">
        Emri:
        <input type="text" name="image" value="<?php echo $currentuser['Emri'];?>">
        <br>
        Mbiemri:
        <input type="text" name="title" value="<?php echo $currentuser['Mbiemri'];?>">
        <br>
        Emaili:
        <input type="text" name="body" value="<?php echo $currentuser['Emaili'];?>">
        <br>
        Passwordi:
        <input type="text" name="price" value="<?php echo $currentuser['Password'];?>">
        <br>  
    </form>
</div>