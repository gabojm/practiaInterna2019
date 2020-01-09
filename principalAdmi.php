
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta charset="ISO-8859-1">

  	<title>Practica interna</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css">
  	<link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/themes/default.css">
  	<link rel="stylesheet" type="text/css" href="../librerias/select2/css/select2.css">
    <link rel="stylesheet" type="text/css" href="cabecera.css">

  	<script src="../librerias/jquery-3.2.1.min.js"></script>
  	<script src="../js/funciones.js"></script>
  	<script src="../librerias/bootstrap/js/bootstrap.js"></script>
  	<script src="../librerias/alertifyjs/alertify.js"></script>
  	<script src="../librerias/select2/js/select2.js"></script>
  </head>
<body>
  <div id="cabecera" >
    <div class="row">
		<form method="get" action="editarUsuario.php">
			<button type="submit" class="btn btn-success">Editar Usuarios</button>
		</form>
    <form method="get" action="cerrarSesion.php">
			<button type="submit" class="btn btn-success">Cerrar Sesion</button>
		</form><br>

    </div>
    <div class="row">
			</div>
  </div>

    <br><br><br><br><br>
    <h1>Principal Administrador</h1>
    <br>
		<div class="container">
		<form method="get" action="crearUsuario.php">
			<button type="submit" class="btn btn-success">Crear Usuarios</button>
		</form><br>
		</div>


    <div class="row">
    	<div class="col-sm-12">

        <table class="table table-hover table-condensed table-bordered">
          <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Rol de Usuario</td>
            <td>Eliminar</td>
          </tr>
          <tr>
            <td>1</td>
            <td>admi</td>
            <td>Administrador</td>
            <td>
              <button class="btn btn-danger glyphicon glyphicon-remove"
              >

            </td>
          </tr>


          <?php
            if(isset($_SESSION['consultaAdmin'])){
              if($_SESSION['consultaAdmin'] > 0){
                $idp=$_SESSION['consultaAdmin'];
                $sql="SELECT id,admin,username,password
                from users where id='$idp'";
              }else{
                $sql="SELECT id,admin,username,password
                from users";
              }
            }else{
              $sql="SELECT id,admin,username,password
                from users";
            }

            $result=mysqli_query($conexion,$sql);
            while($ver=mysqli_fetch_row($result)){

              $datos=$ver[0]."||".
                   $ver[1]."||".
                   $ver[2]."||".
                   $ver[3];
           ?>

          <tr>
            //<td><?php echo $ver[0] ?></td>
            //<td><?php echo $ver[2] ?></td>
            <td>
              <button class="btn btn-danger glyphicon glyphicon-remove"
              onclick="preguntarSiNo('<?php echo $ver[0] ?>')">

              </button>
            </td>
          </tr>
          <?php
        }
           ?>
        </table>



</body>
</html>
