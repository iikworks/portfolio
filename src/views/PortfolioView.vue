<script setup>
import { RouterLink } from 'vue-router'
</script>

<template>
  <div>
    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl tracking-tight font-bold text-gray-900">Портфолио</h1>
      </div>
    </header>
    <main>
      <div class="max-w-7xl mx-auto mt-3 mb-7">
        <div class="grid grid-cols-1 md:grid-cols-4">
          <RouterLink :to="{ name: 'portfolio-dr' }" class="bg-white mx-2 my-2 shadow-md hover:shadow-2xl transition duration-300 rounded-lg">
            <img src="@/assets/dr/1.png" class="rounded-t-lg" alt="DR">
            <div class="text-center pt-3 px-4">
              <h2 class="text-2xl font-bold">DR</h2>
            </div>
            <div class="text-sm text-center mt-3 py-1 px-4">
              Точный учёт топлива в организации
            </div>
            <div class="text-sm pb-3 px-4 text-gray-500 text-center underline mt-3">
              на VueJS и Flask
            </div>
          </RouterLink>
          <RouterLink :to="{ name: 'portfolio-nolik' }" class="bg-white mx-2 my-2 shadow-md hover:shadow-2xl transition duration-300 rounded-lg">
            <img src="@/assets/nolik/1.png" class="rounded-t-lg" alt="NOLIK">
            <div class="text-center pt-3 px-4">
              <h2 class="text-2xl font-bold">NOLIK</h2>
            </div>
            <div class="text-sm text-center mt-3 py-1 px-4">
              Игра «Крестики-нолики» с ботом. Тестовое задание
            </div>
            <div class="text-sm pb-3 px-4 text-gray-500 text-center underline mt-3">
              на pure JS и PHP
            </div>
          </RouterLink>
          <RouterLink :to="{ name: 'portfolio-calcbacteria' }" class="bg-white mx-2 my-2 shadow-md hover:shadow-2xl transition duration-300 rounded-lg">
            <img src="@/assets/calcbacteria/1.png" class="rounded-t-lg" alt="CalcBacteria">
            <div class="text-center pt-3 px-4">
              <h2 class="text-2xl font-bold">CalcBacteria</h2>
            </div>
            <div class="text-sm text-center mt-3 py-1 px-4">
              Подсчёт бактерий. Тестовое задание
            </div>
            <div class="text-sm pb-3 px-4 text-gray-500 text-center underline mt-3">
              на PHP
            </div>
          </RouterLink>
        </div>
      </div>
    </main>
  </div>
</template>
