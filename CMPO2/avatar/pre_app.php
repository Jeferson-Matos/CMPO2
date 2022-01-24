<?php
include('database.php');
$user_id = $_SESSION['user_id'];

$conexion=mysqli_connect($host_bd,$usuario,$contrasena,$nombre_bd);

$cons_avatar= $conexion -> query("SELECT avatar_id, avatar_img, avatar_date FROM tavatar where user_id='$user_id'");

$datos_avatar = mysqli_fetch_row($cons_avatar);

$avatar_id = $datos_avatar[0];

$avatar_img = $datos_avatar[1];

$avatar_date = $datos_avatar[2];

$avatar_location = "avatar/";

if (empty($datos_avatar[1])){
    $avatar_img = "recursos\user-icon.png";
}else{$avatar_img = $avatar_location.$datos_avatar[1];}