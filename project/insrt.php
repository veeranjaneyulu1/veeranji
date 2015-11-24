<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);

if(isset($_POST['submit'])) 
{
$sql='insert into subjectstable(subid,subjects)
values("'.$_POST['subid'].'",
"'.$_POST['subjects'].'")';

$query=mysql_query($sql);

if($query)  {
	echo "Insert the values";
	
       }
	   else {
		   echo "Not insert the values";
	   }
}

?>