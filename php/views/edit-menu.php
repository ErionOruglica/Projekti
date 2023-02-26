<?php
require_once '../controllers/MenuController.php';
if(isset($_GET['id'])){
    $menuid=$_GET['id'];
}
$menu= new MenuController;
$currentmenu=$menu->edit($menuid);
if(isset($_POST['submit'])){
    $menu->update($_POST,$menuid);
}
include "../components/headerAdmin.php";
?>
<link rel="stylesheet" href="../../css/form.css">
<div>
    <form method="POST">
        Fotoja:
        <input type="text" name="image" class="input" value="<?php echo $currentmenu['menu_image'];?>">
        <br>
        Titulli:
        <input type="text" name="title" class="input" value="<?php echo $currentmenu['menu_title'];?>">
        <br>
        Pershkrimi:
        <input type="text" name="body" class="input" value="<?php echo $currentmenu['menu_body'];?>">
        <br>
        Cmimi:
        <input type="text" name="price" class="input" value="<?php echo $currentmenu['menu_price'];?>">
        <br>
        <input type="submit" name="submit" value="Update" class ="save">    
    </form>
</div>