<?php require '../templates/header.php';
require '../controllers/obtenerPacientes.php';
$response = obtenerPacientes($_GET['id_med']);
?>

<h1 class="text-center text-2xl mt-10">¡Bienvenid@, <span class="text-purple-800 font-extrabold"><?php echo $_GET['nombre_med']; ?></span>!</h1>
<div class="flex justify-center py-10">
    <div class="flex justify-center text-center w-2/3">
        <?php if ($response) : ?>
            <!-- component -->
            <table class="min-w-full border-collapse block md:table">
                <thead class="block md:table-header-group">
                    <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Nombre</th>
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Apellido</th>
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Dirección</th>
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Provincia</th>
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Cédula</th>
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Id Medico
                        </th>
                    </tr>
                </thead>
                <tbody class="block md:table-row-group">
                    <?php
                    foreach ($response as $row) {
                        echo ('<tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                            class="inline-block w-1/3 md:hidden font-bold">Name</span>' . $row["nombre_pac"] . '</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                            class="inline-block w-1/3 md:hidden font-bold">User Name</span>' . $row["apellido_pac"] . '</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                            class="inline-block w-1/3 md:hidden font-bold">Email Address</span>' . $row["direccion_pac"] . '</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                            class="inline-block w-1/3 md:hidden font-bold">Mobile</span>' . $row["provincia_pac"] . '</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                            class="inline-block w-1/3 md:hidden font-bold">Mobile</span>' . $row["cedula_pac"] . '</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                    class="inline-block w-1/3 md:hidden font-bold">Mobile</span>' . $row["fkid_medico"] . '
                    </td>
                </tr>');
                    }
                    ?>
                </tbody>
            </table>
        <?php else : ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">No hay datos</span>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php require '../templates/footer.php'; ?>