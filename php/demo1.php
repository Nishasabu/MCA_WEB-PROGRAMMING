
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
  echo("connection successfull");


$sql = "INSERT INTO college(Name) VALUES ('Mariya')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
}
else
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
>?
