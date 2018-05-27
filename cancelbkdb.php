<?php
include 'connect.php';
//include 'session.php';
//$email =  $_SESSION['email'];
$email="abc@gmail.com";
$sql1 = "SELECT * FROM Booked WHERE  email='$email'";
$result = $conn->query($sql1);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$rooms=$row['rooms'];
$indate=$row['arrival'];
$outdate=$row['departure'];
echo "You booked $rooms rooms from $indate to $outdate  ";
echo "<br>";
echo "Do you want to cancel your booking?";
echo "<button  type="submit" name="cancel" class="btn btn-primary" value="submit">Cancel</button>";
?>