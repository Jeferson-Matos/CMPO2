
<?php

require 'C:\xampp\htdocs\CMPO\database.php';


/*
if(empty($_POST["user_name_p"]) || empty($_POST["user_name_s"]) || empty($_POST["user_lastname_p"]) || empty($_POST["user_lastname_s"]) || empty($_POST["user_cedula"]) || empty($_POST["user_phone"]) || empty($_POST["user_grade"]) || empty($_POST["user_email"]) || empty($_POST["user_passwork"])){

  echo "Falla de inicio";
  exit();

}
*/


$materia = $_POST["materia"];
$sub_title = $_POST["sub_title"];
$aula_type = $_POST["aula_type"];
$aula_grade = $_POST["aula_grade"];
$aula_docente = $_POST["aula_docente"];

if ($aula_type == 'Secundaria'){
    $titulo = 'año';
}elseif ($aula_type == 'Primaria'){$titulo = 'grado';}



$sentencia = $bd->prepare("INSERT INTO taulavirtual(aula_title,aula_subtitle,aula_type,aula_grade,aula_docente) VALUES (?,?,?,?,?);");
$resultado = $sentencia->execute([$materia,$sub_title,$aula_type,$aula_grade,$aula_docente]);


if ($resultado === TRUE) {
  
  
  ?>
  
  <html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Validado</title>
</head>
<body>
<div class="h-screen flex flex-col items-center justify-center">

<div class="container flex w-24 h-24" id="logo CMPO">
<img class="object-contain" src="../recursos/logo.png" id="logo-CMPO">
</div>

<div class="container w-32 h-24 text-center" id="validado">
<h1 class="block text-green-700 text-lg font-bold mb-2 text-center">Creado</h1>
<h1 class="block text-black-200 text-sm font-bold mb-2 text-center">Aula <?php echo $materia;?>, <?php echo $aula_grade;?>° <?php echo $titulo;?></h1>
</div>

</div>
</body>
</html>
  
  <?php

  header("refresh:2;url=index.php");

} else {
  echo "Fallido";;
  exit();
}



?>