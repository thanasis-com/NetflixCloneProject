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
<title>Users' preferences</title>
<!-- #EndEditable -->
<link href="styles/style1.css" rel="stylesheet" type="text/css" />
<link href="http://vjs.zencdn.net/4.11/video-js.css" rel="stylesheet">
<script src="http://vjs.zencdn.net/4.11/video.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
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
		<h1>Users' preferences</h1>
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
		<p class="welcome1">Have a look at the preferences of the other users!</p>
		<br></br>
		<p class="welcome2">These are our mostly liked videos:</p>
		<img src="barchart.php">
		<br></br>
		<br></br>
		<p class="welcome2">These are the most popular video genres:</p>
		<img src="barchart2.php">
		<br></br>
		</div>
		
		<!-- #EndEditable "content" --></div>
	<!-- End Content -->
	<!-- End Container -->
</div>
</body>

<!-- #EndTemplate -->

</html>
