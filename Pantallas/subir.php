<?php
session_start();
include '../BD/conection.php';
$val= new Usuarios();
if($_SESSION['Nombre']==true){
    $ses=$_SESSION['Nombre'];
?>

<!DOCTYPE html>
<html>
    <head>
       <title>Por favor suba su proyecto</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	    <link rel="stylesheet" href="../css/Style.css">
    </head>
    <body>
        <center>
        <header>
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-2"><a href="../index.php"><img align="left" height="160" src="../css/img/LOGOTECNOPROJECT.png" width="270"  /></a></div>
            
            <div class="col-md-8">
            <h1><strong>TecnoProject</strong></h1>
            </div>
            
            <div class="col-md-2"><br><br><a href="Panel.php" type="button" class="btn btn-primary btn-lg" >Control De usuario</a></div>
            </div>
            </div>
        </header>
        </center>
        <br><br>
        <div class="container-fluid" id="titulo">
            <h2><strong>Bienvenido</strong></h2>
            <h3>Aqui podras  subir tus proyectos</h3><br>
        </div>
        
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2" id="barra">
                    <br>
                    <a href="../index.php" type="button" class="btn btn-info btn-lg btn-block">Inicio</a><br><br>
                    <?php
        				    $res=$val->valida($ses);
                            $rol = $res->IdRol;
        				    //echo $rol."hola".$com;
        				    if($rol==1){
        				    ?>
        				    <a href='Vistas/almacenc.php'type="button" class="btn btn-info btn-lg btn-block">Almacen</a>
        				    <?php
        				    }else if($rol==2){
        				    ?>
        				    <a href='Vistas/almaceni.php'type="button" class="btn btn-info btn-lg btn-block">Almacen</a>
        				    <?php
        				    }
        				    ?>
                </div>
                <div class="col-md-1"></div>
                
                <div class="col-md-7" id="subida">
                        <form action="../BD/subi.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><h3>Nombre Proyecto</h3></label><br>
                                    <input id="nompro" type="text" name="nompro" placeholder="Project Name" class="input-48" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group">
                                   <label><h3>Logo</h3></label><br>
                                    <input id="destino" type="file" name="imagen" placeholder="Logo" value required/> 
                                </div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label><h3>Descripcion</h3></label>
                            <textarea class="form-control" rows="5" id="descripcion" name="descripcion" placeholder="Project Descript" required></textarea>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label><h3>Semestre</h3></label>
                                    <select class="form-control" id="Seme" name="Seme">
                                      <option value="Semestre 1">1</option>
                                      <option value="Semestre 2">2</option>
                                      <option value="Semestre 3">3</option>
                                      <option value="Semestre 4">4</option>
                                      <option value="Semestre 5">5</option>
                                      <option value="Semestre 6">6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label><h3>Carrera</h3></label>
                                    <select class="form-control" id="IdTec" name="IdTec">
                                      <option value="1">Tecnologia en Desarrollo de Software</option>
                                      <option value="2">Tecnologia en Automatizacion Industrial</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label><h3>Documento del Estudiante</h3></label><br>
                                    <input id="cod" type="text" name="cod" placeholder="Documento" class="input-48" required/>
                                </div>
                            </div>
                        </div>
                        
                        
                        <input type="submit" value="Subir" class="btn btn-dark btn-block">
                        </form>
                        <br>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        
        
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    </body>
</html>

<?php 
}else{
    header('location: login.html');
}
?>