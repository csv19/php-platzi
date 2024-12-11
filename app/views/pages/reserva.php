<?php 
require_once APP . '/views/inc/header3.php';
require_once APP . '/views/inc/login.php';
$beneficios = json_decode($plan[0]['beneficios']);
?>
<section class="z-10 relative">
    <div class="flex flex-col flex-col-reverse md:flex-row justify-between items-start gap-6">
        <div class="b-gray-900 w-full">
            <form id="login2" class="">
                <div class="flex flex-col justify-center items-center px-6 mx-auto py-20">
                    <img class="w-[80px]" src="../../public/src/logo.png" alt="">
                    <p>Ingresar con</p>
                    <br>
                    <input name="email" type="email"
                        class=" text-sm bg-black/60 border border-gray-300/50 rounded-md w-full p-2"
                        placeholder="Correo electrónico">
                    <br>
                    <input name="pass" type="password"
                        class=" text-sm bg-black/60 border border-gray-300/50 rounded-md w-full p-2"
                        placeholder="Contraseña">
                    <br>
                    <button class="bg-white w-[150px] p-2 text-black rounded-md ">Ingresar</button>
                </div>
            </form>
        </div>
        <div class="bg-gray-800 w-full md:w-[800px] h-full md:h-screen p-4">
            <h2 class="text-4xl font-bold">Plan <?= $plan[0]['nombre'] ?></h2>
            <div>
            
            <div class="flex justify-between items-center py-4">
                <div><p class="text-2xl font-bold">Precio</p></div>
                <div>
                    <span></span>
                    <span class="text-2xl font-bold"><span class="text-green-400">S/</span> <?=$plan[0]['precio']?>.00<span class="text-base text-gray-300">/mensual</span></span>
                </div>
            </div>
            <h3 class="font-bold text-lg">Lo que obtienes con el plan</h3>
            <?php foreach ($beneficios->beneficios as $item => $beneficio): ?>
                <p class="text-sm text-gray-300 leading-7"><?=$beneficio->descripcion ?></p>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>