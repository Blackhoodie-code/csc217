<?php 

$conn =mysqli_connect("localhost","root","","index");

if (!$conn) {
	die("connection Failed" . mysqli_connect_error($conn));
}else{
	echo "connection successfull";
}

// $adm = $_POST['admNumber'];
// $name = $_POST['name'];
// $pass = $_POST['pass'];

// $sql ="insert into students (admNumber,Name,Password) VALUES ('$adm','$name','$pass')";
// $result = mysqli_query($conn,$sql);

// if (!$result) {
// 	echo "User Not Logged in";
// } else{
// 	echo "User logged in";
// 	header("location:index.html");
// }

 ?>