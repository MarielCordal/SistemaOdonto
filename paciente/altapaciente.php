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
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <script src="../js/jquery-1.9.1.js"></script>
        <script src="../js/bootstrap.min.js"></script>
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
       <div class="span4 offset4">
           <fieldset>
              <h3 >Agregar un paciente</h3>
                <form class="" id="formularioAltaPaciente" action="realizarAltaPaciente.php" method="GET">
                           <input type="text" id="nombre" name="nombre" placeholder="Ingrese Nombre"  onKeyUp="this.value=this.value.toUpperCase();" class="input-xlarge">  <br> 
          <!-- ------------------------------------>
                     
                            <input type="text" id="apellido" name="apellido" placeholder="Ingrese Apellido" onKeyUp="this.value=this.value.toUpperCase();"  class="input-xlarge">  <br>
               
                           <input type="text" id="numeroAfiliado" name="numeroAfiliado" placeholder="Ingrese numero de afiliado" onKeyUp="this.value=this.value.toUpperCase();"  class="input-xlarge">  <br>

                            <input type="text" id="dni" name="dni" placeholder="Ingrese DNI"  class="input-xlarge">  <br> 
                    
         
                            <select class="span3" name="sexo">
                            <option value="m" >Masculino</option>
                            <option value="f" >Femenino</option>
                            </select> <br> 
             
    
                            <input type="text" id="edad" name="edad" placeholder="Ingrese Edad"  class="input-xlarge">  <br>
                    
                 
                              <input type="text" id="obraSocial" name="obraSocial" placeholder="Ingrese Obra social"  onKeyUp="this.value=this.value.toUpperCase();" class="input-xlarge"> <br>
                  
                             <input name="fechaIngreso" type="text" class="span3" id="fechaingreso" placeholder="Ingrese Fecha de hoy" value="<?php echo date("j/m/Y")?>"  > <br>
                   
                 
                            
                            <label>Observaciones</label>
                            
                                <textarea style="resize:none"name="observaciones" id="observaciones" class="input-xlarge span3" rows="10"></textarea>
                                 <br>  
                
             
                            <input type="text" id="cantrx" name="cantrx" placeholder="Ingrese Cantidad de radiografias"  class="input-xlarge"> <br>
                      
                
                
                            <input type="text" id="dom" name="dom" placeholder="Ingrese Domicilio"  class="input-xlarge">         <br>
                  
                     
               
                            <input type="text" id="localidad" name="localidad" placeholder="Ingrese Localidad"  onKeyUp="this.value=this.value.toUpperCase();" class="input-xlarge"><br>
                         
                      
                            <input type="text" id="telefono" name="telefono" placeholder="Ingrese Telefono"  class="input-xlarge">      <br>
                    
               
                            <input type="text" id="celular" name="celular" placeholder="Ingrese Celular"  class="input-xlarge">        <br>
                     
                         
 
                            <input type="text" id="email" name="email" placeholder="Ingrese Email"    class="input-xlarge">     <br>     
                       
                         
                            <label>Tratamiento</label>
                            
                                <textarea style="resize:none"name="tratamiento" id="tratamiento" class="input-xlarge span3" rows="10"></textarea>
                                 <br>  
                                                                          
                         
                   
                            <input type="text" id="alergia" name="alergia" placeholder="Alergia"  class="input-xlarge">     <br>   
                   
                         
                             <div class="control-group"> 
                                  <label class="control-label" for="cardiaco">CARDíACO</label>
                                  <div class="controls">
                                    <label class="radio inline" for="cardiaco-0">
                                      <input type="radio" name="cardiaco" id="cardiaco-0" value="1" >
                                      si     
                                    </label>
                                    <label class="radio inline" for="cardiaco-1">
                                      <input type="radio" name="cardiaco" id="cardiaco-1" value="0" >
                                      no
                                    </label>
                                  </div>
                             </div>
                       
                          
                           <label>Presión</label>
                            <select class="span3" name="presion">
                            <option value="baja" >Baja</option>
                            <option value="normal" >Normal</option>
                            <option value="alta" >Alta</option>
                        </select> 
                             <br> 
                     
                         
                            <div class="control-group">
                                  <label class="control-label" for="epilepsia">EPILEPSIA</label>
                                  <div class="controls">
                                    <label class="radio inline" for="epilepsia-0">
                                      <input type="radio" name="epilepsia" id="epilepsia-0" value="1" >
                                      si
                                    </label>
                                    <label class="radio inline" for="epilepsia-1">
                                      <input type="radio" name="epilepsia" id="epilepsia-1" value="0" >
                                      no
                                    </label>
                                  </div>
                                </div>
                                              
                           
                           <div class="control-group">
                                  <label class="control-label" for="hepatitis">HEPATITIS</label>
                                  <div class="controls">
                                    <label class="radio inline" for="hepatitis-0">
                                      <input type="radio" name="hepatitis" id="hepatitis-0" value="1" >
                                      si
                                    </label>
                                    <label class="radio inline" for="hepatitis-1">
                                      <input type="radio" name="hepatitis" id="hepatitis-1" value="0" >
                                      no
                                    </label>
                                  </div>
                                </div>
                        
         
                          <div class="control-group">
                                  <label class="control-label" for="diabetico">DIABÉTICO</label>
                                  <div class="controls">
                                    <label class="radio inline" for="diabetico-0">
                                      <input type="radio" name="diabetico" id="diabetico-0" value="1">
                                      si
                                    </label>
                                    <label class="radio inline" for="diabetico-1">
                                      <input type="radio" name="diabetico" id="diabetico-1" value="0" >
                                      no
                                    </label>
                                  </div>
                           </div> 
                   
                          
                           <div class="control-group">
                                  <label class="control-label" for="asma">ASMA</label>
                                  <div class="controls">
                                    <label class="radio inline" for="asma-0">
                                      <input type="radio" name="asma" id="asma-0" value="1" >
                                      si
                                    </label>
                                    <label class="radio inline" for="asma-1">
                                      <input type="radio" name="asma" id="asma-1" value="0">
                                      no
                                    </label>
                                  </div>
                           </div>
                                                
                        
                            <div class="control-group">
                                  <label class="control-label" for="ulceras">ÚLCERAS</label>
                                  <div class="controls">
                                    <label class="radio inline" for="ulceras-0">
                                      <input type="radio" name="ulceras" id="ulceras-0" value="1" >
                                      si
                                    </label>
                                    <label class="radio inline" for="ulceras-1">
                                      <input type="radio" name="ulceras" id="ulceras-1" value="0" >
                                      no
                                    </label>
                                  </div>
                                </div>
                                                 
                           
                              <div class="control-group">
                                  <label class="control-label" for="hiv">HIV</label>
                                  <div class="controls">
                                    <label class="radio inline " for="hiv-0">
                                      <input type="radio" name="hiv" id="hiv-0" value="1" >
                                      si
                                    </label>
                                    <label class="radio inline" for="hiv-1">
                                      <input type="radio" name="hiv" id="hiv-1" value="0" >
                                      no
                                    </label>
                                  </div>
                                </div>
                     
                      
                    <div  class="span11" class="control-group">
                         
                        <div class="controls">
                          <a href='#' id="botonalta" class="btn btn-large btn-success" onclick="formularioAltaPaciente.submit();">Agregar</a>
                          <a class="btn btn-large btn-primary" href='busquedapaciente.php'>Cancelar </a>
                        </div>
                 </div>
                          
                    
                </form>
              </fieldset>
            </div>      
   </body> 
</html>
