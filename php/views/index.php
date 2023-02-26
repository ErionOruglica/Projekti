<?php
session_start();
require_once '../controllers/MenuController.php';
require_once '../controllers/BestSellers.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electro Power</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body>

  <!--nav bar-->
    <?php
    include '../components/header.php';
    ?>
    <!--nav bar-->

    <!--fOTOJA NE BALLINE-->
     <div class="ballina">
        <a href="produktet.php"><img  class ="Ballinaa" src="../../Fotot/Fotoja1.jpg" alt=""></a>
    </div>
     <!--fOTOJA NE BALLINE-->

     <!--KTu fillojn Kategorit-->

  <div class="container">
    <!--Fillimi i rreshtit te kartave-->
    <div class="row">
      <!--Fillimi i kartes se pare-->
      <div class="image">
        <img src="../../Fotot/gamingpc.jpg" alt="">
        <div class="details">
          <h2>Desktops & <span>Workstations</span></h2>
          <p>All in one (AiO) ElectroPower builds Gaming PC's.</p>
          <div class="more">
            <a href="#" class="read-more">Shiko me <span>Shume</span></a>
          </div>
        </div>
      </div>
      <!--Fundi i kartes se pare-->

      <!--Fillimi i kartes se dyte-->

      <div class="image">
        <img src="../../Fotot/laptop.jpg" alt="">
        <div class="details">
          <h2>Laptops & <span>Tablets</span></h2>
          <p>Laptope dhe tableta per gaming, per shkolle, per shtepi.</p>
          <div class="more">
            <a href="#" class="read-more">Shiko me <span>Shume</span></a>
          </div>
        </div>
      </div>
      <!--Fundi i kartes se dyte-->

      <!--Fillimi i kartes se trete-->
      <div class="image">
        <img src="../../Fotot/hardware.jpg" alt="">
        <div class="details">
          <h2>Hardware</h2>
          <p>Ketu mund ti gjeni te gjitha pjeset qe ju duhen per PC.</p>
          <div class="more">
            <a href="#" class="read-more">Lexo me <span>Shume</span></a>
          </div>
        </div>
      </div>
      <!--Fundi i kartes se trete-->
    </div>
    <!--ketu mbaron rreshti i pare-->
    <!--fillimi i rreshtit te dyte-->
    <div class="row">
      <!--fillimi i kartes se pare-->
      <div class="image">
        <img src="../../Fotot/printers.jpg" alt="">
        <div class="details">
          <h2>Printers & <span>imaging</span></h2>
          <p>Printere per shtepi,biznese si dhe aparate per fotografim.</p>
          <div class="more">
            <a href="#" class="read-more">Shiko me <span>Shume</span></a>
          </div>
        </div>
      </div>
      <!--Fundi i kartes se pare-->
      <!--Fillimi i kartes se dyte-->
      <div class="image">
        <img src="../../Fotot/router.jpg" alt="">
        <div class="details">
          <h2>Networking</h2>
          <p>Routere,switcha,te gjitha paisjet per Networks.</p>
          <div class="more">
            <a href="#" class="read-more">Shiko me <span>Shume</span></a>
          </div>
        </div>
      </div>
      <!--fundi i kartes se dyte-->
      <!--fillimi i kartes se trete-->
      <div class="image">
        <img src="../../Fotot/Aksesore.jpg" alt="">
        <div class="details">
          <h2>Aksesore</h2>
          <p>Altoparlate,Mause,Kufje&mikrofon,Paisje per zyre...</p>
          <div class="more">
            <a href="#" class="read-more">Shiko me <span>Shume</span></a>
          </div>
        </div>
      </div>
      <!--fundi i kartes se 3-->
    </div>
    <!--fundi i rreshtit-->
  </div>
  <!--fundi i layotit-->

  <section id="Bestsellers" class="product"> 
      <h2 class="product-category">best selling</h2>
      <button class="pre-btn"><img src="../../images/arrow.png" alt=""></button>
      <button class="nxt-btn"><img src="../../images/arrow.png" alt=""></button>
      <div class="product-container">
        <?php
        $bestsellers=new BestSellers;
        $malli=$bestsellers->shfaqBestSellers();
        foreach($malli as $malli1){
          if(strlen($malli1['Cmimi_Zbritjes'])>0){
    
        echo ' <div class="product-card">
        <div class="product-image">
            <span class="discount-tag">'.$malli1['Perqindja_Zbritjes'].'off</span>
            <img src="'.$malli1['Fotoja'].'" class="product-thumb" alt="">
            <button class="card-btn">add to wishlist</button>
        </div>
        <div class="product-info">
            <h2 class="product-brand">'.$malli1['Marka'].'</h2>
            <p class="product-short-description">'.$malli1['Pershkrimi'].'</p>
            <button class="blej">Blej tani</button>
            <span class="price">'.$malli1['Cmimi_Zbritjes'].'</span><span class="actual-price">'.$malli1['Cmimi_Aktual'].'</span>
        </div>
        </div>';
          }else{
            echo '<div class="product-card">
            <div class="product-image">
                <img src="'.$malli1['Fotoja'].'" class="product-thumb" alt="">
                <button class="card-btn">add to wishlist</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">'.$malli1['Marka'].'</h2>
                <p class="product-short-description">'.$malli1['Pershkrimi'].'</p>
                <button class="blej">Blej tani</button>
                </span><span class="price">'.$malli1['Cmimi_Aktual'].'</span>
            </div>
            </div>
            ';
          }
        }
        ?>
        </div>
        <br>
        <br>
        <br>
        <br>
  </section>  
  <script src="../../scripts/slider.js"></script>
  <h2 class="product-category">Latest arrivals</h2>
    <!--PRODUKTET NE FAQE-->
    <div class="class-rreshti1">
        <?php
        $produktet=new MenuController;
        $produkti=$produktet->readData();
        foreach($produkti as $malli){
        echo '<div class="karta1">
          <div class="karta1-foto">
          
            <a href="#">Shiko gallerine</a>
            <img src="'.$malli['menu_image'].'"class="product-thumb" alt="">
            <button class="card-btn">add to wishlist</button>
          </div>
            <div class="pershkrimi">
            <h2 class="malli-firma">'.$malli['menu_title'].'</h2>
            <p class="malli-description">'.$malli['menu_body'].'</p>
            <button class="bleje">Blej tani</button>
            <span class="price">'.$malli['menu_price'].'</span>
            </div>
        </div>';
        }
        ?>
    </div>
    <?php
    include '../components/footer.php';
        ?>
            