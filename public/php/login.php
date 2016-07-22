<?php
require_once '../source/auth.php';
function pageController() {
	session_start();
	$_SESSION['user'] = "Alan";
	$_SESSION["logged_in_user"] = session_id();
	$data = [];
	$data['action'] = '';
	$data['message'] = '';
	if ($_POST) {
		Auth::attempt(Input::get('user'), Input::get('password'));
		if (Auth::check()) {
			header('Location: authorized.php');
			exit();
		} else {
			if (Input::get('user') != "Alan") {
				$message = "Incorrect username or password.\\nTry Again.";
				echo "<script>alert('$message');</script>";
				echo "<style> input.username { background-color: yellow; } </style>";
			} elseif (Input::get('password') != "password") {
				$message = "Incorrect password or username.\\nTry Again.";
				echo "<script>alert('$message');</script>";
				echo "<style> input.password { background-color: yellow; } </style>";
			}
		}
	}
	return $data;

}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<style>
	body {
		padding: 20px;
		background-image: url("../img/green.gif");
	}
	.login-form {
		position: relative;

	}
	#container {
		position: absolute;
		height: 200px;
		width: 500px;
		background-color: ghostwhite;
		border: solid 1px papayawhip;
		padding: 20px;
		left: 35%;
		top: 300px;
	}
	.btn {
		position: relative;
		left: 40%;
		top: 40px;
	}
	.fancy-header {
		position: relative;
		left: 35%;
	}
	label.password {
		position: relative;
		left: -20%;
		top: 30px;
	}
	input.password {
		position: relative;
		left: -15%;
		top: 30px;
		border: 1px solid papayawhip;
	}
	label.username {
		position: relative;
		left: 30%;
		top: 0px;
	}
	input.username {
		position: relative;
		left: 38%;
		top: 0px;
		border: 1px solid papayawhip;
	}
</style>
</head>
	<body>
		<div id="container">
			<h1 class="fancy-header">Sign In</h1>
			<form class="login-form" method="post">
				<label class="username" for="username">Name:</label>
					<input class="username" type="username" type="text" placeholder=" username" name="user">
				<label class="password" for="password">Password:</label>
					<input class="password" type="password" type="text" placeholder=" password" name="password">
						<button class="btn btn-info" name="login" type="submit">Login</button>		
			</form>
		</div>	
	</body>
</html>