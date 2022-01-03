<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: index1.php");
    exit;
}
require_once "config.php";

$email = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['email'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter email + password";
    }
    else{
        $param_email = trim($_POST['email']);
        $password = base64_encode(trim($_POST['password']));
		//echo $password;
    }


if(empty($err))
{
    $sql = "SELECT  custemail, password,custname FROM customer WHERE custemail='$param_email'";
	$result=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($result);
	
	while($row = mysqli_fetch_array($result)) {
		$dbpw=$row['password'];
		if ($password == $dbpw) {
			$_SESSION['custname'] = $row['custname'];
				header("Location: customerindex.php");	
			}
			else {
				echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
		}
}
    

}
}

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
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email"  required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password"  required>
			</div>
			
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
			<p class="login-register-text"> <a href="forgotpass.php">Forgot Password</a>.</p><br>
			<a class="login-register-text" href="employeelogin.php">Employee Login</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a class="login-register-text" href="adminlogin.php">Admin Login</a>

		</form>
	</div>
</body>
</html>