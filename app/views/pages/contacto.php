<?php 
require_once APP . '/views/inc/header.php';
require_once APP . '/views/inc/login.php';
?>
<section class="container mx-auto z-10">
        <h3 class="text-2xl text-green-400 md:text-6xl font-bold capitalize pb-4">Contáctanos</h3>
    <form action="" method="POST">
        <!-- Nombre -->
        <div class="mb-4">
            <input type="text" id="name" name="name"
                class="w-full p-3 bg-gray-900 text-white border border-green-300 rounded-md" placeholder="Tu nombre"
                required>
        </div>

        <!-- Correo electrónico -->
        <div class="mb-4">
            <input type="email" id="email" name="email"
                class="w-full p-3 bg-gray-900 text-white border border-green-300 rounded-md" placeholder="Tu correo"
                required>
        </div>

        <!-- Mensaje -->
        <div class="mb-4">
            <textarea id="message" name="message" rows="4"
                class="w-full p-3 bg-gray-900 text-white border border-green-300 rounded-md"
                placeholder="Escribe tu mensaje..." required></textarea>
        </div>

        <!-- Botón de envío -->
        <div class="mb-4">
            <button type="submit"
                class="w-full py-3 bg-green-400 text-black rounded-md hover:bg-green-500 transition duration-300">Enviar
                Mensaje</button>
        </div>
    </form>
</section>

<?php
require_once APP . '/views/inc/footer.php';
?>