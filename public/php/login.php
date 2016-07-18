<?php
function pageController() {
	$data = [];
	$data['action'] = '';
	$data['message'] = '';
	if ($_POST) {
		if ($_POST['user'] == "guest" && $_POST['password'] == "password") {
			header('Location: authorized.php');
			exit();
		} else {
			if ($_POST['user'] != "guest") {
				$message = "Incorrect usernamer.\\nTry Again.";
				echo "<script>alert('$message');</script>";
				echo "<style> input.username { background-color: yellow; } </style>";
			} elseif ($_POST['password'] != "password") {
				$message = "Incorrect password.\\nTry Again.";
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