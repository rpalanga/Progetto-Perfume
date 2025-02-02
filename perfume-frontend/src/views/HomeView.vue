      <script>
      import axios from 'axios';
      import PerfumeItem from '@/components/PerfumeItem.vue';
      import AppHeader from '@/components/AppHeader.vue';
      import AppFooter from '@/components/AppFooter.vue';

      export default {
        name: 'HomeView',
        components: {
          PerfumeItem,
          AppHeader,
          AppFooter,
        },
        data() {
          return {
            perfumes: [],
            loading: true,
            searchQuery: '',
          };
        },
       
        async created() {
          try {
            const response = await axios.get('http://127.0.0.1:8000/api/perfumes'); 
            console.log(response.data)
            this.perfumes = response.data.results;
          } catch (error) {
            console.error('Errore durante il caricamento dei profumi:', error);
          } finally {
            this.loading = false;
          }
        },
        computed: {
          filteredPerfumes() {
            const filtered = this.perfumes.filter(perfume =>
            perfume.name.toLowerCase().includes(this.searchQuery.toLowerCase())
            );
            console.log('i dati sono Filtrati',filtered)
            return filtered;
          },
        },
      };
</script>
      
<template>
  
  <div>
    
    <div class="container">
      <h1 class="my-4">Elenco Profumi</h1>
      <input v-model="searchQuery" type="text" class="form-control mb-4" placeholder="Cerca per nome..." />
      <div v-if="loading">Caricamento...</div>
      <div v-else>
        <div v-for="perfume in filteredPerfumes" :key="perfume.id">
          
          <PerfumeItem :perfume="perfume" />
        </div>
      </div>
    </div>
    
  </div>
</template>


<style scoped>
input {
  max-width: 400px;
  margin: 0 auto;
}
</style>
