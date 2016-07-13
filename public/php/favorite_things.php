<?php
$favoriteThings = ['Books', 'Cars', 'Games', 'Food', 'Television'];

?>
<!DOCTYPE html>
<html>
<head>
	<title> Favorite Thigns</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<style>
/*@keyframes move {
	0% { left: 30%; }
	10% { left: 75%; }
	30% { right: 45%; }
	60% { right: 100%; }
	100% { left: 30%; }
	
}*/
.holder {
	position: relative;
	left: 30%;
	width: 400px;
	text-align: center;
	/*animation: move .5s linear infinite;*/
}
</style>
</head>
<body>
	<div class="holder">
		<h1>My Five Favorite Things</h1>
			<table class="table table-striped table-bordered table-condensed table-reactive">
				<tr class="info">
					<th>1</th>
					<th>2</th>
					<th>3</th>
					<th>4</th>
					<th>5</th>
				</tr>
				<tr class="info">
				<?php foreach ($favoriteThings as $thing): ?>
				<td><?= $thing, ' '; ?></td>
				<?php endforeach ?>
				</tr>
			</table>
	</div>	
</body>
</html>