<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Subir</title>
</head>
<body>

<form action="app.php" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" id="contenido_archive" name="contenido_archive" method="POST">
<label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-6" for="grid-password">
Subir contenido aula virtual
</label>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      Titulo
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="content_a_title" id="content_a_title" type="text" placeholder="Titulo">
    </div>
    <div class="w-full md:w-1/2 px-3  mb-6">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
      Sub titulo
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="content_a_subtitle" id="content_a_subtitle" type="text" placeholder="Sub titulo">
    </div>
    <div class="w-full h-1/2 md:w-full h-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      Contenido
      </label>
      <textarea form="contenido_archive" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="content_a_comment" id="content_a_comment" type="text" placeholder="Contenido"></textarea>
    </div>

    



    <div class="w-full h-1/2 mt-3 md:w-full h-1/2 px-3 mb-6 md:mb-0">

    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      Subir archivo
    </label>

        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" multiple type="file" class="form-control" id="inputArchivos">
    </div>

                <div class="w-full h-1/2 mt-2 md:w-full h-1/2 px-3 mb-6 md:mb-6">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" id="btnEnviar" class="btn btn-success" type="submit" value="subida">Enviar</button>
                </div>

                <div class="alert alert-info" id="estado"></div>
                <p class="text-red-600 text-sm italic mb-2" id="warnings"></p>
     
                </form>

</body>
    <script src="app.js"></script>
    <script src="pre_app.js"></script>