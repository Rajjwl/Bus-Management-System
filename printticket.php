<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.title{ 
        font-size: 40px;
		text-align:center; 
		width: 400px; 
		color:black; 
		border: solid black 3px;
        border-radius:50px		
		} 
.main_body{
		align:center;
	    background-image: none;
		border : solid black 3px;
		
	
        }
.text{ 
        font-size: 5px;
		margin-top: 5%	;
		margin-bottom: 5%; 
		width: 500px;
        height: 300px;
		color:black; 
		border: solid black 2px; 
        border-radius:50px		
		}
.text2{ 
        font-size: 5px;
		margin-top: 5%	;
        align : center;		
		width: 700px;
        height: 600px;
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
            border: 1;
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
p
{
font-family: sans-serif;
      font-size: 22px;
      text-decoration: none;	
}
</style>
<h3 align="right"><a href=bookticket.php>Back</a></h3>
</head>
<body class="main_body">
<?php
include('connection.php');
$res=mysql_query("select * from bookticket where adhar='$_POST[textfield6]'");
?>
<?php 
while($r=mysql_fetch_array($res))
{
?>
<center>
<div id="c">
<h2 class="title" align="center">Ticket</h2>
<table class="text"  align="center">
<tr class="btn"><th>Ticket No.</th><td><?php echo $r[8];?></td></tr>
<tr class="btn"><th>Name</th><td><?php echo $r[1];?></tr>
<tr class="btn"><th>FROM</th><td><?php echo $r[2];?></td></tr>
<tr class="btn"><th>TO</th><td><?php echo $r[3];?></td></tr>
<tr class="btn"><th>Date</th><td><?php echo $r[4];?></td></tr>
<tr class="btn"><th>No. Of Seats</th><td><?php echo $r[5];?></td></tr>
<tr class="btn"><th>Adhar no.</th><td><?php echo $r[6];?></td></tr>
<tr class="btn"><th>Contact</th><td><?php echo $r[7];?></td></tr>
<?php } ?>
</table>
<p>
Note : Submit the copy of ticket to the conductor during travelling or else you will not be able to travel<br>
Press CTRL+P to print the ticket
</p>
</div>
</center>
</body>
</html>