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
$from=$_POST['textfield2'];
$to=$_POST['textfield3'];
$runningdays=$_POST['textfield4'];
$departuretime=$_POST['textfield5'];
$busrouteno=rand(11111,99999);
$cost=$_POST['textfield6'];
$res=mysql_query("insert into addbusroute values(id,'$busno','$from','$to','$runningdays','$departuretime','$busrouteno','$cost')");
if(isset($res))
{
	echo "<script>alert('BUS ROUTE ADDED SUCCESSFULLY')</script>";
}
else
{
		echo "<script>alert('Please ENTER Valid Data')</script>"."<a href=reg.php>Go Back</a>";
}
?>

</body>
</html>