<style>
*{
  font-family: sans-serif; 
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width: 100%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.link{
    text-decoration: none;
    color: red;
    font-size: 17px;
}
.first-link{
  color: black;
  font-size: 22px;
  padding-left: 50%;
  position: relative;
  top: 20px;
}
.top-links{
    font-size: 30px;
    color: black;
    padding: 30px;
    text-decoration: none;
}
.tabela td a{
  padding:10px;
  margin-right:10px;
}
.edito{
  background-color:#009879;
  color:black;
  text-decoration:none;
  border-radius:5px;
}
.edito:hover{
  color:white;
}
.delete{
  background-color:red;
  color:black;
  text-decoration:none;
  border-radius:5px;
}
.delete:hover{
color:white;
}
.ballina{
  padding: 10px 10vw;
    display: flex;
    justify-content: space-between;
    background-color:black;
    color:white;
}
.regjistro{
  padding:10px;
  font-size:20px;
  border-radius:0%;
  margin-bottom:10px;
  background-color:#009879;
  text-transform:uppercase;
  cursor: pointer;
  transition:0.5s;
}
.regjistro:hover{
  background-color:white;
  color:black;
  transition:0s;
}
.ballina h3{
  text-transform:uppercase;
  font-style:italic;
}
.index{
  padding:10px;
  font-size:20px;
  border-radius:0%;
  margin-bottom:10px;
  background-color:#009879;
  text-transform:uppercase;
  cursor: pointer;
  transition:0.5s;
}
.index:hover{
  background-color:white;
  color:black;
  transition:0s;
}
</style>
<?php
require_once '../controllers/MenuController.php';
$menu= new MenuController;
?>
<div class="ballina">
  <h3>Regjistro te dhenat</h3>
  <a href="create-menu.php"><button class ="regjistro">Regjistro</button></a>
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