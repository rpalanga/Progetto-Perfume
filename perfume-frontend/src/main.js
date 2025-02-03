import './assets/main.css'

import { createApp } from 'vue';
import App from './App.vue';
import router from './router';

import { library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

// Importa icone specifiche
import { faUser, faHeart, faSearch } from '@fortawesome/free-solid-svg-icons';
import { faFacebook, faInstagram } from '@fortawesome/free-brands-svg-icons';

// Aggiungi le icone alla libreria
library.add(faUser, faHeart, faSearch,faFacebook,faInstagram);


import 'bootstrap/dist/css/bootstrap.min.css'; // Importa il CSS di Bootstrap
import 'bootstrap'; // Importa JavaScript di Bootstrap




const app = createApp(App);

app.component('font-awesome-icon', FontAwesomeIcon); // Registra il componente globalmente


app.use(router);

app.mount('#app')
