<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);
if($_POST['whoom']=="faculty")
{
	$catagery=1;
}
if($_POST['whoom']=="students")
{
	$catagery=2;
}
if($_POST['whoom']=="both")
{
	$catagery=3;
}
if(isset($_POST['submit'])) 
{
$sql='insert into uploadtable(title,attachment,catagery,type,date,whoom)
values("'.$_POST['title'].'",
"'.$_POST['attachment'].'",
"'.$_POST['catagery'].'",
"'.$_POST['type'].'",
"'.$_POST['date'].'",
"'.$_POST['whoom'].'")';

$query=mysql_query($sql);

if($query)  {
	echo "Insert the values";
	
       }
	   else {
		   echo "Not insert the values";
	   }
}

?>