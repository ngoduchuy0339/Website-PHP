require('./bootstrap');



Vue.component('favorite-button', required('./components/favorite.vue').default);


const app = new Vue({
    el: '#app',
})