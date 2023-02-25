<?php
require_once '../controllers/BestSellers.php';
$bestSeller= new BestSellers;
include "../components/headerAdmin.php";
?>
<link rel="stylesheet" href="dashboard.css">
<div>
    <table class="content-table">
        <thead>
            <tr>
              <th>Fotoja</th>
              <th>Marka</th>
              <th>Pershkrimi</th>
              <th>Cmimi_Aktual</th>
              <th>Cmimi_Zbritjes</th>
              <th>Perqindja_Zbritjes</th>
              <th>Action</th>
            </tr>
        </thead>
            <tbody class="tabela">
              <?php 
              foreach($bestSeller->shfaqBestSellers() as $key=>$value){
                ?>
            <tr>
              <td><?php echo $value['Fotoja']?></td>
              <td><?php echo $value['Marka']?></td>
              <td><?php echo $value['Pershkrimi']?></td>
              <td><?php echo $value['Cmimi_Aktual']?></td>
              <td><?php echo $value['Cmimi_Zbritjes']?></td>
              <td><?php echo $value['Perqindja_Zbritjes']?></td>
              <td><a href="edit-bestsellers.php?id=<?php echo $value['Id'];?>" class ="edito">Edit</a><a href="deleteBestSellers.php?id=<?php echo $value['Id'];?>" class="delete">Delete</a><td>
            </tr>
            <?php
              }
              ?>
          </tbody>
    </table>
</div>