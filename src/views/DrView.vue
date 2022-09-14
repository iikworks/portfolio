<template>
    <div>
      <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <h1 class="text-3xl tracking-tight font-bold text-gray-900">DR</h1>
        </div>
      </header>
      <main>
        <div class="max-w-7xl mx-auto py-6 px-8 bg-white mt-5 md:rounded-lg shadow-md">
          Проект, разработанный для точного учета топлива. Есть возможность добавлять
          типы топлива, работников и технику. Веб-приложение, при добавлении
          расхода/прихода само ведет подсчет остатков топлива, расхода/прихода
          за день. Отображается информация о среднем расходе за день, израсходованного
          топлива по каждому типу топлива, работнику и технике, а так же по дням.
          Есть возможность отмечать расходы/приходы, как проверенные, для удобства
          учета и сверки с документацией. Есть возможность сменить тему на
          темную/светлую.
          <br><br>
          Фронтенд разработан на VueJS в виде SPA. Бэкенд разработан на Flask.
          Общаются между собой посредством API. Авторизация происходит через токены
          со сроком годности. Техника, работники и топливо сохраняется в кэше, чтобы
          не нагружать сервер (подгружать все данные для формы) при добавлении
          расходов и приходов.
          <br><br>
          <a href="https://dr.iikio.com" class="text-violet-500 font-bold text-lg" target="_blank">https://dr.iikio.com</a>
        </div>
        <div class="max-w-7xl mx-auto bg-white mt-2 md:mt-5 md:rounded-lg shadow-md">
          <img src="@/assets/dr/1.png" class="md:rounded-lg" alt="DR">
        </div>
        <div class="max-w-7xl mx-auto bg-white mt-2 md:mt-5 md:rounded-lg shadow-md">
          <img src="@/assets/dr/2.png" class="md:rounded-lg" alt="DR">
        </div>
        <div class="max-w-7xl mx-auto bg-white mt-2 md:mt-5 md:rounded-lg shadow-md">
          <img src="@/assets/dr/3.png" class="md:rounded-lg" alt="DR">
        </div>
        <div class="max-w-7xl mx-auto bg-white mt-2 md:mt-5 md:rounded-lg shadow-md">
          <img src="@/assets/dr/4.png" class="md:rounded-lg" alt="DR">
        </div>
        <div class="max-w-7xl mx-auto bg-white mt-2 md:mt-5 md:rounded-lg shadow-md">
          <img src="@/assets/dr/5.png" class="md:rounded-lg" alt="DR">
        </div>
        <div class="max-w-7xl mx-auto bg-white mt-2 md:mt-5 mb-7 md:rounded-lg shadow-md">
          <img src="@/assets/dr/6.png" class="md:rounded-lg" alt="DR">
        </div>
      </main>
    </div>
  </template>
  