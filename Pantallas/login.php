<?php
session_start();
if($_SESSION['Nombre']==true){
}
?>

<!DOCTYPE html>
<html>
  <head><meta charset="uft-8">
      
    <title>Login</title>
	
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/ico" href="../css/img/LOGOTECNOPROJECT.ico" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/Style.css">
  </head>

  <body>
      <br>
      <center>
      <header>
        <div class="container-fluid">
        <div class="row">
        <div class="col-lg-2"><a href="https://tecn0project.com/"><img align="left" height="160" width="270" src="../css/img/LOGOTECNOPROJECT.png"  /></a></div>
        
        <div class="col-lg-8">
        <h1><center><strong>TecnoProject</strong></center></h1>
        </div>
        
        <div class="col-lg-2"></div>
        </div>
        </div>
      </header>
      </center>
  <br><br>
  <center>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">		
					<div class="card">
						<div class="loginBox">
							<center><img src="../css/img/login.png" class="img-responsive"></center>
							<h2>Login</h2>

							<form action="check-login.php" method="post">                           	
								<div class="form-group">									
									<input type="correo" class="form-control input-lg" name="Email" placeholder="Email" required>        
								</div>							
								<div class="form-group">        
									<input type="password" class="form-control input-lg" name="Password" placeholder="Password" required>       
								</div>								    
									<button type="submit" class="btn btn-success btn-block">Login</button>
							</form><br>
							<!---<p><a href="#showForm" data-toggle="collapse" aria-expanded="false" aria-controls="collapse" class="">Olvidaste tu contraseÃ±a</p>	-->
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#showForm" aria-expanded="false" aria-controls="collapse">
                              Â¿Olvidaste tu contrase«Ğa?
                            </button>
							<div class="collapse" id="showForm">
								<div class='well'>
									<form action="../BD/password-recovery.php" method="post">
										<div class="form-group">										
											<input type="correo" class="form-control" name="Email" placeholder="Ingresa el correo asociado a la cuenta." required>
										</div>
										<button type="submit" class="btn btn-dark">Recupera tu contrase«Ğa</button>
									</form>								
								</div>
							</div>
													
							<hr><p><a href="regis" title="Create an account">Crea una cuenta</a>.</p>								
						</div>	
					</div>
				</div>
			</div>
		</div>
</center>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	
	</body>
</html>	