<?php
$servername = "localhost";
$username = "20mca041";
$password = "2655";
$dbname = "20mca041";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Id,Name FROM college";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["Name"]."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>