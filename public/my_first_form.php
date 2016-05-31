<?php
  var_dump($_GET);
  var_dump($_POST);
  var_dump($_REQUEST);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF=8">
		<title>My First HTML Form</title>
	</head>
	<body>
		<h3>User Login</h3>
			<form method="POST" action="/my_first_form.php">
				<div>
					<label for="username:">Username:</label>
					<input id="username" name="username" type="text" placeholder="User Name">
				</div>
				<div>
					<label for="password:">Password:</label>
					<input id="password" name="password" type="password" placeholder="Password">
				</div>
				<div>
					<button type="submit" value="Login">Login</button>
				</div>
			</form>
		<h3>Compose an Email</h3>
			<form method="POST" action="/my_first_form.php">
				<div>
					<label for="To">To:</label>
					<input type="text" name="to" placeholder="To">
				</div>
				<div>
					<label for="From:">From:</label>
					<input type="text" name="from" placeholder="From">
				</div>
				<div>
					<label for="Subject:">Subject:</label>
					<input type="text" name="subject" placeholder="Subject">
				</div>
				<div> 
					<textarea id="email_body" placeholder="Message goes here" name="email_body" rows="10" cols="30"></textarea>
				</div>
				<div>
					<button type="submit" value="send">Send</button>
				</div>
				<div>
					<input type="checkbox" id="sent_folder" name="sent_folder" value="yes" checked>
					<label for="sent_folder">Send a copy to the sent folder.</label>
				</div>
			</form>
		<h3>Multiple Choice Test</h3>
			<form method="POST" action="/my_first_form.php">
				<div>Who was a member of The Beatles?</div>
					<label>
						<input type="radio" name="q1" value="bob_dole">
						Bob Dole
					</label>
					<label>
						<input type="radio" name="q1" value="george_harrison">
						George Harrison
					</label>
					<label>
						<input type="radio" name="q1" value="slash">
						Slash
					</label>
					<label>
						<input type="radio" name="q1" value="eric_clapton">
						Eric Clapton
					</label>
				<div>What company produced the game Starcraft?</div>
					<label>
						<input type="radio" name="q2" value="ea_sports">
						EA Sports
					</label>
					<label>
						<input type="radio" name="q2" value="nike">
						Nike
					</label>
					<label>
						<input type="radio" name="q2" value="blizzard">
						Blizzard
					</label>
					<label>
						<input type="radio" name="q2" value="pepsi">
						Pepsi
					</label>
				<div>What Games has Blizzard Produced?</div>
					<label>
						<input type="checkbox" id="game1" name="game[]" value="Diablo">Diablo
					</label>
					<label>
						<input type="checkbox" id="game2" name="game[]" value="Warcraft">Warcraft
					</label>
					<label>
						<input type="checkbox" id="game3" name="game[]" value="Lemings">Lemings
					</label>
				<div>
					<label for="games">What games have you played?</label>
						<select id="games" name="games[]" multiple>
							<option value="Monopoly">Monopoly </option>
							<option value="Clue">Clue </option>
							<option value="Sorry">Sorry </option>
							<option value="Battleship">Battleship</option>
						</select>
				</div>
				<div>
					<button type="submit" value="submit">Submit</button>
				</div>
			</form>
		<h3>Select Testing</h3>
			<form method="POST" action="/my_first_form.php">
					<label for="pets">Do you have any pets?</label>
						<select id="pets" name="pets">
							<option value="1" selected>Yes</option>
							<option value="0">No</option>
						</select>
				<div>
						<button type="submit" value="submit">Submit</button>
				</div>
			</form>
	</body>
</html>