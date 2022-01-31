<?php

include('../database.php');
$conexion=mysqli_connect($host_bd,$usuario,$contrasena,$nombre_bd);

$docente='docente';
$admin='admin';
$cons_docente= $conexion -> query("SELECT * FROM taulavirtual");

?>

<?php



while ($row = mysqli_fetch_array($cons_docente)) {             
    echo $row["aula_id"]."<br>".$row["aula_title"]."<br>".$row["aula_subtitle"]."<br>".$row["aula_type"]."<br>".$row["aula_grade"]."<br>".$row["aula_docente"]."<br>".$row["aula_creation_date"];
    echo "<br>";
    echo "<br>";
  }


?>