<?php
session_start();
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);

if(isset($_POST['update']))
{
$update='update registrationform set 

`studentname`="'.$_POST['studentname'].'",
`studentfathername`="'.$_POST['studentfathername'].'",
`courseid`="'.$_POST['courseid'].'",
`studentid`="'.$_POST['studentid'].'",
`secid`="'.$_POST['secid'].'",
`section`="'.$_POST['section'].'",
`rollno`="'.$_POST['rollno'].'",
`gender`="'.$_POST['gender'].'",
`dob`="'.$_POST['dob'].'",
`doj`="'.$_POST['doj'].'",
`emailid`="'.$_POST['emailid'].'",
`Password`="'.$_POST['Password'].'",
`studentphone`="'.$_POST['studentphone'].'",
`parentphone`="'.$_POST['parentphone'].'",
`Address`="'.$_POST['Address'].'",
`currentsem`="'.$_POST['currentsem'].'",
`regulation`="'.$_POST['regulation'].'",
`status`="'.$_POST['status'].'",
`deptid`="'.$_POST['deptid'].'" where id="'.$_SESSION['id3'].'"';

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

