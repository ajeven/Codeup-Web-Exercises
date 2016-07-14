<?php
function pageController() {
	$data = [];

	if (isset($_GET['hit'])) {
		$data['hit'] = $_GET['hit'];
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
</head>
<body>
	<button class="btn btn-default"><a href="/php/pong.php?hit=<?= $hit +1 ?>">hit</a></button>
	<button class="btn btn-default"><a href="/php/pong.php?hit=<?= $hit =0 ?>">miss</a></button>
</body>
</html>