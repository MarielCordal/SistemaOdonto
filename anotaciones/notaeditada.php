<?php
include "../conectar.php" ;
$id = $_POST['id'];
$nota = $_POST['nota'];
$query = "UPDATE anotacionesMes SET nota ='$nota' WHERE id = $id";
mysql_query($query);
header('Location: anotacionpormes.php');
?>