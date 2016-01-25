<?php
session_start();

if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

<!-- #BeginTemplate "master.dwt" -->

<head>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<!-- #BeginEditable "doctitle" -->
<title>Home</title>
<!-- #EndEditable -->
<link href="styles/style1.css" rel="stylesheet" type="text/css" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<script type="text/javascript">

function like(value) {
    $.post("like.php", {id:value});
    location.reload();
    return false;
}
function sendmail(value){
	$.post("sendmail.php", {id:value});
	return false;
}
function logout(){
	$.post("logout.php");
	return false;
}
</script>
</head>

<body>
<!-- #BeginEditable -->

<!-- #EndEditable -->

<!-- Begin Container -->
<div id="container">
	
	<!-- Begin Masthead -->
	<div id="masthead">
		<!-- #BeginEditable -->
		<h1>All videos</h1>
		<!-- #EndEditable -->
	</div>
	<!-- End Masthead -->
	<!-- Begin Navigation -->
	<div id="navigation">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="all.php">All videos</a></li>
			<li><a href="animated.php">Animated videos</a></li>
			<li><a href="documentaries.php">Documentaries</a></li>
			<li><a href="music.php">Music videos</a></li>
		</ul>
	<hr>
	<a href="userspreferences.php">Users' preferences</a>
	<hr>
	<?php include 'logininfo.php'; ?>
	</div>
	<!-- End Navigation -->
	<!-- Begin Content -->
	<div id="content">
		<!-- #BeginEditable "content" -->
		<div id="videos">
		<?php include 'fetchvideos.php'; ?>
		</div>
		
		<!-- #EndEditable "content" --></div>
	<!-- End Content -->
	<!-- End Container -->
</div>
</body>

<!-- #EndTemplate -->

</html>
