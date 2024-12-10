<?php 
require_once APP . '/views/inc/header_admin.php';
?>
<div class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div class="bg-white p-8 rounded-lg shadow-lg max-w-lg w-full">
    <h1 class="text-2xl font-semibold text-center mb-6">Solicitud de Beca</h1>
    <form id="scholarship-form" class="space-y-4">
      <!-- Nombre completo -->
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Nombre completo</label>
        <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
      </div>
      <!-- Correo electrónico -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
        <input type="email" id="email" name="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
      </div>
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
      <!-- Estado de la solicitud -->
      <div>
        <label for="status" class="block text-sm font-medium text-gray-700">Estado de la solicitud</label>
        <select id="status" name="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
          <option value="pending">Pendiente</option>
          <option value="accepted">Aceptada</option>
          <option value="rejected">Rechazada</option>
        </select>
      </div>
      <!-- Botón de envío -->
      <div>
        <button type="submit" class="w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
          Enviar Solicitud
        </button>
      </div>
    </form>
  </div>
</div>
<?php 
require_once APP . '/views/inc/footer_admin.php';
?>