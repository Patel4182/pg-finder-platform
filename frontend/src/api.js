import axios from 'axios';

// Create an axios instance
const api = axios.create({
  baseURL: 'http://127.0.0.1:8000/api',  // Laravel backend
  headers: {
    Accept: 'application/json',
  },
  withCredentials: true,
});

// Add a request interceptor to inject the token into every request
api.interceptors.request.use(
  (config) => {
    const token = localStorage.getItem('token');  // Get the token from localStorage
    if (token) {
      // Add token to the Authorization header if it's available
      config.headers.Authorization = `Bearer ${token}`;
    }
    return config;
  },
  (error) => {
    return Promise.reject(error);
  }
);

// Optional: Add a response interceptor to handle token expiration or other errors
api.interceptors.response.use(
  (response) => {
    return response;
  },
  (error) => {
    // Handle error (e.g., token expiration)
    if (error.response && error.response.status === 401) {
      // You can do something here, like redirect to login if the token is invalid/expired
      console.log('Token expired or invalid. Redirecting to login...');
      // Redirect to login page, clear token, etc.
      localStorage.removeItem('token');
      window.location.href = '/login';  // Redirect to the login page
    }
    return Promise.reject(error);
  }
);

export default api;
