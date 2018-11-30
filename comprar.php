<!DOCTYPE html>
<html>
<head>
    <title>Pasteleria</title>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script>
        <?php
            require_once('conexioncompra.php');
            $sql = "SELECT iddinseno,tipo_diseno FROM dinseno";
            $result = $conn->query($sql);

            $sql2 = "SELECT idpasteles,capacidad,pisos,tampastel_idtampastel FROM pasteles";
            $result2 = $conn->query($sql2);
        ?>
    </script>
</head>
<body>
<H1 class="title inflo">Pasteleria</H1>
<ul class="barra">
    <li class="center nav-item active">
        <a class="nav-link" href="index.html">Menu principal</a>
    </li>
    <li class="center nav-item">
        <a class="nav-link" href="#active">Comprar</a>
    </li>
    <li class="center nav-item">
        <a class="nav-link" href="http://localhost/proyecto_pasteles/registrar.php">Registrar</a>
    </li>
    <li class="center nav-item">
        <a class="nav-link" href="http://localhost/proyecto_pasteles/consultar.php">Consultar</a>
    </li>
</ul>
    <br>
    <form action="conexioncompra.php" method="POST">
        <div class="cen texto">
            clave compra: <input type="text" name="txtcompra" maxlenght="45" /><br><br>
            fecha pedido: <input type="text" name="txtfpedido" maxlenght="45" /><br><br>
            fecha entrega: <input type="text" name="txtfentrega" maxlenght="45" /><br><br>
            clave cliente: <input type="text" name="txtcliente" maxlenght="45" /><br><br>
        </div>
        
        pastel:<select name="cmbpastel">
            <?php

                if($result2->num_rows > 0){
                while($row = $result2->fetch_assoc()){
                echo '<option value=" '.$row['idpasteles'].' "> '."capacidad ".$row['capacidad']."pisos".$row['pisos']."tamano pastel".$row['tampastel_idtampastel'].'</option>';
                }
                }   
                $conn->close();
            ?>
        </select>
        <br><br>
        diseno:<select name="cmbdiseno">
        <?php 

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                echo '<option value=" '.$row['iddinseno'].' "> '.$row['tipo_diseno'].'</option>';
                }
            }
        $conn->close();
        ?>
        </select>
        <br><br>
        <input type="submit" class="button" name="btnEnviar" value="Enviar">
    </form>
</body>
</html> 