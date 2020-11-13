<?php 
session_start();
include 'conection.php';
$val= new Usuarios();
$proyectos = new Proyectos();
if($_SESSION['Nombre']==true){
    $ses=$_SESSION['Nombre'];
    if (isset($_GET['IdPro'])){
    	$IdPro=intval($_GET['IdPro']);
    	$res = $proyectos->delete($IdPro);
    	if($res){
        	$resi=$val->valida($ses);
            $rol = $resi->IdRol;
            //echo $rol."hola".$com;
            if($rol==1){
            	echo '
            		<body>
                        <script type="text/javascript">
                            window.alert("Se elimino correctamente");
                    		window.location="http://www.tecn0project.com/Pantallas/Vistas/almacenc.php";
                    	</script>
                    </body>';
            }else if($rol==2){
            	echo '
            		<body>
                        <script type="text/javascript">
                            window.alert("Se elimino correctamente");
                    		window.location="http://www.tecn0project.com/Pantallas/Vistas/almaceni.php";
                    	</script>
                    </body>';
                
            }
        	else{
        		echo "Error al eliminar el registro";
        	}
    	}
    }
}
?>