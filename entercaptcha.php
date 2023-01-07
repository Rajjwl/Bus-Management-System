<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Registration Form with PHP Captcha Demo</title>
<meta name="title" content="Registration Form with PHP Captcha Demo"/>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> 

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Responsive styles-->
<link rel="stylesheet" href="css/demo-style.css"> 
<!-- Font awosome -->
<link rel="stylesheet" href="css/font-awesome.min.css">  

</head>
<body>
<form id="register">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
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
		margin-top: 5%	;
		margin-bottom: 5%; 
		width: 500px;
        height: 300px;
        background-color:#ADD8E6; 
		color:black;  
		width:166.66;
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
            width: 420px;
            border: none;
            font-size: 25px;
			border-radius: 25px;
}
</style>		
</head>

<body class="main_body" >
<center>
<form   id="register">
<table  align="center" class="text" border="0">
	<tr align="center"><td>
									
									<img src="demo_captcha.php" class="imgcaptcha" alt="captcha"  />
									<img src="images/refresh.png" alt="reload" class="refresh" />
								
									<tr align="center"><td>
                                  <label class="form-label" for="captcha"></label>
                                  <input id="captcha"  type="text" placeholder="ENTER CAPTCHA CODE" required />
                          
                                
        	<tr><td> <input class="btn1"  type="submit" value="Enter" width="300px"></td></tr>
 

</table>
</form>
</center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/main.js"></script>
<script language="javascript">
$(document).ready(function(){

$(".refresh").click(function () {
    $(".imgcaptcha").attr("src","demo_captcha.php?_="+((new Date()).getTime()));
    
});


 $('#register').submit(function() {
   

	var captcha = $('#captcha').val();
	$.post("submit_demo_captcha.php?"+$("#register").serialize(), {"captcha":captcha }, function(response){
        if(response==1){
           $(".imgcaptcha").attr("src","demo_captcha.php?_="+((new Date()).getTime()));
		   window.location="userhome.php"
        }else{
			$("#captcha").val('');
			alert("Wrong Captcha Code!");
        }
	});
	return false;
    });

});


</script>
	
</body>
</html>

