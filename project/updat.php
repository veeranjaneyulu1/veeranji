<?php
session_start();
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);

if(isset($_POST['submit']))
{
$update='update subjectstable set 

`subid`="'.$_POST['subid'].'",
`subjects`="'.$_POST['subjects'].'" where s_id="'.$_POST['id'].'"';

$query=mysql_query($update);
if($query){
	echo "Success";
	header("refresh:0; url=basictable.php");



	

}
else{
	echo "not success";
}
}
?>

