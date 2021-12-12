<?php

include "config.php";
session_start();
$user = $_SESSION['id'];
 
$query = $conn->query("select * from users where id=$user");

if($query){
    $row = mysqli_fetch_array($query);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <title>Profile</title>
    <style>
        body {
            background-color: #efefef;
            }
        .profile1{
            margin-left:350px;
            margin-top:60px;
            font-size:20px;
        }
        
    </style>
    
    
</head>
<body> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
    <div class="profile1">
        <span>Username :</span> <?php echo $row['username']; ?><br>
        <span>email :</span> <?php echo $row['email']; ?>
    </div>

</body>
</html>