<?php 
require_once APP . '/views/inc/header_admin.php';
?>
<div class="container mx-auto">
<div class="grid grid-cols-3 gap-4">
    <?php foreach($curso as $item):?>
            <div class="border border-gray-300/70 my-2 bg-gray-600/50 rounded-lg ">
                <div class="w-full h-[250px] bg-center rounded-t-lg bg-no-repeat	bg-cover" style="background-image: url(<?=$item['image']?>);">
                </div>
                <div class="p-2">
                    <h2 class="text-center text-xl text-white font-semibold capitalize"><?=$item['url']?></h2>
                    <p class="text-white text-justify"><?=$item['descripcion']?></p>
                </div>
                
            </div>
    <?php endforeach; ?>
</div>  
</div>
       
<?php 
require_once APP . '/views/inc/footer_admin.php';
?>