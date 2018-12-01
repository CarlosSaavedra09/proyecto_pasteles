<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pasteleria</title>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
</head>
<body>
<H1 class="title inflo">Pasteleria</H1>
<ul class="barra">
    <li class="center nav-item active">
        <a class="nav-link" href="index.html">Menu principal</a>
    </li>
    <li class="center nav-item">
        <a class="nav-link" href="http://localhost/proyecto_pasteles/comprar.php">Comprar</a>
    </li>
    <li class="center nav-item">
        <a class="nav-link" href="#active">Registrar</a>
    </li>
    <li class="center nav-item">
        <a class="nav-link" href="http://localhost/proyecto_pasteles/consultar.php">Consultar</a>
    </li>
</ul>
<form id="email" action="conexionReClientes.php" method="post" name="email">
    
    <div>
        <h1 class="titulo">Registro</h1>
        <label for="num_cliente">Numero cliente</label>
        <input id="num_cliente" name="num_cliente" size="35" type="text" value="" />
        <br>
        <label for="nomb_cliente">Nombre</label>
        <input id="nomb_cliente" name="nomb_cliente" size="35" type="text" value="" />
        <br>
        <label for="tel_cliente">Telefono</label>
        <input id="tel_cliente" name="tel_cliente" size="35" type="text" value="" />
        <br>
        <input type="submit" name="btnRegistrar" value="Registrar"/>
    </div>
</form>
</body>
</html> 