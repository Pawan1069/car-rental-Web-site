<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: contact.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="pro1.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="sub-header1">
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
    <div class="text-box">
        <h1>Contact Us</h1>
    </div>    
    </section>

    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7736975.333531421!2d72.27879833395254!3d18.7615760962832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcfc41e9c9cd6f9%3A0x1b2f22924be04fb6!2sMaharashtra!5e0!3m2!1sen!2sin!4v1625907427207!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


    </section>

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fas fa-home"></i>
                    <span>
                        <h5>Rajiv Road, ABC Building</h5>
                        <p>Maharashtra, Banglore, IN</p>

                    </span>
                </div>
                <div>
                    <i class="fas fa-phone"></i>
                    <span>
                        <h5>+91 012345678</h5>
                        <p>Monday to saturday, 8am to 11pm</p>

                    </span>
                </div>
                <div>
                    <i class="fas fa-envelope"></i>
                    <span>
                        <h5>Lejaocar@gmail.com</h5>
                        <p>Email us your query</p>

                    </span>
                </div>
                
            </div>
            <div class="contact-col">
                <form action="" method="POST">
                    <input type="text" name="name" placeholder="Enter your name" required />
                    <input type="email" name="ema" placeholder="Enter email address" required />
                    <input type="text" name="sub" placeholder="Enter your subject" required />
                    <textarea rows="8" name="message" placeholder="message" required></textarea>
                    <input type="submit" class="btn-b" name="submit"/>
                </form>
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


<?php

include 'config.php';   

if(isset($_POST['submit'])){
    $username = $_POST['name'];
    $email = $_POST['ema'];
    $subject = $_POST['sub'];
    $msg = $_POST['message'];

    $insertquery = "INSERT INTO contact_us (UserName,Email,Subject,Msg) 
                    VALUES ('$username','$email','$subject','$msg')";
    
    $result = mysqli_query($conn, $insertquery);

    if($result){
        echo "
        <script>
            alert('Data Sent Successfully!!!');
        </script>";
          
    }
    else{
        echo "
        <script>
            alert('Please Fill in the');
        </script>";
          
    }

}         

?>

