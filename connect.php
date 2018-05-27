
<?php
 //create connection
 $db = 'hotel';
 $conn=mysqli_connect('localhost','root','anjaly','hotel');
	
//check connection
 if(mysqli_connect_errno($conn))
 {
	echo 'Failed to connect to database: '.mysqli_connect_error();
}

?>