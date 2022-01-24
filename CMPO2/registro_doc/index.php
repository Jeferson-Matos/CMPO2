<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Registrar docente</title>
</head>
<body>



<form action="app.php" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" id="registro_doc_form" name="registro_doc_form" method="POST">

<label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-6" for="grid-password">
Registrar docente
</label>

<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2" for="grid-password">
      Datos personales
      </label>
    </div>
    </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      Primer Nombre
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="user_name_p" id="user_name_p" type="text" placeholder="Primer Nombre">
    </div>
    <div class="w-full md:w-1/2 px-3  mb-6">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
      Segundo Nombre
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="user_name_s" id="user_name_s" type="text" placeholder="Segundo Nombre">
    </div>

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      Primer Apellido
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="user_lastname_p" id="user_lastname_p" type="text" placeholder="Primer Apellido">
    </div>
    <div class="w-full md:w-1/2 px-3  mb-6">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
      Segundo Apellido
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="user_lastname_s" id="user_lastname_s" type="text" placeholder="Segundo Apellido">
    </div>

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      Cedula de indentidad
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="user_cedula" id="user_cedula" type="text" placeholder="Ejem: v-0000001">
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
      Numero de telefono
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="user_phone" id="user_phone" type="text" placeholder="Ejem: 0001-0000001">
    </div>

  </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2" for="grid-password">
      Datos del sistema
      </label>
    </div>
    </div>

  
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
      Correo electrónico
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="user_email" id="user_email" type="text" placeholder="Ejem: correo@correo.com">
    </div>
    </div>


    <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      Contraseña
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="user_passwork" id="user_passwork" type="password" placeholder="***************">
      <p class="text-gray-600 text-xs italic mb-2">La contraseña debe tener 8 caracteres o mas</p>
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
      Confirmar contraseña
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="confirm_password" id="confirm_password" type="password" placeholder="***************">
    </div>
  </div>

    <p class="text-red-600 text-sm italic mb-2" id="warnings"></p>
    <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="subida">

</form>

</body>
<script src="app.js"></script>
</html>
