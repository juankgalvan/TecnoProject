<?php
$conexion=mysqli_connect("tecn0project.com","tecnproj","polopagaelserver1234","tecnproj_General");  
session_start();
?>

            
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Bienvenidos</title>
	<meta name="viewport" content="width=device-width,initial=scale=1">
	<link rel="icon" type="image/ico" href="css/img/LOGOTECNOPROJECT.ico" />
	<link href="css/bootstrap.min.css" media="" rel="stylesheet" />
	<link href="css/Style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <br>
    <center>
    <header>
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-2"><img align="left" height="160" src="css/img/LOGOTECNOPROJECT.png" width="270" /></div>
        
        <div class="col-md-8">
            <br>
        <h1><strong>TecnoProject</strong></h1>
        </div>
        <div class="col-md-2"><br><br>
            <?php 
                if($_SESSION['Nombre']==true){
                    echo"<a href='Pantallas/Panel.php' type='button' class='btn btn-primary btn-lg' >Control de cuenta</a>";
                }else{
                    echo"<a href='Pantallas/login' type='button' class='btn btn-primary btn-lg' >Iniciar Sesion</a>";
                }
            ?>
        </div>
        </div>
        </div>
    </header>
    </center>

<center>
<article>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <form name="formulario1" action="Pantallas/Muestra" method "post">
                <select class="seleccion" name="cosa">
                    <option value="0">Seleccione
                    <option value="1">Tecnologia en desarrollo de software
                    <option value="2">Tecnologia en automatizacion industrial
                </select>
                <select class="seleccion" name="opt">
                    <option value="0">Seleccione
                    <option value="Semestre 1">Semestre 1
                    <option value="Semestre 2">Semestre 2
                    <option value="Semestre 3">Semestre 3
                    <option value="Semestre 4">Semestre 4
                    <option value="Semestre 5">Semestre 5
                    <option value="Semestre 6">Semestre 6
                </select>
                <input class="txt" name="pro" placeholder="Nombre del Proyecto">
                <input class="imga" type="image" src="css/img/busc.png" height="50" width="50">
            </form>
        </div>
        <div class="col-md-1"></div>
    </div>
    
</div>
    
            <br>
    
         <div class="container-fluid" name="pikachu" id "pikachu">
        <div class="row">
            <div class="col-md-5" class="rounded" id="colores2" ><h2>Tecnologia en <br>desarrollo de Software</h2></div>
            <div class="col-md-2" class="rounded"></div>
            <div class="col-md-5" id="colores2" class="rounded"><h2>Tecnologia en <br>automatizacion industrial</h2></div>
        </div>
        <br>
        
        <div class="row">
            <div class="col-md-5" id="colores" class="rounded">
                
        				<?php 
        				$sql="SELECT p.Nompro,p.Logo,p.Descripcion FROM Proyectos p join Carreras c on c.IdTec=p.IdTec where NomTec='Tecnologia en Desarrollo de Software'";
        				$result=mysqli_query($conexion,$sql);
        				while ($mostrar=mysqli_fetch_array($result)){
        				?><br>
        				<table class="table table-bordered">
        				    <tbody>
        					<tr id="hola">
                                <td><?php echo '<center><h4>'.$mostrar[Nompro].'</h4></center'?></td>
                            </tr>

                            <tr>
                                <td><?php echo '<center><img src="css/'.$mostrar[Logo].'" width="400" height="300" /></center>' ?></td>
                            </tr>
                            <tr>
                                <td><?php echo '<p>'.$mostrar[Descripcion].'</p>'?></td>
                            </tr>
                            </tbody>
                        </table>
                            <button  type="button" class="btn btn-primary">
                            </button>
                            <svg class="bi bi-heart" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 01.176-.17C12.72-3.042 23.333 4.867 8 15z" clip-rule="evenodd"/>
                            </svg>
                            <button type="button" class="btn btn-danger"> 
                            </button>
                            <svg class="bi bi-heart-half" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8 1.314C3.562-3.248-7.534 4.735 8 15V1.314z" clip-rule="evenodd"/>
                              <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 01.176-.17C12.72-3.042 23.333 4.867 8 15z" clip-rule="evenodd"/>
                             </svg>
                            
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                            <script>
                                $(document).on('click', 'button', function() {
                                i=0;
                              let i = +$(this).text();
                                if (i < 900 ) { 
                                  $(this).text(++i);
                                }
                            });
                            </script>
                        <?php
        				}
        				?>

            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5" id="colores" class="rounded">
        				<?php 
        				$sql="SELECT p.Nompro,p.Logo,p.Descripcion FROM Proyectos p join Carreras c on c.IdTec=p.IdTec where NomTec='Tecnologia en Automatizacion Industrial'";
        				$result=mysqli_query($conexion,$sql);
        				while ($mostrar=mysqli_fetch_array($result)){
        				?><br>
        			    <table class="table table-bordered">
            				<tbody>
            					<tr id="hola">
                                    <td><?php echo '<center><h4>'.$mostrar[Nompro].'</h4></center>'?></td>
                                </tr>
    
                                <tr>
                                    <td><?php echo '<center><img src="css/'.$mostrar[Logo].'" width="400" height="300" /></center>'?></td>
    
                                </tr>
                                <tr>
                                    <td><?php echo '<p>'.$mostrar[Descripcion].'</p>'?></td>
                                </tr>
                            </tbody>
                        </table>
                        <button  type="button" class="btn btn-primary"></button>
                            <svg class="bi bi-heart" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 01.176-.17C12.72-3.042 23.333 4.867 8 15z" clip-rule="evenodd"/>
                        </svg>
                        <button type="button" class="btn btn-danger"></button>
                        <svg class="bi bi-heart-half" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 1.314C3.562-3.248-7.534 4.735 8 15V1.314z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 01.176-.17C12.72-3.042 23.333 4.867 8 15z" clip-rule="evenodd"/>
                        </svg>
                         
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                        <script>
                        $(document).on('click', 'button', function() {
                        let i = +$(this).text();
                        if (i < 900 ) { 
                            $(this).text(++i);
                        }
                        });
                        </script>
                        <?php
        					}
        				?>

            </div>
                 <br>

        </div>
    </div>
    </center>
</article>
<p></p>
<?
echo $mensaje;
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src="js/bootstrap.min.js">

</script></body>
</html>
