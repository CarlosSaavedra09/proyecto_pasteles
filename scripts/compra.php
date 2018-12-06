<!DOCTYPE html>
<html>
<head>
    <title>Pagina Inicio Pasteleria</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <script>
        <?php
            include_once('conexionCompra.php');
            $sql = "SELECT idpasteles,capacidad,pisos,tampastel_idtampastel FROM pasteles";
            $result = $conn->query($sql);

            $sql2 = "SELECT iddinseno,tipo_diseno FROM dinseno";
            $result2 = $conn->query($sql2);

            $sql3 = "";
            $result3 = $conn->query($sql3);
        ?>
    </script>
</head>
<body>
    <h1 class="titulo">Pasteleria</h1>
    <ul>
        <li><a  href="../scripts/index.html">Pagina Principal</a></li>
        <li><a class="active" href="#compra">Pedido</a></li>
        <li><a href="http://localhost/proyecto_pasteles/scripts/registrar.php">Registrar</a></li>
        <li><a href="../scripts/consultas.html">Consultas</a></li>
    </ul>
    
    <form action="conexionCompra.php" method="post">
        <div class="cen">
            <h2 class="subtitulo">Pedido de Pastel</h2>
            <br>
            <p>Ingrese su clave de cliente</p>
            <input type="text" name="txtClaveCliente" maxlenght="45" />
            <p>Ingrese la fecha de entrega</p>
            <input type="text" name="txtFechaEntrega" maxlenght="45" />
            <p>Seleccione el pastel</p>
            <select name="cmbpastel">
                <?php
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                        echo '<option value=" '.$row['idpasteles'].' "> '."capacidad ".$row['capacidad']." pisos ".$row['pisos']." tamano pastel ".$row['tampastel_idtampastel'].'</option>';
                        }
                    }   
                    $conn->close();
                ?>
            </select>
            <p>Seleccionar el diseño</p>
            <select name="cmbdiseno">
                <?php 
                    if($result2->num_rows > 0){
                        while($row = $result2->fetch_assoc()){
                        echo '<option value=" '.$row['iddinseno'].' "> '.$row['tipo_diseno'].'</option>';
                        }
                    }
                    $conn->close();
                 ?>
             </select>
             <p>total</p>

            <br><br>
            <input class="boton" type="submit" name="btnEnviar" value="PEDIR">
        </div>
    </form>

</body>
</html>