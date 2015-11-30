<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);

if(isset($_POST['submit'])) {
		$file_name = $_FILES['facultyphoto']['name'];	
	$file_tmp =$_FILES['facultyphoto']['tmp_name'];
        move_uploaded_file($file_tmp,"D:/chari/htdocs/faculty/".$file_name);
$sql='insert into facultyform(facultyname,fathername,dob,doj,gender,emailid,username,password,department,designation,qualification,payscale,exp,address,facultyphoto,facultyphone)
values("'.$_POST['facultyname'].'",
"'.$_POST['fathername'].'",
"'.$_POST['dob'].'",
"'.$_POST['doj'].'",
"'.$_POST['gender'].'",
"'.$_POST['emailid'].'",
"'.$_POST['username'].'",
"'.$_POST['password'].'",
"'.$_POST['department'].'",
"'.$_POST['designation'].'",
"'.$_POST['qualification'].'",
"'.$_POST['payscale'].'",
"'.$_POST['exp'].'",
"'.$_POST['address'].'",
"'.$_FILES['facultyphoto']['name'].'",
"'.$_POST['facultyphone'].'")';

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