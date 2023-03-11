<link rel="stylesheet" href="dashboard.css">
<?php
require_once '../Controllers/MessageController.php';
$message= new MessageController;
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
              $mesazhi = $message->readMessages();
              foreach($mesazhi as $m){
                ?>
            <tr>
              <td><?php echo $m['Emri_Plote']    ?></td>
              <td><?php echo $m['Email']    ?></td>
              <td><?php echo $m['Mesazhi']    ?></td>
              <td><a href="delete-messages.php?id=<?php echo $m['Id'];?>" class="delete">Delete</a><td>
            </tr>
            <?php
              }
              ?>
          </tbody>
    </table>
</div>