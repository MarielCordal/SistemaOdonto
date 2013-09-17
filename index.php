<!DOCTYPE html>
<html>
    <?php include "conectar.php"; include "varGlobales.php" ?> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <script src="js/jquery-1.9.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <title>OdontSystem</title>
        <!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <style type="text/css"> 
        body { 
            background: #00ae68;
            background-repeat: repeat;
            padding-top: 90px ;
        } 
    </style>
    </head>
    <!-- ||||||||||||||||||||| Fin HEAD ||||||||||||||||||||||||||||||-->
    <body>
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
      <div class="container">
        <div class="hero-unit">
          <h2>Bienvenido a Sistema de historias clinicas</h2>
          <p>¿Que operación desea realizar?</p>
          <div class="row">
            <div class="span-4"><a href="paciente/busquedapaciente.php" class="btn btn-large btn-sample">Buscar Paciente <i class="icon-search icon-white"></i></a></div>
            <div class="span-4"><a href="paciente/altapaciente.php" class="btn btn-large btn-sample">Nuevo Paciente <i class="icon-plus icon-white"></i></a></div>
          </div>    
        </div>
      </div>
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->           
    </body>
</html>