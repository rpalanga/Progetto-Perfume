      <script>
      import axios from 'axios';
      import PerfumeItem from '@/components/PerfumeItem.vue';
      import AppHeader from '@/components/AppHeader.vue';
      import AppFooter from '@/components/AppFooter.vue';
      import AppMission from '@/components/AppMission.vue';

      export default {
        name: 'HomeView',
        components: {
          PerfumeItem,
          AppHeader,
          AppFooter,
          AppMission,
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
    
    <div id="main-cont" class="container">
      <h1 class="my-4 text-center fs-3">Il Nostro Catalogo</h1>
      <input v-model="searchQuery" type="text" class="form-control mb-4" placeholder="Cerca il tuo Profumo" />
      <div v-if="loading">Caricamento...</div>
      <div v-else>
        <div v-if="filteredPerfumes.length === 0" class="text-center">
          Siamo Spiacenti <br>questo Profumo non è nel Catalogo
        </div>
        <div v-else class="perfume-grid">
          <div v-for="perfume in filteredPerfumes" :key="perfume.id" class="perfume-item">
            <PerfumeItem :perfume="perfume" />
          </div>
        </div>
      </div>
    </div>

    <AppMission/>
  </div>
</template>


<style scoped>
input {
  max-width: 400px;
  margin: 0 auto;
}
#main-cont{
 /* display: grid; */
 /* da guardare meglio domani  */
 max-width: 1200px; 
 margin: 0 auto; 

  
}
.perfume-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* Crea tre colonne */
  gap: 16px; /* Spazio tra gli elementi */
  overflow-y: auto; /* Abilita lo scroll verticale */
  max-height: 600px; /* Altezza massima del contenitore */
  padding: 10px; /* Padding per migliorare l'estetica */
  border: 2px solid blanchedalmond;
  border-radius: 10px;
}

.perfume-item {
 
  border-radius: 8px;
  padding: 10px;
  background-color: #f9f9f9;
  width: 100%;
}
.text-center {
  text-align: center;
  font-size: 1.2em;
  color: #666;
  padding: 20px;
}

/* Media query per schermi grandi (desktop) */
@media (min-width: 1024px) {
  .perfume-grid {
    grid-template-columns: repeat(3, 1fr); /* 3 colonne */
  }
}

/* Media query per schermi medi (tablet) */
@media (min-width: 768px) and (max-width: 1023px) {
  .perfume-grid {
    grid-template-columns: repeat(2, 1fr); /* 2 colonne */
  }
}

/* Media query per schermi piccoli (mobile) */
@media (max-width: 767px) {
  .perfume-grid {
    grid-template-columns: repeat(1, 1fr); /* 1 colonna */
  }
}


</style>
