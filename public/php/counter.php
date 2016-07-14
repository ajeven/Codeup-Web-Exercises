<?php
function pageController() {
	$data = [];

	if (isset($_GET['number'])) {
		$data['number'] = $_GET['number'];
	} else {
		$data['number'] = 0;
	}
		
	return $data; 
}
	extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>Counter</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<h1 class="header">Number counter: <span><?= $number; ?></span></h1>
		<button class="btn btn-info"><a href="?number=<?= $number+ 1 ?>">up</a></button>
		<button class="btn btn-info"><a href="?number=<?= $number- 1 ?>">down</a></button>
</body>
</html>