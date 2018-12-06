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
    
    $sql = 'SELECT v.idventas,fecha_entrega,p.idpasteles,p.capacidad,p.pisos
    from ventas v
    inner join  pasteles p
    on v.pasteles_idpasteles = p.idpasteles
    where Clientes_idClientes=1230592';
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
        echo $row['idventas']." ".$row['fecha_entrega']." ".$row['idpasteles']." ".$row['capacidad']." ".$row['pisos']."</br>";
        }
    }

    //se cierra la conexion
    $conn->close(); 
?>