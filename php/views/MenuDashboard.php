<link rel="stylesheet" href="../css/dashboard.css">
<?php
require_once '../controllers/MenuController.php';
$menu= new MenuController;
?>
<div class="ballina">
  <h3>Regjistro te dhenat</h3>
  <a href="create-menu.php"><button class ="regjistro">Regjistro</button></a>
  <a href="Mesazhet.php"><button class ="regjistro">Shiko Mesazhet</button></a>
  <a href="users.php"><button class ="regjistro">Users</button></a>
  <a href="index.php"><button class ="index">Home page</button></a>
</div>
<div>
    <table class="content-table">
        <thead>
            <tr>
              <th>Menu image</th>
              <th>Menu title</th>
              <th>Menu body</th>
              <th>Menu Price</th>
              <th>Action</th>
            </tr>
        </thead>
            <tbody class="tabela">
              <?php 
              foreach($menu->readData() as $key=>$value){
                ?>
            <tr>
              <td><?php echo $value['menu_image']   ?></td>
              <td><?php echo $value['menu_title']    ?></td>
              <td><?php echo $value['menu_body']    ?></td>
              <td><?php echo $value['menu_price']    ?></td>
              <td><a href="edit-menu.php?id=<?php echo $value['Id'];?>" class ="edito">Edit</a><a href="delete-menu.php?id=<?php echo $value['Id'];?>" class="delete">Delete</a><td>
            </tr>
            <?php
              }
              ?>
          </tbody>
    </table>
</div>  