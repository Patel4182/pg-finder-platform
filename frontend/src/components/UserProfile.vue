import api from '@/axios';

const response = await api.get('/user');
console.log(response.data);
