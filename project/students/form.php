<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<div style="background:#FFF;height:100px;margin:0px auto;overflow:hidden;">
<img src="zoom.png"style="float:left;padding:28px;"/>


<h1 style="text-align:center;margin:0px;padding:28px;color:#088bd7;padding-right:295px;">Student Registration Form</h1>
</div>

<body style="background-color:#088bd7;margin:0px auto;width:100%;">
 
<div style="margin:0px auto;">
<div style="width:410px;margin:0px auto;padding:80px;background-color:#CCC;height:750PX;border-radius:25px">

<form  action="submit.php" method="post" name="students" enctype="multipart/form-data">
<table>

<tr>
<td >Student Name:</td>
<td> <input type="text" name="studentname" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;"/></td>
</tr>

<tr>
<td >Student Father Name:</td>
<td> <input type="text" name="studentfathername" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;"/></td>
</tr>

<tr>
<td >Course Id:</td>
<td><input type="text" name="courseid" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;"/></td>
</tr>

<tr>
<td >Student Id:</td>
<td><input type="text" name="studentid" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;"/></td>
</tr>

<tr>
<td >Section Id:</td>
<td><input type="text" name="secid" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;"/></td>
</tr>

<tr>
<td >Section:</td>
<td><input type="text" name="section"  style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;"/></td>
</tr>

<tr>
<td >Roll Number:</td>
<td><input type="text" name="rollno"  style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;"/></td>
</tr>

<tr>
<td >Gender:</td>
<td><input type="radio" name="gender" value="male" checked="checked" /> Male <input type="radio" name="gender" value="female"  /> Female </td>

</tr>

<tr>
<td >Date Of Birth:</td>
<td><input type="date" name="dob" style="width:164px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;"/></td>
</tr>

<tr>
<td >Date Of Joining:</td>
<td><input type="date" name="doj"  style="width:164px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;"/> </td>
</tr>

<tr>
<td >Email Id</td>
<td><input type="text" name="emailid"  style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;"/></td>
</tr>

<tr>
<td >Password:</td>
<td><input type="text" name="Password"  style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;"/></td>
</tr>

<tr>
<td >Student Phone:</td>
<td><input type="text" name="studentphone" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;"/></td>
</tr>


<tr>
<td >Parent Phone:</td>
<td><input type="text" name="parentphone" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;"/></td>
</tr>

<tr>
<td >Address:</td>
<td><textarea name="Address" rows="5" cols="21" style="width:164px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;">

</textarea></td>
</tr>

<tr>
<td >Current Semister:</td>
<td><input type="text" name="currentsem" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;"/></td>
</tr>

<tr>
<td>Student Photo:</td>
<td><input type="file" name="studentphoto"  /></td>
</tr>

<tr>
<td >Regulation:</td>
<td><input type="text" name="regulation" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;"/></td>
</tr>

<tr>
<td >Status:</td>
<td><input type="text" name="status" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;"/></td>
</tr>

<tr>
<td >Dept Id:</td>
<td >
<select name="deptid" style="width:164px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;">
<option value="IT">IT</option>
<option value="ECE">ECE</option>
<option value="DIPLOMA">DIPLOMA</option>
<option value="CSE">CSE</option>
<option value="MECHANICAL">MECHANICAL</option>
</select>
</td>
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
