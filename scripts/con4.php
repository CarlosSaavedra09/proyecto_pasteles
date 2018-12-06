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
    where fecha_entrega>=now() and Clientes_idClientes=1230591';
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
        echo $row['idventas']." ".$row['fecha_entrega']." ".$row['Clientes_idClientes']." ".$row['tipo']." ".$row['monto']."</br>";
        }
    }

    //se cierra la conexion
    $conn->close(); 
?>