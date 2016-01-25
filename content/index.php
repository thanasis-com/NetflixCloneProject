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


<!-- #BeginEditable "doctitle" -->
<title>Home</title>
<!-- #EndEditable -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<link href="styles/style1.css" rel="stylesheet" type="text/css" />

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
		<h1>Home</h1>
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
		<p class="welcome1">Welcome to NetflixCloneProject!</p>
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
