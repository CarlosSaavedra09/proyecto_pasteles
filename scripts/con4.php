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
        <h2 class="subtitulo">Consulta</h2>
        <br>
    <?php
        $servername="127.0.0.1";
        $username="user";
        $password="1234";
        $dbname="pastel";

        $conn = new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error){
            die("la conexion fallo: ".$conn->connect_error);
            echo("<br>");
        }else{
            echo "Se conecto exitosamente a la BD ".$dbname;
            echo("<br>");
        }
        // include_once('con1.php');
        
        $sql = 'SELECT v.idventas,v.fecha_entrega,v.Clientes_idClientes,p.tipo,p.monto
        from ventas v
        inner join precios p
        on v.precios_idprecios = p.idprecios
        where fecha_entrega>=now()';
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
            echo $row['idventas']." ".$row['fecha_entrega']." ".$row['Clientes_idClientes']." ".$row['tipo']." ".$row['monto']."</br>";
            }
        }

        //se cierra la conexion
        $conn->close(); 
    ?>
    <form action="http://localhost/proyecto_pasteles/scripts/consultas.php">
            <input class="boton" type="submit" value="REGRESAR">
    </form> 

    </div>
    
</body>
</html>
