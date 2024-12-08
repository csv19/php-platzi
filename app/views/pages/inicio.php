<?php require_once APP . '/views/inc/header.php' ?>
<section class="container mx-auto z-20">
  <div class="grid grid-cols-4 mx-auto items-center px-4 w-full lg:w-[1050px]">
    <div
      class="banner-navidad flex flex-col lg:flex-row gap-4 lg:rounded-l-lg col-span-4 lg:col-span-3 items-center p-4 h-auto lg:h-[60px]">
      <div>
        <img alt="Paga en 4 cuotas sin intereses de S/187.25" loading="lazy" width="150" decoding="async" data-nimg="1"
          class="" style="color:transparent"
          srcset="https://static.platzi.com/media/banners/Christmas_2024_Promo_Logo_1_1.png 1x, https://static.platzi.com/media/banners/Christmas_2024_Promo_Logo_1_1.png 2x"
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
              src="https://static.platzi.com/media/flags/PE.png"><span class="text-green-500">S/141</span>en Plan expert
            <!-- --> <span class="">Paga a <span class="text-green-500">4
                <!-- -->
                <!-- -->cuotas sin intereses</span></span></span>
        </div>
      </div>
    </div>
    <div
      class="col-span-4 lg:col-span-1  lg:rounded-r-lg flex flex-col items-center justify-center banner-navidad-end h-[60px]">
      <p class="text-gray-300">Termina en:<div class="text-yellow-500">
          <time class=""><span>19</span><span> días</span></time><time class=""><span>21</span><span>
              hrs</span></time><time class=""><span>21</span><span> min</span></time><time class=""><span>6</span><span>
              seg</span></time></div>
      </p>
    </div>
  </div>

  <div class="px-4 md:px-0 py-6 text-left md:text-center text-2xl md:text-4xl lg:text-5xl font-bold leading-none md:leading-snug">
    <h1 class="text-white">La escuela de tecnología <br><span class="text-green-400 ">de Latinoamérica</span></h1>
    
    <p class="text-sm md:text-lg lg:text-2xl text-gray-300 font-normal my-4">
      Más de 5 millones de estudiantes y más
      <br>de 3.000 empresas aprenden en Platzi  
      <br>
      ¿Qué quieres aprender?
    </b>
    <div class="w-full md:w-[400px] h-[50px] relative mx-auto mb-8">
      <input id="searchInput" placeholder="" type="text"
        class="searchInput w-full h-full bg-black-opacity rounded-lg border-solid border-2 border-green-600 text-sm px-2 font-light">
      <button class="absolute top-2 md:top-8 right-4" aria-label="Search Icon Btn"><svg class="text-gray-300" width="27"
          height="27" fill="none" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
          <path stroke="#87909d" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
            d="m18.334 18.333-3.322-3.321m-11.346-4.7a6.646 6.646 0 1 0 6.646-6.645v0a6.646 6.646 0 0 0-6.645 6.646">
          </path>
        </svg></button>
      <div id="searchSelect" class="bg-select relative hidden">
        <ul class="p-2 text-sm font-normal text-left z-20">
          <?php foreach ($datos as $item => $curso): 
            if($item <=2):
          ?>
          <li class="hover:cursor-pointer flex items-center hover:bg-gray-800/50 p-4 rounded-md gap-4 capitalize ">
            <figure><img alt="<?= $datos[$item]['nombre'] ?>" loading="lazy" width="20" height="20" decoding="async"
                data-nimg="1" srcset="" src="<?= $datos[$item]['icon'] ?>" style="color: transparent;"></figure>
            Curso de <?= $datos[$item]['nombre'] ?>
          </li>
          <?php
          endif;
         endforeach; ?>
        </ul>
      </div>
    </div>
    <p class="text-xs md:text-base font-normal">
      Empieza cualquier curso sin costo.<br>
      O consigue Platzi para tu empresa
    </p>

  </div>
</section>

<section class="px-4 md:px-0 w-full md:max-w-7xl mx-auto z-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 justify-center items-center gap-2 sm:gap-4 md:gap-7">
    <?php foreach ($datos as $item => $curso): ?>
    <div class="rounded-md bg-gray-800/50 overflow-hidden bg-curse flex gap-4 justify-between items-center p-2 h-[90px]">
      <div class="flex items-center gap-4">
        <div class="bg-curse-icon"><img width="40" src="<?= $datos[$item]['icon'] ?>" alt=""></div>
        <div><p class="text-gray-300 font-bold text-xs uppercase">Curso de</p>
        <p class="text-base font-semibold capitalize"><?= $datos[$item]['nombre'] ?></p></div>
      </div>
      <div>
        <svg width="1em" height="1em" fill="none" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" fill-rule="evenodd" d="M7.891 6.225a.625.625 0 0 1 .884 0l3.333 3.333a.625.625 0 0 1 0 .884l-3.333 3.333a.625.625 0 1 1-.884-.884L10.783 10 7.89 7.109a.625.625 0 0 1 0-.884" clip-rule="evenodd"></path></svg>
      </div>
    </div>
    <?php endforeach; ?>
    </div>
</section>
<section class="container mx-auto z-10">
  <div class="text-center max-w-md mx-auto">
      <h3 class="text-3xl font-normal mt-20 mb-10">Descubre tu ruta de <br> aprendizaje personalizada</h3>
      <textarea placeholder="Quiero crear experiencias de usuario atractivas en la web, escribir y crear contenido" class="searchInput p-4 bg-green-500 input-shadow w-full bg-black-opacity rounded-lg border-solid border-2 border-green-600 text-sm px-2 font-light h-[120px]"></textarea>
    </div>
</section>

<?php require_once APP . '/views/inc/footer.php' ?>