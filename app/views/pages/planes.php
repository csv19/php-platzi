<?php 
require_once APP . '/views/inc/header.php';
require_once APP . '/views/inc/login.php';
require_once APP . '/views/inc/planes.php';
?>
<section>
  <div class="flex justify-center items-center">
    <div class="">
      <span class="hidden md:flex items-center gap-4"><img class="w-[20px] h-[20px]" src="https://static.platzi.com/media/flags/PE.png" alt="flag"
        class="" loading="lazy"><strong>Precios en soles</strong></span>
    </div>
    <div class="flex flex-col md:flex-row gap-4 items-center">Usa el medio de pago que prefieras:<div class="flex gap-2 items-center">
        <img class="w-[50px] h-[20px]" loading="lazy"
          src="https://static.platzi.com/commons/assets/images/amex8c702aae174e8d5b.png" alt="amex"><img
          class="w-[50px] h-[20px]" loading="lazy"
          src="https://static.platzi.com/commons/assets/images/visa52d765334f273be7.png" alt="visa"><img
          class="w-[50px] h-[20px]" loading="lazy"
          src="https://static.platzi.com/commons/assets/images/mastercardbf4ad752b3fb3d0e.png" alt="mastercard"><img
          class="w-[50px] h-[20px]" loading="lazy"
          src="https://static.platzi.com/commons/assets/images/pago_efectivod8f46b2bdaf56e7f.png"
          alt="pago_efectivo">
    </div>
  </div>
</section>
<section class="container mx-auto z-10">
  <h3 class="text-center text-2xl">Preguntas Frecuentes</h3>
  <div class="faq-accordion text-xl space-y-4">
    <button class="accordion text-xl">¿Cuáles son los medios de pago permitidos para comprar una suscripción?</button>
    <div class="panel">
      <p class="text-gray-300">Tarjeta de débito, tarjeta de crédito, transferencia bancaria, PayPal, Bitcoin y pago en
        efectivo.</p>
      <hr>
    </div>

    <button class="accordion text-xl">¿Qué incluye el precio?</button>
    <div class="panel">
      <p class="text-gray-300">El precio incluye acceso ilimitado a todos los cursos y recursos de aprendizaje, así como
        certificaciones de los cursos completados.</p>
      <hr>
    </div>

    <button class="accordion text-xl">¿Hay un plan gratuito disponible?</button>
    <div class="panel">
      <p class="text-gray-300">No, ofrecemos un plan gratuito. Todos los planes tienen un costo mensual, bimestral o
        anual.</p>
      <hr>
    </div>

    <button class="accordion text-xl">¿Puedo cancelar mi suscripción en cualquier momento?</button>
    <div class="panel">
      <p class="text-gray-300">Sí, puedes cancelar tu suscripción en cualquier momento desde tu cuenta sin penalización.
      </p>
      <hr>
    </div>

    <button class="accordion text-xl">¿Cómo puedo pagar la suscripción?</button>
    <div class="panel">
      <p class="text-gray-300">Las opciones de pago incluyen tarjeta de crédito, PayPal y transferencias bancarias.
        Puedes elegir la opción que prefieras al momento de registrarte.</p>
      <hr>
    </div>

    <button class="accordion text-xl">¿Qué pasa si no estoy satisfecho con los cursos?</button>
    <div class="panel">
      <p class="text-gray-300">Ofrecemos una garantía de reembolso de 30 días, por lo que puedes solicitar un reembolso
        completo si no estás satisfecho con tu compra dentro del primer mes.</p>
      <hr>
    </div>

  </div>
</section>
<?php
require_once APP . '/views/inc/footer.php';
?>