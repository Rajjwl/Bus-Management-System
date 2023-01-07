<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include('connection.php');
$res=mysql_query("delete from adddriver where driverid='$_POST[textfield]'");
if($res)
{
	echo "<script>alert('Removed SuccessFully')</script>";
}
else
{
	echo "<script>alert('Try Again')</script>";
}
?>
</body>
</html>