<?php 
require_once APP . '/views/inc/header_admin.php';
?>
<div class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-[700px]">
        <h1 class="text-2xl font-semibold text-center mb-6">Registro de Secciones</h1>
        <form id="registroSeccion" enctype="multipart/form-data" class="space-y-4">
            <!-- Razón para la beca -->
            <div>
                <label for="curso" class="block text-sm font-medium text-gray-700">Curso</label>
                <select name="curso" id="">
                    <option class="uppercase" value="" disabled selected>Seleccione</option>
                    <?php foreach ($datos as $curso): ?>
                        <option class="uppercase" value="<?=$curso['id']?>"><span> <?= $curso['nombre']?> </span></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nombre de la Seccion</label>
                    <input class="p-2 w-full border border-gray-500 rounded-md" type="text" name="name">
                </div>
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Descripcion de la Seccion</label>
                    <input class="p-2 w-full border border-gray-500 rounded-md" type="text" name="description">
                </div>
                <div>
                    <label for="time" class="block text-sm font-medium text-gray-700">Duracion de la Seccion</label>
                    <input class="p-2 w-full border border-gray-500 rounded-md" type="text" name="time">
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