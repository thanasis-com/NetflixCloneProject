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
<title>Standard videos</title>
<!-- #EndEditable -->
<link href="styles/style1.css" rel="stylesheet" type="text/css" />
<link href="http://vjs.zencdn.net/4.11/video-js.css" rel="stylesheet">
<script src="http://vjs.zencdn.net/4.11/video.js"></script>
<script src="http://popcornjs.org/code/dist/popcorn-complete.min.js"></script>
<script>
      // ensure the web page (DOM) has loaded
      document.addEventListener("DOMContentLoaded", function () {
         // Create a popcorn instance by calling Popcorn("#id-of-my-video")
         var pop = Popcorn("#popvideo",
         {
         title:"video"
         });
         var pop1= Popcorn("#pop1video");
        
         // play the video right away
         //pop.play();
      }, false);
    </script>
</head>

<body>
<!-- #BeginEditable -->
<video height="400" width="600" id="popvideo" controls>
      <source src="rtmp://netflixcloneproject.cloudapp.net:1935/vod2/bbb.mp4">
      </video>
<!-- #EndEditable -->

<!-- Begin Container -->
<div id="container">
	
	<!-- Begin Masthead -->
	<div id="masthead">
		<!-- #BeginEditable -->
		<h1>Standard videos</h1>
		<!-- #EndEditable -->
	</div>
	<!-- End Masthead -->
	<!-- Begin Navigation -->
	<div id="navigation">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="standard.php">Standard videos</a></li>
			<li><a href="prime.php">Prime videos</a></li>
		</ul>
	</div>
	<!-- End Navigation -->
	<!-- Begin Content -->
	<div id="content">
		<!-- #BeginEditable "content" -->
		<?php include 'fetchstandard.php'; ?>
		
		<!-- #EndEditable "content" --></div>
	<!-- End Content -->
	<!-- End Container -->
</div>
</body>

<!-- #EndTemplate -->

</html>
