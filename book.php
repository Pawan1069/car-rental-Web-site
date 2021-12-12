<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: book.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Car</title>
    <link rel="stylesheet" href="pro1.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <section>
        <nav>
            <a href="pro1.html"><img src="img/l.png" height="50px" width="60px"></a> 
            <div class="nav-links1" id="navLinks" id="color">
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
            </div>
            <i class="far fa-bars" onclick="showMenu()"></i>
        </nav>
    
    </section>
    
    <div class="small-container">

        <div class="row-1 row-2">
            <h2>All Product</h2>
            
        </div>
        <div class="row-4">
            <div class="col-4">
                <img src="img/sp.png">
                <h4>Maruti S.PRESSO </h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                
                </div>
                <a href="cardetail.php?id=1" class="btn">BOOK</a>
            </div>
            <div class="col-4">
                <img src="img/Benz.jpeg">
                <h4>Mercedes-Benz GLS</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="cardetail.php?id=2" class="btn">BOOK</a>
            </div>
            <div class="col-4">
                <img src="img/santro.jpeg">
                <h4>Hyundai Santro</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="cardetail.php?id=3" class="btn">BOOK</a>
            </div>
            <div class="col-4">
                <img src="img/tiago.jpeg">
                <h4>TATA Tiago</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="cardetail.php?id=4" class="btn">BOOK</a>
            </div>
        </div>

        <div class="row-4">
            <div class="col-4">
                <img src="img/61.jpeg">
                <h4>Renault Triber</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="cardetail.php?id=5" class="btn">BOOK</a>
            </div>
            <div class="col-4">
                <img src="img/62.jpeg">
                <h4>Mahindra KUV100 NXT K8 6 STR</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="cardetail.php?id=6" class="btn">BOOK</a>
            </div>
            <div class="col-4">
                <img src="img/ertiga.jpg">
                <h4>ERTIGA</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="cardetail.php?id=7" class="btn">BOOK</a>
            </div>
            <div class="col-4">
                <img src="img/64.jpg">
                <h4>MG Hector plus</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="cardetail.php?id=8" class="btn">BOOK</a>
            </div>
        </div>


        <div class="row-4">
            <div class="col-4">
                <img src="img/81.jpeg">
                <h4>Toyota Innova</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                
                </div>
                <a href="cardetail.php?id=9" class="btn">BOOK</a>
            </div>
            <div class="col-4">
                <img src="img/82.jpeg">
                <h4>Marazzo</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="cardetail.php?id=10" class="btn">BOOK</a>
            </div>
            <div class="col-4">
                <img src="img/83.jpg">
                <h4>KIA Carnival</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="cardetail.php?id=11" class="btn">BOOK</a>
            </div>
            <div class="col-4">
                <img src="img/84.jpg">
                <h4>Lexus LX</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="cardetail.php?id=12" class="btn">BOOK</a>
            </div>
        </div> 

        
    </div>
    
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