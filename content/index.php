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
			<li><a href="index.php">Αρχική σελίδα</a></li>
			<li><a href="announcement.php">Ανακοινώσεις</a></li>
			<li><a href="communication.php">Επικοινωνία</a></li>
			<li><a href="documents.php">Έγγραφα μαθήματος</a></li>
			<li><a href="homework.php">Εργασίες</a></li>
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
		<p><h2>Καλωσήρθατε στην ιστοσελίδα του μαθήματος Ρομποτικής.</h2><br></br>
			Στην καρτέλα "Ανακοινώσεις" θα αναρτώνται νέα, σχετικά με το μάθημα.<br></br>
			Στην καρτέλα "Επικοινωνία" μπορείται να βρείτε τρόπους επικοινωνίας με τον διδάσκοντα.<br></br>
			Στην καρτέλα "Έγγραφα μαθήματος" θα αναρτώνται οι σημειώσεις των διαλέξεων.<br></br>
			Στην καρτέλα "Εργασίες" μπορείται να βρείτε τις εργασίες του μαθήματος.</p>
		
		<img alt="" height="256" src="images/robotics.gif" width="320" />
		<!-- #EndEditable "content" --></div>
	<!-- End Content -->
	<!-- End Container -->
</div>
</body>

<!-- #EndTemplate -->

</html>
