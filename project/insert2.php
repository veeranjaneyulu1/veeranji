<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);

if(isset($_POST['submit'])) 
{
$sql='insert into mappingtable(facultyname,department,section,subjects)
values("'.$_POST['facultyname'].'",
"'.$_POST['department'].'",
"'.$_POST['section'].'",
"'.$_POST['subjects'].'")';

$query=mysql_query($sql);

if($query)  {
	echo "Insert the values";
		header("refresh:0; url=submap.php");

	
       }
	   else {
		   echo "Not insert the values";
	   }
}

?>