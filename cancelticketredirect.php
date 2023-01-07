<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
include('connection.php');
$ticketno = $_GET['ticketno'];
$res=mysql_query("delete from bookticket where ticketno='$ticketno'");
$qry=mysql_query("delete from bookticket where ticketno='$ticketno'");
?>
	<?php 
if(!empty($res))
{
	echo "<script>alert('Ticket Cancelled SuccessFully')</script>";	
}
else
{
	echo "<script>alert('Error in Cancelling The Ticket')</script>";
}
?>
 
</body>
</html>