<?php
require_once '../controllers/MenuController.php';
$menu= new MenuController;
if(isset($_POST['submit'])){
    $menu->insert($_POST);
}
?>
<div>
    <form method="POST">
        Image:
        <input type="file" name="image">
        <br>
        Title:
        <input type="text" name="title">
        <br>
        Body:
        <textarea name="body"  cols="30" rows="10"></textarea>
        Price:
        <input type="text" name="price">
        <br>
        <input type="submit" name="submit" value="save">    
    </form>
</div>