<?php

//incluye los valores de la base de datos

include ('../database.php');

//inicia la seccion dentro de esta pagina para ubicar la rutas y identificacion de usuario

session_start();

//otra forma de inicializar la conexion

$conexion=mysqli_connect($host_bd,$usuario,$contrasena,$nombre_bd);

//variables de seccion

$user_id = $_SESSION['user_id'];
$avatar_img = $_SESSION['router_archive'];
$avatar_date = date_default_timezone_get();

//elimina las imagenes previas

$pre_db_avatar= $conexion -> query("SELECT avatar_img FROM tavatar where user_id='$user_id'");

while ($row = mysqli_fetch_array($pre_db_avatar)) {
                    
    unlink($row['avatar_img']);

  }

//elimina de la base de datos las entradas previas del usuario

$conexion -> query("DELETE FROM tavatar where user_id='$user_id'");  

//sube una nueva entrada a la base de datos del usuario

$sentencia = $bd->prepare("INSERT INTO tavatar(user_id, avatar_img, avatar_date) VALUES (?,?,?);");
$resultado = $sentencia->execute([$user_id, $avatar_img, $avatar_date]);


echo
$user_id, 
$avatar_img, 
$avatar_date;

?>
