<?php
    include 'conexion.php';

    $codigo = $_POST['codigo'];

    $sql_query = "DELETE FROM persona WHERE id='$codigo'";
    mysqli_query($conn,$sql_query);

    mysqli_close($conn);
?>