<?php

    include("conection.php");
    $proyectos= new Proyectos();


    $nombre=$_POST['nompro'];
    $imagen=uniqid()."-".$_FILES["imagen"]["name"];
    $ruta=$_FILES["imagen"]["tmp_name"];
    $destino="foto/".$imagen;
    copy($ruta,$destino);
    $descri=$_POST['descripcion'];
    $IdTec=$_POST['IdTec'];
    $Seme=$_POST['Seme'];
    $cod=$_POST['cod'];
    
    
    $res1=$proyectos->Subida_proyectos($nombre,$destino,$descri,$IdTec,$Seme);
    $res2=$proyectos->repositorio($cod);
    $res3=$proyectos->repositorio2($cod);
    
    if($res3){
        echo "Redireccionando...";
        ?>
        <!DOCTYPE html>
        <html>
            <head>
            	<title></title>
            </head>
            <body>
                <script type="text/javascript">
                window.alert("Datos Insertados correctamente");
                window.location="http://tecn0project.com/Pantallas/Panel.php";
                </script>
            
        
<?php
    }
    else {
        
        echo "fallo de insercion de datos";
?>

                <script type="text/javascript">
                window.alert("FALLO EN INSERCION");
                window.location="http://tecn0project.com/Pantallas/subir.php";
                </script>
            </body>
        </html>
<?php
    }
?>

