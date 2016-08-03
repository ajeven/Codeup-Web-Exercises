<?php
require_once '../source/Input.php';
require_once 'db_connect.php';
function pageController()
{	
	$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
	$sql = 'SELECT * FROM national_parks';
	// Add a LIMIT and an OFFSET clause, suppose the size of each page is 4
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
	</div>
	<div class="row">
		<form method="post" action="delete-teams.php">
			<table class="table table-striped table-hover table-bordered">
				  <thead>
				  <tr>
					  <th>
					  	Park
					  </th>
					  <th>
						Location
					  </th>
					  <th>
						Established
					  </th>
					  <th>
						Area Acres
					  </th>
				  </tr>
				  </thead>
				  <tbody>
					<?php foreach ($parks as $key => $park) { ?>
						<tr><td><?= $parks[$key]['name'] ?></td> 
						<td><?= $parks[$key]['location'] ?></td>
						<td><?= $parks[$key]['date_established'] ?></td>
						<td><?= $parks[$key]['area_in_acres'] ?></td></tr>
					<?php } ?>
				  </tbody>
				  <tfoot>
					<tr>
					  <td colspan="4">
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
		</form>
	</div>
</div>
<?php include '../partials/scripts.phtml' ?>
</body>
</html>