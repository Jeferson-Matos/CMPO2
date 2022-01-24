<?php

include ('../../database.php');


$title = $_POST["content_a_title"];
$sub_title = $_POST["content_a_subtitle"];
session_start();
$content = $_SESSION["router_archive"]; 
$comment = $_POST["content_a_comment"];
$user = $_SESSION["user_id"]; 

$sentencia = $bd->prepare("INSERT INTO taulavirtual_contenido_a(content_a_title, content_a_subtitle, Content_a_content, Content_a_comment, user_id) VALUES (?,?,?,?,?);");
$resultado = $sentencia->execute([$title, $sub_title, $content, $comment, $user]);

?>
