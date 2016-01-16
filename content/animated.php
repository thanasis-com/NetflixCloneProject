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
<title>Animated videos</title>
<!-- #EndEditable -->
<link href="styles/style1.css" rel="stylesheet" type="text/css" />
<link href="http://vjs.zencdn.net/4.11/video-js.css" rel="stylesheet">
<script src="http://vjs.zencdn.net/4.11/video.js"></script>
</head>

<body>
<!-- #BeginEditable -->

<!-- #EndEditable -->

<!-- Begin Container -->
<div id="container">
	
	<!-- Begin Masthead -->
	<div id="masthead">
		<!-- #BeginEditable -->
		<h1>Animated videos</h1>
		<!-- #EndEditable -->
	</div>
	<!-- End Masthead -->
	<!-- Begin Navigation -->
	<div id="navigation">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="animated.php">Animated videos</a></li>
			<li><a href="documentaries.php">Documentaries</a></li>
			<li><a href="music.php">Music videos</a></li>
		</ul>
	</div>
	<!-- End Navigation -->
	<!-- Begin Content -->
	<div id="content">
		<!-- #BeginEditable "content" -->
		<div id="videos">
		<?php include 'fetchsomevideos.php';
			fetchsome("animated");
		?>
		</div>
		
		<!-- #EndEditable "content" --></div>
	<!-- End Content -->
	<!-- End Container -->
</div>
</body>

<!-- #EndTemplate -->

</html>