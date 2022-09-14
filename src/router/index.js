import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'portfolio',
      component: () => import('../views/PortfolioView.vue')
    },{
      path: '/portfolio/dr',
      name: 'portfolio-dr',
      component: () => import('../views/DrView.vue')
    },{
      path: '/portfolio/nolik',
      name: 'portfolio-nolik',
      component: () => import('../views/NolikView.vue')
    },{
      path: '/portfolio/calcbacteria',
      name: 'portfolio-calcbacteria',
      component: () => import('../views/CalcBacteriaView.vue')
    },
    {
      path: '/skills',
      name: 'skills',
      component: () => import('../views/SkillsView.vue')
    },
    {
      path: '/contacts',
      name: 'contacts',
      component: () => import('../views/ContactsView.vue')
    }
  ]
})

export default router
