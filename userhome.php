<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>user </title>

<style>
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
        font-size: 20px;
		margin-top: 1%	;		
		width: 500px;
        height: 20px;
        background-color:#ADD8E6; 
		color:black; 
		border: solid black 2px; 
		width:166.66;
        border-radius:50px		
		}
.div{
		margin-top: 7%	;
		margin-bottom: 7%;
}	
.contact{
        font-size:15px;
		width: 100%;
        height: 20px;
        background-color:#ADD8E6; 
		color: black; 
		border: solid black 2px; 
        border-radius:50px
		}
				ul {
      list-style-type: none;
	  top: 70px;
      position: absolute;
	  padding-left: 60px;
      overflow: hidden;

    }

    li {
      float: left;
    }
 li a:hover {
      background-color: white;
      color: blue;

    }
	
  a {
      display: block;
      color: black;
      font-size: 22px;
      text-decoration: none;
    }
  
</style>
</head>

<body class="main_body">
<center>
<?php
include('connection.php');

$res=mysql_query("select * from user where email='$_POST[email]'");
	
?>

<div class="div">
<?php 
while($r=mysql_fetch_array($res))
{
?>
<table class="text">
<tr bgcolor="">
<td width="30%" align="center"><h2><a href="viewbusrouteforuser.php?username=<?php echo $r['username']; ?>">VIEW BUS ROUTE</a></h2></td></tr>
</table>
<table class="text">
<tr bgcolor="">
<td width="30%" align="center"><h2><a href="bookticket.php?username=<?php echo $r['username']; ?>">BOOK TICKET</a></h2></td></tr>
</table>
<table class="text">
<tr bgcolor="">
<td width="30%" align="center"><h2><a href="viewticket.php?username=<?php echo $r['username']; ?>">VIEW TICKET</a></h2></td></tr>

</table>
<table class="text">
<tr bgcolor="">
<td width="30%" align="center"><h2><a href="driverinfoforuser.php?username=<?php echo $r['username']; ?>">DRIVER INFORMATION</a></h2></td></tr>
</table>
<table class="text">
<tr bgcolor="">
<td width="30%" align="center"><h2><a href="index.php">LOG OUT</a></h2></td></tr>
<?php } ?>
</table>
</div>
</center>
</body>

</html>