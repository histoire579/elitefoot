const { default: axios } = require('axios');

require('./bootstrap');

import { createApp } from 'vue';
import AddFeuille from './components/AddFeuille.vue'



const app = createApp();

app.component('AddFeuille',AddFeuille);
app.mount('#app');