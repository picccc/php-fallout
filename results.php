<html>
	<head>
		<title>Fallout character info</title>
		
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
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
		<h3 class="text-center">Fallout character info</h3>
		<?php
			//reading all the data we got from user into variables
			$name = $_POST["name"];
			$surname = $_POST["surname"];
			$age = $_POST["age"];
			$sex = $_POST["sex"];
			
			//creating an array for S.P.E.C.I.A.L stats
			$special = array_combine(
			[
				"strength",
				"perception",
				"endurance",
				"charisma",
				"intelligence",
				"agility",
				"luck"
			],
			[
				$_POST["strength"],
				$_POST["perception"],
				$_POST["endurance"],
				$_POST["charisma"],
				$_POST["intelligence"],
				$_POST["agility"],
				$_POST["luck"]
			]
			);
			
			
			//if S.P.E.C.I.A.L. stats are OK
			if ((array_sum($special)==42)&&(max($special)<=10)&&(min($special)>=1))
				echo
					"<b>Name: </b> $name <br>".
					"<b>Surname: </b> $surname <br>".
					"<b>Age: </b> $age <br>".
					"<b>Sex: </b> $sex <br><br>".
					
					"<label>S.P.E.C.I.A.L. stats:</label>"."<br>".
					"Strength: $special[strength] <br>".
					"Perception: $special[perception] <br>".
					"Endurance: $special[endurance] <br>".
					"Charisma: $special[charisma] <br>".
					"Intelligence: $special[intelligence] <br>".
					"Agility: $special[agility] <br>".
					"Luck: $special[luck] <br>";
			
			//if S.P.E.C.I.A.L. stats are not OK
			else die("Oops, there is something wrong with your S.P.E.C.I.A.L. stats, change 'em!");
			
			
			
			
			//writing new entry into the database characters table
			
			//these are names of server, username, password and database
			$servername = "localhost";
			$username = "root";
			$password = "";
			$DB_name = "fallout";
			
			//trying to connect to the database;
			//if not successfull, tries to create a database "fallout" with a table "characters";
			//if not successfull, stops the script.
			$conn = mysqli_connect($servername, $username, $password, $DB_name);
			if (!$conn)
			{
				$sql = "create database $DB_name";
				if (!mysqli_query($conn, $sql))
					die ("Couldn't connect to (or create) a database, try again :/");
				$conn = mysqli_connect($servername, $username, $password, $DB_name);
				if (!$conn)
					die("Couldn't connect to (or create) a database, try again :/");
				$sql = "CREATE TABLE characters(
							ID INT NOT NULL AUTO_INCREMENT,
							Name VARCHAR(20),
							Surname VARCHAR(20),
							Age TINYINT(2),
							Sex VARCHAR(6),
							Strength TINYINT(2),
							Perception TINYINT(2),
							Endurance TINYINT(2),
							Charisma TINYINT(2),
							Intelligence TINYINT(2),
							Agility TINYINT(2),
							Luck TINYINT(2),
							PRIMARY KEY (ID)
						);";
				if (!mysqli_query($conn, $sql))
					die ("Couldn't create a table, try again :/");
			}

			//filling a query for insertion of character information
			$sql = "INSERT INTO characters (name, surname, age, 
					sex, strength, perception, endurance, charisma, 
					intelligence, agility, luck) 
					VALUES ('$name', '$surname', '$age', '$sex', '$special[strength]', '$special[perception]', '$special[endurance]', '$special[charisma]', '$special[intelligence]', '$special[agility]', '$special[luck]');";
			
			//trying to add a new entry
			if (!mysqli_query($conn, $sql))
				echo "Couldn't add your character, try again :/";
			//closing database
			mysqli_close($conn);
			?>
	</body>
</html>
