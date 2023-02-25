<?php
require_once '../Controllers/userController.php';
$useri= new userController;
if(isset($_POST['kycu'])){
    if($useri->validoUserin($_POST)<1) {
    $useri->insertoUser($_POST);
    echo "<script>alert('Useri regjistruar me sukses')</script>";
    } else {
    echo "<script>alert('Useri me kete email ekziston')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../../css/login.css">
    <title>Regjistrohu</title>
</head>
<body>
    <section id='section'>
        <script>
                for (let i = 0; i < 190; i++) {
                    const span = document.createElement('span');
                    document.getElementById('section').appendChild(span);
                }
        </script>
        
        <div class="signin">
            <div class="Permbajtja">
                <h2>Regjistrohu</h2>
                <form method="POST" class="form">
                    <div class="inputBx">
                    <input type="text" id="adresaEmailit" name="Emaili"required>
                    <i>E-maili</i>
                    </div> 
                    <div class="inputBx">
                    <input type="password" id="pass" name="Password"required>
                    <i>Fjalekalimi</i>
                    </div>
                    <div class="inputBx">
                        <input type="password" id="cnfrmPass" name="cpassword" required>
                        <i>Konfirmo fjalekalimin</i>
                    </div>
                        <div class="inputBx">
                            <input type="text" id="emri" name="Emri" required>
                            <i>Emri</i>
                        </div>
                            <div class="inputBx">
                                <input type="text" id="mbiemri" name="Mbiemri"required>
                                <i>Mbiemri</i>
                            </div>
                        <div class=" kushtet e perdorimit">
                            <input type="checkbox" id="check"required>
                            <i>Une i pranoj kushtet e perdorimit</i>
                        </div>
                    <div class="links">
                        <a href="../views/loginpage.php">Kycuni nese keni llogari</a>
                    </div>
                    <div class="inputBx">
                        <input type="submit" onclick="validate()" name="kycu" value="Kyçu">
                    </div>
                </form>
            </div>
        </div>



        <script src="../../scripts/scriptsignup.js"></script>

    </section>
    
</body>
</html>