<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include 'connect.php';
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];
// Attempt insert query execution
$sql = "INSERT INTO customer  VALUES ('$name','$email','$pass','$contact','$city','$address')";
if(mysqli_query($conn, $sql)){
  header("location: login2.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>
