
<?php

require 'C:\xampp\htdocs\CMPO\database.php';


/*
if(empty($_POST["user_name_p"]) || empty($_POST["user_name_s"]) || empty($_POST["user_lastname_p"]) || empty($_POST["user_lastname_s"]) || empty($_POST["user_cedula"]) || empty($_POST["user_phone"]) || empty($_POST["user_grade"]) || empty($_POST["user_email"]) || empty($_POST["user_passwork"])){

  echo "Falla de inicio";
  exit();

}
*/


$name_p = $_POST["user_name_p"];
$name_s = $_POST["user_name_s"];
$lastname_p = $_POST["user_lastname_p"];
$lastname_s = $_POST["user_lastname_s"];
$cedula = $_POST["user_cedula"];
$phone = $_POST["user_phone"];
$grade = 0;
$email = $_POST["user_email"];
$passwork = $_POST["user_passwork"];
$nickname = $name_p.' '.$lastname_p;
$type = 'docente';



$sentencia = $bd->prepare("INSERT INTO tusuario(user_type,user_email,user_passwork,user_nickname,user_grade,user_name_p,user_name_s,user_lastname_p,user_lastname_s,user_cedula,user_phone) VALUES (?,?,?,?,?,?,?,?,?,?,?);");
$resultado = $sentencia->execute([$type,$email,$passwork,$nickname,$grade,$name_p,$name_s,$lastname_p,$lastname_s,$cedula,$phone]);


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
<h1 class="block text-green-700 text-lg font-bold mb-2 text-center">Validado</h1>
<h1 class="block text-black-200 text-sm font-bold mb-2 text-center"><?php echo $nickname;?></h1>
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