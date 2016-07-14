<?php
function pageController() {
	$data = [];
	$adjectives = ['last', 'old', 'red', 'silver', 'same', 'able', 'important', 'kind', 'smart', 'ugly'];
	$nouns = ['paper', 'soil', 'wallet', 'star', 'socks', 'child', 'place', 'bag', 'pizza', 'elbow'];
	$data['first'] = $adjectives[array_rand($adjectives, 1)];
	$data['second'] = $nouns[array_rand($nouns, 1)];
	return $data;
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>Server Name</title>
</head>
<body>
	<h3>Here is your random generated server name.</h3>
		<span>Server Name: </span><span><?= $first, ' ', $second ?></span>
</body>
</html>