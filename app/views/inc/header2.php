
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
  <main class="bg-gradient gap-0">
    <header class="w-full p-4 bg-gray-900/80 z-10">
      <div class="flex justify-between items-center">
        <div>
          <figure class=""><a href="localhost/php-platzi"><svg class="w-[90px] h-[30px]" fill="none"
                viewBox="0 0 92 32" xmlns="http://www.w3.org/2000/svg">
                <g fill="#0AE98A" clip-path="url(#platzi-logo-new_svg__a)">
                  <path
                    d="M25.334 25.135V6.106h8.77c1.897 0 3.355.555 4.386 1.663s1.546 2.606 1.546 4.473-.515 3.364-1.546 4.473c-1.03 1.108-2.499 1.662-4.385 1.662H28.63v6.748h-3.306zm3.306-9.675h5.26c.837 0 1.488-.214 1.965-.651q.7-.657.7-1.867v-1.39c0-.807-.234-1.44-.7-1.867-.467-.438-1.119-.652-1.965-.652h-5.26v6.437zm32.797 9.675c-.836 0-1.478-.243-1.935-.72-.447-.476-.72-1.088-.816-1.827h-.146c-.292.953-.827 1.682-1.604 2.168q-1.165.73-2.84.73-2.362-.001-3.646-1.226c-.856-.817-1.274-1.925-1.274-3.306 0-1.517.554-2.664 1.653-3.423q1.648-1.137 4.842-1.137h2.752V15.11q0-1.398-.758-2.168c-.506-.506-1.294-.759-2.373-.759q-1.34 0-2.197.584a5.2 5.2 0 0 0-1.43 1.488l-1.906-1.721c.506-.856 1.216-1.566 2.14-2.12.914-.554 2.12-.836 3.597-.836 1.974 0 3.481.457 4.531 1.37 1.05.915 1.576 2.237 1.576 3.948v7.633h1.604v2.606h-1.789zM55 23.055c.992 0 1.819-.224 2.46-.662.642-.437.963-1.03.963-1.77v-2.197H55.73c-2.207 0-3.306.68-3.306 2.052v.525c0 .68.233 1.196.69 1.536s1.09.515 1.887.515m18.689 2.08v-2.577l8.158-10.034h-7.895V9.879l11.668.039v2.46l-8.275 10.151h8.479v2.606zm-29.841.01a1.89 1.89 0 0 1-1.896-1.896V6.126h3.189v16.413h2.11v2.606zM89.11 8.022a1.896 1.896 0 1 0 0-3.792 1.896 1.896 0 0 0 0 3.792M63.499 9.889h-.282v2.645h2.44v9.305c0 1.05.282 1.867.846 2.44.564.574 1.4.866 2.519.866h2.78v-2.606h-2.955V12.534h3.189V9.889h-3.19V6.106h-2.868v1.887c0 1.04-.846 1.886-1.886 1.886h-.593zm24.017.039h3.19v15.207h-3.19z">
                  </path>
                  <path fill-rule="evenodd"
                    d="m9.65 4.803-8.07 8.07a3.81 3.81 0 0 0 0 5.388l8.08 8.08a3.81 3.81 0 0 0 5.387 0l2.693-2.694-2.693-2.693-2.694 2.693-8.08-8.08 8.07-8.07 5.387 5.387-5.387 5.386 2.694 2.694 5.387-5.387a3.81 3.81 0 0 0 0-5.387l-5.387-5.387a3.81 3.81 0 0 0-5.387 0"
                    clip-rule="evenodd"></path>
                </g>
                <defs>
                  <clipPath id="platzi-logo-new_svg__a">
                    <path fill="#fff" d="M.461 0h91.077v32H.461z"></path>
                  </clipPath>
                </defs>
              </svg></a></figure>
        </div>
        <div class="flex justify-center items-center gap-8 text-white">
          <span>Cursos</span>
          <span>Planes</span>
          <span>Contactanos</span>
        </div>
            <div class="flex flex-row-reverse">
              <?php
                if (!isset($_SESSION['usuario_token'])):?>
                    <button id="buttonLogin" class="px-3 py-2 rounded-lg bg-white text-black">Acceder</button>
              <?php else: ?>
                  <span>Bienvenido</span>
              <?php endif;?>
            </div>
      </div>

    </header>