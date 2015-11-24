<?php
$connect=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$connect);

if(isset($_POST['submit'])) {
		$file_name = $_FILES['studentphoto']['name'];	
	$file_tmp =$_FILES['studentphoto']['tmp_name'];
        move_uploaded_file($file_tmp,"D:/chari/htdocs/project/".$file_name);
$sql='insert into registrationform(studentname,studentfathername,courseid,studentid,secid,section,rollno,gender,dob,doj,emailid,Password,studentphone,parentphone,Address,currentsem,studentphoto,regulation,status,deptid)
values("'.$_POST['studentname'].'",
"'.$_POST['studentfathername'].'",
"'.$_POST['courseid'].'",
"'.$_POST['studentid'].'",
"'.$_POST['secid'].'",
"'.$_POST['section'].'",
"'.$_POST['rollno'].'",
"'.$_POST['gender'].'",
"'.$_POST['dob'].'",
"'.$_POST['doj'].'",
"'.$_POST['emailid'].'",
"'.$_POST['Password'].'",
"'.$_POST['studentphone'].'",
"'.$_POST['parentphone'].'",
"'.$_POST['Address'].'",
"'.$_POST['currentsem'].'",
"'.$_FILES['studentphoto']['name'].'",
"'.$_POST['regulation'].'",
"'.$_POST['status'].'",
"'.$_POST['deptid'].'")';

$query=mysql_query($sql);

if($query)  {
	echo "Insert the values";
	header( "refresh:5; url=form.php");
       }
	   else {
		   echo "Not insert the values";
	   }
}

?>