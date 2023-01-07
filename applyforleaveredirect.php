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
$email=$_POST['textfield2'];
$noofdaysofleave=$_POST['textfield3'];
$contact=$_POST['textfield4'];
$startdateofleave=$_POST['textfield5'];
$reasonforleave=$_POST['textfield6'];
$res=mysql_query("insert into applyforleave values(id,'$username','$email','$noofdaysofleave','$contact','$startdateofleave','$reasonforleave')");
if(isset($res))
{
	echo "<script>alert('You Have Successfully Applied for Leave')</script>";
	include('applyforleave.php');
}
else
{
		echo "<script>alert('Please ENTER Valid Data')</script>"."<a href=applyforleave.php>Go Back</a>";
}
?>

</body>
</html>