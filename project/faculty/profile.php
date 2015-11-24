<?php 

$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);
$sql="select * from facultyform where id='$_POST[id]'"; 

$query=mysql_query($sql);
$fetch=mysql_fetch_array($query);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
td {
	padding:20px;
	border:2px solid green;
	
}
</style>
</head>

<body style="margin:0px; background-color:#088bd7;">
<div style="background:#FFF;height:100px;margin:0px auto;overflow:hidden;">
<img src="zoom.png" style="float:left;padding:28px;"/>
<a href="logout.php"><img src="button_logout.png" style="float:right;margin-top:40px;margin-right:200px;" /></a>


<h1 style="text-align:center;margin:0px;padding:28px;color:#088bd7;padding-right:295px;">Faculty Registration Form Details</h1>
</div>
<div style="margin:0px auto;">
<div style="width:850px;float:right;background:#ccc; border-radius:25px;">
<a href="edit.php"><img src="images.jpg" style="float:right;margin-top:45px;margin-right:90px;" /></a>

<table style="width:700px;margin-left:75px;margin-top:52px;border-collapse:collapse;border:2px solid white;">

<tr>
<td style="width:270px;" >Faculty Name:</td>
<td><?php echo $fetch['facultyname']?> </td>
</tr>


<tr>
<td >Father's Name:</td>
<td> <?php echo $fetch['fathername']?></td>
</tr>

<tr>
<td >Date Of Birth:</td>
<td><?php echo $fetch['dob']?></td>
</tr>

<tr>
<td >Date Of Joining:</td>
<td><?php echo $fetch['doj']?> </td>
</tr>

<tr>
<td >Gender:</td>
<td><?php echo $fetch['gender']?></td>
</tr>

<tr>
<td >Email Id</td>
<td><?php echo $fetch['emailid']?></td>
</tr>

<tr>
<td >UserName</td>
<td><?php echo $fetch['username']?></td>
</tr>

<tr>
<td >Password:</td>
<td><?php echo $fetch['password']?></td>
</tr>

<tr>
<td >Dept Id:</td>
<td >
<?php echo $fetch['department']?>
</td>
</tr>

<tr>
<td >Designation:</td>
<td><?php echo $fetch['designation']?></td>
</tr>

<tr>
<td >Qualification:</td>
<td><?php echo $fetch['qualification']?></td>
</tr>

<tr>
<td >Payscale:</td>
<td><?php echo $fetch['payscale']?></td>
</tr>

<tr>
<td >Experience:</td>
<td><?php echo $fetch['exp']?></td>
</tr>

<tr>
<td >Address:</td>
<td><?php echo $fetch['address']?></td>
</tr>

<tr>
<td >Mobile Number:</td>
<td><?php echo $fetch['facultyphone']?></td>
</tr>



</table>



</div>
<div style="width:200px;height:250px;float:left;margin-left:448px;" >
<a href="photo.php"><img src="images/<?php echo $fetch['facultyphoto']?>" style="height:100%;width:100%; border-radius:20px;"/></a>
</div>
</div>

</div>


</body>
</html>
