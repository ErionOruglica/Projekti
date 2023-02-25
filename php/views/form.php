<link rel="stylesheet" href="../../css/form.css">

  <?php
require_once '../controllers/MenuController.php';
$menu= new MenuController;
if(isset($_POST['submit'])){
    $menu->insert($_POST);
}
?>
<div class="forms">
    <form method="POST" ame="ContactForm">
    <h1 class="form-title">Shto nje produkt</h1>
        Image:
        <input type="file"  class="form-input" name="image">
        <br>
        Title:
        <input type="text" class="form-input"  name="title">
        <br>
        Body:
        <textarea name="body" class="form-input"  cols="30" rows="10"></textarea>
        Price:
        <input type="text"class="form-input"  name="price">
        <br>
        <input type="submit"  class="button" name="submit" value="save">    
    </form>
</div>