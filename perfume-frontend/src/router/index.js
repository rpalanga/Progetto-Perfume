import { createRouter, createWebHistory } from 'vue-router';
import HomeView from '../views/HomeView.vue';
import PerfumeDetailView from '../views/PerfumeDetailView.vue';

const routes = [
    {
      path: '/',
      name: 'home',
      component: () => import('../views/HomeView.vue' ),
    },
    
    {
      path: '/perfumes/:id',
      name: 'perfume-detail',
      component: () => import('../views/PerfumeDetailView.vue' ),
      props: true,
      // Lazy loading
    },
  ];

  const router = createRouter({
    history: createWebHistory(),
    routes,
});


export default router
