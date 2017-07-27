<!DOCTYPE html>
<html >
<head>
	<title>Fallout input</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script type="text/javascript">
		function addition(f) {
			var a = parseInt(document.getElementById('1').value);
			var b = parseInt(document.getElementById('2').value);
      var c = parseInt(document.getElementById('3').value);
      var d = parseInt(document.getElementById('4').value);
      var e = parseInt(document.getElementById('5').value);
      var f = parseInt(document.getElementById('6').value);
      var g = parseInt(document.getElementById('7').value);
			var sum = 42-(a + b + c + d + e + f + g);
			document.getElementById('result').innerHTML = sum;
      var subm = document.getElementById('submit');
      if(sum==0){
        subm.disabled=false;}
		}
		</script>
</head>

<body>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4"><form action="results.php" method="post">
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
I'm <input type=number class="form-control" name=age placeholder="Age" style="width:80px;" required> years old.
<br>
<br>
<label>S.P.E.C.I.A.L. stats (stat range is 1 - 10; stat sum is 42):</label><br>
Strength: <input type=number class="form-control" id="1" name=strength value=5 style="width:90px;" required><br>
Perception: <input type=number class="form-control" id="2" name=perception value=5 style="width:90px;" required><br>
Endurance: <input type=number class="form-control" id="3" name=endurance value=5 style="width:90px;" required><br>
Charisma: <input type=number class="form-control" id="4" name=charisma value=5 style="width:90px;" required><br>
Intelligence: <input type=number class="form-control" id="5" name=intelligence value=5 style="width:90px;" required><br>
Agility: <input type=number class="form-control" name=agility id="6" value=5 style="width:90px;" required><br>
Luck: <input type=number  class="form-control" name=luck id="7" value=5 style="width:90px;" required><br>
<input type="button" class="btn btn-primary" value="Проверить остаток" onclick="addition(this.form)" onclick="is_full()"><br>
<h4>Остаток очков навыков: <span id='result'>7</span></h4>
<input type=submit class="btn btn-primary" id="submit" disabled value="Confirm">
</form>
</div>
 </div>
</body>
</html>
