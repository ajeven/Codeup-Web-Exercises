<?php
require_once 'debug_sessions_functions.php';
function pageController() {
	session_start();
    clearSession();
    redirect("debug_sessions_view.php");
}
pageController();