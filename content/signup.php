<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Sign up</title>
<link href="styles/style1.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div id="container">
<div id="content">
<div id="center">

<h2>Sign up for NetflixCloneProject</h2><br></br>
<form action="checksignup.php" method="post">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name"/>
	<br></br>
	
	Surname:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="surname"/>
	<br></br>
	
	E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email"/>
	<br></br>
	
	Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="age"/>
	<br></br>
	
	Country:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="country"/>
	<br></br>
	
	Subscription type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="role"/>
	<br></br>
	
	Password:&nbsp; <input type="password" name="pass"/>
	<br></br>
	
	<input type="submit" name="login" value="Login"/>
	<br></br>
	
</form>
<input type="submit" name="signup" value="Sign up"  onclick="location.href='signup.php';"/>
</div>
</div>
</div>
</body>

</html>
