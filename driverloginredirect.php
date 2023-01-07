<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
include('connection.php');
$res=mysql_query("select * from adddriver where email = '$_POST[textfield]' and password= '$_POST[textfield2]' ");
$r=mysql_fetch_assoc($res);
if(!empty($r))
{
session_start();
$_SESSION['usr']=$r;
include('driverhome.php');	
}
else
{
echo "<script>alert('Enter valid Credintials')</script>";
include('driverlogin.php');	
}
?>
</body>
</html>