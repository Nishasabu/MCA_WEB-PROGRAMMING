
<html>
<head>
<title>GENERAL Form</title>
</head>
<body bgcolor="pink">
<div align="centre">
<h1 style="text-align:centre"><u>INSERT DATA</u></h1>
<form method ="POST" action="">

name :
<input type = "text" name = "txtname" />
<br><br>
rollno:
<input type = "text" name = "txtrollno">
<br><br>
gender :
<input type ="text" name ="txtgender">
<br><br>
address:
<textarea name="add" type="textarea"></textarea>
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
$rollno = $_POST['txtrollno'];
$gender=$_POST['txtgender'];
$address=$_POST['add'];
$sql="INSERT INTO student_info(name,rollno,gender,address) VALUES ('$name','$rollno','$gender','$address')";

if(mysqli_query($conn, $sql))
{
echo "Data inserted successfully<br>";
}

$qry = "SELECT * FROM student_info";
$result = mysqli_query($conn, $qry);

echo "<table border='1'>
<tr>
<th>id</th>
<th>name</th>
<th>rollno</th>
<th>gender</th>
<th>address</th>
</tr>";
while ($row = mysqli_fetch_assoc($result))

{
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['rollno']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['address']."</td>";
echo "</tr>";
}
echo "</table>";


mysqli_close($conn);
}
}
?>

</body>

</html>