<?php include ('avatar\pre_app.php'); ?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="w-screen mx-auto" id="header_general">
        <div class="container bg-white w-20 h-20 absolute rounded-full top-0 right-0" id="user_option_div">
        <button onclick="ocultar_lateral_menu()" id="user_option"><img class="object-fill w-full h-full rounded-full hover:border-gray-200" src="<?php echo $avatar_img; ?>" id="user-icon">
        </div>
        <div class="bg-gray-500 w-full center" id="header_superior">
        <div id="no_texto_header_superior"></div>
        <div class="text-base font-sans font-bold ml-2" id="texto_header_superior">
        <h1 class="text-left" id="header_text">Unidad Educativa Privada</h1>
        <h1 class="text-left" id="header_text">Dr. Cristóbal Mendoza </h1>
        <h1 class="text-left" id="header_text">Plataforma En línea</h1>
        <div class="h-2" id="fill"></div>
    </div>
        </div>
        <div class="h-2" id="header_inferior"></div>
        <div class="flex mx-auto">
        <ul class="flex font-bold">
  <li class="mr-3">
  <a class="inline-block border border-white rounded hover:border-gray-200 text-black-500 hover:bg-gray-200 py-1 px-3 sm:hidden" href="#">Aulas virtuales</a>
    <div class="invisible sm:visible">
    <a class="inline-block border border-white rounded hover:border-gray-200 text-black-500 hover:bg-gray-200 py-1 px-3" href="#">Aulas virtuales</a>
    <?php if ($_SESSION['tipo_usu_val'] > 1){ ?>
    <a class="inline-block border border-white rounded hover:border-gray-200 text-black-500 hover:bg-gray-200 py-1 px-3" href="#">Opciones de docente</a>
    <?php } ?><?php if ($_SESSION['tipo_usu_val'] == 3){ ?>
    <a class="inline-block border border-white rounded hover:border-gray-200 text-black-500 hover:bg-gray-200 py-1 px-3" href="#">Opciones de administrador</a>
    <?php } ?>
    <a class="inline-block border border-white rounded hover:border-gray-200 text-black-500 hover:bg-gray-200 py-1 px-3" href="#">Notificaciones</a>
    </div>
  </li>
</ul>
        </div>
    </div>
    </body>
</html>