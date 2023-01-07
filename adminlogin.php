<?php

session_start(); 
// Include database connection file
include_once('connection.php');

if (isset($_POST['submit'])) 
{ 
  // If the captcha is valid 
  if ($_POST['captcha'] == $_SESSION['captcha']) 
  {
	if($_POST['email']=='Rajkumar' && $_POST['password']=='12345678') 
	{
          include('adminhome.php');
          die(); 		  
    }
	else
	{
        echo "<script>alert('Enter valid Credintials')</script>";
    }
  }
  else
  {
      echo "<script>alert('Enter correct captcha')</script>"; 
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<style>
.title{ 
        font-size: 40px;
		text-align:center; 
		width: 50%; 
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
		width: 500px;
        height: 300px;
        background-color:#ADD8E6; 
		color:black; 
		border: solid black 2px; 
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
.captcha{
		 padding: 10px;
            margin: 30px;
            width: 200px;
            border: none;
            font-size: 25px;	
}
</style>		
</head>

<body  class="main_body" >
<center>
<form  method="post">
<h2  class="title" align="center">ADMIN LOGIN</h2>
<h3 align="right"><a href=index.php><img src="back.png" width="3%" /></a></h3>
<table class="text"  border="0">
  <tr>
    <td width=><label for="username"></label>
      <input class="btn"  name="email"  placeholder="Username" required="required" /></td>
  </tr>
  <tr>
    <td><label for="password"></label>
      <input  class="btn" type="password" name="password" placeholder="Password" required="required"/></td>
  </tr>
  <tr align="center"><td>
			<div claa="captcha" >
             <img src="captcha.php"/>
			 <a href="<?php echo $_SERVER['PHP_SELF']; ?>"><img src="refresh.png"/></a>
            </div>
            <div >
              <label for="captcha"></label>
              <input type="text" class="captcha" name="captcha" placeholder="Captcha" required>
            </div> 
                                

  <tr>
    <td><input class="btn1" type="submit" name="submit" value="Submit" /></td>
</tr>
  
</table>
</form>

</center>

</body>

</html>