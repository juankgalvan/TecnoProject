<?php
    $asunto="Sugerencia";
    $mensaje=$_POST['Comentario'];
    
    mail('comentarios@tecn0project.com',$asunto,$mensaje);
    header('location: ../Pantallas/Panel.php');
?>