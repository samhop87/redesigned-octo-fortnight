require('./bootstrap');
import VueRouter from 'vue-router'
import routes from './routes'
import Vuex from 'vuex'
import store from './store'
import VueApexCharts from 'vue-apexcharts'

window.Vue = require('vue').default;
Vue.use(VueRouter)
Vue.use(Vuex)
Vue.use(VueApexCharts)

/**
 * Global components
 */
Vue.component('app', require('./Core/layout/App.vue').default);
Vue.component('authorised-app', require('./Core/layout/AuthorisedApp.vue').default);
Vue.component('apexchart', VueApexCharts)

const router = new VueRouter({
    mode: 'history',
    base: '/',
    routes
})

const app = new Vue().$mount('#app')

const authorised_app = new Vue({
    router,
    store
}).$mount('#authorised-app')
