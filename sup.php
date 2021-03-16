<?php 
include 'head.php';


?>


<form action="sup.php" method="POST">
							
						<label for="nomdel"> email</label> </br>
						<input type="text" name="email"/> </br>
						
						<label for="conf"> Mot de passe</label> </br>
						<input type="password" name="password"/> </br>
						
			
						<input type="submit" name="Valider" />
					</form>
					
					<?php
					
					
					$email = $_POST['email']??'';
					$MotPasse= $_POST['password']??'';

$result =connect()->exec("DELETE FROM user
							WHERE email = '$email'
							AND	password = '$MotPasse'");

 if(($result) > 0)
{
		echo "<h1>compte supprimé</h1>";
							
}
else
{
	
}  

		include 'footer.php'

?>