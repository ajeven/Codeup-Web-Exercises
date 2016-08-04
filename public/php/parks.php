<?php
require_once '../source/Input.php';
require_once 'db_connect.php';
function pageController($dbc)
{	
	
	if (Input::isPost()) {
		$name = Input::get('name');
		$description = Input::get('description');
		$location = Input::get('location');
		$date_established = Input::get('date_established');
		$area_in_acres = Input::get('area_in_acres');

		$sql= 'INSERT INTO national_parks (name, description, location, date_established, area_in_acres)
			VALUES (:name, :description, :location, :date_established, :area_in_acres)';
			$stmt = $dbc->prepare($sql);
			$stmt->bindValue(':name', $name, PDO::PARAM_STR);
			$stmt->bindValue(':description', $description, PDO::PARAM_STR);
			$stmt->bindValue(':area_in_acres', $area_in_acres, PDO::PARAM_STR);
			$stmt->bindValue(':location', $location, PDO::PARAM_STR);
			$stmt->bindValue(':date_established', $date_established, PDO::PARAM_STR);
			$stmt->execute();
	}
	$sql = 'SELECT * FROM national_parks';
	// Add a LIMIT and an OFFSET clause, suppose the size of each page is 4
	$page = Input::get('page', 1) < 0 ? 1 : Input::get('page', 1);
	$offset = $page * 4 - 4;
	$sql .= " LIMIT 4 OFFSET $offset";

	$parks = $dbc->query($sql)->fetchall(PDO::FETCH_ASSOC); 

	return [
		'title' => 'National Parks',
		'parks' => $parks,

	];
}
extract(pageController($dbc));
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
					  <th>
						Description
					  </th>
				  </tr>
				  </thead>
				  <tbody>
					<?php foreach ($parks as $key => $park) { ?>
						<tr>
							<td><?= $parks[$key]['name'] ?></td> 
							<td><?= $parks[$key]['location'] ?></td>
							<td><?= $parks[$key]['date_established'] ?></td>
							<td><?= $parks[$key]['area_in_acres'] ?></td>
							<td><?= $parks[$key]['description'] ?></td>
					<?php } ?>
						</tr>
				  </tbody>
				  <tfoot>
					<tr>
					  <td colspan="4">
						  <nav aria-label="Page navigation" class="text-center">
								<ul class="pagination">
									<li>
									<li><a href="?page=1">1</a></li>
									<li><a href="?page=2">2</a></li>
									<li><a href="?page=3">3</a></li>
								</ul>
						  </nav>
							<td>
								<form method="post">
									<label for="name">Name</label>
										<input
											type="text"
											class="form-control"
											name="name"
											id="name"
											placeholder="Add Name"
											
										>
									<label for="description">Description</label>
										<input
											type="text"
											class="form-control"
											name="description"
											id="description"
											placeholder="Add Description"
											
										>
									<label for="location">Location</label>
										<input
											type="text"
											class="form-control"
											name="location"
											id="location"
											placeholder="Add Location"
											
										>
									<label for="area_in_acres">Area</label>
										<input
											type="text"
											class="form-control"
											name="area_in_acres"
											id="area_in_acres"
											placeholder="Add Area"
											
										>
									<label for="date_established">Date</label>
										<input
											type="text"
											class="form-control"
											name="date_established"
											id="date_established"
											placeholder="Add Date"
											
										>
									<button type='submit' class='btn btn-info'>
										<span class='glyphicon glyphicon-plus'></span>
										Add Park
									</button>
								</form>
							</td>
					  </td>
					</tr>
					</tfoot>
				</table>
	</div>
</div>
<?php include '../partials/scripts.phtml' ?>
</body>
</html>