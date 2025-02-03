  <script>
  import axios from 'axios';
  import router from '@/router';
  import AppHeader from '@/components/AppHeader.vue';
  import AppFooter from '@/components/AppFooter.vue';
  
  export default {
    name: 'PerfumeDetailView',
    components: {
      AppHeader,
      AppFooter,
    },
    data() {
      props : ['id'];
      return {
        perfume: null,
        loading: true,
      };
    },
    async created() {

      const perfumeId = this.$route.params.id;
      console.log(this.$route.params)

      try {
        const response = await axios.get(`http://localhost:8000/api/perfumes/${perfumeId}`); // Endpoint del backend Laravel
        this.perfume = response.data;
      } catch (error) {
        console.error('Errore durante il caricamento del profumo:', error);
      } finally {
        this.loading = false;
      }
    },
  };
  </script>

<template>
    <div>
      
      <div class="container mb-4">
        <h1 class="my-4 ">{{ perfume.name }}</h1>
        <img :src="perfume.img || '/images/default.jpg'" :alt="perfume.name" class="img-fluid mb-3" />
        <p>{{ perfume.description }}</p>
        <p><strong>Brand:</strong> {{ perfume.brand.name }}</p>
        <router-link to="/" class="btn btn-secondary">Torna all'elenco</router-link>
      </div>
      
    </div>
  </template>
  
  
  
  <style scoped>
  img {
    max-height: 300px;
    object-fit: cover;
  }
  </style>