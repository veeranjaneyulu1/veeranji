<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);

if(isset($_POST['submit'])) {
$sql='insert into admin(username,password)
values("'.$_POST['username'].'",
"'.$_POST['password'].'")';

$query=mysql_query($sql);

if($query)  {
	echo "Insert the values";
	header("refresh:5; url=index.php");
       }
	   else {
		   echo "Not insert the values";
	   }
}

?>