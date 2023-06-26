<?php require './templates/header.php'; ?>
<main>
  <div class="relative flex flex-col-reverse py-16 lg:py-0 lg:flex-col">
    <div class="w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:py-20 lg:max-w-screen-xl">
      <div class="mb-0 lg:max-w-lg lg:pr-8 xl:pr-6">

        <div class="flex flex-row justify-between items-center mb-5">
          <h2 class="font-sans text-3xl font-bold tracking-tight text-gray-900">
            Cuidamos de <span class="text-amber-600 hover:underline hover:text-amber-700 cursor-pointer transition-all ease-in-out">tí</span>,<br class="hidden md:block" />
            y de tus <span class="text-amber-600 hover:underline hover:text-amber-700 cursor-pointer transition-all ease-in-out">seres queridos</span>
          </h2>
          <svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 animate__animated animate__heartBeat animate__infinite text-red-600">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
          </svg>

        </div>
        <p class="mb-5 text-base text-gray-700 md:text-lg md:text-center">
          Nuestro centro de salud está dotado del mejor equipo de médicos y enfermeros para atender a nuestros pacientes.
          Agenda tu cita médica en la especialidad de tu necesidad.
        </p>
        <div class="mb-10 text-center md:mb-16 lg:mb-20">
          <a href="ingresoPacientes.php" class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-purple-500 hover:bg-purple-700 focus:shadow-outline focus:outline-none">
            ¡Registra una cita con nosotros!
          </a>
        </div>
        <div class="flex flex-col items-center">
          <div class="mb-2 text-sm text-gray-600 md:mb-2">¡Síguenos!</div>
          <div class="flex items-center space-x-4">
            <div class="flex items-center">
              <a href="#" class="text-gray-600 transition-colors duration-300 hover:text-purple-500">
                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                  <path d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"></path>
                </svg>
              </a>
            </div>
            <div class="flex items-center">
              <a href="#" class="text-gray-600 transition-colors duration-300 hover:text-purple-500">
                <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                  <circle cx="15" cy="15" r="4"></circle>
                  <path d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"></path>
                </svg>
              </a>
            </div>
            <div class="flex items-center">
              <a href="#" class="text-gray-600 transition-colors duration-300 hover:text-purple-500">
                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                  <path d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"></path>
                </svg>
              </a>
            </div>
            <div class="flex items-center">
              <a href="#" class="text-gray-600 transition-colors duration-300 hover:text-purple-500">
                <svg viewBox="0 0 24 24" fill="currentColor" class="h-6">
                  <path d="M23.8,7.2c0,0-0.2-1.7-1-2.4c-0.9-1-1.9-1-2.4-1C17,3.6,12,3.6,12,3.6h0c0,0-5,0-8.4,0.2 c-0.5,0.1-1.5,0.1-2.4,1c-0.7,0.7-1,2.4-1,2.4S0,9.1,0,11.1v1.8c0,1.9,0.2,3.9,0.2,3.9s0.2,1.7,1,2.4c0.9,1,2.1,0.9,2.6,1 c1.9,0.2,8.2,0.2,8.2,0.2s5,0,8.4-0.3c0.5-0.1,1.5-0.1,2.4-1c0.7-0.7,1-2.4,1-2.4s0.2-1.9,0.2-3.9v-1.8C24,9.1,23.8,7.2,23.8,7.2z M9.5,15.1l0-6.7l6.5,3.4L9.5,15.1z"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="inset-y-0 top-0 right-0 w-full max-w-xl px-4 mx-auto mb-6 md:px-0 lg:pl-8 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-1/2 lg:max-w-full lg:absolute xl:px-0">
      <img class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full" src="https://plus.unsplash.com/premium_photo-1661281397737-9b5d75b52beb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="" />
    </div>
  </div>
</main>

<script>
  <?php if ($_GET['pacienteRegistered'] == 'true') : ?>
    Swal.fire({
      icon: 'success',
      title: '¡Registro completado!',
      text: 'Tu cita se registró correctamente',
      confirmButtonText: '¡Genial!'
    })

  <?php endif; ?>
</script>

<?php require 'templates/footer.php'; ?>