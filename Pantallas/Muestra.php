<?php
$conexion=mysqli_connect("tecn0project.com","tecnproj","polopagaelserver1234","tecnproj_General");  
session_start();

$tec=$_POST['cosa'];
$sem=$_POST['opt'];
$pro=$_POST['pro'];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Bienvenidos</title>
	<meta name="viewport" content="width=device-width,initial=scale=1">
	<link rel="icon" type="image/ico" href="../css/img/LOGOTECNOPROJECT.ico" />
	<link href="../css/bootstrap.min.css" media="" rel="stylesheet" />
	<link href="../css/Style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <br>
    <center>
    <header>
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-2"><a href="../index.php"><img align="left" height="160" src="../css/img/LOGOTECNOPROJECT.png" width="270" /></a></div>
        
        <div class="col-md-8">
        <h1><strong>TecnoProject</strong></h1>
        </div>
        <div class="col-md-2"><br><br>
            <?php 
                if($_SESSION['Nombre']==true){
                    echo"<a href='Panel.php' type='button' class='btn btn-primary btn-lg' >Control de cuenta</a>";
                }else{
                    echo"<a href='login' type='button' class='btn btn-primary btn-lg' >Iniciar Sesion</a>";
                }
            ?>
        </div>
        </div>
        </div>
    </header>
    </center>

<p></p>

<center>
<article>
    <br>

    <form name="formulario1" action="Muestra" method="post">
         
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
          
            <input type="image" src="../css/img/busc.png" height="50" width="50">
            
            </form>
            <br>
        <?php
            if($tec==1){
        ?>
        <div class="container-fluid" name="pikachu" id "pikachu">
        <div class="row">
            <div class="col-md-1" class="rounded"></div>
            <div class="col-md-10" id="colores2" class="rounded"><h2>Tecnologia en <br>Desarrollo de software</h2></div>
            <div class="col-md-1" class="rounded"></div>
        </div>
        <br>
        <?php
            }else if($tec==2){
        ?>
        <div class="container-fluid" name="pikachu" id "pikachu">
        <div class="row">
            <div class="col-md-1" class="rounded"></div>
            <div class="col-md-10" id="colores2" class="rounded"><h2>Tecnologia en <br>automatizacion industrial</h2></div>
            <div class="col-md-1" class="rounded"></div>
        </div>
        <br>
        <?php
            }
        ?>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="colores" class="rounded">
                <br><?php
                //echo $tec."hola".$sem."hola".$pro;
                ?>
        			    <table class="table table-bordered">
            				<tbody>
            				    <?php
                                    $sql="SELECT * from Proyectos where IdTec='$tec'";
                                    $result=mysqli_query($conexion,$sql);
                                    while ($row=mysqli_fetch_object($result)){
                                        $nompro=$row->Nompro;
                					    $imagen=$row->Logo;
                						$descripcion=$row->Descripcion;
                						$Seme=$row->Seme;
                						
                						/*vs
                						$tec=$_POST['cosa'];
                                        $sem=$_POST['opt'];
                                        $pro=$_POST['pro'];*/
                                        if(($tec==1 || $tec==2) && ($sem=="seleccione")){
                                ?>
                                            <tr id="hola">
                                                <td><?php echo '<center><h4>'.$nompro.'</h4></center>'?></td>
                                            </tr>
                
                                            <tr>
                                                <td><?php echo '<center><img src="../css/'.$imagen.'" width="400" height="300" /></center>'?></td>
                
                                            </tr>
                                            <tr>
                                                <td><?php echo '<p>'.$descripcion.'</p>'?></td>
                                            </tr>
                                <?php   
                                        }else if(($tec==1 || $tec==2) && ($sem==$Seme) && ($pro=" ")){
                                ?>
                        					<tr id="hola">
                                                <td><?php echo '<center><h4>'.$nompro.'</h4></center>'?></td>
                                            </tr>
                
                                            <tr>
                                                <td><?php echo '<center><img src="../css/'.$imagen.'" width="400" height="300" /></center>'?></td>
                
                                            </tr>
                                            <tr>
                                                <td><?php echo '<p>'.$descripcion.'</p>'?></td>
                                            </tr>
                                <?php           
                                        }else if(($tec==1 || $tec==2) && ($sem==$Seme) && ($pro==$nompro)){
                                ?>
                                            <tr id="hola">
                                                <td><?php echo '<center><h4>'.$nompro.'</h4></center>'?></td>
                                            </tr>
                
                                            <tr>
                                                <td><?php echo '<center><img src="../css/'.$imagen.'" width="400" height="300" /></center>'?></td>
                
                                            </tr>
                                            <tr>
                                                <td><?php echo '<p>'.$descripcion.'</p>'?></td>
                                            </tr>
                                <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
            </div>
            <div class="col-md-2"></div>
                 <br>
        </div>
        </div>
</article>
</center>
<p></p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src="js/bootstrap.min.js"></script>
</body>
</html>