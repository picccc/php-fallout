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
            $special = [
                $_POST["strength"],
                $_POST["perception"],
                $_POST["endurance"],
                $_POST["charisma"],
                $_POST["intelligence"],
                $_POST["agility"],
                $_POST["luck"]
            ];
			//$spec is a variable that checks if S.P.E.C.I.A.L. stats are OK; if ok, then $spec = 1, otherwise $spec = 0.
			$spec = 0;
			
            //if S.P.E.C.I.A.L. stats are OK
            if ((array_sum($special)==42)&&(max($special)<=10)&&(min($special)>=1)){
                echo
                    "<b>Name: </b>".$_POST["name"]."<br>".
                    "<b>Surname: </b>".$_POST["surname"]."<br>".
                    "<b>Age: </b>".$_POST["age"]."<br>".
                    "<b>Sex: </b>".$_POST["sex"]."<br><br>".
                    
					"<label>S.P.E.C.I.A.L. stats:</label>"."<br>".
                    "Strength: ".$_POST["strength"]."<br>".
                    "Perception: ".$_POST["perception"]."<br>".
                    "Endurance: ".$_POST["endurance"]."<br>".
                    "Charisma: ".$_POST["charisma"]."<br>".
                    "Intelligence: ".$_POST["intelligence"]."<br>".
                    "Agility: ".$_POST["agility"]."<br>".
                    "Luck: ".$_POST["luck"]."<br>";
				$spec = 1;
            }
            //if S.P.E.C.I.A.L. stats are not OK
            else echo "Oops, there is something wrong with your S.P.E.C.I.A.L. stats, change 'em!";
        ?>
		
		<?php
			if ($spec == 1) 
			{
				//writing character info into "character.txt"
				$output = fopen("character.txt","w");
				fwrite($output,$_POST["name"].' '.$_POST["surname"].' '.$_POST["age"].' '.$_POST["sex"].' '.$special[0].' '.$special[1].' '.$special[2].' '.$special[3].' '.$special[4].' '.$special[5].' '.$special[6]); 
				echo '<br><a href="character.txt" class="btn btn-primary">Download your character info</a><br>';
				echo 'Click the button and save the opened page (right click and "Save page as...").';
			}
	    	?>
    </body>
</html>
