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
  <div class="card mb-3">
    <img :src="perfume.img || '/images/default.jpg'" :alt="perfume.name" class="card-img-top" />
    <div class="card-body">
      <h5 class="card-title">{{ perfume.name }}</h5>
      <p class="card-text">{{ perfume.description }}</p>
      <router-link :to="'/perfumes/'+ perfume.id" class="btn btn-primary">Dettagli</router-link>
    </div>
  </div>
</template>


<style scoped>
.card-img-top {
  max-height: 200px;
  object-fit: cover;
}
</style>