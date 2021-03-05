
<?php
$servername = "localhost";
$username = "20mca041";
$password = "2655";
// Create connection
$conn = mysqli_connect($servername, $username, $password);

if($conn){
echo "connection successfully";
}
mysqli_close($conn);
?>