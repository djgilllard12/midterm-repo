<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Select Shows</title>
	</head>
	<body>
		<main>
			<h1>Select a Network</h1>
			<form method="post" action="shows.php">
				<fieldset>
					<label for="Network">Select a Network:</label>
					<select>
						<?php
						// variable setup
						$networks = null;
						// connect to db
						$conn = new PDO('ca-cdbr-azure-central-a.cloudapp.net;comp1006_dj_midterm', 'b658a3c75177db', '20c05220');
						// find the networks in database
						$sql = "SELECT network_name FROM shows GROUP BY network_name ORDER BY network_name";
						// excute sql script
						$cmd= $conn->prepare($sql);
						$cmd->excute();
						$networks = $cmd->fetchAll();
						// create a loop to get all the network names
						foreach($networks as $network) {
							echo '<option>' . $network['network_name'] . '</option>';
						}
						// disconnect
						$conn = null;
						?>
					</select>
				</fieldset>
				<button type = "button">Get Shows</button>
			</form>
		</main>
	</body>
</html>
