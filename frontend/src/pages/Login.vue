

<template>
  <div class="max-w-md mx-auto bg-white p-8 shadow rounded-lg mt-10">
    <h2 class="text-2xl font-semibold text-center text-blue-600 mb-6">Login</h2>
    <form @submit.prevent="login">
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input v-model="email" type="email" id="email" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required />
      </div>
      <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input v-model="password" type="password" id="password" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required />
      </div>
      <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Login</button>
    </form>

    <p class="mt-4 text-center text-sm text-gray-600">
      Don't have an account?
      <router-link to="/register" class="text-blue-600 hover:text-blue-700">Register here</router-link>
    </p>
  </div>
</template>
  
  <script setup>
  import { ref } from 'vue';
  import axios from 'axios';
  import api from '../api'; 
  
  const email = ref('');
  const password = ref('');
  
  const login = async () => {
    try {
      const response = await axios.post('http://127.0.0.1:8000/api/login', {
        email: email.value,
        password: password.value,
      });
      localStorage.setItem('token', response.data.token);  // Store token
      window.location.href = '/profile';  // Redirect to profile page
    } catch (error) {
      alert('Invalid credentials!');
    }
  };
  </script>
  
  <style scoped>
  /* Optional styling */
  </style>
  