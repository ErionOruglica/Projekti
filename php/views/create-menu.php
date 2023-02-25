<?php
require_once '../controllers/MenuController.php';
$menu= new MenuController;
if(isset($_POST['submit'])){
    $menu->insert($_POST);
}
include "../components/headerAdmin.php";
?>
<link rel="stylesheet" href="../../css/form.css">
<div>
    <form method="POST">
        Fotoja:
        <input type="file" class="input" name="image">
        <br>
        Titulli:
        <input type="text" class="input" name="title">
        <br>
        Pershkrimi:
        <textarea name="body" class="input" cols="30" rows="10"></textarea>
        Cmimi:
        <input type="text" class="input" name="price">
        <br>
        <input type="submit"  class="input" name="submit" value="save">    
    </form>
</div>