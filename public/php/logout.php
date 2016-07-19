<?php
require_once 'functions.php';
function pageController() {
	session_start();
	session_unset();
	session_destroy();
	header ('Location: login.php');
	exit();

}
pageController();
?>
