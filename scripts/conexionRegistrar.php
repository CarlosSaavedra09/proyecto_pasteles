<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
    <h1 class="titulo">Pasteleria</h1>
    <ul>
        <li><a  href="../scripts/index.html">Pagina Principal</a></li>
        <li><a href="http://localhost/proyecto_pasteles/scripts/compra.php">Compra</a></li>
        <li><a class="active" href="#registrar">Registrar</a></li>
        <li><a href="http://localhost/proyecto_pasteles/scripts/consultas.php">Cosultas</a></li>
    </ul>
    <div class="cen letra">
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
            $Cve_idcliente=$_POST['txtClaveCliente'];
            $Nombre_cliente=$_POST['txtNombreCliente'];
            $Telefono_Cliente=$_POST['txtTelefono'];

            echo "clave: ".$Cve_idcliente."<br>"." nombre: ".$Nombre_cliente."<br>".$Telefono_Cliente."<br>";

            $sql = "INSERT INTO clientes (idClientes,nombre,telefono) VALUES ('$Cve_idcliente','$Nombre_cliente','$Telefono_Cliente')";
            
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            //se cierra la conexion
            // $conn->close(); 
        ?>
        <form action="http://localhost/proyecto_pasteles/scripts/registrar.php">
            <input class="boton" type="submit" value="REGRESAR">
        </form>        
    </div>

</body>
</html>