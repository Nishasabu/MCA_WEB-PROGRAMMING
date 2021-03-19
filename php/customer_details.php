<html>
<head></head>
<title>Student Registration</title>
<body>
<?php
$con=mysqli_connect("localhost","20mca041","2655","20mca041");
if($con)
{
 $qry="select*from customer";
$data=mysqli_query($con, $qry);
?>
<h1 style="text-align:center"><u>CUSTOMER DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>c_no</th>
<th>c_name</th>
<th>item_purchased</th>
<th>mobile no</th>
</tr>
<?php
while($res=mysqli_fetch_array($data))
{
?>
<tr>
<td><?php echo $res['c_no'];?></td>
<td><?php echo $res['c_name'];?></td>
<td><?php echo $res['item_purchased'];?></td>
<td><?php echo $res['mobile_no'];?></td>
</tr>
<?php
}
}
?>
</table>
</body>
</html>