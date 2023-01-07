<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php


include('connection.php');
$drivername=$_POST['textfield'];
$email=$_POST['textfield2'];
$password=$_POST['textfield3'];
$contact=$_POST['textfield4'];
$address=$_POST['textfield5'];
$liecence=$_POST['textfield6'];
$adhar=$_POST['textfield7'];
$age=$_POST['textfield8'];
$driverid=rand(11111,99999);
$res=mysql_query("insert into adddriver values(sno,'$drivername','$email','$password','$contact','$address','$liecence','$adhar','$age','$driverid')");
if(isset($res))
{
	echo "<script>alert('Driver Added Successfully')</script>"."<a href=adddriver.php>Go Back</a>";
}
else
{
		echo "<script>alert('Please ENTER Valid Data')</script>";
		include('adddriver.php');
}
?>

</body>
</html>