<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);

if(isset($_POST['submit'])) 
{
$sql='insert into attendencetable(subjects,department,section,date,rollno,status)
values("'.$_POST['subjects'].'",
"'.$_POST['department'].'",
"'.$_POST['section'].'",
"'.$_POST['date'].'",
"'.$_POST['rollno'].'",
"'.$_POST['status'].'")';

$query=mysql_query($sql);

if($query)  {
	echo "Insert the values";
		header("refresh:0; url=attendence.php");

	
       }
	   else {
		   echo "Not insert the values";
	   }
}

?>