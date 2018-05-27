<?php
include 'connect.php';
include 'session.php';
$email =  $_SESSION['email'];
echo  $email;
$cindate=$_POST['cindate'];
$coutdate=$_POST['coutdate'];
$roomtype=$_POST['roomtype'];
$roomcnt=$_POST['roomcnt'];
$sql1 = "SELECT name FROM customer WHERE  email='$email'";
$result = $conn->query($sql1);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$name = $row['name'];
$sql3 = "SELECT * FROM available WHERE  roomtype='$roomtype'";
$result3 = $conn->query($sql3);
$row3=mysqli_fetch_array($result3,MYSQLI_ASSOC);
$remain = $row3['vacant'];
if(($remain-$roomcnt)>0){
// Attempt insert query execution
$sql = "INSERT INTO booked   VALUES ('$name','$email','$roomtype','$roomcnt','1','$cindate','$coutdate')";
$sql2 = "UPDATE available SET vacant = vacant -'$roomcnt'  WHERE roomtype = '$roomtype' and vacant-'$roomcnt' > 0";
$conn->query($sql2);
if(mysqli_query($conn, $sql)){
  echo  "<script>alert('Booking is successful...');window.location.href='index.php';</script>" ;

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}
else
{
 echo "<script>alert('No vacancy');window.location.href='checkavailability.php';</script>";
}
?>