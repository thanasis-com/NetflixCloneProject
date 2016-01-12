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
		<h1>Home</h1>
		<!-- #EndEditable -->
	</div>
	<!-- End Masthead -->
	<!-- Begin Navigation -->
	<div id="navigation">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="announcement.php">Standard videos</a></li>
			<li><a href="communication.php">Prime videos</a></li>
		</ul>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
	</div>
	<!-- End Navigation -->
	<!-- Begin Content -->
	<div id="content">
		<!-- #BeginEditable "content" -->
		<p>
			<video id="my_video_1" class="video-js vjs-default-skin" width="640px" height="267px"
	     			controls preload="none" poster='pics/bbb.png'
				 data-setup='{ "aspectRatio":"640:267", "playbackRates": [1, 1.5, 2] }'>
				<source src="rtmp://netflixcloneproject.cloudapp.net:1935/vod2/bbb.mp4" type='rtmp/mp4' />
				<!--<source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm' />-->
      			</video>
		</p>
		
		
		<!-- #EndEditable "content" --></div>
	<!-- End Content -->
	<!-- End Container -->
</div>
</body>

<!-- #EndTemplate -->

</html>
