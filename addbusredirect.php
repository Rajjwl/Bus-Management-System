<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php


include('connection.php');
$busno=$_POST['textfield'];
$buscompanyname=$_POST['textfield2'];
$buspurchasedate=$_POST['textfield3'];
$res=mysql_query("insert into addbus values(id,'$busno','$buscompanyname','$buspurchasedate')");
if(isset($res))
{
	echo "<script>alert('Bus Added Successfully')</script>";
	header("Location: addbus.php");
exit();
}
else
{
		echo "<script>alert('Please ENTER Valid Data')</script>"."<a href=reg.php>Go Back</a>";
}
?>

</body>
</html>