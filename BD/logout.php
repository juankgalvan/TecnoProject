<?php
session_start();
session_unset($_SESSION['Nombre']);
session_destroy();

header('location: ../Pantallas/login.php');
?>