<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body onload="ocultar_more_option();">

    <div class="absolute bottom-0 right-0 m-2 sm:invisible">



    <div class="mx-auto rounded-full bg-white shadow-xl flex flex-col items-center justify-center m-2" id="more_option_div">


    
    <div class="w-14 h-14 rounded-full bg-white shadow-xl flex flex-col items-center justify-center m-2" id="user_option_div">
        <div class="bg-white w-8 h-8 object-contain">
        <button type='button'><img class="object-contain" src="recursos\bell.png" id="user-icon"></button>
        </div>
    </div>

<?php if ($_SESSION['tipo_usu_val'] == 3){ ?>

    <div class="w-14 h-14 rounded-full bg-white shadow-xl flex flex-col items-center justify-center m-2" id="user_option_div">
        <div class="bg-white w-8 h-8 object-contain">
        <button type='button'><img class="object-contain" src="recursos\support.png" id="user-icon"></button>
        </div>
    </div>
    
    <?php } ?>

<?php if ($_SESSION['tipo_usu_val'] > 1){ ?>

    <div class="w-14 h-14 rounded-full bg-white shadow-xl flex flex-col items-center justify-center m-2" id="user_option_div">
        <div class="bg-white w-8 h-8 object-contain">
        <button type='button'><img class="object-contain" src="recursos\plus.png" id="user-icon"></button>
        </div>
    </div>

    <?php } ?>

    <div class="w-14 h-14 rounded-full bg-white shadow-xl flex flex-col items-center justify-center m-2" id="user_option_div">
        <div class="bg-white w-8 h-8 object-contain">
        <button type='button'><img class="object-contain" src="recursos\message.png" id="user-icon"></button>
        </div>
    </div>

    </div>



    <div class="w-14 h-14 rounded-full bg-white shadow-xl flex flex-col items-center justify-center m-2" id="user_option_div">
        <div class="bg-white w-8 h-8 object-contain">
        <button onclick="ocultar_more_option()"><img class="object-contain" src="recursos\more-options.png" id="user-icon"></button>
        </div>
    </div>
    


</div>
</body>
</html>

