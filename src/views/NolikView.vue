<template>
    <div>
      <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <h1 class="text-3xl tracking-tight font-bold text-gray-900">Nolik</h1>
        </div>
      </header>
      <main>
        <div class="max-w-7xl mx-auto py-6 px-8 bg-white mt-5 md:rounded-lg shadow-md">
          Классическая игра с таблицей игроков с сортировкой по уровню. При победе
          уровень игрока увеличивается на одно очко. При проигрыше уменьшается на
          одно очко, но не может опуститься ниже одного очка. Есть возможность
          выбрать команду — x или 0.
          <br><br>
          Разработано на чистом JS и PHP без фреймворков. В качестве CSS-фреймворка
          использовался Tailwind. База данных MySQL.
          <br><br>
          <a href="https://nolik.iikio.com" class="text-violet-500 font-bold text-lg" target="_blank">https://nolik.iikio.com</a>
        </div>
        <div class="max-w-7xl mx-auto bg-white mt-2 md:mt-5 md:rounded-lg shadow-md">
          <img src="@/assets/nolik/1.png" class="md:rounded-lg" alt="Nolik">
        </div>
        <div class="max-w-7xl mx-auto bg-white mt-2 md:mt-5 md:rounded-lg shadow-md">
          <img src="@/assets/nolik/2.png" class="md:rounded-lg" alt="Nolik">
        </div>
        <div class="max-w-7xl mx-auto bg-white mt-2 md:mt-5 mb-7 md:rounded-lg shadow-md">
          <img src="@/assets/nolik/3.png" class="md:rounded-lg" alt="Nolik">
        </div>
      </main>
    </div>
  </template>
  