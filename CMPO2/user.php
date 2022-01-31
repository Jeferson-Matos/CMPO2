<?php 
session_start();

if ($_SESSION['tipo_usu_val'] == 1){
    $Modo = 'Estudiante';
}elseif($_SESSION['tipo_usu_val'] == 2){
    $Modo = 'Docente';
}elseif($_SESSION['tipo_usu_val'] == 3){
    $Modo = 'Administrador'; };

if ($_SESSION['tipo_usu_val'] < 1){
header('location: index.php');}
include ('avatar\pre_app.php');

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
<div class="flex flex-wrap bg-gray-100 w-full h-screen">
    <div class="bg-white rounded p-3 shadow-lg md:w-5/12 lg:w-3/12">
        
    <!-- Escritorio -->
    
    <div class="lg:flex items-center space-x-4 p-2 mb-5 sm:hidden">
            <img class="rounded-full w-16 md:w-36 md:h-32 lg:w-16 lg:h-14" src="<?php echo $_SESSION['avatar_img']; ?>" alt="James Bhatta">
            <div>
                <h4 class="font-semibold text-gray-700 capitalize font-poppins tracking-wide md:text-3xl lg:text-lg"><?php echo $_SESSION['nick_usu']; ?></h4>
                <span class="tracking-wide flex items-center space-x-1 md:text-2xl lg:text-sm">
                    <svg class="text-green-500 md:h-10 lg:h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg><span class="text-gray-600"><?php echo $Modo; ?></span>
                </span>
            </div>
        </div>

    <!-- Movil -->

    <div class="lg:hidden space-x-4 p-2 mb-5">
    <div class="grid place-items-center mb-5"><img class="rounded-full w-56 h-52" src="<?php echo $_SESSION['avatar_img']; ?>" alt="James Bhatta"></div>
            <div class="grid place-items-center mb-2">
                <h4 class="font-semibold text-gray-700 capitalize font-poppins tracking-wide mb-5 md:text-5xl lg:text-lg"><?php echo $_SESSION['nick_usu']; ?></h4>
                <span class="tracking-wide flex items-center space-x-1 mb-5 md:text-4xl lg:text-sm">
                    <svg class="text-green-500 md:h-10 lg:h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg><span class="text-gray-600"><?php echo $Modo; ?></span>
                </span>
            </div>
        </div>

        <ul class="md:space-y-16 lg:space-y-2 sm:text-xl md:text-5xl lg:text-sm">
            <li>
                <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 bg-gray-200 focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="md:h-14 lg:h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </span>
                    <span>Mi perfil</span>
                </a>
            </li>
            <li>
                <button onclick="" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline" id="boton_avatar">
                    <span class="text-gray-600">
                        <svg class="md:h-14 lg:h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    <span>Mi avatar</span>
                </button>
            </li>
            <li>
                <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="md:h-14 lg:h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                        </svg>
                    </span>
                    <span>Ajustes</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="md:h-14 lg:h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </span>
                    <span>Cambiar contraseña</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="md:h-14 lg:h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </span>
                    <span>Cerrar sesión</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="md:w-7/12 lg:w-9/12">
        <div class="p-4 text-gray-500" id="Content">
            Content here... <?php ?>
        </div>
    </div>
</div>

<script src="jquery-3.6.0.min.js"></script>
<script src="user/app.js"></script>