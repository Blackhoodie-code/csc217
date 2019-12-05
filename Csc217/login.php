<?php 
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST" action="login.php">
  admNumber:<br>
  <input type="text" name = "admNumber" placeholder="Enter your admissions number"><br>
  Name:<br>
  <input type="text" name = "name" placeholder="Enter your name"><br>
  Password:<br>
  <input type="password" name = "pass" placeholder="Enter your password"><br>
  <input type="submit" name="login" value="Login">

</form>

</body>

<?php
if(ISSET($_POST['login'])){
	extract($_POST);
	

	$hashedpass = password_hash($pass,PASSWORD_BCRYPT);
	$sql = "insert into students(admNumber,Name,Password) VALUES ('$admNumber','$name','$hashedpass')";
	$query = mysqli_query($conn,$sql);

	if(!$query){
	echo"Login Failed";
} else{
	echo"Login succsessful";
	header("location:index.html");
}

}


?> 
</html>