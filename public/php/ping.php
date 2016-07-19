<?php
require_once 'functions.php';
function pageController() {
	$data = [];

	if (isset($_REQUEST['hit'])) {
		$data['hit'] = $_REQUEST['hit'];
	} else {
		$data['hit'] = 0;
	}

	return $data; 
}
	extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ping</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<style>
			h1 {
				position: relative;
				left: 45%;
				top: 300px;
			}
			.btn-default {
				position: relative;
				left: 45%;
				top: 320px;
			}
		</style>
</head>
<body>
	<h1><?= $hit ?></h1>
	<a href="/php/pong.php?hit=<?= $hit +1 ?>"><button class="btn btn-default">hit</button></a>
	<a href="/php/pong.php?hit=<?= $hit =0 ?>"><button class="btn btn-default">hit</button></a>
</body>
</html>