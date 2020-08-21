/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import store from './store'

import AOS from 'aos';
AOS.init();

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('search-bar', require('./components/SearchBar.vue').default);
Vue.component('category-list', require('./components/Category/CategoryList.vue').default);
Vue.component('book-card', require('./components/Category/BookCard.vue').default);
Vue.component('book-card-action-btn', require('./components/Category/ActionsButtons.vue').default);
Vue.component('modal-share', require('./components/Category/ModalShare.vue').default);
Vue.component('shopping-cart', require('./components/ShoppingCart.vue').default);
Vue.component('product-rating', require('./components/Product/ProductRating.vue').default);
Vue.component('modal-avaliacao', require('./components/Product/ModalAvaliacao.vue').default);
Vue.component('product-review', require('./components/Product/ProductReview.vue').default);
Vue.component('pergunta-vendedor', require('./components/Product/PerguntaVendedor.vue').default);
Vue.component('pergunta', require('./components/Product/Pergunta.vue').default);
Vue.component('product-image', require('./components/Product/ProductImage.vue').default);
Vue.component('search-box', require('./components/Search/SearchComponent.vue').default);
Vue.component('navigation-bar', require('./components/NavigationBar.vue').default);
Vue.component('carousel-info', require('./components/Vender/CarouselInfo.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    store,
});

window.onload = function () {

    const cardImages = Array.prototype.slice.call(document.querySelectorAll('.card-container .card-top'))

    if (cardImages.length > 0) {
        cardImages.map(card => {
            const cardImage = card.querySelector('.card-image a img');

            if (cardImage != null) {
                let imageLoad = new Image();
                imageLoad.src = cardImage.src;

                imageLoad.onload = function () {
                    card.classList.remove('placeholdershimmer')
                }
            }

        })
    }
};
