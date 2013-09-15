<?php
include "../conectar.php" ;
$activo = "paciente";
?>
<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="/prueba1/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/prueba1/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="/prueba1/js/bootstrap.min.js"></script>
          <!-- fin cosas de Bootstrap -->
          <title>Paciente  </title>
          <style type="text/css"> 
        body { 
            background:#FFFFFF;
            background-repeat: repeat;
            padding-top:90px;
        } 
        </style>      
   </head>
   <body> 
       <!-- aca van las cosas de la barra ---> 
   <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
           <div class="container">
            <a class="brand" href="/prueba1/index.php">Historias clinicas  </a>
            <ul class="nav">
                <li class="<?php echo ($activo == "paciente") ? 'active' : ''; ?>"><a href="/prueba1/paciente/busquedapaciente.php">Pacientes</a></li>
                <li class="<?php echo ($activo == "Anotaciones por mes") ? 'active' : ''; ?>"><a href="/prueba1/anotaciones/anotacionpormes.php">Anotaciones por mes</a></li>
            </ul>
           </div>
        </div>
   </div>
       <!-- fin de la  barra --->
       <h3 align =" center">DETALLES DEL PACIENTE</h3>
       <div  class="span5">
        <div class="span8" >
            <table  align="center"border=4 bordercolor="000000" id="tabla" class="table  collapse  " >
                         <thead>
                             <tr>
                             <th id="centrado" class="span8"> </th>
                             <th id="centrado" class="span8">Datos</th>

                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $id = $_GET['id'];

                                $consulta = "SELECT *
                                             FROM paciente as pac
                                             
                                             WHERE id= $id"; 
                             
                                             
                               $resultado= mysql_query($consulta);     
                                while ($row = mysql_fetch_array($resultado) or die(mysql_error())){
                               ?>
                             
                          <tr class=''> 
                                 <td id="centrado"><b>Nombre</b></td>
                                 <td id="centrado"><?php echo $row['nombre'] ?></td> 
                          </tr>
                          <tr class=''> 
                                 <td align="right" ><b>Apellido</b></td>
                                 <td id="centrado"><?php echo $row['apellido'] ?></td>           
                          </tr>
                          <tr class=''> 
                                 <td id="centrado"><b>Numero afiliado</b></td>
                                 <td id="centrado"><?php echo $row['numeroAfiliado'] ?></td>           
                          </tr>
                          <tr class=''> 
                                 <td id="centrado"><b>DNI</b></td>
                                 <td id="centrado"><?php echo $row['dni'] ?></td>           
                          </tr>
                          <tr class=''> 
                                 <td id="centrado"><b>Sexo</b></td>
                                 <td id="centrado"><?php echo $row['sexo'] ?></td>           
                          </tr>
                          <tr class=''> 
                                 <td id="centrado"><b>Edad</b></td>
                                 <td id="centrado"><?php echo $row['edad'] ?></td>           
                          </tr>
                          <tr class=''> 
                                 <td id="centrado"><b>Obra social</b></td>
                                 <td id="centrado"><?php echo $row['obraSocial'] ?></td>           
                          </tr>
                          <tr class=''> 
                                 <td id="centrado"><b>Fecha ingreso</b></td>
                                 <td id="centrado"><?php echo $row['fechaIngreso'] ?></td>           
                          </tr>
                          <tr class=''> 
                                 <td id="centrado"><b>Observaciones</b></td>
                                 <td id="centrado"><?php echo $row['observaciones'] ?></td>           
                          </tr>
                          <tr class=''> 
                                 <td id="centrado"><b>Cantidad RX</b></td>
                                 <td id="centrado"><?php echo $row['cantrx'] ?></td>           
                          </tr>
                          <tr class=''> 
                                 <td id="centrado"><b>Domicilio</b></td>
                                 <td id="centrado"><?php echo $row['dom'] ?></td>           
                          </tr>
                          <tr class=''> 
                                 <td id="centrado"><b>Localidad</b></td>
                                 <td id="centrado"><?php echo $row['localidad'] ?></td>           
                          </tr>
                          <tr class=''> 
                                 <td id="centrado"><b>Telefono</b></td>
                                 <td id="centrado"><?php echo $row['telefono'] ?></td>           
                          </tr>
                          <tr class=''> 
                                 <td id="centrado"><b>Celular</b></td>
                                 <td id="centrado"><?php echo $row['celular'] ?></td>           
                          </tr>
                          <tr class=''> 
                                 <td id="centrado"><b>E-mail</b></td>
                                 <td id="centrado"><?php echo $row['email'] ?></td>           
                          </tr>
                          <tr class=''> 
                                 <td id="centrado"><b>Tratamiento</b></td>
                                 <td id="centrado"><?php echo $row['tratamiento'] ?></td>           
                          </tr>
                           <tr class=''> 
                                 <td id="centrado"><b>Alergia</b></td>
                                 <td id="centrado"><?php echo $row['alergia'] ?></td>           
                          </tr>
                           <tr class=''> 
                                 <td id="centrado"><b>Cardiaco</b></td>
                                 <td id="centrado"><?php echo $row['cardiaco'] ?></td>           
                          </tr>
                           <tr class=''> 
                                 <td id="centrado"><b>Presion</b></td>
                                 <td id="centrado"><?php echo $row['presion'] ?></td>           
                          </tr>
                           <tr class=''> 
                                 <td id="centrado"><b>Epilepsia</b></td>
                                 <td id="centrado"><?php echo $row['epilepsia'] ?></td>           
                          </tr>
                           <tr class=''> 
                                 <td id="centrado"><b>Hepatitis</b></td>
                                 <td id="centrado"><?php echo $row['hepatitis'] ?></td>           
                          </tr>
                           <tr class=''> 
                                 <td id="centrado"><b>Diabetico</b></td>
                                 <td id="centrado"><?php echo $row['diabetico'] ?></td>           
                          </tr>
                           <tr class=''> 
                                 <td id="centrado"><b>Asma</b></td>
                                 <td id="centrado"><?php echo $row['asma'] ?></td>           
                          </tr>
                           <tr > 
                                 <td id="centrado" ><b>Ulceras</b></td>
                                 <td id="centrado"><?php echo $row['ulceras'] ?></td>           
                          </tr>
                           <tr class=''> 
                                 <td id="centrado"><b>HIV</b></td>
                                 <td id="centrado"><?php echo $row['hiv'] ?></td>           
                          </tr>
                          <?php }?> 
                          </tbody>
            </table>


        </div>   
       </div>
       
       
       
       
   </body>
</html>
