<?php 

include 'head.php';

?>


<h1>Liste des User</h1>
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
    echo "<td>" . $row['firstname']??0 . "<br/></td>";
	echo "<td>" . $row['lastname']??0 . "<br></td>";
	echo "<td>" . $row['email']??0 . "<br></td>";
	
}
?>


</div>

<?php
		include 'footer.php'

?>