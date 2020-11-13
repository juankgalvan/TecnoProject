<?php
session_start();
if($_SESSION['Nombre']==true){
    $ses=$_SESSION['Nombre'];
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="gb18030">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Almacen de proyectos</title>
    <link rel="icon" type="image/ico" href="../../css/img/LOGOTECNOPROJECT.ico" />
	<link href="../../css/bootstrap.min.css" media="" rel="stylesheet" />
	<link href="../../css/Style.css" rel="stylesheet" type="text/css" />

</head>
<body>
    
    <br>
    <center>
    <header>
        
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-2"><a href="../../index.php"><img align="left" height="160" width="270" src="../../css/img/LOGOTECNOPROJECT.png"  /></a></div>
        
        <div class="col-md-8">
        <h1><strong>TecnoProject</strong></h1>
        </div>
        
        <div class="col-md-2"><br><br><a href='../Panel.php' type='button' class='btn btn-primary btn-lg' >Control de cuenta</a></div>
        </div>
        </div>
    </header>
    </center>
     
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Lista De Proyectos</h2></div>
                    <div class="col-sm-4">
                        <a href="../subir.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar Proyecto</a>
                    </div>
                </div>
            </div>
            <div id="colores"> 
            <center>
                
            <table>
				<?php 
				include ('../../BD/conection.php');
                $muestra = new Proyectos();
                $listado=$muestra->individual($ses);
                
				?>
                <tbody>
				<?php
					while ($row=mysqli_fetch_object($listado)){
					     
						$IdPro=$row->IdPro;
						$nompro=$row->Nompro;
					    $imagen=$row->Logo;
						$descripcion=$row->Descripcion;
						$Seme=$row->Seme;
						  
				?>
				    
					<tr>
					
					   <td> <h4>Nombre:</h4><?php echo $nompro;?><br><h4>Logo:</h4><?php echo ' <img src="../../css/'.$imagen.'" width="400" height="300"/> ';?></td> 
                        <td><h4>Descripcion:</h4><?php echo $descripcion;?></td>
						<td><h4>Semestre:</h4><?php echo $Seme;?>
						</td>
					
                        <td>
						    <a href="../../BD/update.php?IdPro=<?php echo $IdPro;?>"><img src="../../css/img/Edit.png" width="24px" height="24px" class="edit" title="Editar" data-toggle="tooltip"></a>
                            <a href="../../BD/delete.php?IdPro=<?php echo $IdPro;?>"><img src="../../css/img/elim.png" width="24px" height="24px" class="delete" title="Eliminar" data-toggle="tooltip"></a> 
                                                   
                        </td>
                      
                    </tr>	
                    
				<?php
					}
				?>
                    
                    
                          
                </tbody>
            </table>
            
            </center>
            </div>
        </div>
    </div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src="js/bootstrap.min.js"></script></body>
</body>
</html>
<?php 
}else{
    
   echo '<script language="javascript">alert("Asegurese de iniciar sesion para realizar esta accion");window.location.href="../login.php"</script>';
}
?>