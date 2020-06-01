<!DOCTYPE html>

<html lang="es">
<head>
  <meta charset="utf-8"/>
  <title>Perfil</title>
  <link rel="stylesheet" type="text/css" href="../../css/usuario/diseno_index.css">
</head>

<body>
  <?php 
    session_start(); 
    
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] === FALSE){ 
      header("Location: ../../../public/vista/index.html"); 
    } 
  ?>

  <?php
    $usu_id = $_GET["id"];
  ?>

  <header>
    <img id="logo_principal" src="../../images/logoP.png" alt="logo" width="220" height="180">


  </header>

  <section>
    <h1>Agenda Telefonica</h1>

    <input type="button" id="modificar_usu" name="modificar_usu" width="50px" height="50px" value="Modificar Informacion" onclick="location.href='modificar_info.php?id=<?php echo $usu_id?>'"> 
    <input type="button" id="cambiar_contra" name="cambiar_contra" value="Agregar telefonos" onclick="location.href='cambiar_contrasena.php?id=<?php echo $usu_id?>'">
    <input type="button" id="agenda" name="agenda" value="Listar Telefonos" onclick="location.href='agenda.php?id=<?php echo $usu_id?>'">
    <input type="button" id="cerrar_sesion" name="cerrar_sesion" value="Cerrar Sesion" onclick="location.href='../../../config/cerrar_sesion.php'">
    <input id="eliminar" type="button" value="Eliminar" onclick= "location.href='../../controladores/usuario/eliminar_usuario.php?id=<?php echo $codigo ?>'"/>
  </section>

</body>
</html>