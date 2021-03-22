<?php

include "head.php";

?>

<form action="supprimerO.php" method="POST">
							
							<h1>Pour supprimer l'organisation il faut remplir les informations</h1>
						<label for="domain"> Domain</label> </br>
						<input type="text" name="domain"/> </br>
						
						<label for="aliases"> Aliases</label> </br>
						<input type="aliases" name="aliases"/> </br>
						
			
						<input type="submit" name="Valider" />
					</form>
					
					<?php
					
					
					$domain = $_POST['domain']??'';
					$aliases= $_POST['aliases']??'';

$result =connect()->exec("DELETE FROM organization
							WHERE domain = '$domain'
							AND	aliases = '$aliases'");



$statement=connect()->query("SELECT * FROM organization");

?>

<center><a class="b" href='ajoutO.php'>Ajouter une organisation </a></center>
<h1>Liste des Oranisations</h1>
<div class="liste">
<table id="organizationlist">
<tr class="first-line">
    <td>id</td>
	<td>nom</td>
	<td>prenom</td>
	<td>email</td>
    
   
</tr>

<?php
foreach ($statement as $row) {
    
    echo "<tr><td>" . /*"<input type=checkbox name='num'>" .*/ $row['id']??0 . "<br/></td></tr>";
    echo "<td> " . $row['name']??0 ."<br/></td>";
	echo "<td>" . $row['domain']??0 . "<br></td>";
	echo "<td>" . $row['aliases']??0 . "<br></td>";
	echo "<td>" . "<a  href='modifier.php'>modifier </a></td>";
	echo "<td><a  href='supprimerO.php'> Supprimer</a> <br></td></div>";
}


 

		include 'footer.php'

?>
