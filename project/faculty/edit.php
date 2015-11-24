<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);
$sql='select * from facultyform where id="'.$_POST['id'].'"';
$query=mysql_query($sql);
$fetch=mysql_fetch_array($query);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<div style="background-color:#FFF;height:100px;margin:0px auto;overflow:hidden;">
<img src="zoom.png"style="float:left;padding:28px;"/>


<h1 style="text-align:center;margin:0px;padding:28px;color:#088bd7;padding-right:295px;">Faculty Registration Edit Form</h1>
</div>

<body style="background-color:#088bd7;margin:0px auto;width:100%;">
 
<div style="margin:0px auto;">
<div style="width:410px;margin:0px auto;padding:80px;background-color:#CCC;height:650px;border-radius:25px">

<form  action="update.php" method="post" name="edit" enctype="multipart/form-data">
<table style="margin:0px auto;">
<tr>
<td >Name of the Faculty:</td>
<td> <input type="text" name="facultyname" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['facultyname']?>"/></td>
</tr>

<tr>
<td >Father's Name:</td>
<td> <input type="text" name="fathername" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['fathername']?>"/></td>
</tr>

<tr>
<td >Date Of Birth:</td>
<td><input type="date" name="dob" style="width:164px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['dob']?>"/></td>
</tr>

<tr>
<td >Date Of Joining:</td>
<td><input type="date" name="doj"  style="width:164px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;"value="<?php echo $fetch['doj']?>"/> </td>
</tr>

<tr>
<td >Gender:</td>
<td><input type="radio" name="gender" value="male" checked="checked" /> Male <input type="radio" name="gender" value="female"  /> Female </td>
</tr>

<tr>
<td >Email Id:</td>
<td><input type="text" name="emailid"  style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['emailid']?>"/></td>
</tr>

<tr>
<td >UserName:</td>
<td><input type="text" name="username"  style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['username']?>"/></td>
</tr>

<tr>
<td >Password:</td>
<td><input type="text" name="password"  style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['password']?>"/></td>
</tr>

<tr>
<td >Department:</td>
<td >
<select name="department" style="width:164px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['department']?>">
<option value="IT">IT</option>
<option value="ECE">ECE</option>
<option value="DIPLOMA">DIPLOMA</option>
<option value="CSE">CSE</option>
<option value="MECHANICAL">MECHANICAL</option>
</select>
</td>
</tr>

<tr>
<td >Designation:</td>
<td><input type="text" name="designation" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['designation']?>"/></td>
</tr>

<tr>
<td >Qualification:</td>
<td><input type="text" name="qualification" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['qualification']?>"/></td>
</tr>

<tr>
<td >Pay Scale:</td>
<td><input type="text" name="payscale" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['payscale']?>"/></td>
</tr>

<tr>
<td >Experience:</td>
<td><input type="text" name="exp"  style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['exp']?>"/></td>
</tr>

<tr>
<td >Address:</td>
<td><textarea name="address" rows="5" cols="21" style="width:164px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;" > <?php echo $fetch['address']?>

</textarea></td>
</tr>

<tr>
<td >Mobile Number:</td>
<td><input type="text" name="facultyphone" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['facultyphone']?>"/></td>
</tr>

</table>

<table style="margin:44px 0px 0px 123px;">
<tr>
<td>
<input type="submit" name="submit" value="Submit" style="background:#088bd7;"/>
</td>
</tr>
</table>


</form>
</div>
</div>

</body>
</html>
