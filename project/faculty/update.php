<?php
session_start();
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);

if(isset($_POST['submit']))
{
$update='update facultyform set 

`facultyname`="'.$_POST['facultyname'].'",
`fathername`="'.$_POST['fathername'].'",
`dob`="'.$_POST['dob'].'",
`dob`="'.$_POST['doj'].'",
`gender`="'.$_POST['gender'].'",
`emailid`="'.$_POST['emailid'].'",
`username`="'.$_POST['username'].'",
`password`="'.$_POST['password'].'",
`department`="'.$_POST['department'].'",
`designation`="'.$_POST['designation'].'",
`qualification`="'.$_POST['qualification'].'",
`payscale`="'.$_POST['payscale'].'",
`exp`="'.$_POST['exp'].'",
`address`="'.$_POST['address'].'",
`facultyphone`="'.$_POST['facultyphone'].'" where id="'.$_SESSION['id2'].'"';

$query=mysql_query($update);
if($query){
	echo "Success";
	header("refresh:2; url=../basictable.php"); 

}
else{
	echo "not success";
}
}
?>

