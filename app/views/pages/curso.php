<?php require_once APP . '/views/inc/header2.php';
require_once APP . '/views/inc/login.php';
?>
<section class="z-10 pb-32">
  <div class="bg-curse-page py-8">
    <div class="container mx-auto py-10">
    <div class="w-full md:w-[650px]">
      <div class="flex items-center gap-4">
        <div><img class="w-[40px] md:w-[60px] h-[40px] md:h-[60px]" src="<?=$curso[0]['icon']?>" alt=""></div>
        <div>
          <p class="text-green-400 font-bold uppercase">Curso de</p>
          <h3 class="text-2xl md:text-6xl font-bold capitalize"><?=$curso[0]['nombre']?></h3>
        </div>
      </div>
      <div class="p-4">
        <p class="text-xl font-semibold text-justify"><?=$curso[0]['descripcion']?></p>
      </div>
      <?php if (isset($_SESSION['usuario_token']) && $_SESSION['usuario_token']):
            if(!isset($rutas[0]['id_curso'])):
      ?>
        <div class="px-4">
          <form id="ruta">
            <input name="usuario" class="hidden" type="text" value="<?= $_SESSION['usuario_id'] ?>">
            <input name="curso" class="hidden" type="text" value="<?=$curso[0]['id'] ?>">
            <button type="submit" class="px-4 py-2 rounded-md text-black bg-white">Guardar en ruta</button>
          </form>
        </div>
      <?php 
            endif;
          endif;
      ?>
      
    </div>
  </div>
  <div class="container mx-auto relative bg-sections">
      <div class="flex flex-col lg:flex-row justify-between items-center md:items-start gap-6">
        <div class="border border-gray-300/50 rounded-lg w-full md:w-[500px] p-4">
          <h3 class="font-bold text-lg py-2">Secciones del curso</h3>
          <?php foreach($curso as $item):?>
          <div class="border border-gray-300/50 bg-gray-900/80 my-2 rounded-lg p-4">
            <p><?=$item['seccion'] ?></p>
            <p class="text-sm text-gray-300"><?=$item['seccion_descripcion'] ?></p>
            <p class="text-xs text-gray-300">Duracion del curso: <?=$item['seccion_duracion'] ?></p>
          </div>
          <?php endforeach; ?>
        </div>
        <div>
          <iframe class="w-[400px] md:w-[700px] h-[250px] md:h-[350px] rounded-lg"
            src="<?=$curso[0]['video']?>" 
            title="Ciberseguridad" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
        </div>
      </div>
  </div>
</section>

<?php
 require_once APP . '/views/inc/planes.php';
 require_once APP . '/views/inc/footer.php';
 ?>