<!DOCTYPE html>
<html>
<head>
    <title>Pagina Inicio Pasteleria</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
    <script>
        include_once('conexionRegistrar.php');

    </script>
</head>
<body>
    <h1 class="titulo">Pasteleria</h1>
    <ul>
        <li><a  href="../scripts/index.html">Pagina Principal</a></li>
        <li><a href="http://localhost/proyecto_pasteles/scripts/compra.php">Compra</a></li>
        <li><a class="active" href="#registrar">Registrar</a></li>
        <li><a href="http://localhost/proyecto_pasteles/scripts/consultas.php">Cosultas</a></li>
    </ul>

    <form action="conexionRegistrar.php" method="post">
        <div class="cen">
            <h2 class="subtitulo">Registro de nuevo cliente</h2>
            <br>
            <p>Ingrese un numero que sera su clave de cliente</p>
            <input type="text" name="txtClaveCliente" maxlenght="45" />
            <p>Ingrese su nombre completo</p>
            <input type="text" name="txtNombreCliente" maxlenght="45" />
            <p>Ingrese su numero de telefono</p>
            <input type="text" name="txtTelefono" maxlenght="45" />
            <br><br>
            <input class="boton" type="submit" name="btnEnviar" value="ENVIAR">
        </div>
    </form>
    
</body>
</html>