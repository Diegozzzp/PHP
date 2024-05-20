<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="h-full flex items-center justify-around bg-[url('./bg.jpg')] bg-cover bg-no-repeat ">
    <?php
        
    ?>
<div class="w-[90%] h-[90vh] flex justify-around ease-out duration-500">
    <div class=" text-white w-[90%] h-[90vh] flex justify-around ease-out duration-500 absolute opacity-0 active: visible opacity-100 ">
        <form class="w-[400px] p-2 m-8 bg-gray-500/[0.5] text-center opacity-100 " action="home.php" method="post">
            <h2 class="p-[2.7rem] font-semibold text-3xl">Crear una cuenta</h2>
            <div class="w-[200px] flex place-content-around m-auto">
                <div class="h-[20px] w-[20px] flex items-center justify-center p-[1.5rem] border-solid border-white border-[1px] rounded-[50%] text-2xl ease-in duration-300 pointer">
                    <i class='bx bxl-instagram' style="color: #ffff;"></i>
                </div>
                <div class="h-[20px] w-[20px] flex items-center justify-center p-[1.5rem] border-solid border-white border-[1px] rounded-[50%] text-2xl ease-in duration-300 pointer">
                    <i class='bx bxl-linkedin' style="color: #ffff;" ></i>
                </div>
                <div class="h-[20px] w-[20px] flex items-center justify-center p-[1.5rem] border-solid border-white border-[1px] rounded-[50%] text-2xl ease-in duration-300 pointer">
                    <i class='bx bxl-facebook-circle' style="color: #ffff;" ></i>
                </div>
            </div>
            <p class="p-4">Crear tu cuenta</p>
            <input class="w-[70%] block m-auto mb-4  bg-transparent border-b border-b-white border-b text-center outline-none p-2 text-lg text-white" type="text" name="name" id="nombre" placeholder="Nombre">
            <input class="w-[70%] block m-auto mb-4  bg-transparent border-b border-b-white border-b text-center outline-none p-2 text-lg text-white" type="email" name="email" id="email" placeholder="Email">
            <input class="w-[70%] block m-auto mb-4  bg-transparent border-b border-b-white border-b text-center outline-none p-2 text-lg text-white" type="password" name="password" id="password" placeholder="Contraseña">
            <input class="w-[60%] m-auto border-solid p-[.7rem] rounded-[2rem] bg-white font-bold mt-[3rem] text-[.8rem] pointer text-black" type="submit" value="send">
        </form>
    </div>
</div>
</body>
</html>

