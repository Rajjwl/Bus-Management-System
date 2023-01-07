<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title class="title">ADD DRIVER</title>
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
		margin-bottom: 5%; 
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
<center>
<form action="adddriverrdirect.php" method="post">
<center>
<table class="text" width="498" border="0">
  <h2 class="title">ADD DRIVER</h2>
 <h3 align="right"><a href=managedriver.php><img src="back.png" width="3%" /></a></h3>
  <tr>
    <td width="227"><input class="btn" type="text" name="textfield" placeholder="Driver Name"  required="required" /></td>
  </tr>
  <tr>
    <td><input class="btn" type="email" name="textfield2" placeholder="Email"  required="required" /></td>
  </tr>
  <tr>
    <td><input class="btn" type="password" name="textfield3" placeholder="Password"  required="required" /></td>
  </tr>
  <tr>
    <td><input class="btn" type="text" name="textfield4" placeholder="Contact"  required="required" "/></td>
  </tr>
  <tr>
    <td><label for="textarea"></label>
      <textarea class="btn" name="textfield5" placeholder="Address" id="textarea" cols="35" rows=""></textarea></td>
  <tr>
    <td><input class="btn" type="text" name="textfield6" placeholder="Liecence No."  required="required" /></td>
  </tr>
  <tr>
    <td><input class="btn" type="text" name="textfield7" placeholder="Adhar no."  required="required" /></td>
  </tr>
  <tr>
    <td><input class="btn" type="text" name="textfield8" placeholder="Age"  required="required" /></td>
  </tr>
  <tr>
    <td ><input class="btn" type="Submit" value='ADD'></td>
  </tr>
</table>
<label for="textfield"></label>
</center>
</form>
</center>
</body>

</html>