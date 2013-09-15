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
          <title>Nuevo paciente </title>
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
              <h3 align =" center">Agregar un paciente</h3>
              <hr>
                <form align="center"class="form-horizontal">
                    <fieldset>
                         <br>
                      <div class="span11" class="control-group">
                        <div class="controls">
                          <input type="text" id="nombre" name="nombre" placeholder="Ingrese Nombre" class="input-xlarge">  <br>  <br>
                        </div>
                      </div>
                       
               <!-- ------------------------------------>
                      <div class="span11" class="control-group">
                        <div class="controls">
                            <input type="text" id="apellido" name="apellido" placeholder="Ingrese Apellido" class="input-xlarge">  <br>  <br>
                        </div>
                      </div>
                           
              <!-- ------------------------------------>
                      <div class="span11" class="control-group">
                        <div class="controls">
                            <input type="text" id="dni" name="dni" placeholder="Ingrese DNI" class="input-xlarge">  <br> <br>
                        </div>
                      </div>
                           
         <!-- ------------------------------------>
                      <div class="span11" class="control-group">
                        <div class="controls"> 
                            <input type="text" id="sexo" name="sexo" placeholder="Ingrese Sexo" class="input-xlarge">    <br>   <br>
                        </div>
                      </div>
                          
                <!-- ------------------------------------>
                      <div class="span11" class="control-group">
                        <div class="controls">
                            <input type="text" id="edad" name="edad" placeholder="Ingrese Edad" class="input-xlarge">  <br> <br>
                        </div>
                      </div>
                            
                <!-- ------------------------------------>
                      <div class="span11" class="control-group">
                        <div class="controls">
                            <input type="text" id="obraSocial" name="obraSocial" placeholder="Ingrese Obra social" class="input-xlarge"> <br><br>
                        </div>
                      </div>
                             
                  <!-- ------------------------------------>
                      <div class="span11" class="control-group">
                        <div class="controls">
                            <input type="text" id="fechaIngreso" name="fechaIngreso" placeholder="Ingrese Fecha de hoy" class="input-xlarge"> <br><br>
                        </div>
                      </div>
                             
                 <!-- ------------------------------------>
                      <div class="span11" class="control-group">
                        <div class="controls">
                              <textarea name="observaciones" rows="10" cols="80" placeholder="Ingrese Observaciones"></textarea>
                              <br>  <br>
                        </div>
                      </div>
                       
             <!-- ------------------------------------>
                      <div class="span11" class="control-group">
                        <div class="controls">
                            <input type="text" id="cantrx" name="cantrx" placeholder="Ingrese Cantidad de radiografias" class="input-xlarge"> <br><br>
                        </div>
                      </div>
                             
                <!-- ------------------------------------>
                      <div class="span11" class="control-group">
                        <div class="controls">
                            <input type="text" id="dom" name="dom" placeholder="Ingrese Domicilio" class="input-xlarge">         <br>        <br>
                        </div>
                      </div>
                     
                        <!-- ------------------------------------>
                      <div class="span11" class="control-group">
                        <div class="controls">
                            <input type="text" id="localidad" name="localidad" placeholder="Ingrese Localidad" class="input-xlarge"> <br><br>
                        </div>
                      </div>
                                 
                        <!-- ------------------------------------>
                      <div class="span11" class="control-group">
                        <div class="controls">
                            <input type="text" id="telefono" name="telefono" placeholder="Ingrese Telefono" class="input-xlarge">    <br>   <br>
                        </div>
                      </div>
                          
                        <!-- ------------------------------------>
                      <div class="span11" class="control-group">
                        <div class="controls">
                            <input type="text" id="celular" name="celular" placeholder="Ingrese Celular" class="input-xlarge">      <br>     <br>
                        </div>
                      </div>
                    
                        <!-- ------------------------------------>
                     <div class="span11" class="control-group">
                        <div class="controls">
                            <input type="text" id="email" name="email" placeholder="Ingrese Email" class="input-xlarge">     <br>     <br>
                        </div>
                      </div>
                        <!-- ------------------------------------>
                      <div class="span11" class="control-group">
                        <div class="controls">
                            <textarea name="tratamiento" rows="10" cols="40" placeholder="Ingrese Tratamiento"></textarea>
                                 <br>     <br>
                        </div>
                      </div>
                        <!-- ------------------------------------>
                      <div class="span11" class="control-group">
                        <div class="controls">
                            <input type="text" id="alergia" name="alergia" placeholder="Alergia" class="input-xlarge">     <br>     <br>
                        </div>
                      </div>
                        <!-- ------------------------------------>
                      <div class="span11" class="control-group">
                        <div class="controls">
                          <label for="cardiaco"> Cardiaco </label><input id="cardiaco" type="checkbox">
                             <br>     <br>
                        </div>
                      </div>
                           <!-- ------------------------------------>
                      <div class="span11" class="control-group">
                        <div class="controls">
                            <input type="text" id="presion" name="presion" placeholder="Presion" class="input-xlarge">     <br>     <br>
                        </div>
                      </div>
                        <!-- ------------------------------------>
                      <div class="span11" class="control-group">
                        <div class="controls">
                          <label for="epilepsia">Epilepsia</label><input id="epilepsia" type="checkbox">
                        </div>
                      </div>
                          <!-- ------------------------------------>
                      <div class="span11" class="control-group">
                        <div class="controls">
                          <label for="hepatitis">Hepatitis</label><input id="hepatitis" type="checkbox">
                        </div>
                      </div>
                         <!-- ------------------------------------>
                     <div class="span11" class="control-group">
                        <div class="controls">
                          <label for="diabetico">Diabetico</label><input id="diabetico" type="checkbox">
                        </div>
                      </div>
                         <!-- ------------------------------------>
                     <div class="span11" class="control-group">
                        <div class="controls">
                          <label for="asma">ASMA</label><input id="asma" type="checkbox">
                        </div>
                      </div>
                         <!-- ------------------------------------>
                     <div class="span11" class="control-group">
                        <div class="controls">
                          <label for="ulceras">Ulceras</label><input id="ulceras" type="checkbox">
                        </div>
                      </div>
                          <!-- ------------------------------------>
                     <div class="span11" class="control-group">
                        <div class="controls">
                            <label for="hiv">HIV</label><input id="hiv" type="checkbox"> <br> <br> 
                        </div>
                      </div>
                    <div  class="span11" class="control-group">
                        <!-- Boton -->
                        <div class="controls">
                          <a class="btn btn-large btn-success">Agregar</a>
                          <a class="btn btn-large btn-primary">Cancelar </a>
                        </div>
                 </div>
                    </fieldset>
                </form>
              
            
              
              
              
              
              
              
              
              
              
              
   </body> 
</html>
