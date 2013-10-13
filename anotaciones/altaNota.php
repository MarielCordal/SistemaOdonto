<?php
	include "../conectar.php" ;
	$nota = $_POST['nuevanota'];
	$id = $_POST['id'];
	$query = "UPDATE anotacionesMes SET nota = '$nota' WHERE id = $id";
	mysql_query($query);
	header('Location: anotacionpormes.php');
?>