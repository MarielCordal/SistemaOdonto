<?php 
include '../conectar.php';
$id = $_GET['id'];
$query = "UPDATE paciente pac SET eliminado = 1 WHERE id = $id";
mysql_query($query);
header("location:busquedapaciente.php");
?>
