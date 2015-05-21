<!DOCTYPE html>
<html>
<head>
	<title>Numismata</title>
	<link rel="stylesheet" href="app://css/bootstrap.min.css">
	<link rel="stylesheet" href="app://css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="app://css/style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<?php
$conn = mysql_connect('localhost', 'username', 'password');
mysql_select_db('coins', $conn);
$sql = "CREATE TABLE IF NOT EXISTS coins(id INTEGER, firstName TEXT)"; $results = mysql_query($sql);
$sql = "INSERT INTO coins VALUES(1,'Joe Bloggs')"; $results = mysql_query($sql);
$sql = "SELECT * FROM coins"; $results = mysql_query($sql);

?>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-striped table-hover">
					<thead>
						<tr><th>ID</th><th>State</th><th>Period</th><th>Issuer</th><th>Denomination</th></tr>
					</thead>
					<tbody>
						<tr>
							<th>CRU-ACH-001</th><td>Principality of Achaea</td><td>1318-1333</td><td>John of Gravina</td><td>Denier Tournois</td></tr>
						<tr><td>A</td><td>B</td><td>A</td><td>B</td><td>C</td></tr>
						<tr><td>A</td><td>B</td><td>A</td><td>B</td><td>C</td></tr>
						<tr><td>A</td><td>B</td><td>A</td><td>B</td><td>C</td></tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php
echo print_r($results);
?>
</body>
</html>