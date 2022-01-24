<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">


<div class="" id="lateral-general">
<div class="w-1/2 h-full bg-red-500 absolute top-0 right-0 md:w-2/12">
<button onclick="ocultar_lateral_menu()" class="bg-white w-full hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border">
  Ocultar menú
</button>
<div class="h-fit bg-blue-500 grid place-items-center" id="fill">

<div class="container w-20 h-20 content-center" id="user_option_div">
<a href="#" id="user_option"><img class="object-contain hover:border-gray-200" src="recursos/user-icon.png" id="user-icon"></a>
</div>
<h1 class="text-center" id="header_text"><?php echo $_SESSION['nick_usu']; ?></h1>
</div>
<div class="h-2" id="fill"></div>
<div class="">
<button class="bg-white w-full hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border">
  Button
</button>
<button class="bg-white w-full hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border">
  Button
</button>
<a href="/logout.php" class="">
  <div class="bg-white w-full text-center hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border"> Cerrar sesión </div>
</a>
</div>
</div>
</div>