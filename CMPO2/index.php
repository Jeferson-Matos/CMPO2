<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>login</title>
</head>
<body class="max-w-7xl">
<div class="h-screen w-screen flex flex-col items-center justify-center">
<div class="container flex w-24 h-24" id="logo CMPO">
<img class="object-contain" src="recursos/logo.png" id="logo-CMPO">
</div>
<div class="content-center">
  <form class="bg-gray-200 shadow-lg rounded px-8 pt-6 pb-8 mb-4" action="validar.php" method="post" name="login_form">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
        Correo Electronico
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="user_email" name="user_email" type="text" placeholder="ejemplo@correo.com">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Contraseña
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="user_passwork" name="user_passwork" type="password" placeholder="******************">
      <p class="text-red-500 text-xs italic" id="warnings"><?php echo $warnings='';?></p>
    </div>
    <div class="flex items-center justify-between">
      <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Ingresar">
    </div>
  </form>
</div>
</div>
</body>
</html>