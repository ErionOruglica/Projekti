<link rel="stylesheet" href="../css/menuDashboard.css">
<?php
require_once '../controllers/BestSellers.php';
$bestSeller= new BestSellers;
?>
<div class="ballina">
  <a href="create-BestSellers.php"><button class ="regjistro">Regjistro Best Seller</button></a>
  <a href="menuDashboard.php"><button class ="regjistro">Kthehu tek Dashboard</button></a>
  <a href="index.php"><button class ="index">Home page</button></a>
</div>
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
              <td><a href="edit-bestsellers.php?id=<?php echo $value['ID'];?>" class ="edito">Edit</a><a href="deleteBestSellers.php?id=<?php echo $value['ID'];?>" class="delete">Delete</a><td>
            </tr>
            <?php
              }
              ?>
          </tbody>
    </table>
</div>