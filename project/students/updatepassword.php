<?php 
session_start();
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);

if(isset($_POST['update']))
{
$sql='update registrationform set Password="'.$_POST['Password'].'" where id="'.$_SESSION['id'].'"';
$update=mysql_query($sql);
if($update)

{
    echo "sucess";
	header( "refresh:5; url=profile.php");
	
}
else
{
	echo "not sucess";
}
}
?>	