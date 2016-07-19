<?php
function inputHas($key) {
	if ($_REQUEST['$key']) {
		return true;
	} else {
		return false;
	}
}
function inputGet($key) {
	if ($_REQUEST['$key']) {
		foreach ($input as $key => $value) {

		}
		return $value;
	}
}
function escape($input) {
	return htmlspecialchars(strip_tags($input));
}
?>