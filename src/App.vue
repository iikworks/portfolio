<script setup>
import { RouterLink, RouterView, useRoute } from 'vue-router'
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { Bars3Icon, XCircleIcon } from '@heroicons/vue/24/outline'

const route = useRoute()

const navigation = [
  { name: 'Портфолио', to: 'portfolio' },
  { name: 'Навыки', to: 'skills' },
  { name: 'Контакты', to: 'contacts' },
]
</script>

<template>
  <div class="min-h-full">
    <Disclosure as="nav" class="bg-gray-800" v-slot="{ open }">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <img class="h-8 w-8" src="@/assets/logo.png" alt="Igor Karplyuk" />
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <RouterLink v-for="item in navigation" :key="item.name" :to="{ name: item.to }" :class="[route.name == item.to ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white', 'transition duration-300 px-3 py-2 rounded-md text-sm font-medium']" :aria-current="item.current ? 'page' : undefined">{{ item.name }}</RouterLink>
              </div>
            </div>
          </div>
          <div class="-mr-2 flex md:hidden">
            <DisclosureButton class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
              <Bars3Icon v-if="!open" class="block h-6 w-6" aria-hidden="true" />
              <XCircleIcon v-else class="block h-6 w-6" aria-hidden="true" />
            </DisclosureButton>
          </div>
        </div>
      </div>

      <DisclosurePanel class="md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
          <DisclosureButton v-for="item in navigation" :key="item.name" @click="$router.push({ name: item.to })" :to="{ name: item.to }" :class="[route.name == item.to ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white', 'transition duration-300 block px-3 py-2 rounded-md text-base font-medium']" :aria-current="item.current ? 'page' : undefined">{{ item.name }}</DisclosureButton>
        </div>
      </DisclosurePanel>
    </Disclosure>

    <RouterView />

    <div class="text-center text-gray-500 text-sm pb-10">
      <div class="mb-5">
        <img class="h-8 w-8 mx-auto" src="@/assets/logo.png" alt="Igor Karplyuk" />
      </div>
      &copy; 2022, <RouterLink class="font-semibold text-violet-400" :to="{ name: 'contacts' }">Карплюк Игорь</RouterLink>. Все права защищены.
    </div>
  </div>
</template>