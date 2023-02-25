<link rel="stylesheet" href="dashboard.css">
<?php
require_once '../controllers/MenuController.php';
$menu= new MenuController;
include "../components/headerAdmin.php";
?>
<div>
    <table class="content-table">
        <thead>
            <tr>
              <th>Emri i Plote</th>
              <th>Email</th>
              <th>Mesazhi</th>
              <th>Action</th>
            </tr>
        </thead>
            <tbody class="tabela">
              <?php 
              foreach($menu->readMessages() as $key=>$value){
                ?>
            <tr>
              <td><?php echo $value['Emri_Plote']    ?></td>
              <td><?php echo $value['Email']    ?></td>
              <td><?php echo $value['Mesazhi']    ?></td>
              <td><a href="delete-messages.php?id=<?php echo $value['Id'];?>" class="delete">Delete</a><td>
            </tr>
            <?php
              }
              ?>
          </tbody>
    </table>
</div>