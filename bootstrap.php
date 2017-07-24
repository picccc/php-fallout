<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fallout</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
		<form action="results.html" method="post">
			<h3>Fallout character creation form</h3>
			<label>Are you a boy or a girl?</label><br>
				<input type=radio name=sex value="Female" checked> Girl<br>
				<input type=radio name=sex value="Male"> Boy<br>
				<br>
				<label>How may I call you?</label><br>
				<div class="form-group">
					Name: <input type=text name=name placeholder="Samantha" class="form-control" style="width:100px" required>
				</div>
				<div class="form-group">
					Surname: <input type=text name=surname placeholder="Smith" class="form-control" style="width:100px" required>
				</div>
				<br>
				<label>How old are you?</label><br>
				<label>I'm <input type=number name=age placeholder=11 style="width:45px;" required> years old.</label>
				<br>
				<br>
				<label>S.P.E.C.I.A.L. stats (stat range is 1 - 10; stat sum is 42):</label><br>
					Strength: <input type=number name=strength value=6 style="width:40px;" required><br>
					Perception: <input type=number name=perception value=6 style="width:40px;" required><br>
					Endurance: <input type=number name=endurance value=6 style="width:40px;" required><br>
					Charisma: <input type=number name=charisma value=6 style="width:40px;" required><br>
					Intelligence: <input type=number name=intelligence value=6 style="width:40px;" required><br>
					Agility: <input type=number name=agility value=6 style="width:40px;" required><br>
					Luck: <input type=number name=luck value=6 style="width:40px;" required><br>
						<button type="sumbit" class="btn btn-primary btn-lg">OK</button>
			</form>
		</div>
		<div class = "col-md-2"></div>
	</div>
</body>
</html>
