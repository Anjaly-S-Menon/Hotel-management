<?php
include 'connect.php';
include 'session.php';
$sql = "SELECT roomtype,vacant FROM available";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "      
        <table><tr><th>ROOM TYPE</th><th>VACANT</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["roomtype"]."</td><td>".$row["vacant"]."</td></tr>";
    }
    echo "</table>"; 
} else {
    echo "0 results";
}
?>