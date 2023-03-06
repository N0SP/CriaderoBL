require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('Contactos', require('./components/Contactos.vue').default);

import '@mdi/font/css/materialdesignicons.css'
import 'vuetify/dist/vuetify.min.css'
import Vuetify from 'vuetify';
Vue.use(Vuetify);

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
});