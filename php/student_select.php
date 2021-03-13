<html>
<head></head>
<title>Student Registration</title>
<body>
<?php
$con=mysqli_connect("localhost","20mca041","2655","20mca041");
if($con)
{
 $qry="select*from STUDENT";
$data=mysqli_query($con, $qry);
?>
<h1 style="text-align:center"><u>STUDENT DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>Sl.No</th>
<th>Student Name</th>
<th>Branch</th>
<th>Mark</th>
</tr>
<?php
while($res=mysqli_fetch_array($data))
{
?>
<tr>
<td><?php echo $res['Id'];?></td>
<td><?php echo $res['Name'];?></td>
<td><?php echo $res['Branch'];?></td>
<td><?php echo $res['Mark'];?></td>
</tr>
<?php
}
}
?>
</table>
</body>
</html>