window.Vue = require('vue');
require('./bootstrap');
import Vue from 'vue'

Vue.component('btc-component', require('./components/btc.vue').default);

const app = new Vue({
    el: '#app'
});
