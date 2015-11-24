<?php
session_start();
$connect=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$connect);

if(isset($_POST['photoupdate'])) {
		$file_name = $_FILES['facultyphoto']['name'];	
	$file_tmp =$_FILES['facultyphoto']['tmp_name'];
        move_uploaded_file($file_tmp,"D:/chari/htdocs/faculty/".$file_name);
	$update='update facultyform set
	 `facultyphoto`="'.$_FILES['facultyphoto']['name'].'"
	 where id="'.$_SESSION['id'].'"';
	 $query=mysql_query($update);
	 if($query){
		 echo "success";
		header( "refresh:5; url=profile.php");
	 }

else
{
	echo "not sucess";
}
}
?>