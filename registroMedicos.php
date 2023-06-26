<?php require 'templates/header.php'; ?>
<section class="bg-gray-800">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-[75vh] lg:py-0">
    <div class="w-full rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 bg-gray-900 border-gray-700">
      <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl dark:text-white">
          Crea tu cuenta de médico
        </h1>
        <form class="space-y-4 md:space-y-6" action="<?php echo BASE_PATH; ?>/controllers/registrarMedicos.php" method="POST">
          <div>
            <label for="nombre_med" class="block mb-2 text-sm font-medium text-white">Tu nombre</label>
            <input type="text" name="nombre_med" id="nombre_med" class="bg-gray-50 border border-gray-300 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500" placeholder="Jhon Calle" required="">
          </div>
          <div>
            <label for="especialidad_med" class="block mb-2 text-sm font-medium text-white">Tu Especialidad</label>
            <select type="text" name="especialidad_med" id="especialidad_med" class="bg-gray-50 border border-gray-300 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500" placeholder="Jhon Calle" required="">
              <option selected value="">-- Selecciona una opción --</option>
              <option value="Medicina General">Medicina General</option>
              <option value="Urología">Urología</option>
              <option value="Ginecología">Ginecología</option>
              <option value="Pediatría">Pediatría</option>
              <option value="Obstetricia">Obstetricia</option>
              <option value="Oftalmología">Oftalmología</option>
            </select>
          </div>
          <div>
            <label for="email_med" class="block mb-2 text-sm font-medium text-white">Tu Email</label>
            <input type="text" name="email_med" id="email_med" class="bg-gray-50 border border-gray-300 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500" placeholder="medico@lamana.com" required="">
          </div>
          <div>
            <label for="password_med" class="block mb-2 text-sm font-medium dark:text-white">Tu Contraseña</label>
            <input type="password" name="password_med" id="password_med" placeholder="••••••••" class="bg-gray-50 border border-gray-300 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500" required="">
          </div>
          <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-800 dark:focus:ring-purple-600">Registrarme como médico</button>
          <p class="text-sm font-light text-gray-500 dark:text-gray-400">
            ¿Ya tienes una cuenta? <a href="<?php echo BASE_PATH; ?>/loginMedicos.php" class="font-medium text-primary-600 hover:underline dark:text-primary-500">¡Entra!</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</section>
<?php require 'templates/footer.php'; ?>