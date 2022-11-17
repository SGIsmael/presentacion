<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ismael Sánchez González</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/main.css'>
    <script src='../js/cliente.js'></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.php" class="menuNoSeleccionado">Presentación</a></li>
                <li><a href="tecnology.php" class="menuNoSeleccionado">Tecnologías</a></li>
                <li><a href="blog.php" class="menuNoSeleccionado">Blog</a></li>
                <li><a href="" class="menuSeleccionado">Contacto</a></li>
            </ul>
        <nav>
    </header>
    <main>
        <div>
            <form name="formularioContacto" action="" method="post">
                <label for="empresa">Empresa:</label><input type="text" name="nombreEmpresa" ><br/>
                <label for="correo">Correo:</label><input type="email" name="correoEmpresa" ><br/>
                <button name="buttonForm" onmouseover="dale();">Enviar</button>
            </form>
        </div>
    </main>
</body>
</html>