<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rent</title>
    <link rel="stylesheet" href="pro1.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    
    <section class="header">
        <nav>
            <a href=""><img src="img/l.png" height="50px" width="60px"></a> 
            <div class="nav-links" id="navLinks">
            <i class="fas fa-times" onclick="hideMenu()"></i>
                <ul>
                    
                    <div class="dropdown">
                    <li class="dropbtn" style="margin-top:-3px;margin-left:320px"><?php echo "" . $_SESSION['username']; ?>
                        <i class="fa fa-caret-down"></i>
                    </li>
                    <div class="dropdown-content" style="margin-left:300px">
                        <a href="profile.php" style="color:#000; font-weight:bold">Profile</a>
                        <a href="logout.php" style="color:#000; font-weight:bold">Logout</a>
                    </div>
                    </div>
                    <li><a href="pro1.php">HOME</a></li>
                    <li><a href="book.php">CAR</a></li>
                    <li><a href="proAbout.php">ABOUT</a></li>
                    <li><a href="policy.php">POLICY</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fas fa-bars" onclick="showMenu()"></i>
        </nav>
    <div class="text-box">
        <h1>Lejao-Car</h1>
        <p>Exclusive Savings - Free to Book & Cancel - Compare Car Rental Discounts! Free Cancelation. Unlimited Mileage.<br> No Hidden Charges. Theft Protection Included. Book Now</p>
        <a href="book.php" class="btn">---BOOK CAR---</a>
    </div>    
    </section>

    <section class="FrS">
        <h1>Select Seat</h1>
        <p id="p">Select how many seats of car you want :)</p>
        <div class="row">
            <div class="col">
                <h3>4 Seater</h3>
                <p>Crafted especially for someone looking to seat four in comfort and Enjoy the Open Road Behind the Wheel of a Four-Passenger Car at Best Price. Explore Features, Reviews, Images & Much More.</p>                
            </div>
            <div class="col">
                <h3>6 Seater</h3>
                <p>Crafted especially for someone looking to seat six in comfort and Enjoy the Open Road Behind the Wheel of a six-Passenger Car at Best Price. Explore Features, Reviews, Images & Much More.</p>                
            </div>
            <div class="col">
                <h3>8 Seater</h3>
                <p>Crafted especially for someone looking to seat eight in comfort and Enjoy the Open Road Behind the Wheel of a eight-Passenger Car at Best Price. Explore Features, Reviews, Images & Much More.</p>                
            </div>
        </div>
    </section>

    <div class="small-container">
        <h2 id="fe">4 Seater Car</h2>
        <div class="row-4">
            <div class="col-4">
                <a href="cardetail.php?id=1">
                <img src="img/sp.png">
                </a>
                <h4>Maruti S.PRESSO </h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                
                </div>
            </div>
            <div class="col-4">
            <a href="cardetail.php?id=2">
                <img src="img/Benz.jpeg"></a>
                <h4>Mercedes-Benz GLS</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="col-4">
            <a href="cardetail.php?id=3">
                <img src="img/santro.jpeg"></a>
                <h4>Hyundai Santro</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="col-4">
            <a href="cardetail.php?id=4">
                <img src="img/tiago.jpeg"></a>
                <h4>TATA Tiago</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <h2 id="fe">6 Seater Car</h2>
        <div class="row-4">
            <div class="col-4">
            <a href="cardetail.php?id=5">
                <img src="img/61.jpeg"></a>
                <h4>Renault Triber</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                
                </div>
            </div>
            <div class="col-4">
            <a href="cardetail.php?id=6">
                <img src="img/62.jpeg"></a>
                <h4>Mahindra KUV100 NXT K8 6 STR</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="col-4">
            <a href="cardetail.php?id=7">
                <img src="img/ertiga.jpg"></a>
                <h4>ERTIGA</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="col-4">
            <a href="cardetail.php?id=8">
                <img src="img/64.jpg"></a>
                <h4>MG Hector plus</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>



        <h2 id="fe">8 Seater Car</h2>
        <div class="row-4">
            <div class="col-4">
            <a href="cardetail.php?id=9">
                <img src="img/81.jpeg"></a>
                <h4>Toyota Innova</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                
                </div>
            </div>
            <div class="col-4">
            <a href="cardetail.php?id=10">
                <img src="img/82.jpeg"></a>
                <h4>Marazzo</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="col-4">
            <a href="cardetail.php?id=11">
                <img src="img/83.jpg"></a>
                <h4>KIA Carnival</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="col-4">
            <a href="cardetail.php?id=12">
                <img src="img/84.jpg"></a>
                <h4>Lexus LX</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div> 
    </div>

    <section class="Brand">
        <h1>Our Luxury Car on Rent</h1>
        <p>We have some Luxury car on rent for you</p>

        <div class="row">
            <div class="b-col">
            <a href="volvo.php">
                <img src="img/volvo.jpg" >
                <div class="layer">
                    <h3>Volvo</h3>
                </div>
            </a>    
            </div>
            <div class="b-col">
            <a href="RR.php">    
                <img src="img/rang.jpg" >
                <div class="layer">
                    <h3>Range Rover</h3>
                </div>
            </a>
            </div>
            <div class="b-col">
            <a href="farari.php">    
                <img src="img/farari.jpg" >
                <div class="layer">
                    <h3>Ferrari</h3>
                </div>
            </a>
            </div>
        </div>    
        
    </section>

    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>We provide best facility for are customer :)</p>
        <div class="row">
            <div class="f-cal">
                <img src="img/clean.jpg" alt="">
                <h3>Clean</h3>
                <p>We provide you a fully wash and clean car. As you know in this pendamic we have take care of us.</p>
            </div>
       
            <div class="f-cal">
                <img src="img/quality.jpg" alt="">
                <h3>Check Enigeen</h3>
                <p>Befor be give a car on rent we check all  enigeen part are good for going to trip with are lovebale customer</p>
            </div>
        </div>    
    </section>

    <section class="testimonial">
        <h1>What Client Say about us</h1>
        
        <div class="row">
            <div class="t-col">
                <img src="img/man.jpg">
                <div>
                    <p>This was our first time renting from Lejao-Car and we wew very pleased with the whole expeience.Your price was lower than other companies.Our rental experience we good from start to finish, so we'll be back in the futuar</p>
                    <h3>Yogesh Tiwari</h3>  
                </div>
            </div>
            <div class="t-col">
                <img src="img/woman.jpg">
                <div>
                    <p>I love the service from Lejao-Car,however the vehicle was not of the standard of cleanliness I would ecpect and am accustomed to.</p>
                    <h3>Mahima Dubey</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <h1>Enroll For Our Various Online Service<br> Anywhere From The India</h1>
        <a href="contact.php" class="btn">CONTACT US</a>
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