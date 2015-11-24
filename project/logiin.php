<?php
session_start();
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);

if(isset($_POST['login'])) 
{

$sql='select * from admin where username="'.$_POST['username'].'" and password="'.$_POST['password'].'"'; 
	$query=mysql_query($sql);
	$count=mysql_num_rows($query);
	if($count==1){
	$fetch=mysql_fetch_array($query);
	$_SESSION['id']=$fetch['id'];
	echo "Success";
		header( "refresh:0; url=index.php");

	}
	else {
		echo "Not Success";
	}
}
?>