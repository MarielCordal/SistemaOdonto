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

       <!-- CUERPO DE LA PAGINA -->
       <?php while ($row = mysql_fetch_array($result)){?>
       <div class="container" align="center">
        <h2>Modificar datos de un paciente</h2>
            <form class="well span8" id="formularioEditarPaciente" action="modificarpaciente.php" method="GET">

              <div class="row">
                <h3>Datos personales</h3>
                    <div class="span4"> <!-- COLUMNA 1-->
                        <label>DNI</label>
                        <input name="dni" type="text" class="span3" value="<?php echo $row['dni']?>">
                        <label>Nombre</label>
                        <input name="nombre" type="text" class="span3" value="<?php echo $row['nombre']?>" onKeyUp="this.value=this.value.toUpperCase();">
                        <label>Apellido</label>
                        <input name="apellido" type="text" class="span3" value="<?php echo $row['apellido']?>" onKeyUp="this.value=this.value.toUpperCase();">      
                        <label>Número de Afiliado</label>
                        <input name="numeroAfiliado" type="text" class="span3" value="<?php echo $row['numeroAfiliado']?>">
                        <label>Sexo</label>
                        <select class="span3" name="sexo">
                            <option value="m" <?php if($row['sexo'] == "m") echo "selected" ?>>Masculino</option>
                            <option value="f" <?php if($row['sexo'] == "f") echo "selected" ?>>Femenino</option>
                        </select>
                        <label>Edad</label>
                        <input name="edad" type="text" class="span3" value="<?php echo $row['edad']?>">
                        
                        <label>Fecha de Ingreso</label>
                        <input name="fechaIngreso" type="text" class="span3" value="<?php echo $row['fechaIngreso']?>">
                        
                    </div>
                    <div class="span4"> <!-- COLUMNA 2-->
                        <label>Obra Social</label>
                        <input name="obraSocial" type="text" class="span3" value="<?php echo $row['obraSocial']?>" onKeyUp="this.value=this.value.toUpperCase();">
                        <label>Domicilio</label>
                        <input name="dom" type="text" class="span3" value="<?php echo $row['dom']?>" >
                        <label>Localidad</label>
                        <input name="localidad" type="text" class="span3" value="<?php echo $row['localidad']?>" onKeyUp="this.value=this.value.toUpperCase();">
                        <label>Teléfono fijo</label >
                        <input name="telefono" type="text" class="span3" value="<?php echo $row['telefono']?>">
                        <label>Celular</label>
                        <input name="celular" type="text" class="span3" value="<?php echo $row['celular']?>">
                        <label>Email</label>
                        <input name="email" type="text" class="span3" value="<?php echo $row['email']?>">
                        
                    </div>
                </div>

                <hr>
                <div class="row" >
                    <h3>Datos Médicos</h3>
                    <div class ="span4">
                        <label>Cantidad de Rayos X</label>
                        <input name="cantrx" type="text" class="span3" value="<?php echo $row['cantrx']?>">
                        <label>Tratamiento</label>
                        <input name="tratamiento" type="text" class="span3" value="<?php echo $row['tratamiento']?>">
                        <label>Alergias</label>
                        <input name="alergia" type="text" class="span3" value="<?php echo $row['alergia']?>">
                        <label>Presión</label>
                        <select class="span3" name="presion">
                            <option value="baja" <?php if($row['presion'] == "baja") echo "selected" ?>>Baja</option>
                            <option value="normal" <?php if($row['presion'] == "normal") echo "selected" ?>>Normal</option>
                            <option value="alta" <?php if($row['presion'] == "alta") echo "selected" ?>>Alta</option>
                        </select> 
                    </div>
                        

                    <div class ="span4">
                        <div class="row">
                            <div class="span2">
                                <!-- cardíaco -->
                                <div class="control-group"> 
                                  <label class="control-label" for="cardiaco">CARDíACO</label>
                                  <div class="controls">
                                    <label class="radio inline" for="cardiaco-0">
                                      <input type="radio" name="cardiaco" id="cardiaco-0" value="1" <?php if ($row['cardiaco'] == 1) echo "checked='checked'"?>>
                                      si     
                                    </label>
                                    <label class="radio inline" for="cardiaco-1">
                                      <input type="radio" name="cardiaco" id="cardiaco-1" value="0" <?php if ($row['cardiaco'] == 0) echo "checked='checked'"?>>
                                      no
                                    </label>
                                  </div>
                                </div>
                                <!-- epilepsia -->
                                <div class="control-group">
                                  <label class="control-label" for="epilepsia">EPILEPSIA</label>
                                  <div class="controls">
                                    <label class="radio inline" for="epilepsia-0">
                                      <input type="radio" name="epilepsia" id="epilepsia-0" value="1" <?php if ($row['epilepsia'] == 1) echo "checked='checked'"?>>
                                      si
                                    </label>
                                    <label class="radio inline" for="epilepsia-1">
                                      <input type="radio" name="epilepsia" id="epilepsia-1" value="0" <?php if ($row['epilepsia'] == 0) echo "checked='checked'"?>>
                                      no
                                    </label>
                                  </div>
                                </div>
                                <!-- hepatitis -->
                                <div class="control-group">
                                  <label class="control-label" for="hepatitis">HEPATITIS</label>
                                  <div class="controls">
                                    <label class="radio inline" for="hepatitis-0">
                                      <input type="radio" name="hepatitis" id="hepatitis-0" value="1" <?php if ($row['hepatitis'] == 1) echo "checked='checked'"?>>
                                      si
                                    </label>
                                    <label class="radio inline" for="hepatitis-1">
                                      <input type="radio" name="hepatitis" id="hepatitis-1" value="0" <?php if ($row['hepatitis'] == 0) echo "checked='checked'"?>>
                                      no
                                    </label>
                                  </div>
                                </div>
                                <!-- diabético -->
                                <div class="control-group">
                                  <label class="control-label" for="diabetico">DIABÉTICO</label>
                                  <div class="controls">
                                    <label class="radio inline" for="diabetico-0">
                                      <input type="radio" name="diabetico" id="diabetico-0" value="1" <?php if ($row['diabetico'] == 1) echo "checked='checked'"?>>
                                      si
                                    </label>
                                    <label class="radio inline" for="diabetico-1">
                                      <input type="radio" name="diabetico" id="diabetico-1" value="0" <?php if ($row['diabetico'] == 0) echo "checked='checked'"?>>
                                      no
                                    </label>
                                  </div>
                                </div>   

                            </div>
                            
                            <div class="span2">
                                <!-- Asma -->
                                <div class="control-group">
                                  <label class="control-label" for="asma">ASMA</label>
                                  <div class="controls">
                                    <label class="radio inline" for="asma-0">
                                      <input type="radio" name="asma" id="asma-0" value="1" <?php if ($row['asma'] == 1) echo "checked='checked'"?>>
                                      si
                                    </label>
                                    <label class="radio inline" for="asma-1">
                                      <input type="radio" name="asma" id="asma-1" value="0" <?php if ($row['asma'] == 0) echo "checked='checked'"?>>
                                      no
                                    </label>
                                  </div>
                                </div>
                                <!-- Úlceras -->
                                <div class="control-group">
                                  <label class="control-label" for="ulceras">ÚLCERAS</label>
                                  <div class="controls">
                                    <label class="radio inline" for="ulceras-0">
                                      <input type="radio" name="ulceras" id="ulceras-0" value="1" <?php if ($row['ulceras'] == 1) echo "checked='checked'"?>>
                                      si
                                    </label>
                                    <label class="radio inline" for="ulceras-1">
                                      <input type="radio" name="ulceras" id="ulceras-1" value="0" <?php if ($row['ulceras'] == 0) echo "checked='checked'"?>>
                                      no
                                    </label>
                                  </div>
                                </div>
                                <!-- HIV -->
                                <div class="control-group">
                                  <label class="control-label" for="hiv">HIV</label>
                                  <div class="controls">
                                    <label class="radio inline " for="hiv-0">
                                      <input type="radio" name="hiv" id="hiv-0" value="1" <?php if ($row['hiv'] == 1) echo "checked='checked'"?>>
                                      si
                                    </label>
                                    <label class="radio inline" for="hiv-1">
                                      <input type="radio" name="hiv" id="hiv-1" value="0" <?php if ($row['hiv'] == 0) echo "checked='checked'"?>>
                                      no
                                    </label>
                                  </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <hr>
                <div class="row"> <!--TERCERA FILA-->
                    <h3>Observaciones</h3>
                    <div class="span8">
                        <textarea style="resize:none"name="observaciones" id="observaciones" class="input-xlarge span8" rows="10"><?php echo $row['observaciones']?></textarea>
                    </div>
                </div>
                <a href="#" id="botonmodificar" class="btn btn-large btn-success" onclick="formularioEditarPaciente.submit();">Guardar</a>
                <a href='busquedapaciente.php' class="btn btn-large btn-primary" >Cancelar </a>
                <input type="hidden" name="idPaciente" value="<?php echo $idPaciente ?>">
            </form>           



        <br><br>
        <!-- ################ ACA VA LO DE MARI ########################### -->
             
                        <!-- Boton -->
                      
                         <?php } ?>
                    
           </div> 
</body> 
</html>
      