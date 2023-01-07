<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title class="title">ADD BUS</title>
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
        font-size: 5px;	; 
		width: 500px;
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
            width: 800px;
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
    }
</style>
</head>
<?php
include('connection.php');
$username = $_GET['username'];
$qry = mysql_query("select * from user where username='$username'");
$res=mysql_query("select * from addbusroute");
?>
<?php 
while($p=mysql_fetch_assoc($qry))
{
?>
<body class="main_body">
<center>
<form action="bookticketredirect.php" method="post">
<center>
<table class="text" width="498" border="0">
  <h2 class="title">BOOK TICKETS</h2>
  <h3 align="right"><a href="userhome2.php?email=<?php echo $p['email']; ?> "><img src="back.png" width="3%" /></a></h3>
<?php } ?>
  <tr>
    <td width="227"><input class="btn" type="text" name="textfield" placeholder="Name"  required="required" /></td>
 
    <td><input class="btn" type="text" name="textfield7" placeholder="Contact "  required="required" /></td>
  </tr>
  <tr>
     <td>
<select class="btn"  name="textfield2">
<option value="" selected="selected" disabled="disabled">FROM</option>
<option value="dewas">DEWAS</option>
<option value="bhopal">BHOPAL</option>
<option value="indore">INDORE</option>
</td>
  
     <td>
<select class="btn"  name="textfield3">
<option value="" selected="selected" disabled="disabled">TO</option>
<option value="dewas">DEWAS</option>
<option value="bhopal">BHOPAL</option>
<option value="indore">INDORE</option>
</td></tr>
  <tr>
    <td><input class="btn" type="date" name="textfield4" placeholder="Date "  required="required" /></td>
  
    <td><input class="btn" type="number" name="textfield5" placeholder="No. of Seats "  required="required" /></td>
  </tr>
  <tr>
    <td><input class="btn" type="text" name="textfield6" placeholder="Adhar no. "  required="required" /></td>
  
  <td>
<select class="btn"  name="textfield9">
<option value="" selected="selected" disabled="disabled">Mode Of Payment</option>
<option value="Paytm">Paytm</option>
<option value="Card">Card</option>
</td>
</tr>

   <tr>
    <td width="227"><input class="btn" type="text" name="cardholdername" placeholder="Card Holder Name"  required="required" /></td>
 
    <td><input class="btn" type="text" name="cardno" placeholder="Card No "  required="required" /></td>
  </tr>
   <tr><center>
    <td colspan="2" align="center"><input class="btn1" type="Submit" value='BOOK TICKETS'></td></center>
  </tr>
</table>
<label for="textfield"></label>
</center>
</form>
</center>
</body>

</html>