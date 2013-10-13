<?php
include "../conectar.php" ;
$id = $_GET['id'];
$query = "UPDATE anotacionesMes SET nota ='' WHERE id = $id";
mysql_query($query);
header('Location: anotacionpormes.php');
?>