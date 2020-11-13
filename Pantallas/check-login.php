<?php
session_start();

?>
<!doctype html>
<html>
	<head><meta charset="euc-jp">
		<title>Login</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/Style.css">
	</head>
    <body>
    	    <center>
            <header>
                <div class="container-fluid">
                <div class="row">
                <div class="col-lg-2"><a href="../index.php"><img align="left" height="160" width="270" src="../css/img/LOGOTECNOPROJECT.png"  /></a></div>
                
                <div class="col-lg-8">
                <h1><center><strong>TecnoProject</strong></center></h1>
                </div>
                
                <div class="col-lg-2"><br><br><a href='../BD/logout.php'type="button" class="btn btn-info btn-lg btn-block">Logout</a><br></div>
                </div>
                </div>
            </header>
        </center>
        <br>
		<div class="container">
		
			<?php
			include '../BD/conection.php';
			$conecta = new Usuarios();

			$email =$_POST['Email']; 
			$password = $_POST['Password'];
			
			$res=$conecta->ingresa($email);

			$dbe = $res->Email;
			$dbp = $res->Password;
			$dbc = $res->Completo;
			$rol = $res->IdRol;
			//validacion
			/*echo "entra".$email,$password."<br>";
			echo "compara".$dbe,$dbp,$dbc;*/
			if ($email == $dbe && $password == $dbp) {	
				$_SESSION['loggedin'] = true;
				$_SESSION['Nombre'] = $dbc;
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;
				if($_SESSION['Nombre']==true){
			?>
                <div class='row'>
    				    <div class='col-md-2'></div>
    				    <div class='col-md-8' id='login'>
    				        <br>
        				    <center><h4><strong>Bienvenido!</strong> <?php echo $_SESSION['Nombre'] ?></h4></center><br>
        				    <a href='subir.php'type="button" class="btn btn-info btn-lg btn-block">Sube proyecto</a>
        				    <?php
        				    if($rol==1){
        				    ?>
        				    <a href='Vistas/almacenc.php'type="button" class="btn btn-info btn-lg btn-block">Editar Proyecto existente</a>
        				    <?php
        				    }else if($rol==2){
        				    ?>
        				    <a href='Vistas/almaceni.php'type="button" class="btn btn-info btn-lg btn-block">Editar Proyecto existente</a>
        				    <?php
        				    }
        				    ?>
        				    <br>
        				    <form method="post" action="../BD/envia.php">
        				        <div class="form-group">
                                    <label>Comentarios y/o Sugerencias</label>
                                    <textarea class="form-control" rows="5" id="Comentario" name="Comentario" placeholder="Comentarios y/o Sugerencias" required></textarea>
                                    <input type="submit" value="Enviar" class="btn btn-dark">
                                </div>
        				    </form>
        				    <br>
        				    
        				</div>
        				<div class='col-md-2'></div>
    			</div>
			<?php
			}else{
			    header('location: login.php');
			}
			} else {?>
				<div class='alert alert-danger mt-4' role='alert'>correo o contraseña son incorrectos!
				<p><a href='login.php'><strong>Por favor revisa las credenciales de acceso!</strong></a></p></div>
			<?php
			}	
			?>
		</div>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>


