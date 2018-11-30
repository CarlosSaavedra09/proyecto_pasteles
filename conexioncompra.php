<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
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
    <?php
    $servername="127.0.0.1";
    $username="user";
    $password="1234";
    $dbname="pastel";

    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("la conexion fallo: ".$conn->connect_error);
    }else{
        echo "Se conecto exitosamente a la BD ".$dbname;
    }
    $Cve_idcompra=$_POST['txtcompra'];
    $fecha_pedido=$_POST['txtfpedido'];
    $fecha_entrega=$_POST['txtfentrega'];
    $cve_cliente=$_POST['txtcliente'];
    $pastel=$_POST['cmbpastel'];
    $diseno=$_POST['cmbdiseno'];

    $sql = "INSERT INTO ventas (idventas,fecha_pedido,fecha_entrega,Clientes_idClientes,pasteles_idpasteles,dinseno_iddinseno,precios_idprecios)
    VALUES ('$Cve_idcompra','$fecha_pedido','$fecha_entrega','$cve_cliente','$pastel','$diseno','1')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    //se cierra la conexion
    // $conn->close(); 
?>
</body>
</html>

