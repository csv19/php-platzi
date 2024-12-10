<?php 
require_once APP . '/views/inc/header_admin.php';
?>
<div class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div class="bg-white p-8 rounded-lg shadow-lg w-[700px]">
    <h1 class="text-2xl font-semibold text-center mb-6">Solicitud de Beca</h1>
    <form id="beca" enctype="multipart/form-data" class="space-y-4">
      <!-- Razón para la beca -->
      <div>
        <label for="reason" class="block text-sm font-medium text-gray-700">Razón para solicitar la beca</label>
        <textarea id="reason" name="reason" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required></textarea>
      </div>
      <!-- Subir documento -->
      <div>
        <label for="document" class="block text-sm font-medium text-gray-700">Subir documento de validación (PDF o imagen)</label>
        <input type="file" id="document" name="document" accept=".pdf, .jpg, .jpeg, .png" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
      </div>
      <div class="flex justify-center items-center">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/S5caKfuYbeE?si=prVzYhB2e8k3vdZk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <!-- Botón de envío -->
      <div>
        <button type="submit" class="w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
          Enviar Solicitud
        </button>
      </div>
    </form>
  </div>
  <div id="responseMessage"></div>
</div>
<?php 
require_once APP . '/views/inc/footer_admin.php';
?>