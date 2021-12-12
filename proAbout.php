<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: proAbout.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="pro1.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="ssub-header1">
    <nav>
            <a href=""><img src="img/l.png" height="50px" width="60px"></a> 
            <div class="nav-links" id="navLinks">
            <i class="fas fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><h2><a href="logout.php"><?php echo "" . $_SESSION['username']; ?></a></h2></li>
                    <li><a href="pro1.php">HOME</a></li>
                    <li><a href="book.php">CAR</a></li>
                    <li><a href="proAbout.php">ABOUT</a></li>
                    <li><a href="policy.php">POLICY</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fas fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>About Us</h1>
    </section>

    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <h1>Lejao-Car 2000+ Happy Client</h1>
                <p>Our car rental services are tailored to suit your individual needs. Whether booking a cab for business or vacation, RUDRA TAXI has a wide range of vehicles to meet every car rental need.</p>
                        
            </div>
            <div class="about-col">
                <img src="img/abt.jpg">

            </div>
        </div>
    </section>

    <section class="footer">
        <h4>About us</h4>
        <p>Lejao-Car, is an Indian self-drive car rental company, headquartered in Maharashtra, India. The company was founded in 2021 by Suraj Sonkar.<br> As of April, the company operates in 12 cities across the country.</p>
        <div class="icons">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin-in"></i>
        </div>
        <p>Always for you to easy your work <i class="far fa-heart"></i></p>
    </section>

    <script>
        var navLiinks = document.getElementById("navLinks");

        function showMenu(){
           navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
     }
    </script>
    
</body>
</html>