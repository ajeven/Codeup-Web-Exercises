<?php
	$letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'o', 'u', 't'];
	$remove = implode($letters);
	$noVowels = preg_replace('/[aeiou]/', '', $remove);

?>
<!DOCTYPE html>
<html>
<head>
	<title>No Vowels</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<h1 class="fancy-header">Remove vowels from array</h1>
		<div><?= $noVowels, ' '; ?></div>
</body>
</html>