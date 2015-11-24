<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);
if(isset($_POST['submit']))
{
	$sql="delete from facultyform where id='$_POST[id]'"; 
	$delete=mysql_query($sql);
	if($delete)
	{
		echo "delete sucess";
		header("refresh:0; url=../basictable.php");
	}
	else
	{
		echo "delete not sucess";
	}
}
?>