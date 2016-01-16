<?php

session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}

echo '<p><div class="label">Logged in as: </div><div class="navicontent">'.$_SESSION['name'].' '.$_SESSION['surname'].'</div></p><p><div class="label">User subscription: </div><div class="navicontent">'.$_SESSION['role'].'</div></p>';
	
?>
