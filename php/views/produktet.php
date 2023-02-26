<?php
require_once '../controllers/MenuController.php';

?>
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
            