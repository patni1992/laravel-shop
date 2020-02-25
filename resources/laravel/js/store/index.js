import Vue from "vue";
export const store = new Vue({
    data() {
        return {
            cart: null
        };
    },
    computed: {},
    methods: {
        addCart(cart) {
            this.cart = cart;
        },
        removeFromCart(sku) {}
    }
});
