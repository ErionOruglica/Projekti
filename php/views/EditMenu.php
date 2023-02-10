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
?>
<div>
    <form method="POST">
        Image:
        <input type="file" name="image" value="<?php echo $currentmenu['menu_image'];?>">
        <br>
        Title:
        <input type="text" name="title" value="<?php echo $currentmenu['menu_title'];?>">
        <br>
        Body:
        <input type="text" name="body" value="<?php echo $currentmenu['menu_body'];?>">
        <br>
        Price:
        <input type="text" name="price" value="<?php echo $currentmenu['menu_price'];?>">
        <br>
        <input type="submit" name="submit" value="Update">    
    </form>
</div>