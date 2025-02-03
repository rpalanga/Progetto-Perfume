  <script>
  export default {
    name: 'PerfumeItem',
    props: {
      perfume: {
        type: Object,
        required: true,
      },
    },
  };
</script>

<template>
  <div class="card mb-3 perfume-card">
    <router-link :to="'/perfumes/'+ perfume.id" >
      <img :src="perfume.img || '/images/default.jpg'" :alt="perfume.name" class="card-img-top" />

    </router-link>
    <div class="card-body body-section">
      <h5 class="card-title">{{ perfume.name }}</h5>
      <!-- <p class="card-text description-section">{{ perfume.description }}</p> -->
    </div>
  </div>
</template>


<style scoped>
.card-img-top {
  max-height: 200px;
  
  object-fit: cover;
  cursor: pointer;
}
.perfume-card {
  height: 300px; /* Altezza fissa */
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  overflow: hidden;
}
.body-section {
  position: relative;
  height: 100px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.description-section {
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
  position: absolute;
  bottom: 10px;
  background: rgba(0, 0, 0, 0.7);
  color: white;
  padding: 5px;
  border-radius: 5px;
  text-align: center;
  width: 90%;
}
.perfume-card:hover .description-section {
  opacity: 1;
}


</style>