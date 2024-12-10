<section class="relative container mx-auto z-10">
  <h3 class="text-center text-white text-3xl p-4">Elige el plan ideal para ti</h3>
  <div class="py-4">
    <div class="grid grid-cols-4 mx-auto items-center px-4 w-full lg:w-[1050px]">
      <div
        class="banner-navidad flex flex-col lg:flex-row gap-4 lg:rounded-l-lg col-span-4 lg:col-span-3 items-center p-4 h-auto lg:h-[60px]">
        <div>
          <img alt="Paga en 4 cuotas sin intereses de S/187.25" loading="lazy" width="150" decoding="async"
            data-nimg="1" class="" style="color:transparent"
            srcset="https://static.platzi.com/media/banners/Christmas_2024_Promo_Logo_1_1.png 1x, https://static.platzi.com/media/banners/Christmas_2024_Promo_Logo_1_1.png 2x"
            src="https://static.platzi.com/media/banners/Christmas_2024_Promo_Logo_1_1.png">
        </div>
        <div>
          <div>
            <p class="">Todos tus certificados validos a nivel nacional
            </p>
          </div>
        </div>
      </div>
      <div
        class="col-span-4 lg:col-span-1  lg:rounded-r-lg flex flex-col items-center justify-center banner-navidad-end h-[60px]">
        <p class="text-gray-300">Termina en:<div class="text-yellow-500" id="contador1"></div>
        </p>
      </div>
    </div>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <?php foreach($planes as $plan): ?>
    <?php $beneficios = json_decode($plan['beneficios']);?>
    <div class="bg-gray-800/50 max-w-96 h-[550px] flex flex-col justify-between mx-auto p-8 rounded-lg">
      <div class="flex items-center justify-between py-4">
        <p class="text-xl">Plan <?=$plan['nombre']?></p>
        <p class="rounded-full px-4 border border-gray-300/30"><?=$plan['periodo']?></p>
      </div>
      <p class="text-sm"><span class="text-gray-300">Para</span> 1 estudiante</p>
      <div class="flex gap-2 items-center">
        <img class="rounded-full w-[25px] h-[25px]" alt="flag" loading="lazy" decoding="async" data-nimg="1"
          srcset="https://static.platzi.com/media/flags/PE.png 1x, https://static.platzi.com/media/flags/PE.png 2x"
          src="https://static.platzi.com/media/flags/PE.png">
        <span class="text-2xl">S/<?=$plan['precio']?></span>
      </div>
      <?php if (!empty($beneficios->beneficios)): ?>
      <ul>
        <?php foreach ($beneficios->beneficios as $item => $beneficio): ?>
        <li>
          <?php
      if($plan['nombre']==='Basico'):
        if($item===0):?>
          <div class="flex gap-2 items-center">
            <svg width="1.5em" height="1.5em" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path fill="#0ae98a" fill-rule="evenodd"
                d="M19.03 7.47a.75.75 0 0 1 0 1.06l-8 8a.75.75 0 0 1-1.06 0l-4.5-4.5a.75.75 0 1 1 1.06-1.06l3.97 3.97 7.47-7.47a.75.75 0 0 1 1.06 0"
                clip-rule="evenodd"></path>
            </svg>
            <span><?=$beneficio->descripcion ?></span>
          </div>
          <?php else: ?>
          <div class="flex gap-2 items-center opacity-40">
            <svg width="1.5em" height="1.5em" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fff" fill-rule="evenodd"
                d="M5.47 5.47a.75.75 0 0 1 1.06 0l12 12a.75.75 0 1 1-1.06 1.06l-12-12a.75.75 0 0 1 0-1.06"
                clip-rule="evenodd"></path>
              <path fill="#fff" fill-rule="evenodd"
                d="M18.53 5.47a.75.75 0 0 1 0 1.06l-12 12a.75.75 0 0 1-1.06-1.06l12-12a.75.75 0 0 1 1.06 0"
                clip-rule="evenodd"></path>
            </svg>
            <span><?=$beneficio->descripcion?></span>
          </div>
          <?php
        endif;
        ?>
          <?php else: ?>
          <div class="flex gap-2 items-center">
            <svg width="1.5em" height="1.5em" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path fill="#0ae98a" fill-rule="evenodd"
                d="M19.03 7.47a.75.75 0 0 1 0 1.06l-8 8a.75.75 0 0 1-1.06 0l-4.5-4.5a.75.75 0 1 1 1.06-1.06l3.97 3.97 7.47-7.47a.75.75 0 0 1 1.06 0"
                clip-rule="evenodd"></path>
              <span><?=$beneficio->descripcion?></span>
          </div>
          <?php
        endif; 
      ?>

        </li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>
      <button
        class="<?php echo ($plan['nombre'] === 'Basico') ? 'bg-transparend text-white' : 'bg-green-400 text-black'; ?> w-full py-2 my-2 rounded-lg border border-green-400 cursor-pointer">Suscribete
        a Plan <?= $plan['nombre'] ?></button>
    </div>
    <?php endforeach;?>
  </div>
</section>