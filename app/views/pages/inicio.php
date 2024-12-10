<?php 
require_once APP . '/views/inc/header.php';
require_once APP . '/views/inc/login.php';
?>
<section class="container mx-auto z-20">
  <div class="grid grid-cols-4 mx-auto items-center px-4 w-full lg:w-[1050px]">
    <div
      class="banner-navidad flex flex-col lg:flex-row gap-4 lg:rounded-l-lg col-span-4 lg:col-span-3 items-center p-4 h-auto lg:h-[60px]">
      <div>
        <img alt="Paga en 4 cuotas sin intereses de S/187.25" loading="lazy" width="150" decoding="async" data-nimg="1"
          class="" style="color:transparent"
          src="https://static.platzi.com/media/banners/Christmas_2024_Promo_Logo_1_1.png">
      </div>
      <div>
        <div>
          <p class="">Paga en 4 cuotas sin intereses de S/187.25
          </p>
          <span class="flex text-sm text-gray-300 items-center gap-2">Ahorra:
            <!-- --> <img class="rounded-full w-[20px] h-[20px]" alt="flag" loading="lazy" decoding="async"
              data-nimg="1"
              srcset="https://static.platzi.com/media/flags/PE.png 1x, https://static.platzi.com/media/flags/PE.png 2x"
              src="https://static.platzi.com/media/flags/PE.png"><span class="text-green-500">S/141</span>en Plan experto
            <!-- --> <span class="">Paga a <span class="text-green-500">4
                <!-- -->
                <!-- -->cuotas sin intereses</span></span></span>
        </div>
      </div>
    </div>
    <div
      class="col-span-4 lg:col-span-1  lg:rounded-r-lg flex flex-col items-center justify-center banner-navidad-end h-[60px]">
      <p class="text-gray-300">Termina en:<div class="text-yellow-500" id="contador2"></div>
    </div>
  </div>
  <div
    class="px-4 md:px-0 py-6 text-left md:text-center text-2xl md:text-4xl lg:text-5xl font-bold leading-none md:leading-snug">
    <h1 class="text-white">La escuela de tecnología <br><span class="text-green-400 ">del Perú</span></h1>

    <p class="text-sm md:text-lg lg:text-2xl text-gray-300 font-normal my-4">
      Más de 5 millones de estudiantes y más
      <br>de 3.000 empresas aprenden en Guirmabot
      <br>
      ¿Qué quieres aprender?
      </b>
      <div class="w-full md:w-[400px] h-[192px] relative mx-auto mb-8">
        <input id="searchInput" placeholder="" type="text"
          class="searchInput relative w-full h-[50px] bg-black-opacity rounded-lg border-solid border-2 border-green-600 text-sm px-2 font-light">
        <button class="absolute top-2 md:top-4 lg:top-6 right-4" aria-label="Search Icon Btn"><svg class="text-gray-300"
            width="27" height="27" fill="none" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
            <path stroke="#87909d" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="m18.334 18.333-3.322-3.321m-11.346-4.7a6.646 6.646 0 1 0 6.646-6.645v0a6.646 6.646 0 0 0-6.645 6.646">
            </path>
          </svg></button>
        <div id="searchSelect" class="bg-select pb-2 relative hidden">
          <ul class="p-2 text-sm font-normal text-left z-20">
            <?php foreach ($datos as $item => $curso): 
            if($item <=2):
          ?>
            <a href="<?= $datos[$item]['url'] ?>">
              <li class="hover:cursor-pointer flex items-center hover:bg-gray-800/50 p-4 rounded-md gap-4 capitalize">
                <figure><img alt="<?= $datos[$item]['nombre'] ?>" loading="lazy" width="20" height="20" decoding="async"
                    data-nimg="1" srcset="" src="<?= $datos[$item]['icon'] ?>" style="color: transparent;"></figure>
                Curso de <?= $datos[$item]['nombre'] ?>
              </li>
            </a>
            <?php
          endif;
         endforeach; ?>
          </ul>
        </div>
        <p class="top-20 w-full absolute text-sm md:text-base font-normal">
          Empieza cualquier curso sin costo.<br class="hidden md:block">
          O consigue Guirmabot para tu empresa
        </p>
      </div>


  </div>
