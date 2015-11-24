<?php session_start();
$connect=mysql_connect("localhost","root","");
mysql_select_db("students",$connect);
 session_destroy();
 header("Location:email.php");
?>