<?php
    $codigo = $_GET["id"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Agenda</title>
    <link rel="stylesheet" type="text/css" href="../../css/usuario/diseno_agenda.css"/>
    <script type="text/javascript" src="../../javascript/funciones_agenda.js"></script>
</head>

<body onload="listarTodo(<?php echo $codigo?>)">
    <?php 
        session_start(); 
        
        if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] === FALSE){ 
            header("Location: ../../../public/vista/index.html"); 
        } 
    ?>

    <header>
        <a href="index.php?id=<?php echo $codigo ?>"><img id="logo_principal" src="../../images/logoP.png" alt="logo" width="220" height="180"></a>
    </header>

    <section id="listar_telefono" >
        <h2>Todos los telefonos</h2> 
        <div id="informacion2">
            <b></b>
        </div>
    </section>

</body>
</html>