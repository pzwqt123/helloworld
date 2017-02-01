<!DOCTYPE html>

<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="DIST/css/bootstrap.css">
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<center><h2><b>Login</b></h2></center>
<table border = "2">
<tr>
<th>
<td><center>
<div class="btn-group btn-group-justified">
<form action="#" method="post">
<b>Username: <input type="text" name="username">
Password: <input type="password" name="password">
</b>
</td>
</center>
</th>
</tr>
</table>
<center><br><input type="submit" name="submit" value="Submit" class="btn btn-default">
</form>
<?php
	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$c=oci_connect($username,$password,"localhost/XE");
  		if(!$c){
			$e=oci_error();
			trigger_error('Could not connect to database: '.$e['message'] , E_USER_ERROR);
  		}
  		else{
  			header("Location: index.php");
  		}
	}
?>	
</body>
</html>