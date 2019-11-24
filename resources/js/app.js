import Vue from 'vue';
import router from './router';
import Apps from './components/Apps';

require('./bootstrap');



const app = new Vue({
    el: '#app',
    components: {
       Apps
    },
    router
});
