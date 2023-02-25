
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
    include "../components/header.php";
 ?>
    <section class ="kontakt">
    <div class ="container">
        <h2>Na kontaktoni</h2>
    </div>
        <div class ="kryesorja">
        <div class ="container-left">
            <div class ="box">
                <div class = "icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class ="text">
                    <h3>Adresa</h3>
                    <p>Mark Gashi nr.18,<br>Gjilan,Kosove,<br>60000</p>
                    </div>
            </div>
        <div class ="box">
                <div class = "icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class ="text">
                    <h3>Email</h3>
                    <p>eo61125@ubt-uni.net,<br>bo56165@ubt-uni.net</p>
                    </div>
                </div>
        <div class ="box">
                <div class = "icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class ="text">
                        <h3>Nr.tel</h3>
                        <p>044 351 865/044 987 500</p>
                    </div>
        </div>
    </div>
        <div class="container-right">
            <form method="POST">
                <h2>Dergoni nje mesazh...</h2>
                <div class="inputBox">
                    <input type="text" name="EmriPlote" required="required">
                    <span>Emri i plote</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="Email" required="required">
                    <span>Email</span>
                </div> 
                <div class="inputBox">
                    <textarea name="Mesazhi" required="required"></textarea>
                    <span>Shkruani mesazhin...</span>
                </div>
                <div class="inputBox">
                    <input type="submit" name="submit" value="send">
                </div> 

            </form>
        </div>
    </div>
    </section>
</body>
</html>