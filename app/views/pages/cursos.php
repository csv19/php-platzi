<?php 
require_once APP . '/views/inc/header.php';
require_once APP . '/views/inc/login.php';
?>
<section class="container mx-auto z-10">
  <div class="py-8">
    <h3 class="font-bold text-4xl">Cursos online para trabajar en tecnología</h3>
  <p class="tect-xl text-gray-300 font-semibold">Elige entre más de 1000 cursos online para aprender desde cero o desarrollar las habilidades más demandadas del trabajo en tecnología.</p>
  </div>
  
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 justify-center items-center gap-2 sm:gap-4 md:gap-7">
    <?php foreach ($datos as $item => $curso): ?>
      <a class="w-full h-full" href="curso/<?= $datos[$item]['url'] ?>">
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

<?php
require_once APP . '/views/inc/planes.php';
require_once APP . '/views/inc/footer.php';
?>