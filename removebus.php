<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connection.php");
error_reporting(0);
$busno=$_GET['busno'];
$res=mysql_query("delete from addbus where id=$busno");
if(isset($res))
{
	echo "<script>alert('Deleted SuccessFully')</script>";
	header("Location: businfo.php");
exit();
}
else
{
	echo "<script>alert('Try Again')</script>";
}
?>
</body>
</html>