<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Centro de Salud La Maná</title>
</head>

<body>
  <?php
  define("BASE_PATH", "http://localhost/hospital-app/")
  ?>
  <div class="bg-gray-900">
    <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
      <div class="relative flex items-center justify-between">
        <a href="/hospital-app/" aria-label="Company" title="Company" class="inline-flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill data-name="Layer 1" viewBox="0 0 24 24" class="w-8 fill-amber-400">
            <path d="M10,17h1v1a1,1,0,0,0,2,0V17h1a1,1,0,0,0,0-2H13V14a1,1,0,0,0-2,0v1H10a1,1,0,0,0,0,2ZM19,6H17V5a3,3,0,0,0-3-3H10A3,3,0,0,0,7,5V6H5A3,3,0,0,0,2,9V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V9A3,3,0,0,0,19,6ZM9,5a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1V6H9ZM20,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12H20Zm0-9H4V9A1,1,0,0,1,5,8H19a1,1,0,0,1,1,1Z" />
          </svg>
          <div class="flex flex-col text-center">
            <span class="ml-2 text-2xl font-bold tracking-wide text-gray-100 uppercase">La Maná</span>
            <p class=" text-[10px] text-amber-400">centro de salud</p>
          </div>
        </a>

        <ul class="flex items-center space-x-8 lg:flex">F
          <li>
            <a href="<?php echo BASE_PATH ?>loginMedicos.php" class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-purple-600 hover:bg-purple-800 focus:shadow-outline focus:outline-none" aria-label="Sign up" title="Sign up">
              Login
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  </div>