</section>
<section class="relative top-[-120px] px-4 md:px-0 w-full md:max-w-7xl mx-auto z-10">
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 justify-center items-center gap-2 sm:gap-4 md:gap-7">
    <?php foreach ($datos as $item => $curso): ?>
      <a class="w-full h-full" href="<?= $datos[$item]['url'] ?>">
    <div
      class="cursor-pointer rounded-md bg-gray-800/50 overflow-hidden bg-curse flex gap-4 justify-between items-center p-2 h-[90px]">
      
      <div class="flex items-center gap-4">
        <div class="bg-curse-icon"><img width="40" src="<?= $datos[$item]['icon'] ?>" alt=""></div>
        <div>
          <p class="text-gray-300 font-bold text-xs uppercase">Curso de</p>
          <p class="text-base font-semibold capitalize"><?= $datos[$item]['nombre'] ?></p>
        </div>
      </div>
      <div>
        <svg width="1em" height="1em" fill="none" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill="#fff" fill-rule="evenodd"
            d="M7.891 6.225a.625.625 0 0 1 .884 0l3.333 3.333a.625.625 0 0 1 0 .884l-3.333 3.333a.625.625 0 1 1-.884-.884L10.783 10 7.89 7.109a.625.625 0 0 1 0-.884"
            clip-rule="evenodd"></path>
        </svg>
      </div>
    </div>
    </a>
    <?php endforeach; ?>
  </div>
</section>
<section class="relative top-[-120px] container mx-auto z-10">
  <div class="text-center max-w-xl mx-auto">
    <h3 class="text-3xl font-normal mt-20 mb-10">Descubre tu ruta de <br> aprendizaje personalizada</h3>
    <textarea placeholder="Quiero crear experiencias de usuario atractivas en la web, escribir y crear contenido"
      class="searchInput p-4 bg-green-500 input-shadow w-full bg-black-opacity rounded-lg border-solid border-2 border-green-600 text-base px-2 font-light w-full h-[120px]"></textarea>
  </div>
  <div class="text-center my-4">
    <button
      class="bg-green-400 hover:bg-green-400/90 text-sm text-black font-light rounded-md py-3 px-4 w-[150px]">Generar mi
      ruta</button>
  </div>
</section>
<section class="relative top-[-120px] container mx-auto z-10">
  <div class="container h-100">
    <div class="row align-items-center h-100">
      <div class="container rounded">
        <div class="slider">
          <div class="logos">
            <i class="fab fa-js fa-3x"></i>
            <i class="fab fa-linkedin-in fa-3x"></i>
            <i class="fab fa-dribbble fa-3x"></i>
            <i class="fab fa-medium-m fa-3x"></i>
            <i class="fab fa-github fa-3x"></i>
          </div>
          <div class="logos">
            <i class="fab fa-js fa-3x"></i>
            <i class="fab fa-linkedin-in fa-3x"></i>
            <i class="fab fa-dribbble fa-3x"></i>
            <i class="fab fa-medium-m fa-3x"></i>
            <i class="fab fa-github fa-3x"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center">
    <h3 class="text-3xl font-normal mt-20 mb-10"><span class="text-green-400">Más de 3000</span> empresas usan Guirmabot
      para la información de sus equipos</h3>
    <button
      class="border-green-500 bg-black-opacity border-solid border-2 hover:border-1 text-sm text-green-400 font-light rounded-md py-3 px-4 w-[150px]">Registrate</button>
  </div>
  </div>
</section>
<section class="relative top-[-120px] px-4 md:px-0 w-full md:max-w-7xl mx-auto z-10">
  <div class="">
    <div class="relative flex flex-col justify-center items-center h-[900px]">
    <div class="image-container">
        <img class="rounded-md shadow-lg" src="http://localhost/guirmabot/public/src/ceo.png" alt="Imagen" />
      </div>  
    <div>
        <h3 class="text-4xl text-green-400 text-center font-semibold mt-20 mb-10">Somos Guirmabot</h3>
        <span class="text-xl text-center">
        Descubre una academia online que transforma tu forma de aprender. En Guirmabot ofrecemos cursos diseñados para potenciar tus habilidades y abrirte nuevas oportunidades. Desde tecnología y diseño hasta negocios y desarrollo personal, nuestro contenido es creado por expertos y está disponible 24/7 para que aprendas a tu ritmo. Únete a nuestra comunidad global de estudiantes apasionados y da el siguiente paso hacia tus metas. Con Guirmabot, ¡el aprendizaje está a solo un clic de distancia!
        </span>
          
      </div>
      
    </div>
  </div>
