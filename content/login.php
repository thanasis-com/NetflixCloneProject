<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Login</title>
<link href="styles/style1.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div id="container">
<div id="content">
<div id="center">

<h2>Login to NetflixCloneProject</h2><br></br>
<form action="check.php" method="post">
	E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="user"/>
	<br></br>
	
	Password:&nbsp; <input type="password" name="pass"/>
	<br></br>
	
	<input type="submit" name="login" value="Login"/>
	<br></br>
	<input type="button" name="signup" value="Sign up"  onclick="signup()"/>
	
</form>
</div>
</div>
</div>
</body>

</html>
