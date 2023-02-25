<link rel="stylesheet" href="dashboard.css">
<?php
require_once '../Controllers/userController.php';
$useri= new userController;
include "../components/headerAdmin.php";
?>
<link rel="stylesheet" href="dashboard.css">
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
              foreach($useri->readUsers() as $key=>$value){
                ?>
            <tr>
              <td><?php echo $value['Emri']?></td>
              <td><?php echo $value['Mbiemri']?></td>
              <td><?php echo $value['Emaili']?></td>
              <td><?php echo $value['Password']?></td>
              <td><a href="edit-users.php?id=<?php echo $value['Id'];?>" class ="edito">Edit</a><a href="deleteUsers.php?id=<?php echo $value['Id'];?>" class="delete">Delete</a><td>
            </tr>
            <?php
              }
              ?>
          </tbody>
    </table>
</div>