</section>
<section class="relative top-[-120px] px-4 md:px-0 w-full md:max-w-7xl mx-auto z-10">
  <div class="">
    <div class="relative flex justify-between items-start h-[700px]">
      <div>
        <h3 class="text-3xl font-normal mt-20 mb-10"><span class="text-green-400">Somos la autoridad</span> en <br>
          escalar
          la educación en <br> línea en América Latina</h3>
        <ul class="line-descripcion pl-4">
          <li class="item" data-img="http://localhost/guirmabot/public/src/fondo.webp">
            <div class="flex items-center gap-4"><svg width="40" height="40" fill="none" viewBox="0 0 26 26"
                xmlns="http://www.w3.org/2000/svg">
                <path fill="#0ae98a" fill-rule="evenodd"
                  d="M11.68 10.895v4.209L15.237 13zm.7-1.184a1.375 1.375 0 0 0-2.076 1.184v4.209a1.375 1.375 0 0 0 2.075 1.184l3.558-2.105c.9-.532.9-1.835 0-2.367z"
                  clip-rule="evenodd"></path>
                <path fill="#0ae98a" fill-rule="evenodd"
                  d="M7.5 5.438c-1.14 0-2.062.923-2.062 2.062v11c0 1.14.923 2.063 2.062 2.063h11c1.14 0 2.063-.924 2.063-2.063v-11c0-1.14-.924-2.062-2.063-2.062zM4.063 7.5A3.437 3.437 0 0 1 7.5 4.063h11A3.437 3.437 0 0 1 21.938 7.5v11a3.437 3.437 0 0 1-3.438 3.438h-11A3.437 3.437 0 0 1 4.063 18.5z"
                  clip-rule="evenodd"></path>
              </svg>
              <p class="text-lg text-gray-400">Aprende algo nuevo cada 5 minutos</p>
            </div>
          </li>
          <li class="item" data-img="http://localhost/guirmabot/public/src/fondo1.webp">
            <div class="flex items-center gap-4"><svg width="40" height="40" fill="none" viewBox="0 0 40 40"
                xmlns="http://www.w3.org/2000/svg">
                <path fill="#0AE98A" fill-rule="evenodd"
                  d="M30 27.949a2.692 2.692 0 1 0 0 5.384 2.692 2.692 0 0 0 0-5.384m-5 2.692a5 5 0 1 1 10 0 5 5 0 0 1-10 0m-13.461-25a4.23 4.23 0 0 0-4.231 4.23c0 .884.514 1.949 1.378 3.057.83 1.064 1.852 2.006 2.597 2.63a.43.43 0 0 0 .51 0c.745-.624 1.768-1.565 2.598-2.63.864-1.108 1.378-2.173 1.378-3.056a4.23 4.23 0 0 0-4.23-4.23M5 9.871a6.538 6.538 0 0 1 13.077 0c0 1.674-.914 3.254-1.866 4.476-.98 1.256-2.15 2.324-2.958 2.997l-.029.024a2.74 2.74 0 0 1-3.403-.025c-.806-.673-1.977-1.74-2.956-2.997C5.913 13.124 5 11.545 5 9.872m15.385 2.309c0-.638.516-1.154 1.153-1.154h3.077a5.77 5.77 0 0 1 0 11.538h-9.23a3.462 3.462 0 0 0 0 6.923H20a1.154 1.154 0 1 1 0 2.308h-4.615a5.77 5.77 0 0 1 0-11.538h9.23a3.462 3.462 0 0 0 0-6.924H21.54a1.154 1.154 0 0 1-1.154-1.153"
                  clip-rule="evenodd"></path>
                <path fill="#0AE98A" d="M11.539 11.41a1.538 1.538 0 1 0 0-3.077 1.538 1.538 0 0 0 0 3.077"></path>
              </svg>
              <p class="text-lg text-gray-400">Rutas profesionales te guían de principiante a profesional</p>
            </div>
          </li>
          <li class="item" data-img="http://localhost/guirmabot/public/src/fondo2.webp">
            <div class="flex items-center gap-4"><svg width="40" height="40" fill="none" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path fill="#0AE98A" fill-rule="evenodd"
                  d="M17 9.5a.705.705 0 0 1 0 .998l-4 4.001a.705.705 0 0 1-1.013-.016L10 12.363l-1.987 2.12a.705.705 0 0 1-1.028-.964l2.5-2.668a.705.705 0 0 1 1.03 0l2.003 2.136 3.486-3.486a.705.705 0 0 1 .997 0"
                  clip-rule="evenodd"></path>
                <path fill="#0AE98A" fill-rule="evenodd"
                  d="M2.246 7.996a5.75 5.75 0 0 1 5.75-5.75h8.008a5.75 5.75 0 0 1 5.75 5.75v8.008a5.75 5.75 0 0 1-5.75 5.75H7.996a5.75 5.75 0 0 1-5.75-5.75zm5.75-4.25a4.25 4.25 0 0 0-4.25 4.25v8.008a4.25 4.25 0 0 0 4.25 4.25h8.008a4.25 4.25 0 0 0 4.25-4.25V7.996a4.25 4.25 0 0 0-4.25-4.25z"
                  clip-rule="evenodd"></path>
              </svg>
              <p class="text-lg text-gray-400">Pon a prueba tu progreso de forma interactiva</p>
            </div>
          </li>
          <li class="item" data-img="http://localhost/guirmabot/public/src/fondo3.webp">
            <div class="flex items-center gap-4"><svg width="40" height="40" fill="none" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path fill="#0AE98A"
                  d="m9.6 14.575 1.252-2.723 2.723-1.252-2.723-1.252L9.6 6.625 8.348 9.348 5.625 10.6l2.723 1.252zm0 3.625-2.375-5.225L2 10.6l5.225-2.375L9.6 3l2.375 5.225L17.2 10.6l-5.225 2.375zm8.6 2.8-1.175-2.625L14.4 17.2l2.625-1.2 1.175-2.6 1.2 2.6 2.6 1.2-2.6 1.175z">
                </path>
              </svg>
              <p class="text-lg text-gray-400">Inteligencia artificial y comunidad que responde tus dudas</p>
            </div>
          </li>
          <li class="item" data-img="http://localhost/guirmabot/public/src/fondo4.webp">
            <div class="flex items-center gap-4"><svg width="40" height="40" fill="none" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <g fill="#0AE98A" fill-rule="evenodd" clip-rule="evenodd">
                  <path
                    d="M12 3.75A8.25 8.25 0 0 0 3.75 12 8.25 8.25 0 0 0 12 20.25 8.25 8.25 0 0 0 20.25 12 8.25 8.25 0 0 0 12 3.75m0-1.5A9.75 9.75 0 0 0 2.25 12 9.75 9.75 0 0 0 12 21.75 9.75 9.75 0 0 0 21.75 12 9.75 9.75 0 0 0 12 2.25">
                  </path>
                  <path d="M12 8.25a.75.75 0 0 1 .75.75v6a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75"></path>
                  <path
                    d="M8.97 11.97a.75.75 0 0 1 1.06 0L12 13.94l1.97-1.97a.75.75 0 1 1 1.06 1.06l-2.5 2.5a.75.75 0 0 1-1.06 0l-2.5-2.5a.75.75 0 0 1 0-1.06">
                  </path>
                </g>
              </svg>
              <p class="text-lg text-gray-400">Descarga las clases a tu teléfono y aprende sin Internet</p>
            </div>
          </li>
          <li class="item" data-img="http://localhost/guirmabot/public/src/fondo5.webp">
            <div class="flex items-center gap-4"><svg width="40" height="40" fill="none" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path fill="#0AE98A" fill-rule="evenodd"
                  d="M7 3.75A3.25 3.25 0 0 0 3.75 7v10A3.25 3.25 0 0 0 7 20.25h10A3.25 3.25 0 0 0 20.25 17V7A3.25 3.25 0 0 0 17 3.75zM2.25 7A4.75 4.75 0 0 1 7 2.25h10A4.75 4.75 0 0 1 21.75 7v10A4.75 4.75 0 0 1 17 21.75H7A4.75 4.75 0 0 1 2.25 17z"
                  clip-rule="evenodd"></path>
                <path fill="#0AE98A" fill-rule="evenodd"
                  d="M21.61 8.564a.75.75 0 0 1-.174 1.046l-7 5a.75.75 0 0 1-.966-.08l-3.551-3.55-6.483 4.63a.75.75 0 1 1-.872-1.22l7-5a.75.75 0 0 1 .966.08l3.551 3.55 6.483-4.63a.75.75 0 0 1 1.046.174"
                  clip-rule="evenodd"></path>
              </svg>
              <p class="text-lg text-gray-400">Mide el progreso de tu empresa</p>
            </div>
          </li>
          <li class="item" data-img="http://localhost/guirmabot/public/src/fondo6.webp">
            <div class="flex items-center gap-4"><svg width="40" height="40" fill="none" viewBox="0 0 40 40"
                xmlns="http://www.w3.org/2000/svg">
                <path fill="#0AE98A" fill-rule="evenodd"
                  d="M14.58 4.16a1.25 1.25 0 1 0-2.5 0v1.251H9.996a6.25 6.25 0 0 0-6.252 6.252v18.341a6.25 6.25 0 0 0 6.252 6.252h20.008a6.25 6.25 0 0 0 6.252-6.252v-18.34a6.25 6.25 0 0 0-6.252-6.253H27.92v-1.25a1.25 1.25 0 0 0-2.5 0v1.25H14.58zm-2.5 3.751v1.251a1.25 1.25 0 0 0 2.5 0v-1.25h10.84v1.25a1.25 1.25 0 1 0 2.5 0v-1.25h2.084a3.75 3.75 0 0 1 3.752 3.751v2.085H6.244v-2.085a3.75 3.75 0 0 1 3.752-3.752zm-5.836 8.337v13.756a3.75 3.75 0 0 0 3.752 3.752h20.008a3.75 3.75 0 0 0 3.752-3.752V16.248zM20 20.418a1.25 1.25 0 1 0 0 2.5h8.337a1.25 1.25 0 0 0 0-2.5zm-8.327 6.669a1.25 1.25 0 0 0-.02 2.5l8.179.061a1.25 1.25 0 1 0 .019-2.5z"
                  clip-rule="evenodd"></path>
              </svg>
              <p class="text-lg text-gray-400">Organiza el aprendizaje de tu equipo</p>
            </div>
          </li>
          <!-- Más elementos aquí -->
        </ul>
      </div>
      <div class="image-container">
        <img id="image-display" src="http://localhost/guirmabot/public/src/fondo.webp" alt="Imagen" />
      </div>
    </div>
  </div>
