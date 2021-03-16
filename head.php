
<?php
/*session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}



*/



					function connect(string $dbname='groups') {
    $dbo=null;
    try {
        $dbo = new PDO("mysql:host=localhost;dbname=$dbname;charset=UTF8", 'root', '');
        $dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        return $dbo;
    } catch (\PDOException $e) {
        return false;
    }
}
?>


<html>

<head>
	<title>CRUD</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
	rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link href="css.css" rel="stylesheet">
</head>

<body>
	<h1>CRUD User</h1>
	
	<ul>
		<li><a href="formulaire.php">Ajouter</a></li>
		<li><a href="select.php">Selectionner</a></li>
		<li><a href="modif.php">Modifier</a></li>
		<li><a href="sup.php">Supprimer</a></li>
		<li><a href="orga.php">Organisation</a></li>
	</ul>

