<?php 
include 'head.php';


$link = mysqli_connect("localhost", "root","", "groups");


echo "";

// user
$firstname	=	$_POST['firstname']??'';
$lastname	=	$_POST['lastname']??'';
$email		=	$_POST['email']??'';
$MotPasse	=	$_POST['password']??'';
$select		=	$_POST['orga']??'';

$requetes = "INSERT INTO user
			VALUES (NULL, '$firstname','$lastname','$email','$MotPasse',0,$select)";


if ($result = mysqli_query($link,$requetes)) 
{
	echo "<h1>Insertion valide</h1>";
}
else
{
	echo("<br/>Echec insertion".mysqli_connect_error());
	
}

		include 'footer.php'

?>