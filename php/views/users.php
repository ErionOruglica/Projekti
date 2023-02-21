<link rel="stylesheet" href="../css/menuDashboard.css">
<?php
require_once '../controllers/MenuController.php';
$menu= new MenuController;
?>
<div>
    <table class="content-table">
        <thead>
            <tr>
              <th>Emri</th>
              <th>Mbiemri</th>
              <th>Email</th>
              <th>Password</th>
              <th>Action</th>
            </tr>
        </thead>
            <tbody class="tabela">
              <?php 
              foreach($menu->readUsers() as $key=>$value){
                ?>
            <tr>
              <td><?php echo $value['Emri']?></td>
              <td><?php echo $value['Mbiemri']?></td>
              <td><?php echo $value['Emaili']?></td>
              <td><?php echo $value['Password']?></td>
              <td><a href="edit-users.php?id=<?php echo $value['ID'];?>" class ="edito">Edit</a><a href="deleteUsers.php?id=<?php echo $value['ID'];?>" class="delete">Delete</a><td>
            </tr>
            <?php
              }
              ?>
          </tbody>
    </table>
</div>