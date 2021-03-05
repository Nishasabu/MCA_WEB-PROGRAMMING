
<html>
<head></head>
<body>
<form method="post" action="Sample.php" >
<input type="text" name="name">
<input type="submit" value="submit">

<?php
$con=mysqli_connect("localhost","20mca041","2655","20mca041");
if($con)
{
$name=$_POST["name"];

$qry="INSERT INTO college(Name) VALUES ('$name')";

if(mysqli_query($con, $qry))
{
echo "Data inserted successfully<br>";
}
}
?>
</body>
</html>
