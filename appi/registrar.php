<?php
    include 'conexion.php';
    
    $codigo =$_POST['codigo'];
    $nombre =$_POST['nombre'];
    $apellido =$_POST['apellido'];

    $consulta="INSERT INTO Persona values('".$codigo."','".$nombre."','".$apellido."')";
    mysqli_query($conn,$consulta);
    mysqli_close($conn);
?>