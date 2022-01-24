<?php
include('database.php');
$correo=$_POST['user_email'];
$contraseña=$_POST['user_passwork'];



$conexion=mysqli_connect($host_bd,$usuario,$contrasena,$nombre_bd);

$consulta="SELECT*FROM tusuario where user_email='$correo' and user_passwork='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    $cons_bienvenida="SELECT user_id, user_type, user_nickname FROM tusuario where user_email='$correo' and user_passwork='$contraseña'";
    $result = mysqli_query($conexion,$cons_bienvenida);
    $fila = mysqli_fetch_row($result);
    $tipo_usu= $fila[1]; 
    $tipo_usu_val= $fila[1]; 
    $nick_usu= $fila[2]; 
    $user_id= $fila[0];
    
    session_start();

    if ($tipo_usu == "estudiante") {
        $tipo_usu= "Estudiante";
        $_SESSION['tipo_usu_val']=1;

    } elseif ($tipo_usu == "docente") {
        $tipo_usu= "Docente";
        $_SESSION['tipo_usu_val']=2;

    } elseif ($tipo_usu == "admin") {
        $tipo_usu= "Administrador";
        $_SESSION['tipo_usu_val']=3;

    }

    $_SESSION['nick_usu']= $nick_usu;
    $_SESSION['user_id']= $user_id;

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

<div class="container flex w-24 h-24 mb-4" id="logo">
<img class="object-contain" src="recursos\logo.png" id="logo">
</div>

<div class="container w-full h-24 text-center" id="invalidado">
<h1 class="block text-green-700 text-2xl font-bold mb-2 text-center">Bienvenido</h1>
<h1 class="block text-black-700 text-lg font-bold mb-2 text-center"><?php echo $tipo_usu;?> <?php echo $nick_usu;?></h1>
<h1 class="block text-gray-700 text-sm font-bold mb-2 text-center">Redirigiendo...</h1>
<h1 class="block text-gray-700 text-sm font-bold mb-2 text-center"><?php echo $_SESSION['tipo_usu_val'];?></h1>
</div>

</div>
</body>
</html>

    <?php

    header("refresh:2;url=home.php");
    
    


}else{

    ?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Invalidado</title>
</head>
<body>
<div class="h-screen flex flex-col items-center justify-center">

<div class="container flex w-24 h-24 mb-4" id="logo alert">
<img class="object-contain" src="recursos\alert.png" id="logo-alert">
</div>

<div class="container w-full h-24 text-center" id="invalidado">
<h1 class="block text-black-700 text-lg font-bold mb-2 text-center">Correo o contraseña incorrecta</h1>
<h1 class="block text-black-300 text-sm font-bold mb-2 text-center">Redirigiendo...</h1>
</div>

</div>
</body>
</html>


    <?php
    $warnings = 'Correo o contraseña incorrecta';



    header("refresh:2;url=index.php");

  
  
  ?>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
