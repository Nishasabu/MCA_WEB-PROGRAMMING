<html>
<head>
<title>Student Form</title>
</head>
<body>
<form method =  "POST" action="">

name :
<input type = "text" name = "txtname" />
<br><br>
branch :
<input type = "text" name = "txtbranch">
<br><br>
mark :
<input type ="text" name ="txtmark">
<br><br>

<input type = "submit" name = "insert" value = "Save">
<input type = "Reset" value = "Cancel">
<br><br>




</form>

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

$sql="INSERT INTO table_student(name,branch,mark) VALUES ('$name','$branch','$mark')";

if(mysqli_query($conn, $sql))
{
echo "Data inserted successfully<br>";
}

//Selection

$qry = "SELECT * FROM table_student";
$result = mysqli_query($conn, $qry);

echo "<table border='1'>
<tr>
<th>Id</th>
<th>Name</th>
<th>Branch</th>
<th>Mark</th>
<th>Update</th>
</tr>";
while ($row = mysqli_fetch_assoc($result))

{
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['branch']."</td>";
echo "<td>".$row['mark']."</td>";
echo "<td bgcolor='green'><a href='table_studentupdate.php?id=$row[id]'><font color='white'>Update</a>";

echo "</tr>";
}
echo "</table>";


mysqli_close($conn);
}
}
?>

</body>

</html>