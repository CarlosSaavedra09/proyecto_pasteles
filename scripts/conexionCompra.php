<!DOCTYPE html>
<html>
<head>
    <title>Pagina Inicio Pasteleria</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
</head>
<body>
    <h1 class="titulo">Pasteleria</h1>
    <ul>
        <li><a  href="../scripts/index.html">Pagina Principal</a></li>
        <li><a class="active" href="#compra">Pedido</a></li>
        <li><a href="http://localhost/proyecto_pasteles/scripts/registrar.php">Registrar</a></li>
        <li><a href="http://localhost/proyecto_pasteles/scripts/consultas.php">Consultas</a></li>
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