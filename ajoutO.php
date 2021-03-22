<?php

include "head.php"

?>


		<form method="POST" action="ajoutO.php">
					<label for="nom"> Nom</label></br>
					<input type="text" name="nom"/> <br>
					
					<label for="domain"> Domain</label> </br>
					<input type="text" name="domain"/> </br>
					
					<label for="aliase"> Aliases </label></br>
					<input type="text" name="aliase"/></br>
						
						<input type="submit" name="Valider" />
	
				</form>



<?php
	


$link = mysqli_connect("localhost", "root","", "groups");


$nom		=	$_POST['nom']??'';
$domain		=	$_POST['domain']??'';
$aliase		=	$_POST['aliase']??'';


$requetes = "INSERT INTO organization
			VALUES (NULL, '$nom','$domain','$aliase')";


if ($result = mysqli_query($link,$requetes))
{
	echo "";
}
else
{
	echo("".mysqli_connect_error());
	
}




 $statement=connect()->query("SELECT * FROM organization");

?>

<center><a class="b" href='ajoutO.php'>Ajouter une organisation </a></center>
<h1>Liste des Organisations</h1>
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

?>


