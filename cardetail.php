<?php
    $id = $_GET['id'];
    if($db=mysqli_connect("localhost","root","","Lejao_car")){
        $sql="select * from car_details where car_id = $id";
        $r=$db->query($sql) or die("Error occure");
        if($r->num_rows>0){
            $data = mysqli_fetch_array($r);
        }
    }
    else{
        echo "Error";
    }
session_start();
if(!isset($_SESSION['username'])){
    header("Location: cardetail.php");
}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Detail</title>
    <link rel="stylesheet" href="pro1.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <section>
        <nav>
            <a href="pro1.php"><img src="img/l.png" height="50px" width="60px"></a> 
            <div class="nav-links1" id="navLinks">
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
            <i class="fas fa-bars" onclick="showMenu()"></i>
        </nav>
    
    </section>


    <div class="small-container single-car">
        <div class="row-4">
            <div class="col-2">
                <img src = "<?php echo 'data:image/jpeg;base64,'.base64_encode($data['img1']); ?>" height="330px" width="400px" id="CarImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src = "<?php echo 'data:image/jpeg;base64,'.base64_encode($data['img1']); ?>" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src = "<?php echo 'data:image/jpeg;base64,'.base64_encode($data['img2']); ?>" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src = "<?php echo 'data:image/jpeg;base64,'.base64_encode($data['img3']); ?>" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src = "<?php echo 'data:image/jpeg;base64,'.base64_encode($data['img4']); ?>" width="100%" class="small-img">
                    </div>
                </div>

 
            </div>
            <div class="col-11">
                <p><?php echo $data['Brand_name']; ?></p>
                <h1><?php echo $data['Model']; ?></h1>
                <select style="width: 50%;">
                    <option><?php echo $data['rate_8hr']; ?>(8hr)</option>
                    <option><?php echo $data['rate_12hr']; ?>(12hr)</option>
                    <option><?php echo $data['rate_18hr']; ?>(18hr)</option>
                    <option><?php echo $data['rate_24']; ?>(24hr)</option>
                </select>
                <a href="chkout.php" class="btn-c">BOOK</a>
                
                <h3>Car Detail <i class="fas fa-indent"></i></h3>
                <p><?php echo $data['Details']; ?></p>

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
        var CarImg = document.getElementById("CarImg");
        var SmallImg = document.getElementsByClassName("small-img");

           SmallImg[0].onclick = function()
           {
               CarImg.src = SmallImg[0].src;

           }
           SmallImg[1].onclick = function()
           {
                CarImg.src = SmallImg[1].src;

           }
           SmallImg[2].onclick = function()
           {
                CarImg.src = SmallImg[2].src;

           }
           SmallImg[3].onclick = function()
           {
                CarImg.src = SmallImg[3].src;

           }
        
    </script>


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