import "./bootstrap";
import store from "./store";
import Vue from "vue";
import AddToCart from "./components/AddToCart.vue";
import CartIcon from "./components/CartIcon.vue";


Vue.component('add-to-cart', AddToCart)
Vue.component('cart-icon', CartIcon)



const app = new Vue({
    el: '#app',
    store
});