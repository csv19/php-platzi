<?php
if (!isset($_SESSION['usuario_token'])) {?>
<section class="fixed top-0 w-full h-full bg-black/70 z-50 hidden" id="sliderLogin">
  <div id="closeLogin"
      class="ml-auto p-4 border bg-gray-900 rounded-md w-[20px] h-[20px] flex justify-center items-center cursor-pointer absolute top-10 right-4">
      <div>
        <svg width="1em" height="1em" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path fill="#fff" fill-rule="evenodd"
            d="M5.47 5.47a.75.75 0 0 1 1.06 0l12 12a.75.75 0 1 1-1.06 1.06l-12-12a.75.75 0 0 1 0-1.06"
            clip-rule="evenodd"></path>
          <path fill="#fff" fill-rule="evenodd"
            d="M18.53 5.47a.75.75 0 0 1 0 1.06l-12 12a.75.75 0 0 1-1.06-1.06l12-12a.75.75 0 0 1 1.06 0"
            clip-rule="evenodd"></path>
        </svg>
      </div>
    </div>
  <div id="singInLogin" class="bg-gray-900/90 h-full w-[450px] p-8 ml-auto shadow-md">
    <form id="login" class="h-[350px]">
      <div class="flex flex-col justify-center items-center px-6 mx-auto py-20">
        <img class="w-[150px]" src="https://static.platzi.com/media/banners/Christmas_2024_Promo_Logo_1_1.png" alt="">
        <p>Ingresar con</p>
        <br>
        <input name="email" type="email" class=" text-sm bg-black/60 border border-gray-300/50 rounded-md w-full p-2"
          placeholder="Correo electrónico">
        <br>
        <input name="pass" type="password" class=" text-sm bg-black/60 border border-gray-300/50 rounded-md w-full p-2"
          placeholder="Contraseña">
        <br>
        <button class="bg-white w-full p-2 text-black rounded-md ">Ingresar</button>
        <div class="px-6">
          <div class="separator my-2"><span>o</span></div>
          <button id="buttonRegister"
            class="bg-transparent w-full p-2 text-white border border-gray-300/50 rounded-md ">Registrar</button>
        </div>
      </div>
    </form>
  </div>
  <div id="registerLogin" class="bg-gray-900/90 h-full w-[450px] p-8 ml-auto shadow-md hidden">
    <form id="register" class="h-[350px]">
      <div class="flex flex-col justify-center items-center px-6 mx-auto py-20">
        <img class="w-[150px]" src="https://static.platzi.com/media/banners/Christmas_2024_Promo_Logo_1_1.png" alt="">
        <p>Crear una cuenta con</p>
        <br>
        <input name="names" type="text" class=" text-sm bg-black/60 border border-gray-300/50 rounded-md w-full p-2"
          placeholder="Nombres">
          <br>
        <input name="lastName_father" type="text" class=" text-sm bg-black/60 border border-gray-300/50 rounded-md w-full p-2"
          placeholder="Apellido Paterno">
          <br>
          <input name="lastName_mother" type="text" class=" text-sm bg-black/60 border border-gray-300/50 rounded-md w-full p-2"
          placeholder="Apellido Materno">
          <br>
          <input name="age" type="number" class=" text-sm bg-black/60 border border-gray-300/50 rounded-md w-full p-2"
          placeholder="Edad">
          <br>
        <input name="email" type="email" class=" text-sm bg-black/60 border border-gray-300/50 rounded-md w-full p-2"
          placeholder="Correo electrónico">
        <br>
        <input name="pass" type="password" class=" text-sm bg-black/60 border border-gray-300/50 rounded-md w-full p-2"
          placeholder="Contraseña">
        <br>
        <button class="bg-white w-full p-2 text-black rounded-md ">Enviar</button>
      </div>
    </form>
  </div>
</section>
<?php } ?>