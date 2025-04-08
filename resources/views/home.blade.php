<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/js/app.js', 'resources/css/app.css'])

  <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


  <title>Asmawarman</title>
</head>

<body x-data="{ isOpen: false }">


  <nav class="left-0 top-0 z-10 w-full bg-[#F3F4E7] p-[24px]">
    <div class="flex w-full items-center justify-between md:justify-center">
      <img class="md:mr-24" src="img/logo 2.png" alt="logo asmawarman" width="135" height="53">
      <div class="hidden space-x-6 text-[#383D14] md:flex md:justify-end">
        <a href="#" class="hover:underline">Home</a>
        <a href="#" class="hover:underline">Organizational structure</a>
        <a href="#" class="hover:underline">Sub team</a>
        <a href="/gallery" class="hover:underline">Gallery</a>
      </div>

      <button @click="isOpen = !isOpen" class="text-gray-700 hover:text-gray-900 md:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
      </button>
    </div>
  </nav>

  <main>
    <div id="overlay" @click="isOpen = !isOpen" x-show="isOpen" x-cloak
      x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-75 transform"
      x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
      class="fixed left-0 top-0 z-20 h-full w-full bg-black/50">
    </div>
    <div id="sidebar" x-show="isOpen" x-cloak x-transition:enter="transition ease-out duration-200"
      x-transition:enter-start="opacity-0 translate-x-full flex" x-transition:enter-end="opacity-100  translate-x-0"
      x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100  translate-x-0"
      x-transition:leave-end="opacity-0 translate-x-full "
      class="fixed right-0 top-0 z-40 h-full w-80 bg-white p-4 shadow-lg md:w-96 md:max-w-xs">
      <div class="mb-4 flex items-center justify-between">
        <h2 class="text-lg font-bold">Your Cart</h2>
        <label for="cartToggle" @click="isOpen = !isOpen" class="cursor-pointer text-gray-500 hover:text-gray-700">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </label>
      </div>
      <p class="text-gray-700">Your cart is empty.</p>
    </div>
    <a class="text-3xl font-bold underline" href="/gallery">gallery</a>
  </main>
</body>

</html>
