<html>
<?php session_start(); 

?>
<div class="w-full" id="avatar">

<form action="post_app.php" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" id="contenido_archive" name="contenido_archive" method="POST">
<label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-6" for="grid-password">
Cambiar avatar
</label>
    <div class="w-full h-1/2 mt-3 md:w-full h-1/2 px-3 mb-6 md:mb-0">

    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      Tu imagen de avatar actual
    </label>
    <div class="flex items-center space-x-4 p-2 mb-2 mt-2">
    <img class="rounded-full w-16 md:w-36 md:h-32 lg:w-24 lg:h-20" src="<?php echo $_SESSION['avatar_img']; ?>" alt="James Bhatta">
    </div>



    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      Subir imagen
    </label>

        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" multiple type="file" class="form-control" id="inputArchivos">
    </div>

                <div class="w-full h-1/2 mt-2 md:w-full h-1/2 px-3 mb-2 md:mb-2">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" id="btnEnviar" class="btn btn-success" type="submit" value="subida">Subir Avatar</button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Eliminar Avatar</button>
                </div>

                <div class="alert alert-info" id="estado"></div>
                <p class="text-red-600 text-sm italic mb-2" id="warnings"></p>
                
                
                </form>

                

</div>
    <script src="avatar/app.js"></script>