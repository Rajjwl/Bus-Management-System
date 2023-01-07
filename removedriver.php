<?php
include("connection.php");
error_reporting(0);
echo $driverid=$_GET['driverid'];
$res=mysql_query("delete from adddriver where driverid=$driverid");

if(isset($res))
{
	echo "<script>alert('Driver Removed Successfully')</script>";
	header("Location: driverinfo.php");
exit();
}
else
{
	echo "failed to delete data";
}
?>