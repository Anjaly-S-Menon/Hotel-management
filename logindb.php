<?php 
include 'connect.php';
session_start();


    $email = $_POST['email'];
    $password = $_POST['password'];
$sql = "SELECT email FROM customer WHERE password='$password'and email='$email'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $_SESSION['email'] = $email;

      
    header("location: reservation.php");
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
    }
} else {
     echo "<script>
alert('invalid username or password');
window.location.href='login2.php';
</script>";
}
//}

$conn->close();
?>