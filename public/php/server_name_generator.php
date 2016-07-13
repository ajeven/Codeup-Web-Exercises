<?php
$adjectives = ['last', 'old', 'red', 'silver', 'same', 'able', 'important', 'kind', 'smart', 'ugly'];
$nouns = ['paper', 'soil', 'wallet', 'star', 'socks', 'child', 'place', 'bag', 'pizza', 'elbow'];
$first = $adjectives[array_rand($adjectives, 1)];
$second = $nouns[array_rand($nouns, 1)];
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