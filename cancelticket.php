<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title class="title">View Booking</title>
<style>
.title{ 
        font-size: 40px;
		text-align:center; 
		width: 700; 
		color:black; 
		background-color:#ADD8E6;
		border: solid black 3px; 
		} 
.main_body{

	    background-image:url("bus.jpg");
	    background-attachment:center;
	    background-repeat:none;
	    background-size:cover;
        }
.text{ 
        font-size: 25px;
		margin-top: 5%	;
		margin-bottom: 5%; 
		width: 700px;
        height: 300px;
        background-color:#ADD8E6; 
		color:black; 
		border: solid black 2px; 
        border-radius:50px		
		}
.btn{
            padding: 10px;
            margin: 30px;
            width: 400px;
            border: none;
            font-size: 25px;
			border-radius: 25px;
}
.btn1{
            padding: 10px;
            margin: 30px;
            width: 400px;
            border: none;
            font-size: 25px;
			border-radius: 25px;
}

	
  a {
      display: block;
      color: black;
      font-family: sans-serif;
      font-size: 22px;
      text-decoration: none;
      padding: 15px;
    }
</style>
</head>
<?php
include('connection.php');
$username = $_GET['username'];
$qry = mysql_query("select * from user where username='$username'");
$res=mysql_query("select * from bookticket where name='$username'");
?>
<?php 
while($p=mysql_fetch_assoc($qry))
{
?>
<body class="main_body">
<center>
<form action="cancelticketredirect.php" method="post">
<center>
  <h2 class="title">View Booking</h2>
  <h3 align="right"><a href="userhome2.php?email=<?php echo $p['email']; ?> "><img src="back.png" width="3%" /></a></h3>
<?php } ?>	
  <?php 
while($r=mysql_fetch_array($res))
{
?>
<div id="c">
<table class="text"  align="center"> 
<tr><th align="CENTER">NAME : <?php echo $r['name'] ?></th>
<th align="left">Contact : <?php echo $r['contact'] ?></tr>
<tr><th align="center">FROM :<?php echo $r['from'] ?>
<th align="Left">TO : <?php echo $r['to'] ?></tr>
<tr><th align="center">DATE OF : <?php echo $r['date'] ?>
<th align="left">NO. OF SEATS : <?php echo $r['noofseats'] ?></tr>	
<tr><th align="center">PAYMENT MODE : <?php echo $r['payment_mode'] ?>
<th align="left">AMOUNT PAID : ₹<?php echo $r['amount_paid'] ?></tr>
<?php } ?>
</table>
<label for="textfield"></label>
</center>
</form>
</center>

</body>

</html>