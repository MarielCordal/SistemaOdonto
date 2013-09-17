<?php 
include "../conectar.php" ;
$activo = "paciente"?>

<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <script src="../js/jquery-1.9.1.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/scripts.js"></script>
        <!-- fin cosas de Bootstrap -->
          <title>Pacientes </title>
          <style type="text/css"> 
        body { 
            background: #36D695;
            background-repeat: repeat;
            padding-top: 90px ;
        } 
        </style>
   </head>
 
   <body> 
       <!-- aca van las cosas de la barra --> 
   <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
           <div class="container">
            <a class="brand" href="/SistemaOdonto/index.php">Historias clinicas  </a>
            <ul class="nav">
                <li class="<?php echo ($activo == "paciente") ? 'active' : ''; ?>"><a href="/SistemaOdonto/paciente/busquedapaciente.php">Pacientes</a></li>
                <li class="<?php echo ($activo == "Anotaciones por mes") ? 'active' : ''; ?>"><a href="/SistemaOdonto/anotaciones/anotacionpormes.php">Anotaciones por mes</a></li>
            </ul>
           </div>
        </div>
   </div>
       <!-- fin de la  barra -->
       <div class="container" >
              <h2 >  Buscar Pacientes</h2>             
             <div class="row">
                     <div class="span10">
                         
                     </div>
                        <a class="btn btn-info"href="/SistemaOdonto/paciente/altapaciente.php">agregar nuevo paciente <i class="icon-plus icon-white"></i></a>
             </div>
              <hr >
               <!--buscador -->
               <h4 class="text-info">Buscador: </h4>
               <form class="form-search" action="busquedapaciente.php" method="GET" id="formBusqueda">
                    <?php $queryOS = "SELECT * FROM paciente WHERE  eliminado=0";
                          $resultado = mysql_query($queryOS);      
                    ?>
                    <fieldset>
    <!--                    <legend>Buscar</legend>-->
                        <input type="text" placeholder="Nombre" class="span2 search-query" id ="nombre" name="nombre" onKeyUp="this.value=this.value.toUpperCase();">
                        <input type="text" placeholder="Apellido" class="span2 search-query" id ="apellido" name="apellido" onKeyUp="this.value=this.value.toUpperCase();">
                        <input type="text" id="obraSocial" name="obraSocial" placeholder="Obra social" class="span2 search-query" >
                        <input type="text" id="numeroAfiliado" name="numeroAfiliado" placeholder="Numero afiliado" class="span2 search-query" autocomplete="off" onKeyUp="this.value=this.value.toUpperCase();">
                        <input type="text" id="dni" name="dni" placeholder="DNI" class="span2 search-query" autocomplete="off" onKeyUp="this.value=this.value.toUpperCase();">
                        
                        <a class="btn btn-info btn-primary" id="botonBuscar" href="#"> <i class="icon-search icon-white"></i>Buscar Paciente </a>
                    </fieldset>
               </form>
               <hr>
               
               <!--fin de buscador-->
               <!--empieza la tabla-->
                    <div class="span11">

                        <table id="tabla" class="table table-bordered table-hover " >
                            <thead>
                                <tr>
                                <th id="centrado" class="span8">Nombre</th>
                                <th id="centrado" class="span8">Apellido</th>
                                <th id="centrado" class="span8">Dni</th>
                                <th id="centrado" class="span8">Num afiliado</th>   
                                <th id="centrado" class="span8">Obra social</th>
                                <th id="centrado" class="span8">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                 
                              <?php
                                $consulta = "SELECT * ".$campoOSid."
                                             FROM paciente as pac
                                             WHERE pac.eliminado = 0"; 
                             
                                             
                               $resultado= mysql_query($consulta);     
                                while ($row = mysql_fetch_array($resultado) or die(mysql_error())){
                               ?>  
                                <tr class=''> 
                                    <td id="centrado"><?php echo $row['nombre'] ?></td>

                                    <td id="centrado"><?php echo $row['apellido'] ?></td> 
                                    <td id="centrado"><?php echo $row['dni']?></td> 
                                    <td id="centrado"><?php echo $row['numeroAfiliado'] ?></td>
                                    <td id="centrado"><?php echo $row['obraSocial'] ?></td>
                                   
                                    <td id="centrado">
                                        <a href="verdetallepaciente.php?id=<?php echo $row['id']?>" class="btn btn-primary btn-mini"><i class="icon-white icon-plus"></i> Ver detalles</a> 
                                        <a href="editarpaciente.php?id=<?php echo $row['id']?>" class="btn btn-success btn-mini"><i class="icon-white icon-pencil"></i> Modificar</a>
                                        <a href="borrarpaciente.php?id=<?php echo $row['id']?>" id="borrar" class="btn btn-danger btn-mini"><i class="icon-white icon-remove"></i>Borrar</a>
                                        
                                    </td>
                                   
                                </tr>
                             <?php }?>   
                            </tbody>
                            

                        </table>             
                      </div>
                      <!--fin de la tabla-->
        
        </div>
 
   </body>
   
   
 </html>
    



