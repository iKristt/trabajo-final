<?php
//arreglo con mensajes que puede recibir
$messages = [
    "1" => "Credenciales incorrectas",
    "2" => "No ha iniciado sesión"
];
?>
<!DOCTYPE html>
<html>
<head>
<title>Login | Registro de Notas</title>
    <meta name="description" content="SISTEMA ACADEMICO EUCLIDES" />
    <link rel="stylesheet" href="css/style.css" />

</head>
<body>
<div class="header" style="text-align:center">
        <h1>SISTEMA ACADEMICO "EUCLIDES"</h1>
</div>

<div class="body">
    <div class="panel-login">
            <center><img src="imagen/1.png" width="130px" heigth="130px" alt="">
            <h1>BIENVENIDO<h1>
            <h4>Inicie Sesión</h4></center>
            <form method="post" class="form" action="login_post.php">
                <label>Usuario</label><br>
                <input type="text" name="username">
                <br>
                <label>Contraseña</label><br>
                <input type="password" name="password">
                <br><br>
                <center><button type="submit">Entrar</button><center>
            </form>
        <?php
        if(isset($_GET['err']) && is_numeric($_GET['err']) && $_GET['err'] > 0 && $_GET['err'] < 3 )
            echo '<span class="error">'.$messages[$_GET['err']].'</span>';
        ?>
        </div>
</div>

<footer>
    <p>Derechos reservados &copy; 2023</p>
</footer>

</body>

</html>