</section>
<section class="relative top-[-120px] px-4 md:px-0 w-full container mx-auto z-10">
  <div>
    <h3 class="text-3xl font-normal mt-20 mb-10"><span class="text-green-400">Obtén certificaciones</span> oficiales de:
    </h3>
    <div class="grid gri-cols-1 md:grid-cols-3 gap-6">
      <div class="flex flex-col bg-gray-800/50 p-8 rounded-md">
        <div class="flex justify-center gap-4 p-4">
          <img class="w-[130px] h-[40px]" src="https://static.platzi.com/media/uploads/toefl_1c45bb83c2.png" alt="">
          <p class="text-gray-300">Alianza con ETS para la certificación TOEFL en Inglés</p>
        </div>
        <div class="border border-gray-400 opacity-20"></div>
        <div class=py-2">
          <span>Ir a los cursos</span>
        </div>
      </div>
      <div class="flex flex-col bg-gray-800/50 p-8 rounded-md">
        <div class="flex justify-center gap-4 p-4">
          <img class="w-[130px] h-[40px]" src="https://static.platzi.com/media/uploads/google_acc2471b81.png" alt="">
          <p class="text-gray-300">Convenio de certificación en tecnologías cloud</p>
        </div>
        <div class="border border-gray-400 opacity-20"></div>
        <div class=py-2">
          <span>Ir a los cursos</span>
        </div>
      </div>
      <div class="flex flex-col bg-gray-800/50 p-8 rounded-md">
        <div class="flex justify-center gap-4 p-4">
          <img class="w-[130px] h-[40px]" src="https://static.platzi.com/media/uploads/comptia_logo_939065f9ea.png"
            alt="">
          <p class="text-gray-300">Domina la seguridad digital con CompTIA security</p>
        </div>
        <div class="border border-gray-400 opacity-20"></div>
        <div class=py-2">
          <span>Ir a los cursos</span>
        </div>
      </div>
    </div>
  </div>

