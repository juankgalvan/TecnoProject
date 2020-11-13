<?php
    include 'conexion.php';

    $sql = "select * from Proyectos";
    $resultado = $conn->query($sql);

    while($fila = $resultado->fetch_array()){
        $persona[] = array_map('utf8_encode', $fila);
    }
    echo json_encode($persona);
    $resultado->close();
?>