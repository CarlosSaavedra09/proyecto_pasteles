<!DOCTYPE html>
<html>
<head>
    <title>Pagina Inicio Pasteleria</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
    <link rel="stylesheet" type="text/css" href="../css/style3.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
</head>
<body>
    <h1 class="titulo">Pasteleria</h1>
    <ul>
        <li><a  href="../scripts/index.html">Pagina Principal</a></li>
        <li><a href="http://localhost/proyecto_pasteles/scripts/compra.php">Pedido</a></li>
        <li><a href="http://localhost/proyecto_pasteles/scripts/registrar.php">Registrar</a></li>
        <li><a class="active" href="">Consultas</a></li>
    </ul>

    <div class="cen">
        <h2 class="subtitulo">Consultas</h2>
        <br>
        <p>ventas que a realizado el cliente y el precio del pastel</p>
        <form action="http://localhost/proyecto_pasteles/scripts/con1.php" method="post">
            <p>Ingrese la clave del cliente</p>
            <input type="text" name="txtClaveCliente" maxlenght="45" />
            <button class="btn" type="submit">Button</button>
        </form> 
        <br>
        <p>saber que especificaciones de pastel tiene una venta</p>
        <form action="http://localhost/proyecto_pasteles/scripts/con2.php" >
            <p>Ingrese la clave del cliente</p>
            <input type="text" name="txtClaveCliente" maxlenght="45" />
            <button class="btn" type="submit">Button</button>
        </form>
        <br>
        <p>saber tipo de diseño solicitado</p>
        <form action="http://localhost/proyecto_pasteles/scripts/con3.php" >
            <p>Ingrese la clave del cliente</p>
            <input type="text" name="txtClaveCliente" maxlenght="45" />
            <button class="btn" type="submit">Button</button>
        </form>
        <br>
        <p>revizar los pedidos pendientes</p>
        <form action="http://localhost/proyecto_pasteles/scripts/con4.php" >
            <button class="btn" type="submit">Button</button>
        </form> 

    </div>
    
</body>
</html>