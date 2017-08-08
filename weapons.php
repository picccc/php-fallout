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
		</style>
	</head>

	<body style="background-image:url(vaultboy.png)">
		<form <!--action=""--> method="post">			<!--action!!!!!!-->
			<h3 class="text-center">Weapon Creation Form</h3>
			<div class="col-md-6" style="width:200px">
				<b>Weapon name:</b>
					<input type="text" name="wep_name" class="form-control" />
				<br>
				
				<b>Weapon type:</b>
					<input type="text" list="type" name="wep_type" class="form-control" />
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
					<input type="text" list="subtype" name="wep_subtype" class="form-control" />
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
		
			<div class="col-md-6" >
				<b>Damage (min = 0, max = 9999)</b>
					<input type="number" value="0" name="damage" class="form-control" style="width:80px;" required />
				<b>Critical (min = 0, max = 9999)</b>
					<input type="number" value="0" name="critical" class="form-control" style="width:80px;" required />
				<b>Capacity (min = 0, max = 9999)</b>
					<input type="number" value="0" name="capacity" class="form-control" style="width:80px;" required />
				<b>Weight (min = 0, max = 9999)</b>
					<input type="number" value="0" name="weigth" class="form-control" style="width:80px;" required />
			</div>
		<input style="position: absolute; right: 10px; bottom: 15px;" type=submit class="btn btn-primary" id="submit" value="Confirm">
		</form>
	</body>