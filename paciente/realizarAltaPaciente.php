<?php
include "../conectar.php" ;
$dni = $_GET['dni'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$numeroAfiliado = $_GET['numeroAfiliado'];
$sexo = $_GET['sexo'];
$localidad = $_GET['localidad'];
$telefono = $_GET['telefono'];
$email = $_GET['email'];
$obraSocial = $_GET['obraSocial'];
$edad = $_GET['edad'];
$fechaIngreso = $_GET['fechaIngreso'];
$observaciones = $_GET['observaciones'];
$cantrx = $_GET['cantrx'];
$dom = $_GET['dom'];
$celular = $_GET['celular'];
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
$insertarPaciente = "INSERT INTO paciente (nombre, apellido,dni,numeroAfiliado, sexo, edad, obraSocial, fechaIngreso, observaciones, cantrx, dom, localidad, telefono, celular, email, tratamiento, alergia, cardiaco, presion, epilepsia, hepatitis, diabetico, asma ,ulceras, hiv, id, eliminado)
                     VALUES ('$nombre' , '$apellido' , '$dni' ,'$numeroAfiliado', '$sexo' , '$edad' , '$obraSocial' , '$fechaIngreso' , '$observaciones' , '$cantrx' , '$dom' , '$localidad' , '$telefono' , '$celular' , '$email' , '$tratamiento' , '$alergia' , '$cardiaco' , '$presion' , '$epilepsia' , '$hepatitis' , '$diabetico' , '$asma' , '$ulceras' , '$hiv' , 'null' , '0' ) ";
mysql_query($insertarPaciente);
header("location:altapaciente.php");
?>


