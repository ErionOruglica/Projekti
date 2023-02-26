<link rel="stylesheet" href="../../css/nav.css"/>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="../../Fotot/logo.png" alt="Logo Image">
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="../views/index.php">Home</a></li>
            <li><a href="../views/aboutus.php">About us</a></li>
            <li><a href="../views/produktet.php">Products</a></li>
            <li><a href="#Bestsellers">Best Sellers</a></li>
            <li><a href="../views/contactForm.php">Contact Us</a></li>
            <?php
            if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
            ?>
                <li><a href="../views/MenuDashboard.php">Dashboard</a></li>
                <?php
            }
            if(!isset($_SESSION['Emaili'])) {
            ?>
            <li><a href="../views/loginpage.php"><button class="login-button" href="#">Login</button></a></li>
            <li><a href="../views/signuppage.php"><button class="join-button" href="#">Join</button></a></li>
            <?php 
            } else {
            ?>
            <li><a href="../views/logout.php"><button class="login-button" href="#">Logout</button></a></li>
            <?php
            }
            ?>

        </ul>
    </nav>
    <script src="../../scripts/nav.js"></script>