<html>
<body>
<?php
$servername = "localhost";
$username = "20mca041";
$password = "2655";
$dbname = "20mca041";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$id=$_GET["id"];
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM table_student WHERE id=2";


if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>