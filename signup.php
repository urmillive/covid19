<?php
require "config.php";
include "header.php";

if (isset($_POST['isignup'])) {
	
	$name = $_POST['fullname'];
	$mobile = $_POST['mobile'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$name=  mysqli_real_escape_string($conn,$mobile);
	$mobile = mysqli_real_escape_string($conn,$mobile);
	$username = mysqli_real_escape_string($conn,$username);
	$password = mysqli_real_escape_string($conn,$password);

	if ($name == "" || $mobile == "" || $username == "" || $password == "") {
		$_SESSION['error'] = "Please Enter valid Data";
	} else {
		$query = "SELECT * FROM `client_signup` WHERE username='$username';";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_row($result);
		if ($row >= 1) {
			$_SESSION['error'] = "Please Login, You are already User";
		} else {
			$query = "INSERT INTO `client_signup` (`id`, `name`, `mobile`, `username`, `password`) VALUES (NULL, '$name', '$mobile', '$username', '$password');";
			$result = mysqli_query($conn, $query);
			if ($result) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "Login Successfully Done";
				header('location:index.php');
				exit;
			} else {
				header('location:signup.php');
			}
		}
	}
}

?>
<div class="imgbox">
    <img id="staysafe-img" src="./images/stay-safe.svg" alt="Stay Safe" >
</div>
<link rel="stylesheet" href="css/signup.css">
<!-- Login Form -->
<form class="box" action="signup.php" method="post">
  <h1>Signup</h1>
  <input type="text" name="fullname" placeholder="Name">
  <input type="text" name="mobile" placeholder="mobile">
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <input type="submit" name="isignup" value="Signup">
  <p class="alt-txt">Already User ? <a id="alt-txt" href="login.php">Login</a></p>
</form>

<?php include "footer.php"; ?>