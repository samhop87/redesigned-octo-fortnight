/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import routes from './routes'
import VueRouter from 'vue-router'
import Multiselect from "vue-multiselect"
import PulseLoader from 'vue-spinner/src/PulseLoader.vue'

// Components
Vue.use(VueRouter)

// Third Party components
Vue.component('multiselect', Multiselect)
Vue.component('pulse-loader', PulseLoader)

// Application components
Vue.component('app', require('./Core/layout/App.vue').default)
Vue.component('apocalypse-game', require('./Core/layout/ApocalypseGame').default)

// Apocalypse components
Vue.component('game-base', require('./game/Base').default)
Vue.component('events-manager', require('./game/admin/Index').default)

const router = new VueRouter({
    mode: 'history',
    routes
})

// Create Vue instances
const app = new Vue({
    router: router
}).$mount('#app')
