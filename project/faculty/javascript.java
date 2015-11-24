<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script>
function facultyname(inputtxt,minlength){
var x=document.forms["faculty"]["NameoftheFaculty"].value;
var length=4;
var field=inputtxt.value;
var l=/^[A-Za-z]+$/;
if(x==null||x==""){
var x=document.getElementById("letters").innerHTML="Must be fill";
return false;
}
else if(field.length<length){
var x=document.getElementById("letters").innerHTML="Minimum letters is 4";
}
else if(inputtxt.value.match(l)){
return true;
}
else {
	var x=document.getElementById("letters").innerHTML="Must contains Letters";
return false;
}
}
</script>
<script>
function facultyfathername(inputtxt,minlength){
var x=document.forms["faculty"]["Father_Name"].value;
var length=4;
var l=/^[A-Za-z]+$/;
if(x==null||x==""){
var x=document.getElementById("letter").innerHTML="Must be fill";
return false;
}
else{
if(inputtxt.value.match(l)){
return true;
}
else {
	var x=document.getElementById("letter").innerHTML="Must contains Letters";
return false;
}
}
}
</script>
<script>
function facultynumber(inputtxt,minlength){
var x=document.forms["faculty"]["phonenumber"].value;
var length=10;
var field=inputtxt.value;
var num=/^[0-9]+$/;
if(x==null||x==""){
var x=document.getElementById("letter").innerHTML="Must be fill";
return false;
}
else if(!field.match(num)){
	var x=document.getElementById("number").innerHTML="Must contains Numbers Only";
    return false;
}
else if(field.length<length){
 var x=document.getElementById("number").innerHTML="Must contains minimum 10 Numbers";
}
}
</script>
</body>
</html>