<?php require 'templates/header.php'; ?>
<section class="bg-gray-800">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-[75vh] lg:py-0">
    <div class="w-full rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 bg-gray-900 border-gray-700">
      <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl dark:text-white">
          Entra en tu cuenta de médico
        </h1>
        <form class="space-y-4 md:space-y-6" action="<?php echo BASE_PATH; ?>controllers/ingresoMedicos.php" method="POST">
          <div>
            <label for="email_med" class="block mb-2 text-sm font-medium text-white">Tu Email</label>
            <input type="text" name="email_med" id="email_med" class="bg-gray-50 border border-gray-300 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500" placeholder="medico@lamana.com" required="">
          </div>
          <div>
            <label for="password_med" class="block mb-2 text-sm font-medium dark:text-white">Contraseña</label>
            <input type="password" name="password_med" id="password_med" placeholder="••••••••" class="bg-gray-50 border border-gray-300 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500" required="">
          </div>
          <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-600">Entrar</button>
          <p class="text-sm font-light text-gray-500 dark:text-gray-400">
            ¿No tienes una cuenta? <a href="<?php echo BASE_PATH; ?>registroMedicos.php" class="font-medium text-primary-600 hover:underline dark:text-primary-500">¡Crea una!</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</section>

<script>
  <?php if ($_GET['registered'] == 'true') : ?>
    Swal.fire({
      icon: 'success',
      title: '¡Registro completado!',
      text: 'Ahora puedes iniciar sesión',
      confirmButtonText: '¡Genial!'
    })

  <?php endif; ?>
</script>

<script>
  <?php if ($_GET['badLogin'] == 'true') : ?>
    Swal.fire({
      title: 'Error',
      text: 'Usuario o contraseña incorrectos',
      icon: 'error',
      confirmButtonText: 'Reintentar'
    })
  <?php endif; ?>
</script>


<?php require 'templates/footer.php'; ?>