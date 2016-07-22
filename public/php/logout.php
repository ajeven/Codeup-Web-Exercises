<?php
require_once '../source/auth.php';
function pageController() {
	Auth::logout();
	header ('Location: login.php');
	exit();
}
pageController();
?>
