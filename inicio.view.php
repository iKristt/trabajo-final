<!DOCTYPE html>
<?php
require 'functions.php';
$permisos = ['Administrador','Profesor','Padre'];
permisos($permisos);

?>
<html>
<head>
<title>Inicio | Registro de Notas</title>
    <meta name="description" content="SISTEMA ACADEMICO EUCLIDES" />
    <link rel="stylesheet" href="css/style.css" />

</head>
<body>
<div class="header" style="text-align:center">
        <h1>SISTEMA ACADEMICO "EUCLIDES"</h1>
        <h3>Usuario:  <?php echo $_SESSION["username"] ?></h3>
</div>
<nav>
    <ul>
        <li class="active"><a href="inicio.view.php">Inicio</a> </li>
        <li><a href="alumnos.view.php">Registro de Alumnos</a> </li>
        <li><a href="listadoalumnos.view.php">Listado de Alumnos</a> </li>
        <li><a href="notas.view.php">Registro de Notas</a> </li>
        <li><a href="listadonotas.view.php">Consulta de Notas</a> </li>
        <li class="right"><a href="logout.php">Salir</a> </li>

    </ul>
</nav>

<div class="body">
    <div class="panel">
           <h1 class="text-center">SISTEMA ACADEMICO</h1>
           <center><img src="imagen/1.png" width="170px" heigth="170px" alt="">
        <?php
        if(isset($_GET['err'])){
            echo '<h3 class="error text-center">ERROR: Usuario no autorizado</h3>';
        }
        ?>
        <br>
        <hr>
        <p class="text-center"><strong>Educacion de calidad con formación integral</strong><br><br>"Ser Euclidiano es un Honor"<br></p>
        <br>
        </div>
</div>

<footer>

    <p>Derechos reservados &copy; 2023</p>
</footer>

</body>

</html>