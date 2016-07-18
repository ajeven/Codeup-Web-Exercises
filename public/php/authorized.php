<?php
function pageController() {
	session_start();
	$data['action'] = '';
		if (isset($_SESSION['logged_in_user']) && $_SESSION['logged_in_user'] == true) {
		} else {
			header ('Location: login.php');
			exit();
		}


}
pageController();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Authorized</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<style>
.header {
	position: relative;
	left: 40%;
	top: 20px;
}
.greeting {
	position: relative;
	left: 40%;
	top: 30px;
}
.btn {
	position: relative;
	left: 40%;
	top: 40px;
}
</style>
</head>
<body>
	<h1 class="header">Authorized</h1>
		<p class="greeting">Welcome to the super secret classified page <?= $_SESSION['user'] ?>.</p>
			<a href="logout.php"><button class="btn btn-info">Logout</button></a>
</body>
</html>