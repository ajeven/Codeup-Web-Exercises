<!DOCTYPE HTML>
<html lang = "en">
	
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/main.css">
	</head>
	<body class="color">
		<nav class="navbar navbar-default container">
			<div class="container-fluid">
				<div class="navbar-header">
				  <a class="navbar-brand">Alan.example</a>
				</div>
					<ul class="nav navbar-nav">
						<li><a href="/resume.html" target="_blank">Home</a></li>
						<li><a href="/php/contact.php" target="_blank">Contact</a></li>
						<li><a href="/php/register.php" target="_blank">Register</a></li> 
					<!--	<li class="active"><a href="/php/login.php" target="_blank">Login</a></li> -->
					</ul>
				<form class="navbar-form navbar-right" role="search">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search">
							<span class="input-group-btn">
								<button type="reset" class="btn btn-default">
									<span class="glyphicon glyphicon-remove">
										<span class="sr-only">Close</span>
									</span>
								</button>
							<button type="submit" class="btn btn-default">
								<span class="glyphicon glyphicon-search">
									<span class="sr-only">Search</span>
								</span>
							</button>
						</span>
					</div>
				</form>
			  </div>
		</nav>
		<div class="container">	
			<form class="form-horizontal">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
				 			<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
						</div>
				</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
					<label>
						<input type="checkbox"> Remember me
					</label>
						</div>
					</div>
				</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Sign in</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>