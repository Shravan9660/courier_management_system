<?php

include 'config.php';

if(isset($_POST) & !empty($_POST)){
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$sql = "SELECT * FROM customer WHERE custname = '$username'";
    
	$res = mysqli_query($conn, $sql);
  
	$count = mysqli_num_rows($res);
	if($count == 1){
		$r = mysqli_fetch_assoc($res);
		$password = base64_decode($r['password']);
		//$pass=base64_decode($password);
		
		$to = $r['custemail'];
        
		//$subject = "Your Recovered Password";

$to_email = "$to";
$subject = "CMS Password Recovery";
$body = "Please use this Password to login:$password" ;
$headers = "From: CMS";

if (mail($to_email, $subject, $body, $headers)) {
    echo "<script>alert('Email successfully sent to $to_email...')</script>";
} else {
    echo "<script>alert('Email sending failed...')</script>";
}
}else{
		echo "<script>alert('User name does not exist in database')</script>";

}}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
	
	<title>Login Form - Pure Coding</title>
</head>
<body style="background-color:#4e73df;">
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Forgot Password</p>
			<div class="input-group">
            <label for="Username"><b>Username</b></label>
    <input type="text" placeholder="Username" name="username" required>
			</div><br>
			
			
			<div class="input-group">
				<button name="submit" class="btn">Forgot Password</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
			<p class="login-register-text"> <a href="forgotpass.php">Forgot Password</a>.</p>
		</form>
	</div>
</body>
</html>
