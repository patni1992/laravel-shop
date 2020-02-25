import "./bootstrap";
import Vue from "vue";
import AddToCart from "./components/AddToCart.vue";
import CartIcon from "./components/CartIcon.vue";
import {store} from "./store";

Vue.component('add-to-cart', AddToCart)
Vue.component('cart-icon', CartIcon)

const app = new Vue({
    el: '#app',
    created() {
        store.addCart(shoppingCart);
    }
});