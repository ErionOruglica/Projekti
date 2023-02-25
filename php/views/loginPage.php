
<?php
require_once '../Controllers/userController.php';
$useri= new userController;
if(isset($_POST['kycu'])){
    $validimi=$useri->ekziston($_POST);
    if($validimi>=1) {
    session_start();
    echo "<script>alert('Jeni kycur me sukses!')</script>";
    header('Location:index.php');
    } else {
    echo "<script>alert('Ju lutem shenoni mire emailin dhe fjalekalimin')</script>";
    }
}
?>
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../../css/login.css">
    <title>Login</title>
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
                <h2>Kyçu</h2>
                <form method="POST" class="form">
                    <div class="inputBx">
                    <input type="text" id="adresaEmailit" required>
                    <i>E-maili</i>
                    </div> 
                    <div class="inputBx">
                    <input type="password" id="pass"required>
                    <i>Fjalekalimi</i>
                    </div>
                    <div class="links">
                        <a href="#">Keni harruar fjalekalimin?</a>
                        <a href="signuppage.html">Nuk keni llogari?</a>
                    </div>
                    <div class="inputBx">
                        <input type="submit" name="kycu" value="Kyçu" onclick="validate()">
                    </div>
            </form>
            </div>
        </div>


        <script src="./scripts/script.js"></script>


    </section>
