<!DOCTYPE html>
<html>
	<head>
		<title>Fallout input</title>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script type="text/javascript" src="js/scripts.js"></script>
		<style>
			body {margin:50px;}
			    h3{
					background-image: linear-gradient(to top, rgba(30,87,153,0), rgba(30,87,153,0.8), rgba(30,87,153,1),
                    rgba(30,87,153,1), rgba(41,137,216,1), rgba(30,87,153,1), rgba(30,87,153,1),
                    rgba(30,87,153,0.8),rgba(30,87,153,0));
					color: #fff; padding: 10px;
				}
		</style>
	</head>

	<body style="background-image:url(vaultboy.jpg)">
		<form action="results.php" method="post">
			<h3 class="text-center">Fallout character creation form</h3>
			<div class="col-md-6">
				<label>Are you a boy or a girl?</label>
				<br>
				<input type=radio name=sex value="Female" class="form-check-input" checked> Girl
				<br>
				<input type=radio name=sex class="form-check-input" value="Male"> Boy
				<br>
				<br>
				<label>How may I call you?</label>
				<br>
				<div class="form-group">
					Name: <input type=text name=name placeholder="Samantha" class="form-control" style="width:100px" required>
				</div>
				<div class="form-group">
					Surname: <input type=text name=surname placeholder="Smith" class="form-control" style="width:100px" required>
				</div>
				<label>How old are you?</label>
				<br>
				I'm <input type=number class="form-control" name=age placeholder="11" style="width:80px;" required> years old.
			</div>
			
			<div class="col-md-6">
				<label>S.P.E.C.I.A.L. stats (stat range is 1 - 10; stat sum is 42):</label>
				<br>
				Strength: <input type=number class="form-control" id="1" name=strength value=5 style="width:70px;" required>
				Perception: <input type=number class="form-control" id="2" name=perception value=5 style="width:70px;" required>
				Endurance: <input type=number class="form-control" id="3" name=endurance value=5 style="width:70px;" required>
				Charisma: <input type=number class="form-control" id="4" name=charisma value=5 style="width:70px;" required>
				Intelligence: <input type=number class="form-control" id="5" name=intelligence value=5 style="width:70px;" required>
				Agility: <input type=number class="form-control" name=agility id="6" value=5 style="width:70px;" required>
				Luck: <input type=number  class="form-control" name=luck id="7" value=5 style="width:70px;" required><br>
				<input type="button" class="btn btn-primary" value="Проверить остаток" onclick="addition(this.form)" onclick="is_full()"><br>
				<h4>Остаток очков навыков: <span id='result'>7</span></h4>
			</div>
			
			<input type=submit class="btn btn-primary" id="submit" disabled value="Confirm">
		</form>
	</body>
</html>
