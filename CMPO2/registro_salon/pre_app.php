<?php
include('../database.php');
$conexion=mysqli_connect($host_bd,$usuario,$contrasena,$nombre_bd);

$docente='docente';
$admin='admin';
$cons_docente= $conexion -> query("SELECT user_id, user_nickname FROM tusuario where user_type='$docente' or user_type='$admin'");

