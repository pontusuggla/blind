require('./bootstrap');

import Vue from 'vue'
import Vuetify from 'vuetify'

import App from './App.vue'
import router from './router'
import 'vuetify/dist/vuetify.min.css'
import colors from 'vuetify/es5/util/colors'

Vue.use(Vuetify, {
    theme: {
        primary: colors.blue.darken3,
        secondary: colors.grey.darken1,
        accent: colors.shades.black,
        error: colors.red.accent3
    }
});

Vue.config.productionTip = false;

new Vue({
    el: '#app',
    router,
    render: h => h(App)
});