<?php 
include 'head.php';


?>

	<form method="POST" action="connexion.php">
				
					<label for="email"> Email </label></br>
					<input type="text" name="email"/></br>
					
					<label for="password"> Mot de Passe </label></br>
					<input type="password" name="password"/></br>
					
				
					<input type="submit" name="Valider" />
	</form>




<?php

$link = mysqli_connect("localhost", "root","", "groups");

$email = $_POST['email']??'';
$MotPasse= $_POST['password']??'';

$requet = "SELECT firstname, lastname ,email ,password
			 FROM user
			 WHERE email='$email' AND password='$MotPasse'";

$result = mysqli_query($link, $requet);

 if(mysqli_num_rows($result) > 0)
{
	  
    while($res = mysqli_fetch_assoc($result))
	{
		echo "Vous etes connecter";	
	}
}
else
{
	
}  

		include 'footer.php'

?>