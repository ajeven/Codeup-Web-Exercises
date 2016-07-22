<?php
require_once '../php/Log.php';
require_once 'Input.php';
class Auth 
{
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	public static function attempt($user, $password) {
		$log = new log;
		if ($user == "Alan" && password_verify($password, self::$password)){
			$_SESSION["logged_in_user"] = $user;
			$log->logMessage($logLevel, $message);
		} else {
			$log->logMessage($loglevel, $message);
		}
	}
	public static function check() {
		if (isset($_SESSION["logged_in_user"])) {
			return true;
		} else {
			return false;
		}
	}
	public static function user() {
		return $_SESSION['logged_in_user'];
	}
	public static function logout() {
		session_start();
		session_unset();
		session_destroy();
	}



}