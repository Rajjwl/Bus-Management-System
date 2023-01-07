<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
        font-size: 5px;
		margin-top: 5%	;
		margin-bottom: 5%; 
		width: 100%;
        height: 300px;
        background-color:#ADD8E6; 
		color:black; 
		border: solid black 2px; 	
		}
.btn{
         
            margin: 30px;
            width: 400px;
            border: none;
            font-size: 25px;
			color:black; 
		border: solid black 2px;
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
    }
</style>
</head>

<body class="main_body">
<h2 class="title">DRIVERS ON LEAVE </h2>
<h3 align="right"><a href=managedriver.php><img src="back.png" width="3%" /></a></h3>
<?php
include('connection.php');
$res=mysql_query("select * from applyforleave");
?>

<center>
<table class="text" border="2" >
<tr class="btn">
<th>S.no.</th>
<th>Name</th>
<th>No. of Days Of Leave</th>
<th>Start Date Of Leave</th>
<th>Contact</th>
<th>Reason For Leave</th>
</tr>
<?php 
while($r=mysql_fetch_array($res))
{
?>
<tr  class="btn" align="center" >
<td><?php echo $r[0];?></td>
<td><?php echo $r[1];?></td>
<td><?php echo $r[3];?></td>
<td><?php echo $r[5];?></td>
<td><?php echo $r[4];?></td>
<td><?php echo $r[6];?></td>
</tr>
<?php } ?>
</table>
</center>
</body>
</html>
