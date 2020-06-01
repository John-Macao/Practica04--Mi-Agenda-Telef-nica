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

    <section id="agregar_telefono">

        <form id="form2" method="POST" onsubmit="return validacion()" action="../../controladores/usuario/agregar_telefono.php">
            <h2>Agregar Telefonos</h2>

            <input type="hidden" id="id" name="id" value="<?php echo $codigo ?>" /> 

            <label id="label_tel" for="telf">Telefono: </label>
            <input type="text" id="telf" name="telf" onkeyup="return noLetras(this), verificarDT(this, 'mtelefono',0)"/>
            <span id="mtelefono" class="error"></span>
            
            <select name="oper" id="oper">
                <option value="claro" selected>Claro</option>
                <option value="movistar">Movistar</option>
                <option value="tuenti">Tuenti</option>
                <option value="cnt">CNT</option>
            </select>

            <select name="tip" id="tip">
                <option value="celular" selected>Celular</option>
                <option value="convencional">Convencional</option>
            </select>

            <input id="agregar" type="submit" value="Agregar"/>
            <input id="cancelar" type="button" value="Cancelar" onclick="location.href='index.php?id=<?php echo $codigo?>'">
        
</body>
</html>