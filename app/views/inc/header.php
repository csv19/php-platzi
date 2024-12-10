<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- <link rel="stylesheet" href="global.css"> -->
  <link rel="stylesheet" href="http://localhost/php-platzi/public/styles/home.css">
  <link rel="stylesheet" href="http://localhost/php-platzi/public/styles/carousel.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="http://localhost/php-platzi/public/js/sliderLogin.js"></script>
  <title>Academia de Cursos</title>
</head>

<body>
  <main class="bg-gradient">
    <header class="container mx-auto py-4 z-10">
      <div class="grid grid-cols-3 gap-4 justify-center items-center">
        <div>
          <figure class=""><a href="localhost/php-platzi">
            <img class="w-[80px]" src="../public/src/logo.png" alt="">
          </a></figure>
        </div>
        <div class="flex justify-center items-center gap-8 text-white">
          <span>Explorar</span>
          <span>Comunidad</span>
          <span>Planes</span>
          <span>Empresas</span>
        </div>
            <div class="flex flex-row-reverse">
             <?php
              if (isset($_SESSION['usuario_token']) && $_SESSION['usuario_token']): ?>
                  <a href="dashboard" class="px-3 py-2 rounded-lg bg-white text-black">Dashboard</a>
              <?php else: ?>
                  <button id="buttonLogin" class="px-3 py-2 rounded-lg bg-white text-black">Acceder</button>
              <?php endif; ?>

            </div>
      </div>

    </header>