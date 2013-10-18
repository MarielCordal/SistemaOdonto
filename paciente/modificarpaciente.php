<?php
include "../conectar.php";
$id = $_GET['idPaciente'];
$numeroAfiliado = $_GET['numeroAfiliado'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$dni = $_GET['dni'];
$sexo = $_GET['sexo'];
$edad = $_GET['edad'];
$obraSocial = $_GET['obraSocial'];
$fechaIngreso = $_GET['fechaIngreso'];
$observaciones = $_GET['observaciones'];
$cantrx = $_GET['cantrx'];       
$dom = $_GET['dom'];
$localidad = $_GET['localidad'];       
$telefono = $_GET['telefono'];
$celular = $_GET['celular'];
$email = $_GET['email'];
$tratamiento = $_GET['tratamiento'];
$alergia = $_GET['alergia'];
$cardiaco = $_GET['cardiaco'];
$presion = $_GET['presion'];
$epilepsia = $_GET['epilepsia'];
$hepatitis = $_GET['hepatitis'];
$diabetico = $_GET['diabetico'];
$asma = $_GET['asma'];
$ulceras = $_GET['ulceras'];
$hiv = $_GET['hiv']; 


$paciente = "UPDATE paciente pac SET numeroAfiliado='$numeroAfiliado' , nombre='$nombre' , apellido='$apellido' , dni='$dni'
    , sexo='$sexo', edad='$edad', obraSocial='$obraSocial', fechaIngreso='$fechaIngreso', observaciones='$observaciones'
    , cantrx='$cantrx', dom='$dom', localidad='$localidad', telefono='$telefono', celular='$celular', email='$email'
    , tratamiento='$tratamiento', alergia='$alergia', cardiaco='$cardiaco', presion='$presion', epilepsia='$epilepsia'
    , hepatitis='$hepatitis', diabetico='$diabetico', asma='$asma' , ulceras='$ulceras' , hiv='$hiv'   
        WHERE id = $id";

mysql_query($paciente);
header("location:editarpaciente.php");
?>


