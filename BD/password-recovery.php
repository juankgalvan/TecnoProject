<!doctype html>
<html>
	<head><meta charset="uft-8">		
    	<title>Password Recovery</title>
    	
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			
			<?php
			include 'conection.php';
			$conecta = new Usuarios();

			$email =$_POST['Email']; 
			
			$res=$conecta->ingresa($email);
			$correo = $res->Email;
			$contra = $res->Password;
			
			if ($correo==$email) {				
				
				$subject = "Contraseè´–a de TecnoProject";
				$body = "Su contraseè´–a es: " . $contra;
				
				$headers = 'From: TecnoProject@tecnoproject.com' . "\r\n" .
				'Reply-To: TecnoProject@tecnoproject.com' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
				
				mail($email, $subject, $body, $headers);				
				
				echo "<div class='alert alert-success alert-dismissible mt-4' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span></button>

				<p>Mensaje enviado. Por favor revisa tu bandeja de entrada.</p>
				<p><a class='alert-link' href=../Pantallas/login.php>Login</a></p></div>";
			} else {
				echo "Su Email No se encuentra en nuestra base de datos.";
			}
			?>
		</div>
	</div>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>