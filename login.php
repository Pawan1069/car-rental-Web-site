<?php 

include 'config.php';

session_start();

error_reporting(0);


if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = ($_POST['password']);
	$sql = "SELECT * FROM users WHERE email='$email'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows>0) {
		$row = mysqli_fetch_assoc($result);
		if(strcmp($password,$row['password'])==0){
			$_SESSION['username'] = $row['username'];
			$_SESSION['id'] = $row['id'];
			header("Location: pro1.php");
		}
		else{
			echo "<script>alert('Invalid Password')</script>";
		}
	}
	else {
		echo "<script>alert('".$password."')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Detail</title>
    <link rel="stylesheet" href="styleL.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>
    

