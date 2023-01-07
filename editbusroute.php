<?php
include "connection.php"; // Using database connection file here
$busrouteno = $_GET['busrouteno']; // get id through query string
$qry = mysql_query("select * from addbusroute where busrouteno='$busrouteno'"); // select query
?>
<style>
.title{ 
        font-size: 40px;
		text-align:center; 
		width: 100%; 
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
		width: 500px;
        height: 600px;
        background-color:#ADD8E6; 
		color:black; 
		border: solid black 2px; 
        border-radius:50px		
		}
.btn{
            width: 300px;
            border: none;
			align:right;
            font-size: 25px;
}
.btn1{
            margin: 30px;
            width: 420px;
            border: none;
            font-size: 25px;
			border-radius: 25px;
}
</style>
<body class="main_body">
<form method="POST">
<?php 
while($r=mysql_fetch_array($qry))
{
?>
<center>
<div id="c">
<h2 class="title" align="center">Update Bus Route Information</h2>
<h3 align="right"><a href=driverinfo.php><img src="back.png" width="3%" /></a></h3>
<table class="text"  align="center"> 
<tr><th>Bus Route No.</th><td><input class="btn" name="busrouteno" value="<?php echo $r['busrouteno'] ?>"></tr>
<tr><th>Bus No.</th><td><input class="btn" name="busno" value="<?php echo $r['busno'] ?>"></tr>
<tr ><th >From</th><td><input class="btn" type="text" name="from" value="<?php echo $r['from'] ?>" placeholder="Enter Name" Required></tr>
<tr ><th>To</th><td><input class="btn" type="text" name="to" value="<?php echo $r['to'] ?>" placeholder="Enter Name" Required></tr>
<tr ><th>Running Days</th><td><input class="btn" type="text" name="runningdays" value="<?php echo $r['runningdays'] ?>" placeholder="Enter Name" Required></tr>
<tr ><th>Departure Time</th><td><input class="btn" type="text" name="departuretime" value="<?php echo $r['departuretime'] ?>" placeholder="Enter Name" Required></tr>
<tr ><th>Cost</th><td><input class="btn" type="text" name="cost" value="<?php echo $r['cost'] ?>" placeholder="Enter Name" Required></tr>
<?php } ?>
<tr  ><td colspan="2" width="10%"><input class="btn1" align="center" type="submit" name="update" value="Update"></tr></table></center></form></body>
<?php
if(isset($_POST['update'])) // when click on Update button
{
	$busrouteno = $_POST['busrouteno'];
    $busno = $_POST['busno'];
	$from=$_POST['from'];
	$to=$_POST['to'];
	$runningdays=$_POST['runningdays'];
	$departuretime=$_POST['departuretime'];
	$cost=$_POST['cost'];
$edit = mysql_query("UPDATE addbusroute SET busno='$busno', from='$from', to='$to', runningdays='$runningdays', departuretime='$departuretime', cost='$cost' WHERE busrouteno='$busrouteno'");
    if(isset($edit))
    {
		echo "<script>alert('Driver Edited Successfully')</script>";
        header("location:viewbusroute.php"); // redirects to all records page
        exit;
    }
    else
    {
		echo("srry");
        echo mysqli_error();
    }    	
}
?>