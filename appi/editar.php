<?php
    include 'conexion.php';

    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $sql_query = "UPDATE Persona SET nombre = '$nombre', apellido ='$apellido' where codigo = '$codigo'";
    mysqli_query($conn,$sql_query);

    mysqli_close($conn);
?>