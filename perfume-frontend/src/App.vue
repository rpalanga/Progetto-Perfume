  <script>
  import router from './router';
  import AppHeader from './components/AppHeader.vue';
  import AppFooter from './components/AppFooter.vue';

  export default {
    data() {
      return {

      }
    },
    components: {
      AppHeader,
      AppFooter
    },
    name: 'App',
  };
</script>
<template>
  
    <AppHeader/>
    <router-view />
    <AppFooter/>

  



</template>


<style>
/* Stili globali */
</style>