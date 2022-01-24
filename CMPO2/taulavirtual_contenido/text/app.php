<?php

include ('../../database.php');


$title = $_POST["content_p_title"];
$sub_title = $_POST["content_p_subtitle"];
session_start();
$content = $_POST["content_p_content"];
$user = $_SESSION["user_id"]; 

$sentencia = $bd->prepare("INSERT INTO taulavirtual_contenido_p (content_p_title, content_p_subtitle, content_p_content, user_id) VALUES (?,?,?,?);");
$resultado = $sentencia->execute([$title, $sub_title, $content, $user]);

?>