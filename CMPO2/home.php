<?php 
session_start();

//debug mode (quitar porfavor, no se te olvide)

if ($_SESSION['tipo_usu_val'] == 1){
    echo "Modo Estudiante";
}elseif($_SESSION['tipo_usu_val'] == 2){
    echo "Modo Docente";
}elseif($_SESSION['tipo_usu_val'] == 3){
    echo "Modo Administrador"; };

//aqui termina el debug.

if ($_SESSION['tipo_usu_val'] < 1){
header('location: index.php');}
include ('avatar\pre_app.php');

?>

<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="ocultar_add();">
<div class="w-screen">
<?php 
require 'headers/header_index.php';
?>
<?php 
require 'lateral.php';
?>
<?php 
require 'mobile.php';
?>

<div id="content"></div>

</div>
</body>

<script src="appmobile.js"></script>
</html>



