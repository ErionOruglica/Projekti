<?php
require_once '../controllers/userController.php';
if(isset($_GET['id'])){
    $userid=$_GET['id'];
}
$user= new userController;
$currentuser=$user->editUsers($userid);
if(isset($_POST['submit'])){
    $user->updateUsers($_POST,$userid);
}
include "../components/headerAdmin.php";
?>
<link rel="stylesheet" href="../../css/form.css">
<div>
    <form method="POST">
        Emri:
        <input type="text" name="Emri" class="input" value="<?php echo $currentuser['Emri'];?>">
        <br>
        Mbiemri:
        <input type="text" name="Mbiemri" class="input" value="<?php echo $currentuser['Mbiemri'];?>">
        <br>
        Emaili:
        <input type="text" name="Emaili" class="input" value="<?php echo $currentuser['Emaili'];?>">
        <br>
        Passwordi:
        <input type="text" name="Password" class="input" value="<?php echo $currentuser['Password'];?>">
        <br>
        <input type="submit" name="submit" value="Update" class ="save">    
    </form>
</div>