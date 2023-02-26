<?php
session_start();
require_once '../controllers/MenuController.php';
if(isset($_GET['id'])){
    $menuid=$_GET['id'];
}
$menu= new MenuController;
$currentmenu=$menu->edit($menuid);
if(isset($_POST['submit'])){
    $menu->update($_POST,$menuid,$_SESSION['Emaili']);
}
include "../components/headerAdmin.php";
?>
<link rel="stylesheet" href="../../css/form.css">
<div>
    <form method="POST">
        Image:
        <input type="file" class="input" name="image" value="<?php echo $currentmenu['menu_image'];?>">
        <br>
        Title:
        <input type="text" class="input" name="title" value="<?php echo $currentmenu['menu_title'];?>">
        <br>
        Body:
        <input type="text" class="input" name="body" value="<?php echo $currentmenu['menu_body'];?>">
        <br>
        Price:
        <input type="text" class="input" name="price" value="<?php echo $currentmenu['menu_price'];?>">
        <br>
        <input type="submit" class="input" name="submit" value="Update">    
    </form>
</div>