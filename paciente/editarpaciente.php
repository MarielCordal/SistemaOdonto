<?php
include "../conectar.php" ;
$activo = "paciente";
$idPaciente = $_GET['id'];
$query1 = "SELECT * FROM paciente WHERE id = $idPaciente";
$result = mysql_query($query1);
?>
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
          <!-- fin cosas de Bootstrap -->
          <title>Editar paciente </title>
          <style type="text/css"> 
        body { 
            background:#FFFFFF;
            background-repeat: repeat;
            padding-top:90px;
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
       <div class="container" align="center">
           <div class="span4 offset4">
               <fieldset>
                   <h3>Modificar Paciente</h3>
                    <?php while ($row = mysql_fetch_array($result)){?>
                    <form class="" id="formularioEditarPaciente" action="realizarModificarPaciente.php" method="GET">
                        
                         <div class="control-group">
                            <label class="control-label" for="nombre">Modificar Nombre</label>
                            <div class="controls">
                            <input id="nombre" type="text" name="nombre" placeholder="Nombre" onKeyUp="this.value=this.value.toUpperCase(); "autocomplete="off"value="<?php echo $row['nombre']?>">
                            </div>
                        </div>
                         <div class="control-group">
                            <label class="control-label" for="apellido">Modificar Apellido</label>
                            <div class="controls">
                            <input id="apellido" type="text" name="apellido" placeholder="Apellido" onKeyUp="this.value=this.value.toUpperCase(); "autocomplete="off"value="<?php echo $row['apellido']?>">
                            </div>
                        </div>
                        <div class="control-group">
                             <label class="control-label" for="dni">Modificar Numero de afiliado</label>
                            <div class="controls">
                            <input id="numeroAfiliado" type="text" name="numeroAfiliado" placeholder="numeroAfiliado" autocomplete="off" value="<?php echo $row['numeroAfiliado']?>">
                            </div>
                        </div>
                         <div class="control-group">
                             <label class="control-label" for="dni">Modificar DNI</label>
                            <div class="controls">
                            <input id="dni" type="text" name="dni" placeholder="DNI" autocomplete="off" value="<?php echo $row['dni']?>">
                            </div>
                        </div>
                        <div class="control-group">
                             <label class="control-label" for="dni">Modificar Sexo</label>
                            <div class="controls">
                            <input id="sexo" type="text" name="sexo" placeholder="Sexo" autocomplete="off" value="<?php echo $row['sexo']?>">
                            </div>
                        </div>
                        <div class="control-group">
                             <label class="control-label" for="dni">Modificar Edad</label>
                            <div class="controls">
                            <input id="edad" type="text" name="edad" placeholder="edad" autocomplete="off" value="<?php echo $row['edad']?>">
                            </div>
                        </div>
                        <div class="control-group">
                             <label class="control-label" for="dni">Modificar Obra Social</label>
                            <div class="controls">
                            <input id="obraSocial" type="text" name="obraSocial" placeholder="obraSocial" autocomplete="off" value="<?php echo $row['obraSocial']?>">
                            </div>
                        </div>
                        
                        <div class="control-group">
                             <label class="control-label" for="dni">Modificar Fecha de Ingreso</label>
                            <div class="controls">
                            <input id="fechaIngreso" type="text" name="fe"chaIngreso placeholder="fecha de ingreso" autocomplete="off" value="<?php echo $row['fechaIngreso']?>">
                            </div>
                        </div>
                        
                         <div class="control-group">
                             <label class="control-label" for="dni">Modificar Observaciones</label>
                            <div class="controls">
                            <input id="observaciones" type="text" name="observaciones" placeholder="Observaciones" autocomplete="off" value="<?php echo $row['observaciones']?>">
                            </div>
                        </div>
                        
                         <div class="control-group">
                             <label class="control-label" for="dni">Modificar CantRX</label>
                            <div class="controls">
                            <input id="cantrx" type="text" name="cantrx" placeholder="cantidad de RX" autocomplete="off" value="<?php echo $row['cantrx']?>">
                            </div>
                        </div>
                        
                         <div class="control-group">
                             <label class="control-label" for="dni">Modificar Domicilio</label>
                            <div class="controls">
                            <input id="dom" type="text" name="dom" placeholder="Domicilio" autocomplete="off" value="<?php echo $row['dom']?>">
                            </div>
                        </div>
                        
                        <div class="control-group">
                             <label class="control-label" for="dni">Modificar Localidad</label>
                            <div class="controls">
                            <input id="localidad" type="text" name="localidad" placeholder="Localidad" autocomplete="off" value="<?php echo $row['localidad']?>">
                            </div>
                        </div>
                        
                        <div class="control-group">
                             <label class="control-label" for="dni">Modificar Telefono </label>
                            <div class="controls">
                            <input id="telefono" type="text" name="telefono" placeholder="Telefono" autocomplete="off" value="<?php echo $row['telefono']?>">
                            </div>
                        </div>
                        
                         <div class="control-group">
                             <label class="control-label" for="dni">Modificar Celular</label>
                            <div class="controls">
                            <input id="celular" type="text" name="celular" placeholder="Celular" autocomplete="off" value="<?php echo $row['celular']?>">
                            </div>
                        </div>
                        
                         <div class="control-group">
                             <label class="control-label" for="dni">Modificar E-mail</label>
                            <div class="controls">
                            <input id="email" type="text" name="email" placeholder="E-mail" autocomplete="off" value="<?php echo $row['email']?>">
                            </div>
                        </div>  
                        
                        <div class="control-group">
                             <label class="control-label" for="dni">Modificar Tratamiento</label>
                            <div class="controls">
                            <input id="tratamiento" type="text" name="tratamiento" placeholder="Tratamiento" autocomplete="off" value="<?php echo $row['tratamiento']?>">
                            </div>
                        </div>
                        
                    </form>
                    <?php } ?>  
               </fieldset>
               
           </div>
           
       </div>
       
       
       
       
</body> 
</html>
      