import { createRouter, createWebHistory } from 'vue-router';
import ProfilePage from '@/pages/ProfilePage.vue';
import Login from '@/pages/Login.vue';
import Registration from '@/pages/Registration.vue';

const routes = [
  { path: '/', redirect: '/register' },  // Default to login page
  { path: '/login', name: 'Login', component: Login },
  { path: '/register', name: 'Register', component: Registration },
  { path: '/profile', name: 'Profile', component: ProfilePage },
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
