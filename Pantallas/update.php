<?php 
session_start();
include 'conection.php';
$val= new Usuarios();
if($_SESSION['Nombre']==true){
    $ses=$_SESSION['Nombre'];
	if(isset($_GET['IdPro'])){
		$IdPro=intval($_GET['IdPro']);
	} else {
		header("location:almacen.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Actualizacion de proyectos</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/Style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <center>
    <header>
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-2"><img align="left" height="160" width="270" src="img/LOGOTECNOPROJECT.png"  /></div>
        
        <div class="col-md-8">
        <h1><strong>TecnoProject</strong></h1>
        </div>
        
        <div class="col-md-2"><br><br><a href='Panel.php' type='button' class='btn btn-primary btn-lg' >Control de cuenta</a></div>
        </div>
        </div>
    </header>
    </center><br>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Editar <b>Proyecto</b></h2></div>
                    <div class="col-sm-4">
                       <?php
        				    $res=$val->valida($ses);
                            $rol = $res->IdRol;
        				    //echo $rol."hola".$com;
        				    if($rol==1){
        				    ?>
        				    <a href='almacenc.php'type="button" class="btn btn-info btn-lg btn-block">regresar</a>
        				    <?php
        				    }else if($rol==2){
        				    ?>
        				    <a href='almaceni.php'type="button" class="btn btn-info btn-lg btn-block">regresar</a>
        				    <?php
        				    }
        				    ?>
                    </div>
                </div>
                <br>
            </div>
            <?php
	            $proyectos= new Proyectos();
				if(isset($_POST) && !empty($_POST)){
					$nom=$_POST['nompro'];
                    $imagen=uniqid()."-".$_FILES["imagen"]["name"];
                    $ruta=$_FILES["imagen"]["tmp_name"];
                    $destino="foto/".$imagen;
                    copy($ruta,$destino);
                    $descripcion=$_POST['descripcion'];
                    $IdTec=$_POST['IdTec'];
                    $Seme=$_POST['Seme'];
					$res = $proyectos->update($nom, $destino, $descripcion,$IdTec,$Seme,$IdPro);
					if($res){
						$message= "Datos actualizados con Exito";
						$class="alert alert-success";
						
					}else{
						$message="No se pudieron actualizar los datos";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				</div>	
					<?php
				}
				$datos_cliente=$proyectos->single_record($IdPro);
			?>
			<div class="row">
			    <!--prueba de datos-->
			    <?php //echo $nom, $destino, $descripcion,$IdTec,$Seme,$IdPro; ?>
				<form method="POST" enctype="multipart/form-data">
				<div class="col-md-4">
					<label><h3>Nuevo Nombre del Proyecto:</h3></label>
					<input type="text" name="nompro" id="nompro" class='form-control' maxlength="100"  value="<?php echo $datos_cliente->Nompro;?>">
				    <input type="hidden" name="IdPro" id="IdPro" class='form-control' maxlength="100"   value="<?php echo $datos_cliente->IdPro;?>">
				</div>
				<div class="col-md-4">
					<label><h3>Nuevo Logo:</h3></label>
				 <input id="destino" type="file" name="imagen" value required/>
				</div>
				<div class="col-md-4">
					<label><h3>Nueva Carrera:</h3></label>
                                    <select class="form-control" id="IdTec" name="IdTec">
                                      <option value="1">Tecnologia en Desarrollo de Software</option>
                                      <option value="2">Tecnologia en Automatizacion Industrial</option>
                                    </select>
				</div>
				<div class="col-md-12">
				    <label><h3>Nueva Semestre:</h3></label>
                                    <select class="form-control" id="Seme" name="Seme">
                                      <option value="Semestre 1">Semestre 1</option>
                                      <option value="Semestre 2">Semestre 2</option>
                                      <option value="Semestre 3">Semestre 3</option>
                                      <option value="Semestre 4">Semestre 4</option>
                                      <option value="Semestre 5">Semestre 5</option>
                                      <option value="Semestre 6">Semestre 6</option>
                                    </select>
				</div>
				<div class="col-md-12">
					<label><h3>Nueva Descripcion:</h3></label>
					<textarea class="form-control" rows="5" id="descripcion" name="descripcion" required><?php echo $datos_cliente->Descripcion;?></textarea>
					</br>
					
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Actualizar datos</button>
				</div>
				</form>
			</div>
        </div>
    </div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src="js/bootstrap.min.js"></script></body>
</body>
</html>

<?php
}else{
    header('location: Vistas/login.php');
}
?>