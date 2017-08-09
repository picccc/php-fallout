<!DOCTYPE html>
<html>
	<head>
		<title>Fallout weapon creation</title>
		
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script type="text/javascript" src="js/scripts.js"></script>
		<link rel="shortcut icon" href="favicon.png"/>
		<style>
			body {margin:50px; color: #73ce81;}
			h3{
				background-image: linear-gradient(to top, rgba(22,77,32,0), rgba(22,77,32,0.8), rgba(22,77,32,1),
					 rgba(22,77,32,1), rgba(18,82,23,1), rgba(22,77,32,1), rgba(22,77,32,1),
					 rgba(22,77,32,0.8),rgba(22,77,32,0));
				color: #fff; padding: 10px;
			}
			
			table, th, td {
							border: 3px solid lightgreen;
							border-collapse: collapse;
							}
		</style>
	</head>

	<body style="background-image:url(vaultboy.png)">
		<?php
		if (!(isset($_GET["sent"])))
			echo '
				<form < action="weapons.php?sent=true" method="post" >
					<h3 class="text-center">Weapon Creation Form</h3>
					<i>Please, do not use quote symbols</i>
					<div class="col-md-4" style="width:200px">					
						<b>Weapon name:</b>
							<input type="text" name="wep_name" class="form-control" required/>
						<br>
						
						<b>Weapon type:</b>
							<input type="text" list="type" name="wep_type" class="form-control" required/>
								<datalist id="type">
									<option value="Small">
									<option value="Big">
									<option value="Energy">
									<option value="Explosives">
									<option value="Melee">
									<option value="Unarmed">
								</datalist>
						<br>
						
						<b>Weapon subtype:</b>
							<input type="text" list="subtype" name="wep_subtype" class="form-control" required/>
								<datalist id="subtype">
									<option value="Pistol">
									<option value="Rifle">
									<option value="Shotgun">
									<option value="Submachine Gun">
									<option value="Direct-Fire">
									<option value="Energy Pistol">
									<option value="Energy Rifle">
									<option value="Area-Of-Effect">
									<option value="Placed">
									<option value="Thrown">
									<option value="Bladed">
									<option value="Blunt">
								</datalist>
					</div>
				
					<div class="col-md-4" >
						<b>Damage (min = 0, max = 9999)</b>
							<input type="number" name="wep_damage" class="form-control" style="width:80px;" required />
						<b>Critical (min = 0, max = 9999)</b>
							<input type="number" name="wep_critical" class="form-control" style="width:80px;" required />
						<b>Capacity (min = 0, max = 9999)</b>
							<input type="number" name="wep_capacity" class="form-control" style="width:80px;" required />
						<b>Weight (min = 0, max = 9999)</b>
							<input type="number" name="wep_weight" class="form-control" style="width:80px;" required />
						<br>
						<input type=submit style="right: 10px;" class="btn btn-primary" id="submit" value="Confirm">
					</div>
				</form>';
		else 
		{
			//these are names of server, username, password and database
			$profile = file_get_contents("database_profile.json");
			$profile = json_decode($profile, true);
			$servername = $profile[hostname];
			$username = $profile[user];
			$password = $profile[password];
			$DB_name = $profile[DB_name];
			
			//trying to connect to the database;
			//if not successfull,stops the script.
			$conn = mysqli_connect($servername,$username,$password,$DB_name);
			if (!$conn)
				die("Try again :/");
			
			$weapon = array_combine(
			[
				"name",
				"type",
				"subtype",
				"damage",
				"critical",
				"capacity",
				"weight"
			],
			[
				$_POST["wep_name"],
				$_POST["wep_type"],
				$_POST["wep_subtype"],
				$_POST["wep_damage"],
				$_POST["wep_critical"],
				$_POST["wep_capacity"],
				$_POST["wep_weight"]
			]
			);
			
			
			//creating weapons table, if it's not already created
			$tables = file("tables.txt");
			mysqli_query($conn,$tables[1]);
			
			//writing a query
			$sql = "INSERT INTO weapons (
								name,
								type,
								subtype,
								damage,
								critical,
								capacity,
								weight
										)
								
							VALUES (
							'$weapon[name]',
							'$weapon[type]',
							'$weapon[subtype]',
							'$weapon[damage]',
							'$weapon[critical]',
							'$weapon[capacity]',
							'$weapon[weight]'
									);";
			
			if (!mysqli_query($conn,$sql))
				echo "<h3 class='text-center'>Try again :/</h3>";
			else 
			{
				$weapon[id] = mysqli_insert_id($conn);
				echo '<h3 class="text-center"> Your weapon is stored! </h3>';
				echo "<table style='width:100%'>
						<tr>
							<th class='text-center'>ID</th>
							<th class='text-center'>Name</th>
							<th class='text-center'>Type</th>
							<th class='text-center'>Subtype</th>
							<th class='text-center'>Damage</th>
							<th class='text-center'>Critical</th>
							<th class='text-center'>Capacity</th>
							<th class='text-center'>Weight</th>
						</tr>
						
						<tr>
							<th class='text-center'>$weapon[id]</th>
							<th class='text-center'>$weapon[name]</th>
							<th class='text-center'>$weapon[type]</th>
							<th class='text-center'>$weapon[subtype]</th>
							<th class='text-center'>$weapon[damage]</th>
							<th class='text-center'>$weapon[critical]</th>
							<th class='text-center'>$weapon[capacity]</th>
							<th class='text-center'>$weapon[weight]</th>
						</tr>
					</table>
				";
			}
			mysqli_close($conn);
		}
		?>
	</body>