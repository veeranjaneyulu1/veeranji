<?php
session_start();
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);

if(isset($_POST['submit']))
{
$update='update suggesiontable set 

`statuss`="'.$_POST['statuss'].'" where sid="'.$_POST['id'].'"';

$query=mysql_query($update);
if($query){
	echo "Success";
	header("refresh:0; url=../basictable.php");

	

}
else{
	echo "not success";
}
}
?>

