import Vue from 'vue';
Vue.config.productionTip = false;

import axios from 'axios'
axios.defaults.baseURL = process.env.BASE_URL;
export default axios;
import VueAxios from 'vue-axios'
Vue.use(VueAxios, axios)

import holamundo from './js/components/HolaMundo.vue';
import login from './js/components/Login.vue';
import register from './js/components/Register.vue';
import recover_password from './js/components/RecoverPassword.vue';
import change_password from './js/components/ChangePassword.vue';

import new_user from './js/components/NewUser.vue';
import edit_user from './js/components/editUser.vue';

import new_product from './js/components/NewProduct.vue';
// import edit_product from './js/components/EditProduct.vue';

import avatar from './js/components/ui/Avatar.vue';
import btn from './js/components/ui/Button.vue';
import file_select from './js/components/ui/FileSelect.vue';


new Vue({
    el: '#app',
    components: {
        holamundo,
        login,
        avatar,
        register,
        recover_password,
        change_password,
        btn,
        new_user,
        edit_user,
        new_product,
        // edit_product,
        file_select,
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

  //modal Trigger modals
(function () {
  var modalFX = (function () {

      var elements = {
          target: 'data-target',
          active: 'is-active',
          button: '.modal-button',
          close: '.modal-close',
          buttonClose: '.modal-button-close',
          //background: '.modal-background'
      };

      var onClickEach = function (selector, callback) {
          var arr = document.querySelectorAll(selector);
          arr.forEach(function (el) {
              el.addEventListener('click', callback);
          })
      };

      var events = function () {
          onClickEach(elements.button, openModal);

          onClickEach(elements.close, closeModal);
          onClickEach(elements.buttonClose, closeAll);
          // onClickEach(elements.background, closeModal); Close all modals if ESC key is
          // pressed
          document.addEventListener('keyup', function (key) {
              if (key.keyCode == 27) {
                  closeAll();
              }
          });
      };

      var closeAll = function () {
          var openModal = document.querySelectorAll('.modal.' + elements.active);
          openModal.forEach(function (modal) {
              modal
                  .classList
                  .remove(elements.active);
          })
          unFreeze();
      };

      var openModal = function () {
          var modal = this.getAttribute(elements.target);
          freeze();
          document
              .getElementById(modal)
              .classList
              .add(elements.active);
      };

      var closeModal = function () {
          var modal = this.parentElement.id;
          document
              .getElementById(modal)
              .classList
              .remove(elements.active);
          unFreeze();
      };

      // Freeze scrollbars
      var freeze = function () {
          document
              .getElementsByTagName('html')[0]
              .style
              .overflow = "hidden"
          document
              .getElementsByTagName('body')[0]
              .style
              .overflowY = "scroll";
      };

      var unFreeze = function () {
          document
              .getElementsByTagName('html')[0]
              .style
              .overflow = ""
          document
              .getElementsByTagName('body')[0]
              .style
              .overflowY = "";
      };

      return {
          init: function () {
              events();
          }
      }
  })();

  modalFX.init();

})();
