<?php
require_once '../controllers/MenuController.php';
$menu= new MenuController;
include "../components/headerAdmin.php";
?>
<link rel="stylesheet" href="dashboard.css">
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
              <td><a href="edit-menu.php?id=<?php echo $value['Id'];?>" class ="edito">Edit</a><a href="DeleteMenu.php?id=<?php echo $value['Id'];?>" class="delete">Delete</a><td>
            </tr>
            <?php
              }
              ?>
          </tbody>
    </table>
</div>  