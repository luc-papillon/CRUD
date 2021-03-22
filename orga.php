<?php

include "head.php"

?>

<?php



 $statement=connect()->query("SELECT * FROM organization");

?>


<h1>Liste des Organisation</h1>
<center><a class="b" href='ajoutO.php'>Ajouter une organisation </a></center>
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





                </tr>
