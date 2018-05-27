<?php
 //create connection
 $connect=mysqli_connect('localhost','root','anjaly','hotel');
	
//check connection
 if(mysqli_connect_errno($connect))
 {
	echo 'Failed to connect to database: '.mysqli_connect_error();
}
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];
$sql="INSERT INTO customer VALUES('$name','$email','$pass','$contact','$city','$address')";
$con->query($sql);
?>