</section>
<section class="relative top-[-120px] px-4 md:px-0 w-full z-10 bg-profesores">
  <div class="container mx-auto py-10">
    <h3 class="text-white text-3xl px-4">Nuestros profesores son <br>
      expertos de la industria</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 py-4">
      <?php foreach ($datos as $item => $curso): 
            if($item <=3):
          ?>
      <div class="max-w-80 mx-auto">
        <div class="w-[300px] h-[350px] rounded-t-xl bg-no-repeat bg-center bg-cover"
          style="background-image:url(<?= $datos[$item]['imagen_profesor'] ?>)">
        </div>
        <div class="bg-gray-900/30 py-4 px-8 rounded-b-xl	">
          <p class="text-white text-2xl"><?= $datos[$item]['nombre_profesor'] ?></p>
          <p class="text-gray-300 text-md"><?= $datos[$item]['apellidos_profesor'] ?></p>
          <div class="my-2 border-t-2 opacity-20"></div>
          <div class="flex items-center gap-4">
            <img alt="<?= $datos[$item]['nombre'] ?>" loading="lazy" width="40" height="40" decoding="async"
              data-nimg="1" srcset="" src="<?= $datos[$item]['icon'] ?>" style="color: transparent;">
            <span class="capitalize"><?= $datos[$item]['nombre'] ?></span>
          </div>
        </div>
      </div>
      <?php
            endif;
          endforeach;
          ?>
    </div>
  </div>
</section>

<?php
 require_once APP . '/views/inc/planes.php';
 require_once APP . '/views/inc/footer.php';
 ?>