<template>
  <div class="max-w-md mx-auto bg-red p-8 shadow rounded-lg mt-10">
    <h2 class="text-2xl font-semibold text-center text-blue-600 mb-6">Register</h2>
    <form @submit.prevent="register">
      <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input v-model="name" type="text" id="name" class="w-full p-2 border" required />
      </div>
      <div class="mt-4">
        <label for="email" class="block">Email</label>
        <input v-model="email" type="email" id="email" class="w-full p-2 border" required />
      </div>
      <div class="mt-4">
        <label for="password" class="block">Password</label>
        <input v-model="password" type="password" id="password" class="w-full p-2 border" required />
      </div>
      <div class="mt-4">
        <label for="password_confirmation" class="block">Confirm Password</label>
        <input v-model="password_confirmation" type="password" id="password_confirmation" class="w-full p-2 border" required />
      </div>

      <button type="submit" class="mt-4 w-full p-2 bg-blue-600 text-white">Register</button>
    </form>

    <!-- Link to login page -->
    <p class="mt-4 text-center">
      Already have an account? 
      <router-link to="/login" class="text-blue-600">Login here</router-link>
    </p>
  </div>
</template>

<script setup>
import api from '../api'; // import the axios instance
import { ref } from 'vue';

const name = ref('');
const email = ref('');
const password = ref('');
const password_confirmation = ref(''); // Fixed typo here

const register = async () => {
  try {
    const response = await api.post('/register', {
      name: name.value,
      email: email.value,
      password: password.value,
      password_confirmation: password_confirmation.value,
    });
    localStorage.setItem('token', response.data.token);  
    console.log('Registration successful:', response.data);
    window.location.href = '/profile';  // Redirect to the profile page after successful registration
  } catch (error) {
    console.error('Registration failed:', error.response.data);
  }
};
</script>

<style scoped>
/* Optional styling */
</style>
