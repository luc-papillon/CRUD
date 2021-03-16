<?php 
include 'head.php';


?>

	<form method="POST" action="index.php">
					<label for="firstname"> Prénom </label></br>
					<input type="text" name="firstname"/> <br>
					
					<label for="name"> Nom de famille </label> </br>
					<input type="text" name="lastname"/> </br>
					
					<label for="email"> Email </label></br>
					<input type="text" name="email"/></br>
					
					<label for="password"> Mot de Passe </label></br>
					<input type="password" name="password"/></br>
					
					<!-- faire un selecte-->
					<select name="orga">
						<option name="organi" value="1">1</option>
						<option name="organi" value="2">2</option>
						<option name="organi" value="5">5</option>
					</select>	
					<input type="submit" name="Valider" />
	
				</form>
	
	<?php
		include 'footer.php'

?>