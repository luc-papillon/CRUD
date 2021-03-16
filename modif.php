<?php 
include 'head.php';


?>
		<form action="modif.php" method="POST">
							
						<label for="nomact"> Email </label> </br>
						<input type="text" name="email"/> </br>
						
						<label for="nouvnom"> Nouveau Mot de passe</label> </br>
						<input type="password" name="mdp"/> </br>
						
						<label for="nouvnom"> Mot de passe</label> </br>
						<input type="password" name="nouvmdp"/> </br>
						
			
						<input type="submit" name="Valider" />
					</form>
					
					<?php
					
					
					// il y a une erreur
					$email = $_POST['email']??'';
					$mdp = $_POST['mdp']??'';
					$nouvmdp = $_POST['nouvmdp']??'';
					$stat=connect()->exec("UPDATE user
												SET password = '$nouvmdp'
												WHERE email = '$email'
												AND password = '$mdp'");
					
					if($mdp<>$nouvmdp)
					{
						$stat;
						
						echo "<h1>changement réussi</h1>";
					}
					else {
						echo "<h1>Erreur</h1>";	
					}
					
		include 'footer.php'

?>