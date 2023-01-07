<?php
include "connection.php"; // Using database connection file here
$driverid = $_GET['driverid']; // get id through query string
$qry = mysql_query("select * from adddriver where driverid='$driverid'"); // select query
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
<h2 class="title" align="center">Update Driver Information</h2>
<h3 align="right"><a href=driverinfo.php><img src="back.png" width="3%" /></a></h3>
<table class="text"  align="center"> 
<tr><th>DRIVER ID</th><td><input class="btn" name="driverid" value="<?php echo $r['driverid'] ?>"></tr>
<tr ><th >NAME</th><td><input class="btn" type="text" name="drivername" value="<?php echo $r['drivername'] ?>" placeholder="Enter Name" Required></tr>
<tr ><th>EMAIL</th><td><input class="btn" type="text" name="email" value="<?php echo $r['email'] ?>" placeholder="Enter Name" Required></tr>
<tr ><th>CONTACT</th><td><input class="btn" type="text" name="contact" value="<?php echo $r['contact'] ?>" placeholder="Enter Name" Required></tr>
<tr ><th>ADDRESS</th><td><input class="btn" type="text" name="address" value="<?php echo $r['address'] ?>" placeholder="Enter Name" Required></tr>
<tr ><th>LIECENCE NO</th><td><input class="btn" type="text" name="liecence" value="<?php echo $r['liecence'] ?>" placeholder="Enter Name" Required></tr>
<tr ><th>ADHAR NO</th><td><input class="btn" type="text" name="adhar" value="<?php echo $r['adhar'] ?>" placeholder="Enter Name" Required></tr>
<tr ><th>AGE</th><td><input class="btn" type="text" name="age" value="<?php echo $r['age'] ?>" placeholder="Enter Name" Required></tr>
<?php } ?>
<tr  ><td colspan="2" width="10%"><input class="btn1" align="center" type="submit" name="update" value="Update"></tr></table></center></form></body>
<?php
if(isset($_POST['update'])) // when click on Update button
{
    $driverid = $_POST['driverid'];
	$drivername=$_POST['drivername'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$liecence=$_POST['liecence'];
	$adhar=$_POST['adhar'];
    $age = $_POST['age'];
$edit = mysql_query("UPDATE adddriver SET drivername='$drivername', email='$email', contact='$contact', address='$address', age='$age' WHERE driverid='$driverid'");
    if(isset($edit))
    {
		echo "<script>alert('Driver Edited Successfully')</script>";
        header("location:driverinfo.php"); // redirects to all records page
        exit;
    }
    else
    {
		echo("srry");
        echo mysqli_error();
    }    	
}
?>