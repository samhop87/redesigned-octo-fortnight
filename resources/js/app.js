require('./bootstrap');
import VueRouter from 'vue-router'
import routes from './routes'
import Vuex from 'vuex'
import store from './store'

window.Vue = require('vue').default;
Vue.use(VueRouter)
Vue.use(Vuex)

/**
 * Global components
 */
Vue.component('app', require('./Core/layout/App.vue').default);
Vue.component('authorised-app', require('./Core/layout/AuthorisedApp.vue').default);

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
