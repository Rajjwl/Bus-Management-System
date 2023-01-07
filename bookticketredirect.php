<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php


include('connection.php');
$name=$_POST['textfield'];
$from=$_POST['textfield2'];
$to=$_POST['textfield3'];
$date=$_POST['textfield4'];
$noofseats=$_POST['textfield5'];
$adhar=$_POST['textfield6'];
$contact=$_POST['textfield7'];
$ticketno=rand(11111,99999);
$payment_mode=$_POST['textfield9'];
$cardholdername=$_POST['cardholdername'];
$cardno=$_POST['cardno'];
//$x=$noofseats);
$amount_paid=0;
	if($from == 'dewas' && $to == 'indore')
	{
		$amount_paid=50*$noofseats;
	}
	else if($from == 'dewas' && $to == 'bhopal')
	{
		$amount_paid=100*$noofseats;
	}
$res=mysql_query("insert into bookticket values(id,'$name','$from','$to','$date','$noofseats','$adhar','$contact','$ticketno','$payment_mode','$amount_paid','$cardholdername','$cardno')");
if(isset($res))
{
	echo "<script>alert('Ticket Booked Successfully')</script>";
}
else
{
		echo "<script>alert('Please ENTER Valid Data')</script>"."<a href=reg.php>Go Back</a>";
}
?>

</body>
</html>