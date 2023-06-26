<?php
require 'templates/header.php';
require './controllers/obtenerMedicos.php';
$medicos = obtenerMedicos()
// lol();
?>

<!-- component -->
<div class="relative flex my-20 text-gray-800 antialiased flex-col justify-center overflow-hidden bg-gray-50 ">
    <div class="relative py-3 w-96 mx-auto text-center">
        <span class="text-2xl font-light ">Ingresa tus datos</span>
        <div class="mt-4 bg-white shadow-md rounded-lg text-left">
            <div class="h-2 bg-purple-400 rounded-t-md"></div>
            <div class="px-8 py-6 ">
                <form action="./controllers/ingresarPacientes.php" method="post">
                    <input required name="cedula_pac" type="text" placeholder="Ingresa tu cédula" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
                    <input required name="nombre_pac" type="text" placeholder="Ingresa tu nombre" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
                    <input required name="apellido_pac" type="text" placeholder="Ingresa tu apellido" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
                    <input required name="direccion_pac" type="text" placeholder="Ingresa tu dirección" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
                    <input required name="provincia_pac" type="text" placeholder="Ingresa tu provincia" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
                    <div class="mt-4">
                        <label for="medico-especialidad" class="mt-3">Elige un médico y una especialidad:</label>
                        <select required id="medico-especialidad" name="fkid_medico" class="w-full px-3 py-2 rounded-md">
                            <option selected value="">-- Selecciona una opcion --</option>
                            <?php foreach ($medicos as $medico) : ?>
                                <option value="<?php echo $medico['id_med']; ?>"><?php echo $medico['nombre_med'] . ' - ' . $medico['especialidad_med'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="flex justify-center items-baseline">
                        <button type="submit" class="mt-4 bg-purple-500 text-white py-2 px-6 rounded-md hover:bg-purple-600 ">Registrarme</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?php require 'templates/footer.php'; ?>