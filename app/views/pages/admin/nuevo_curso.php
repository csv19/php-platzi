<?php 
require_once APP . '/views/inc/header_admin.php';
?>
<div class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-[700px]">
        <h1 class="text-2xl font-semibold text-center mb-6">Registro de Curso</h1>
        <form id="registroCurso" enctype="multipart/form-data" class="space-y-4">
            <!-- Razón para la beca -->
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Link de Portada</label>
                <input class="w-full border border-gray-500 rounded-md" type="text" name="image">
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nombre del Curso</label>
                    <input class="w-full border border-gray-500 rounded-md" type="text" name="name">
                </div>
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Descripcion del
                        Curso</label>
                    <input class="w-full border border-gray-500 rounded-md" type="text" name="description">
                </div>
                <div>
                    <label for="time" class="block text-sm font-medium text-gray-700">Duración del Curso</label>
                    <input class="w-full border border-gray-500 rounded-md" type="text" name="time">
                </div>
                <div>
                    <label for="video" class="block text-sm font-medium text-gray-700">Link del Video</label>
                    <input class="w-full border border-gray-500 rounded-md" type="text" name="video">
                </div>
                <div>
                    <label for="icon" class="block text-sm font-medium text-gray-700">Link del Icono</label>
                    <input class="w-full border border-gray-500 rounded-md" type="text" name="icon">
                </div>
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700">Precio del Curso</label>
                    <input class="w-full border border-gray-500 rounded-md" type="text" name="price">
                </div>
            </div>

            <!-- Botón de envío -->
            <div>
                <button type="submit"
                    class="w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Registrar </button>
            </div>
        </form>
    </div>
    <div id="responseMessage"></div>
</div>
<?php 
require_once APP . '/views/inc/footer_admin.php';
?>