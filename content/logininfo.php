<?php

session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}

echo '<p><div class="label">Logged in as: </div>'.$_SESSION['name'].$_SESSION['surname'].'</p><p><div class="label">User subscription: </div>'.$_SESSION['role'].'</p>';
	
?>
