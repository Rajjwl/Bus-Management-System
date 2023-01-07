<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php


include('connection.php');
$username=$_POST['textfield'];
$password=$_POST['textfield3'];
$contact=$_POST['textfield4'];
$email=$_POST['textfield2'];
$gender=$_POST['textfield6'];
$address=$_POST['textfield5'];
$res=mysql_query("insert into user values(id,'$username','$password','$contact','$email','$gender','$address')");
if(isset($res))
{
	echo "<script>alert('Your Registration Is SuccessFull')</script>";
	header("Location: login.php");
exit();
}
else
{
		echo "<script>alert('Please ENTER Valid Data')</script>";
		header("Location: reg.php");
}
?>

</body>
</html>