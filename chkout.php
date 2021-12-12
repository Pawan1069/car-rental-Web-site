<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #f44336;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  } 
}
</style>
</head>
<body>


<div class="row"  style="padding:100px 300px;">
  <div class="col-50">
    <div class="container" >
      <form  action="chkout.php" method="post" style="padding: 25px;">
      
        <div class="row" >
          <div class="col-25">
            <h3 style="text-align: center;margin:20px 10px;font-family: lato;">Payment Form</h3>
          

            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="name" placeholder="Dharmesh s. sonkar">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Dharmesh@example.com">
            <label for="city"><i class="fa fa-mobile"></i> Mobile</label>
            <input type="text" id="city" name="mobile" placeholder="Mobile Number">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Room no,plot no,city,state,pincode">
            <label for="carid">Car ID</label>
            <input type="text" id="carid" name="carid" placeholder="See link on previous and write Id here" required>
            <label for="price">Price</label>
            <input type="text" id="price" name="price" required>
          </div>  


          
        </div>
        
       
        <input type="submit" name="submit"  value="Pay Now" class="btn">
      </form>
    </div>
  </div>
 
</div>

</body>
</html>


<?php

include "config.php";
session_start();



if(isset($_POST['submit'])){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Mobile = $_POST['mobile'];
    $Address = $_POST['address'];
    $carId = $_POST['carid'];
    $Price = $_POST['price'];
  

    $inst = "INSERT INTO booking (fullname,email,phno,address,carid,price) 
             VALUES('$Name','$Email','$Mobile','$Address','$carId','$Price')";

             


    $result = mysqli_query($conn, $inst);

    

    if($result){
      echo "<script>alert('Please checked your entered price was correct or not. if price writen by you is correct then our faculty contact to you as soon as posible or your debited amount will be refund in 4-5 working days.')</script>";
      if(isset($_SESSION['username'])){
        header("Location: pays.php?name=".$Name."&email=".$Email."&carid=".$carId."&price=".$Price."&mobile=".$Mobile);

    }  
    }
    else{
        echo "
        <script>
            alert('Please Fill in the');
        </script>";
          
    }


    
}


?>