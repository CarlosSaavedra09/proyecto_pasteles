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
            <a class="nav-link" href="http://localhost/proyecto_pasteles/comprar.php">Comprar</a>
        </li>
        <li class="center nav-item">
            <a class="nav-link" href="#">Registrar</a>
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
        $Cve_idcliente=$_POST['num_cliente'];
        $Nombre_cliente=$_POST['nomb_cliente'];
        $Telefono_Cliente=$_POST['tel_cliente'];

        echo "clave: ".$Cve_idcliente." nombre: ".$Nombre_cliente;

        $sql = "INSERT INTO clientes (idClientes,nombre,telefono) VALUES ('$Cve_idcliente','$Nombre_cliente','$Telefono_Cliente')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        //se cierra la conexion
        $conn->close(); 
    ?>
</body>
</html>

