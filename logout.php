<?php
session_start();

if(isset($_SESSION['user_name'])) {
	session_destroy();
	unset($_SESSION['user_name']);
	unset($_SESSION['password']);
	header("Location: index.php");
} else {
	header("Location: index.php");
}
?>
