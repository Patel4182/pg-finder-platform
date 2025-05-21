
<template>
    <div class="p-6 max-w-md mx-auto bg-white shadow rounded-lg">
      <h2 class="text-2xl font-semibold mb-4">My Profile</h2>
      <div v-if="user">
        <p><strong>Name:</strong> {{ user.name }}</p>
        <p><strong>Email:</strong> {{ user.email }}</p>
      </div>
      <div v-else>
        <p>Loading profile...</p>
      </div>
    </div>
  </template>
  
  <script setup>

  import { ref, onMounted } from 'vue';
 import api from '../api'; 
  
  const user = ref(null);
  
  onMounted(async () => {
    try {
      const response = await api.get('/user');
      user.value = response.data;
    } catch (error) {
      console.error('Failed to load user profile:', error);
      alert('Please log in again.');
    }
  });
  </script>
  
  <style scoped>
  /* optional styles */
  </style>
  