<html>
<head></head>
<title<Student Registration</title>
<body>
<?php 
 $id=$_GET['id'];
$con=mysqli_connect("localhost","20mca041","2655","20mca041");
$qry="select*from STUDENT where id='$id'";
$res=mysqli_query($con, $qry);
$r=mysqli_fetch_array($res);
?>
<form method="post" action=" " >
<h1 style="text-align:center"><u>UPDATE</u></h1>
<input type="hidden" name="id" value="<?php echo $_GET['Id']; ?>">
<table align="center">
<tr>
<td>Student ID</td>
<td>:</td>
<td><input type="text" name="sid" value="<?php echo $r['Id'];?>"></td></tr>
<tr>
<td>Name of Student</td>
<td>:</td>
<td><input type="text" name="name" value="<?php echo $r['Name'];?>"></td></tr>
<tr>
<td colspan="2" style="text-align:right"><input type="submit" value="update" name="update"></td></tr>
</table>
</form>
<?php
if(isset($_POST["update"]))
{
$id=$_POST["Id"];
$name=$_POST["Name"];
$qry1="update STUDENT set Name='$name' where id='$id'";
if(mysqli_query($con, $qry1))
{
echo "Data updated successfully<br>";
}
}
?>
</body>
</html>
