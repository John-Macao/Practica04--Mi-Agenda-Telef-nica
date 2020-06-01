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

    <input type="button" id="modificar" name="modificar" width="50px" height="50px" value="Modificar" onclick="location.href='modificar_info.php?id=<?php echo $usu_id?>'"> 
    <input type="button" id="agregar_telefonos" name="agregar_telefonos" value="Agregar telefonos" onclick="location.href='agregar_telefonos.php?id=<?php echo $usu_id?>'">
    <input type="button" id="listar_telefonos" name="listar_telefonos" value="Listar Telefonos" onclick="location.href='listar_telefonos.php?id=<?php echo $usu_id?>'">
    <input type="button" id="cerrar_sesion" name="cerrar_sesion" value="Cerrar Sesion" onclick="location.href='../../../config/cerrar_sesion.php'">
    
  </section>

</body>
</html>