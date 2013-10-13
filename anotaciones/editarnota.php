<?php 
include "../conectar.php" ;
$activo = "Anotaciones por mes";
$id = $_GET['id'];
$query = "SELECT * FROM anotacionesMes
					WHERE id = $id
					";
$result = mysql_query($query);
?>
<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="/SistemaOdonto/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/SistemaOdonto/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="/SistemaOdonto/js/bootstrap.min.js"></script>
          <!-- fin cosas de Bootstrap -->
          <title>Anotaciones  </title>
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
       <div class="container" >
       <!-- TABLA PARA MOSTRAR CONTENIDO (beta) -->
       <form action="notaeditada.php" method="POST">
         <table class="table table-bordered table-hover ">
            <thead>
              <tr>
                <th>MES</th>
                <th>NOTAS</th>
                <th>ACCIONES</th>
              </tr>
            </thead>
            <tbody>
            	<?php while ($row = mysql_fetch_array($result)) {?>
            	<tr>
            		<th><?php echo $row['mes']?></th>
            		<th><textarea name="nota"><?php echo $row['nota']?></textarea></th>
            		<th>
            			<input type="submit" value="guardar">
                  <input type="hidden" name="id" value="<?php echo $row['id'];?>">
            		</th>
            	</tr>
            	<?php }?>
            </tbody>
         </table>
         </form> 
         <a href="anotacionpormes.php">VOLVER</a>
       </div>

       

</html>