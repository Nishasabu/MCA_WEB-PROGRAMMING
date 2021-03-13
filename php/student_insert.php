<html>
<head>
<title>Student Form</title>
</head>
<body>
<div align="centre">
<h1 style="text-align:centre"><u>INSERT DATA</u></h1>
<form method =  "POST" action="">

Name :
<input type = "text" name = "txtname" />
<br><br>
Branch :
<input type = "text" name = "txtbranch">
<br><br>
Mark :
<input type ="text" name ="txtmark">
<br><br>

<input type = "submit" name = "insert" value = "Save">
<input type = "Reset" value = "Cancel">
</div>
<?php
if(isset($_POST['insert']))
{
 $conn =mysqli_connect("localhost","20mca041","2655","20mca041");
if($conn)
 {
echo "Mysql connection ok<br>";

$name =$_POST['txtname'];
$branch = $_POST['txtbranch'];
$mark =$_POST['txtmark'];

$sql="INSERT INTO STUDENT(name,branch,mark) VALUES ('$name','$branch','$mark')";

if(mysqli_query($conn, $sql))
{
echo "Data inserted successfully<br>";
}
}
}
mysqli_close($conn);
?>

</body>

</html>