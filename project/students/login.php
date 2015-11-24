<?php 
session_start();
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);

if(isset($_POST['login'])) 
{

$sql='select * from registrationform where emailid="'.$_POST['emailid'].'" and Password="'.$_POST['Password'].'"'; 
	$query=mysql_query($sql);
	$count=mysql_num_rows($query);
	if($count==1){
	$fetch=mysql_fetch_array($query);
	$_SESSION['id']=$fetch['id'];
	echo "Success";
	header( "refresh:5; url=profile.php");
	}
	else {
		echo "Not Success";
	}
}
?>