<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Shows</title>
	</head>
	<body>
		<?php
		// variable setup
		$show_name = null;
		$first_year = null;
		// get the selected network
		$network = $_POST['network_name'];
		// connect to db
		$conn = new PDO('ca-cdbr-azure-central-a.cloudapp.net;comp1006_dj_midterm', 'b658a3c75177db', '20c05220');
		// find all shows in the selected network
		$cmd = $conn->prepare($sql);
		$cmd->bindParam(':network_name', $network, PDO::PARAM_STR, 50);
		$sql = "SELECT show_id , show_name , first_year , network_name FROM shows WHERE network_name = :network_name";
		// excute sql script
		$cmd->excute();
		// taking values from table and inserting them into variables
		$show_name = $network['show_name'];
		$first_year = $network['first_year'];
		// loop though data
		foreach ($networks as $network) {
			echo '<tr><td>' . $show_name . '</td>
			<td>' . $first_year . '</td>
			<td>' . $network . '</tr>';
		}
		// disconnect
		$conn = null;
		?>
	</body>
</html>
