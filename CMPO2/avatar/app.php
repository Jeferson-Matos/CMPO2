<?php
session_start();
$user_id = $_SESSION['user_id'];

/*
    https://parzibyte.me/blog
*/
$conteo = count($_FILES["archivos"]["name"]);
for ($i = 0; $i < $conteo; $i++) {
    $ubicacionTemporal = $_FILES["archivos"]["tmp_name"][$i];
    $nombreArchivo = $_FILES["archivos"]["name"][$i];
    $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
    // Renombrar archivo
    $nuevoNombre = sprintf("%s_%d.%s", uniqid(), $i, $extension);
    // Mover del temporal al directorio actual
    move_uploaded_file($ubicacionTemporal, 'archivos/'.$nuevoNombre);
}
// Responder al cliente
echo json_encode(true);


$_SESSION["router_archive"] = 'archivos/'.$nuevoNombre;

?>