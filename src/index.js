import Vue from 'vue';
Vue.config.productionTip = false;

import axios from 'axios'
axios.defaults.baseURL = process.env.BASE_URL;
export default axios;
import VueAxios from 'vue-axios'
Vue.use(VueAxios, axios)

import holamundo from './js/components/HolaMundo.vue';


new Vue({
    el: '#app',
    components: {
        holamundo,
    },
    data: {
        hello: 'Hello World !'
    },
    methods: {},
    mounted() {},
    created() {},
    watch: {}

})


import './scss/style.scss';



console.log('Atlas')


//site

document.addEventListener('DOMContentLoaded', () => {

    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  
    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {
  
      // Add a click event on each of them
      $navbarBurgers.forEach( el => {
        el.addEventListener('click', () => {
  
          // Get the target from the "data-target" attribute
          const target = el.dataset.target;
          const $target = document.getElementById(target);
  
          // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
          el.classList.toggle('is-active');
          $target.classList.toggle('is-active');
  
        });
      });
    }
  
  });


  import './js/backend.js'