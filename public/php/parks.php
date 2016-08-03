<?php
require_once '../source/Input.php';
require_once 'db_connect.php';
function pageController()
{	
	$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
	// Write the query to retrieve the details of all of the teams
	$sql = 'SELECT * FROM national_parks';
	// Copy the query and test it in SQL Pro

	
	// Add a LIMIT and an OFFSET clause, suppose the size of each page is 5

	$page = Input::get('page', 1) < 0 ? 1 : Input::get('page', 1);
	$offset = $page * 4 - 4;
	$sql .= " LIMIT 4 OFFSET $offset";

	$parks = $dbc->query($sql)->fetchall(PDO::FETCH_ASSOC); 

	return [
		'title' => 'National Parks',
		'parks' => $parks
	];
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<?php include '../partials/head.phtml' ?>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<header class="page-header">
				<h1>Parks</h1>
			</header>
		</div>
		<!-- <div class="col-md-4" style="padding-top: 3.5em">
			<form class="form-inline" method="get">
				<div class="form-group">
					<input
						type="text"
						class="form-control"
						id="team"
						name="team_or_stadium"
						placeholder="Team or Stadium">
				</div>
				<button type="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search" aria-hidden="true">
					</span>
					Search
				</button>
			</form>
		</div> -->
	</div>
	<div class="row">
		<form method="post" action="delete-teams.php">
			<table class="table table-striped table-hover table-bordered">
				  <thead>
				  <!-- <tr>
					  <th>Delete</th>
					  <th>
						  <a href="?sort_by=team">Team</a>
					  </th>
					  <th>
						  <a href="?sort_by=stadium">Stadium</a>
					  </th>
					  <th>
						  <a href="?sort_by=league">League</a>
					  </th>
				  </tr> -->
				  </thead>
				  <tbody>
				  <tr>

						<?php foreach ($parks as $key => $park) { ?>
							<td><?= 'Park: ' . $parks[$key]['name'] ?></td>
						<?php } ?>
				  </tr>
				  <tr>
						<?php foreach ($parks as $key => $park) { ?>
							<td><?= 'Location: ' . $parks[$key]['location'] ?></td>
						<?php } ?>
				  </tr>
				  <tr>
						<?php foreach ($parks as $key => $park) { ?>
							<td><?= 'Founded On: ' . $parks[$key]['date_established'] ?></td>
						<?php } ?>
				  </tr>
				  <tr>
						<?php foreach ($parks as $key => $park) { ?>
							<td><?= 'Area Acres: ' . $parks[$key]['area_in_acres'] ?></td>
						<?php } ?>
				  </tr>
				  </tbody>
				  <tfoot>
					<tr>
					  <td colspan="4">
						  <!-- The values in this pagination control indicate you're currently viewing page 2 -->
						  <nav aria-label="Page navigation" class="text-center">
							  <ul class="pagination">
								  <li><a href="?page=1">1</a></li>
								  <li><a href="?page=2">2</a></li>
								  <li><a href="?page=3">3</a></li>
							  </ul>
						  </nav>
					  </td>
					</tr>
					</tfoot>
				</table>
			<!-- <button type="submit" class="btn btn-danger">
				<span class="glyphicon glyphicon-trash"></span>
				Delete
			</button>
			<a href="new-team.php" class="btn btn-primary">
				<span class="glyphicon glyphicon-plus"></span>
				Add a new team
			</a> -->
		</form>
	</div>
</div>
<?php include '../partials/scripts.phtml' ?>
</body>
</html>