<?php require 'pre_app.php' ?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Registrar aula virtual</title>
</head>
<body>



<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" id="registro_salon" name="registro_salon" method="POST">

<label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-6" for="grid-password">
Registrar aula virtual
</label>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      Materia
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="materia" id="materia" type="text" placeholder="Materia">
    </div>
    <div class="w-full md:w-1/2 px-3  mb-6">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
      Sub titulo
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="sub_title" id="sub_title" type="text" placeholder="Sub titulo">
    </div>

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      Tipo de aula
      </label>
      <select class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="aula_type" name="aula_type" ><option value="Primaria">Primaria</option>
      <option value="Secundaria">Secundaria</option>
    </select>
    </div>
    <div class="w-full md:w-1/2 px-3  mb-6">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
      Grado del aula
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="aula_grade" id="aula_grade" type="number" placeholder="Grado del aula">
    </div>

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      Docente del aula
      </label>
      <select class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="aula_docente" id="aula_docente" type="text" placeholder="Docente del aula" name="docente_lista"> <?php



while ($row = mysqli_fetch_array($cons_docente)) {
                    
    echo '<option value="'.$row["user_id"].'">'.$row["user_nickname"].'</option>';
  }


?></select>
    </div>

  </div>

    <p class="text-red-600 text-sm italic mb-2" id="warnings"></p>
    <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="subida">

</form>

</body>
<script src="app.js"></script>
</html>
